
@extends('layouts.app')

@section('headSection')
<style>.embed-container { position: relative; padding-bottom: 56.25%; height: 0; overflow: hidden; max-width: 100%; } .embed-container iframe, .embed-container object, .embed-container embed { position: absolute; top: 0; left: 0; width: 100%; height: 100%; }</style>
@endsection

@section('main-content')
{{Session::get('success')}}
<section class="hero-wrap hero-wrap-2" style="background-image: url('{{ asset('/user/images/bg_1.jpg')}}');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-2 bread">Video</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Videoss<i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>
    <br>
        <!-- Hero End -->
        <!-- ================ contact section start ================= -->
       
        <section class="ftco-section bg-light">
			<div class="container-fluid px-4">
				<div class="row justify-content-center mb-5 pb-2">
         
        </div>	
		<div class="container">
				<div class="row">
				@foreach($abc as $blog)
					<div class="col-md-6 col-lg-6 col-sm-12">
						<div class="staff">
						
								<div class="img align-self-stretch" ></div>
								<div class='embed-container'><iframe src="{{$blog->yvideo}}" frameborder='0' allowfullscreen></iframe></div>
						
							<div class="text pt-3 text-center">
								<h3>{{$blog->title}}</h3>
					
								<div class="faded">
									<p>{!! htmlspecialchars_decode($blog->descrip) !!}</p>
							
	                             </div>
							</div>
						</div>
					</div>
					@endforeach
					
                        
                    
						
					</div>
					
					</div>	<center>{!! $abc->render() !!}</center><br>
					</div>
					
					</div>
					</div>
					
		</section>
        
   
        <!-- ================ contact section end ================= -->
  
    @endsection