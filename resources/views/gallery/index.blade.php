@extends('admin.layouts.app')
@section('headSection')
<link rel="stylesheet" href="{{ asset('admin/plugins/select2/select2.min.css') }}">
@endsection

@section('main-content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<div class="container">
  <h2>Gallery Image</h2><br>
  @if(session()->has('message'))
  
  <div class="alert alert-success">{{session()->get('message')}}</div>
  @endif			

  <h4><a href="gallery/create" class="btn btn-success">Add New Images </a></h4>
       <div class="row">
       <div class="col-sm-8">                                                                                
  <div class="table-responsive table-bordered">          
  <table class="table table-bordered table-striped dataTable">
    <thead>
      <tr>
    
        <th>Album Name</th>
        <th>Image</th>
        <th>Delete</th>
      </tr>
    </thead>


<tbody>

@foreach($abc as $category)
<tr>


<td>{{$category->album->name}}</td>

<td><img id="blah" width="200" height="100" src="{{ asset('storage/gallery_images/'.$category->image) }}" ></td>

<td>

<form  id="delete-form-{{ $category->id }}" action="/gallery/{{$category->id}}" method="post" enctype="multipart/form-data">
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
{!! $abc->render() !!}
</div>
</div>

@endsection