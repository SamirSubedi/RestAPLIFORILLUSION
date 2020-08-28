@extends('admin.layouts.app')
@section('headSection')
<link rel="stylesheet" href="{{ asset('admin/plugins/select2/select2.min.css') }}">
@endsection

@section('main-content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<div class="container">

  <h2>Your Blog Posts</h2><br>
  @if(session()->has('message'))
  
  <div class="alert alert-success">{{session()->get('message')}}</div>
  @endif
  <h4><a href="blog/create" class="btn btn-success">Create New Blog </a></h4>
       <div class="row">
       <div class="col-sm-8">                                                                                
  <div class="table-responsive table-bordered">          
  <table  class="table table-bordered table-striped dataTable">
    <thead>
      <tr>
        <th>ID</th>
        <th>Title</th>
        <th>Subtitle</th>
        <th>Edit</th>
        <th>Delete</th>
      </tr>
    </thead>
<tbody>
<?php $id= 1;?>
@foreach($abc as $blog)
<tr>
<td><?php echo $id;?></td>
<td>{{$blog->title}}</td><?php $ab=$blog->subtitle;?>
<td> <?php echo substr($ab, 0, 10);?><?php echo ".....";?> </td>

<td><a  onclick="return confirm('Are you sure, you want to edit it?')" id="edited" href="/blog/{{$blog->id}}/edit"><span class="glyphicon glyphicon-edit"></span></a></td>
<td>
<form  id="delete-form-{{ $blog->id }}" action="/blog/{{$blog->id}}" method="post" enctype="multipart/form-data">
          {{ method_field('DELETE') }}
          {{csrf_field()}}</form>
          <a href="" onclick="
                              if(confirm('Are you sure, You Want to delete this?'))
                                  {
                                    event.preventDefault();
                                    document.getElementById('delete-form-{{ $blog->id }}').submit();
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
{!! $abc->render() !!}
</div>
</div>
</div>
</div>
</div>

      
@endsection