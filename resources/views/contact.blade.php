
@extends('layouts.app')



@section('main-content')



<section class="hero-wrap hero-wrap-2" style="background-image: url('{{ asset('/user/images/bg_1.jpg')}}');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-2 bread">Contact Us</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Contact <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>

    <br>
    <br>
   
		
		<section class="ftco-section ftco-no-pt ftco-no-pb contact-section">
			<div class="container">
              
      @if(session()->has('Success'))
  
  <div class="alert alert-success">{{session()->get('Success')}}</div>
  @endif
				<div class="row d-flex align-items-stretch no-gutters">
					<div class="col-md-6 p-4 order-md-last bg-light">
                    <form action="{{ route('contact.store') }}"  enctype="multipart/form-data"method="post" id="contactForm" >
                        @csrf
              <div class="form-group">
                <input type="text" class="form-control" name="name" placeholder="Your Name">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="email" placeholder="Your Email">
              </div>
              
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Subject" name="subject">
              </div>
              <div class="form-group">
                <textarea name="" id="" cols="30" rows="7" class="form-control" name="message" placeholder="Message"></textarea>
              </div>
              <div class="form-group">
                <input type="submit" value="Send Message" class="btn btn-primary py-3 px-5">
              </div>
            </form>
					</div>
					<div class="col-md-6 d-flex align-items-stretch">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3533.4970277840157!2d85.31714105049348!3d27.67102918272267!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb19ce0f8eaf3d%3A0x8a378439e3774a19!2sIllusion%20Bartender%20Academy!5e0!3m2!1sen!2snp!4v1598345881994!5m2!1sen!2snp" width="800" height="600" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
					</div>
				</div>
			</div>
		</section>

<br>				

        <!-- Hero End -->
        <!-- ================ contact section start ================= -->
       
        <!-- ================ contact section end ================= -->
   
    @endsection