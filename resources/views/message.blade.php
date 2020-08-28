
@extends('layouts.app')



@section('main-content')


<section class="hero-wrap hero-wrap-2" style="background-image: url('{{ asset('/user/images/bg_1.jpg')}}');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-2 bread">About Us</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>About Us <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>
    <br>
  

    <section class="ftco-section ftco-no-pt ftc-no-pb">
			<div class="container">
				<div class="row d-flex">
					<div class="col-md-4 col-sm-12 col-lg-3 order-md-last wrap-about wrap-about d-flex align-items-stretch">
                 <img src="{{ asset('/user/images/ceo.jpg') }}" width="200px" height="150px"></div>

					<div class="col-md-8 col-sm-12 col-lg-9 wrap-about pr-md-4 ftco-animate">
          	<h2 class="mb-4">Message From CEO </h2>
						<p>I have been working as a Bartender and never tired of working behind the bar. This field is very fascinating as it deals with alcohol followed by music, surprising events and lavish bar.Hard Work and Passion will always lead to success.</p>
			
                    <br>

				</div>
			</div>
		</section>
		
        

        @endsection