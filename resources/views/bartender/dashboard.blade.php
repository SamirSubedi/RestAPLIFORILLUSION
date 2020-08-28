@extends('layouts.app')
@section('headSection')
<style>


a.hello:link, a.hello:visited {
  background-color: green;
  color: white;
  padding: 10px 15px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size:15px;
  font-weight: normal;
}
a.he:link, a.he:visited {
  background-color:#55ACEE;
  color: white;
  padding: 8px 9px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size:15px;
  font-weight: normal;
}
a.hel:link, a.hel:visited {
  background-color:#0D2D3E;
  color: white;
  padding: 6px 8px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size:15px;
  font-weight: normal;
}
a.hell:link, a.hell:visited {
  background-color: #AC2925;
  color: white;
  padding: 10px 15px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size:10px;
  font-weight: normal;
}
a.hell:hover, a.hell:active {
  background-color:red;
  display: inline-block;
}
a.hel:hover, a.hel:active {
  background-color:#0D2D3E;
  
  display: inline-block;
}

a.hello:hover, a.hello:active {
  background-color: green;
  display: inline-block;
}

</style>

@endsection


@section('main-content')
<section class="hero-wrap hero-wrap-3" >
      <div class="overla"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-2 bread">Dashboard</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Dashboard<i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>
        <!-- Hero End -->
        <!-- ================ contact section start ================= -->
      <br>
        <!-- Hero End -->
        <!-- ================ contact section start ================= -->
      
             
        <div class="content-wrapper">
<div class="container">

  <br>
  @if(session()->has('message'))
  
  <div class="alert alert-success">{{session()->get('message')}}</div>
  @endif
  <h4><a href="bartender/create" class="hello" name="hello">Add New Profile </a>&nbsp;<a href="/profile" class="hel" name="hel">View Profiles </a></h4>
  
       <div class="row">
       <div class="col-sm-10">                                                                                
  <div class="table-responsive table-bordered">          
  <table  class="table table-bordered table-striped dataTable">
    <thead>
      <tr>
      <th>SN</th>
   
        <th>Name</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Image</th>
        <th>CV</th>
        <th>Delete</th>
      </tr>
    </thead>
    <tbody>
    <?php $id= 1;?>
@foreach($abc as $blog)
<tr>
<td><?php echo $id;?></td>
<td>{{$blog->name}}</td>
<td> {{$blog->email}} </td>
<td> {{$blog->phone}} </td>
<td><a class="he" name="he" href="{{ asset('storage/cv_images/'.$blog->image) }}"><i class="far fa-image"></i>&nbsp;&nbsp;</a></td>
<td><a class="hel" name="hel" href="{{ asset('storage/cv_files/'.$blog->cv) }}"><i class="fas fa-book-open"></i>&nbsp;&nbsp;</a></td>

<td>
<form  id="delete-form-{{ $blog->id }}" action="/bartender/{{$blog->id}}" method="post" >
          {{ method_field('DELETE') }}
          {{csrf_field()}}</form>
          <a href="" class="hell" name="hell" onclick="
                              if(confirm('Are you sure, You Want to delete this?'))
                                  {
                                    event.preventDefault();
                                    document.getElementById('delete-form-{{ $blog->id }}').submit();
                                  }
                                  else{
                                    event.preventDefault();
                                  }">     <i class="far fa-trash-alt"></i>&nbsp;&nbsp;Delete</a>
      

</td>

</tr>
<?php $id= $id+1;?>
@endforeach

    </tbody>
 
  </table>

  </div>
{!! $abc->render() !!}
 <br>
</div> </div>
</div>
@endsection