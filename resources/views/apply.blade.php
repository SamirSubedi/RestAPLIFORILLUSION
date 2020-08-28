@extends('layouts.app')
@section('headSection')
<style>
.fixed {
        position: fixed;
        width: 25%;
}
.scrollit {
        float: left;
        width: 71%
}
input[type=submit]:hover {
  background-color: #45a049;
}
input[type=button], input[type=submit], input[type=reset] {
  background-color: #4CAF50;
  border: none;
  color: white;
  padding: 9px 16px;
  text-decoration: none;
  margin: 4px 2px;
  cursor: pointer;
}
input[type=reset] {
  background-color:red;
  border: none;
  color: white;
  padding: 6px 12px;
  text-decoration: none;
  margin: 4px 2px;
  cursor: pointer;
}

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
            <h1 class="mb-2 bread">Apply</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Apply <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>
        <!-- Hero End -->
        <!-- ================ contact section start ================= -->
      <br>
        <!-- Hero End -->
        <!-- ================ contact section start ================= -->
      
             
<div class="container">
<br>
@if(session()->has('Success'))
  
  <div class="alert alert-success">{{session()->get('Success')}}</div>
  @endif

 
	
<br>

<div class="row">

		<div class="col-md-4">         <form role="form" action="{{ route('apply.store') }}"  method="post" enctype="multipart/form-data">
          {{csrf_field()}}
          <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<img id="blah" src="{{ asset('/user/logo.jpg') }} " width="190px" height="150px"></img><br> <div class="form-group">
   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;  Apply for selected Course & <br>&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;  &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;  &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;  &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;  Get Reply Soon
      
      
    </div>                     </div>
		<div class="col-sm-4">


	 <div class="form-group">
    <label for="fname">Full Name:</label>
    <input type="text" class="form-control" name="name" required>
  </div>
 
   <div class="form-group">
    <label for="email">Email address:</label>
    <input type="email" class="form-control" name="email"  required>
  </div>
  <div class="form-group">
    <label for="phone">Phone:</label>
    <input type="text" class="form-control" name="phone"  required>
  </div>
  <div class="form-group">
    <label for="pwd">Address:</label>
    <input type="text" class="form-control" name="address"  required>
  </div>
  <div class="form-group">
  <label for="pwd">Select Desired Course</label>
  <select class="form-control" id="sel1"  name="sellist1">
  <option value="Professional Bartender">Professional Bartender Course</option>
        <option value="Basic Bartender"> Basic Bartender Course</option>
        <option value="Flair Bartender">Flair Bartender Course</option>
        <option value="Advanced Bartender">Advanced Bartender Course</option>
        <option value="Barista">Barista Course</option>
   
      </select>
   
</div>
<div class="form-group">
  <label for="pwd">Any Questions?</label>
  <textarea class="form-control" name="message" rows="5" id="comment"></textarea>
   
</div>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" name="hello"class="hello">
 <input type="reset" value="Reset">
  
</form></div>
	<div class="col-md-4"></div>
</div>
</div></div></div>

@endsection