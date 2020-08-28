
@extends('layouts.app')

@section('headSection')
<style>
p.groove {
    font-family: "Times New Roman", Times, serif;
   
   
    color: black;
  
    font-size: 16px;
    justify-content:center;

}

a.hello:link, a.hello:visited {
  background-color: green;
  color: white;
  padding: 14px 25px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-weight: bold;
}

a.hello:hover, a.hello:active {
  background-color: black;
  display: inline-block;
}

</style>

@endsection

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
					<div class="col-md-5 col-sm-12 col-lg-3 order-md-last wrap-about wrap-about d-flex align-items-stretch">
                    <div class="fb-page" data-href="https://www.facebook.com/ibanepal/" data-tabs="timeline" data-width="299px" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"></div>
					</div>
					<div class="col-lg-9 col-sm-12 col-md-7 wrap-about pr-md-4 ftco-animate">
          	<h2 class="mb-4">Company Profile</h2>
						<p class="groove">WE PROVIDE BARTENDING TRAINING, FLAIR TRAINING, FLAIR PRACTICE ROOM BARISTA TRAINING, BAR DESIGN, JOB PLACEMENT SERVICES.

Hospitality Brothers Private Limited located at the heart of Lalitpur at Kumaripati presenting Illusion Bartender Academy established with the vision of creating skilled Bartenders in Nepal who beliefs in educating, training people, developing professionalism and upgrading their personality. We are specialized in the hospitality management field of bartending. our main specialty are the European Course Contain, new style of teaching technique, trainers who have been specialized and trained in the best bartender school in Nepal and over the world further more the infrastructure which has a important role at the time of training providing individual bar setup for the student. we are focused to the practical skill training's rather than just providing theoretical knowledge which leads to produce skilled manpower. Our classes will be running under the supervision of expert where students will prepare the variety of Contemporary Classic Drinks, teaching them different Working Techniques, learning to creating their own Signature Drinks and developing their skills. We also provide a platform to our student to get to know the real world of bartending through the Internship Program and also offering the Job. </p>
			
                    <br>

                    <h2 class="mb-4">Mission Statement</h2>
                    <p class="groove">To educate and create true Bartenders..</p>
				</div>
			</div>
		</section>
		
        

        @endsection