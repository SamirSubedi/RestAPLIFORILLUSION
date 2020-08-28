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
            <h1 class="mb-2 bread">Profile</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Dashboard<i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>
        <!-- Hero End -->
        <!-- ================ contact section start ================= -->
      <br>
<div class="container">
     
<div class="row">
		<div class="col-sm-12 col-12 col-md-5 col-lg-4">        
      
	<center>	<img  src="#" width="250px" height="250px"></img></center><br>
   
  
     </div>                
  
<div class="col-lg-8 col-md-7 col-12 col-sm-12">
<div class="row">
<div class="col-sm-4 col-4 col-md-3 col-lg-2 ml-20">
 Name:
   </div>
   <div class="col-sm-8 col-8 col-md-4 col-lg-6" >
Samir subedi
   </div>

   <div class="col-lg-2 col-md-7 col-12 col-sm-12">
   Name:
   </div>
   <div class="col-sm-8 col-8 col-md-4 col-lg-6" >
Samir subedi
   </div></div>



   
   </div>

    </div>
</div></div>   <br>
      @endsection