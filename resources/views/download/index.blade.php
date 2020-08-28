@extends('admin.layouts.app')
@section('headSection')
<link rel="stylesheet" href="{{ asset('admin/plugins/select2/select2.min.css') }}">
@endsection

@section('main-content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<div class="container">
  <h2>Downloads</h2><br>
  <h4><a class="btn btn-success" href="download/create">Create New Download </a></h4>
       <div class="row">
       <div class="col-sm-8">                                                                                
  <div class="table-responsive table-bordered">          
  <table class="table table-bordered table-striped dataTable">
    <thead>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Extension</th>
       
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
<td>{{$category->extension}}</td>

<td><a  onclick="return confirm('Are you sure, you want to edit it?')" id="edited" href="/download/{{$category->id}}/edit"><span class="glyphicon glyphicon-edit"></span></a></td>
<td>
<form  id="delete-form-{{ $category->id }}" action="/download/{{$category->id}}" method="post" enctype="multipart/form-data">
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