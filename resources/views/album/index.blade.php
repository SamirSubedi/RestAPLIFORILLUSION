@extends('admin.layouts.app')
@section('headSection')
<link rel="stylesheet" href="{{ asset('admin/plugins/select2/select2.min.css') }}">
@endsection

@section('main-content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<div class="container">

  <h2>Album</h2><br>
  @if(session()->has('message'))
    <div class="alert alert-success">{{session()->get('message')}}</div>
  @endif
  <h4><a href="album/create " class="btn btn-success">Create New Album </a></h4>
  
       <div class="row">
       <div class="col-sm-8">                                                                                
  <div class="table-responsive table-bordered">          
  <table class="table table-bordered table-striped dataTable">
    <thead>
      <tr>
        <th>ID</th>
        <th>Album Name</th>
        <th>Description</th>
        <th>Image</th>
        <th>Edit</th>
 
      </tr>
    </thead>


<tbody>
<?php $id= 1;?>
@foreach($abc as $category)
<tr>
<td><?php echo $id;?></td>
<td>{{$category->name}}</td>
<td>{!! htmlspecialchars_decode($category->descrip) !!}</td>   
<td><img id="blah" width="150" height="100" src="{{ asset('storage/album_images/'.$category->image) }}" ></td>

<td><a onclick="return confirm('Are you sure, you want to edit it?')" id="edited" href="/album/{{$category->id}}/edit"><span class="glyphicon glyphicon-edit"></span></a></td>

</td>

</tr>
<?php $id= $id+1;?>
@endforeach

</tbody>
</table>
{!! $abc->render() !!}<br>
</div>
</div>
</div>
</div>
</div>

@endsection