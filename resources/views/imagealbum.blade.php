
@extends('layouts.app')

@section('headSection')
<style>
div.gallery {
  margin: 10px;
  border: 2px solid #ccc;
  float: left;
 
}

div.gallery:hover {
  border: 2px solid #01579B;
}

div.gallery img {
  width: 100%;
  height: auto;
}

div.desc {
  padding: 7px;
  text-align: center;
  text-color:blue;
}
</style>
@endsection

@section('main-content')
{{Session::get('success')}}
<section class="hero-wrap hero-wrap-2" style="background-image: url('{{ asset('/user/images/bg_1.jpg')}}');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-2 bread">Gallery</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Gallery <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>
    <br>
        <!-- Hero End -->
        <!-- ================ contact section start ================= -->
        <section class="contact-section">
            <div class="container">
      
            <div class="row">  
                  @foreach($abc as $album)
                <div class="col-lg-4">
               <div class="gallery">
  <a  href="gallery/{{$album->id}}">
    <img  src="{{ asset('storage/album_images/'.$album->image) }}" class="image" >
  </a>

  <div class="desc"><i>{{$album->name}}</i></div>

</div></div>
@endforeach
</div></div><br>
<div class="pull-right">&nbsp;{!! $abc->render() !!}</div><br>
 
        
        </section>
        <!-- ================ contact section end ================= -->
    </main>
    @endsection