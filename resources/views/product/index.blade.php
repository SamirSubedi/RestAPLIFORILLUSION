@extends('admin.layouts.app')
@section('headSection')
<link rel="stylesheet" href="{{ asset('admin/plugins/select2/select2.min.css') }}">
@endsection

@section('main-content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<div class="container">

  <h3>Available Products</h3><br>
  
  @if(session()->has('message'))
    <div class="alert alert-danger">{{session()->get('message')}}</div>
  @endif
  <h4><a href="product/create " class="btn btn-success">Create New Post </a></h4>
  
       <div class="row">
       <div class="col-sm-8">                                                                                
  <div class="table-responsive table-bordered">          
  <table class="table table-bordered table-striped dataTable">
    <thead>
      <tr>
        <th>ID</th>
        <th>Product</th>
        <th>Price</th>
        <th>Quantity</th>
        <th>Image</th>
        <th>Edit</th>
        <th>Delete</th>
 
      </tr>
    </thead>


<tbody>
<?php $id= 1;?>
@foreach($product as $product)
<tr>
<td><?php echo $id;?></td>
<td>{{$product->name}}</td>
<td>{{$product->price}}</td>
<td>{{$product->Quantity}}</td>

<td>   <img src="{{ asset('storage/product_images/'.$product->image) }}" width="160" height="50"></td>

<td><a  onclick="return confirm('Are you sure, you want to edit it?')" id="edited" href="/product/{{$product->id}}/edit"><span class="glyphicon glyphicon-edit"></span></a></td>
<td>
<form  id="delete-form-{{ $product->id }}" action="/product/{{$product->id}}" method="post" enctype="multipart/form-data">
          {{ method_field('DELETE') }}
          {{csrf_field()}}</form>
          <a href="" onclick="
                              if(confirm('Are you sure, You Want to delete this?'))
                                  {
                                    event.preventDefault();
                                    document.getElementById('delete-form-{{ $product->id }}').submit();
                                  }
                                  else{
                                    event.preventDefault();
                                  }" ><span class="glyphicon glyphicon-trash"></span></a>
      

</td>



</tr>
<?php $id= $id+1;?>
@endforeach

</tbody>
</table>
<br>
</div>
</div>
</div>
</div>
</div>

@endsection