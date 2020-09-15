@extends('layouts.app')
@section('headSection')
<style>
textarea {
    resize: none;
}
.form-group.required .control-label:after {
  content:"*";
  color:red;
}
#count_message {
  background-color: smoke;
  margin-top: -20px;
  margin-right: 5px;
}
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
            <h1 class="mb-2 bread">Dashboard</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Login <i class="ion-ios-arrow-forward"></i></span></p>
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
  @if(session()->has('message'))
  
  <div class="alert alert-success">{{session()->get('message')}}</div>
  @endif

 
	
<br>

<div class="row">
		<div class="col-md-4">         <form role="form" action="/bartender" method="post" enctype="multipart/form-data">
          {{csrf_field()}}
          <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<img id="blah" src="#" width="190px" height="150px"></img><br><div class="form-group required">
   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;  <label class="control-label" for="unit">Upload Your Image Here:</label>
          <input type="file"  onchange="readURL(this);"  name="image" required >
      
    </div>                     </div>

		<div class="col-sm-4">


    <div class="form-group required">
    <label class="control-label" for="fname">Full Name:</label>
    <input type="text" class="form-control" name="name" required="required">
  </div>
 
  <div class="form-group required">
    <label class="control-label" for="email">Email address:</label>
    <input type="email" class="form-control" name="email"  required>
  </div>
  <div class="form-group">
    <label for="phone">Phone:</label>
    <input type="text" class="form-control" name="phone"  >
  </div>
  <div class="form-group required">
    <label class="control-label" for="pwd">Address:</label>
    <input type="text" class="form-control" name="address"  required>
  </div><br>
  <div class="form-group">
    <label for="pwd">Promotional Video:</label>
    <input type="text" class="form-control" name="video" placeholder="Copy Youtube link here">
  </div><br>
  <div class="form-group">
  <label for="pwd">Experience (if any):</label>
  <textarea class="form-control" id="text" name="text" 
      	 maxlength="50" placeholder="Type in your message" rows="5"></textarea>
        <span class="pull-right label label-default" id="count_message"></span>
      	</div><br>
        <div class="form-group required">
    <label class="control-label" for="pwd2">Upload Your Cv</label>
    <input type="file" class="form-control" name="file"  required>
  </div>


  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" name="hello"class="hello">
 <input type="reset" value="Reset">
  
</form></div>
	<div class="col-md-4"></div>
</div>
</div></div></div>
<script>
var text_max = 70;
$('#count_message').html('0 / ' + text_max );

$('#text').keyup(function() {
  var text_length = $('#text').val().length;
  var text_remaining = text_max - text_length;
  
  $('#count_message').html(text_length + ' / ' + text_max);
});
	function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#blah')
                    .attr('src', e.target.result)
                    .width(250)
                    .height(200);
            };

            reader.readAsDataURL(input.files[0]);
        }
    }
</script>
<br>
@endsection