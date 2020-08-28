@extends('admin.layouts.app')
@section('headSection')
<link rel="stylesheet" href="{{ asset('admin/plugins/select2/select2.min.css') }}">
@endsection

@section('main-content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<div class="container">
  <h2>Category</h2><br>
  @if(session()->has('message'))
  
  <div class="alert alert-success">{{session()->get('message')}}</div>
  @endif
  <h4><a href="category/create" class="btn btn-success">Create New Category </a></h4>
       <div class="row">
       <div class="col-sm-8">                                                                                
  <div class="table-responsive table-bordered">          
  <table class="table">
    <thead>
      <tr>
        <th>ID</th>
        <th>Category</th>
        <th>Slug</th>
       
        <th>Edit</th>
        <th>Delete</th>
      </tr>
    </thead>


<tbody>
<?php $id= 1;?>
@foreach($abc as $category)
<tr>
<td><?php echo $id;?></td>
<td>{{$category->name}}</td>
<td>{{$category->slug}}</td>

<td><a  onclick="return confirm('Are you sure, you want to edit it?')" id="edited" href="/category/{{$category->id}}/edit"><span class="glyphicon glyphicon-edit"></span></a></td>
<td>
<form  id="delete-form-{{ $category->id }}" action="/category/{{$category->id}}" method="post" enctype="multipart/form-data">
          {{ method_field('DELETE') }}
          {{csrf_field()}}</form>
          <a href="" onclick="
                              if(confirm('Are you sure, You Want to delete this?'))
                                  {
                                    event.preventDefault();
                                    document.getElementById('delete-form-{{ $category->id }}').submit();
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
</div>
</div>
</div>
</div>
</div>

@endsection