
@extends('layouts.app')
@section('headSection')
<style>

video {
  width: 100%;
  height: auto;
}


@media only screen and (min-width: 600px) {
  .col-s-1 {width: 8.33%;}
  .col-s-2 {width: 16.66%;}
  .col-s-3 {width: 25%;}
  .col-s-4 {width: 33.33%;}
  .col-s-5 {width: 41.66%;}
  .col-s-6 {width: 50%;}
  .col-s-7 {width: 58.33%;}
  .col-s-8 {width: 66.66%;}
  .col-s-9 {width: 75%;}
  .col-s-10 {width: 83.33%;}
  .col-s-11 {width: 91.66%;}
  .col-s-12 {width: 100%;}
}

@media only screen and (min-width: 768px) {
  .col-1 {width: 8.33%;}
  .col-2 {width: 16.66%;}
  .col-3 {width: 25%;}
  .col-4 {width: 33.33%;}
  .col-5 {width: 41.66%;}
  .col-6 {width: 50%;}
  .col-7 {width: 58.33%;}
  .col-8 {width: 66.66%;}
  .col-9 {width: 75%;}
  .col-10 {width: 83.33%;}
  .col-11 {width: 91.66%;}
  .col-12 {width: 100%;}
}
</style>
@endsection
@section('main-content')
    <video width="400" controls autoplay playsinline>
      <source src="{{URL::asset('/user/images/fb.mp4')}}"  type="video/mp4">
      <source src="mov_bbb.ogg" type="video/ogg">
      Your browser does not support HTML5 video.
    </video>
	<section class="ftco-section ftco-no-pt ftc-no-pb">
			<div class="container">
				<div class="row d-flex">
				
					<div class="col-md-12 wrap-about py-5 pr-md-4 ftco-animate">
          	<h2 class="mb-4">What We Offer</h2>
						<p>We offer Bartending Course for basic learners as well as who have work experience behind the bars.Our course is mainly focused on practical based training which included mixology, flair, free pouring and Theory.We Provide Bartending Training, Flair Training, Flair Practice Room Barista Training, Bar Design, Job Placement Trainings.</p>
						<div class="row mt-5">
							<div class="col-lg-4">
								<div class="services-2 d-flex">
									<div class="icon mt-2 d-flex justify-content-center align-items-center"><span class="flaticon-security"></span></div>
									<div class="text pl-3">
										<h3>Safety First</h3>
										<p>We focus on safety of our students and mentors.So, safety protocol is followed strictly.</p>
									</div>
								</div>
							</div>
							<div class="col-lg-4">
								<div class="services-2 d-flex">
									<div class="icon mt-2 d-flex justify-content-center align-items-center"><span class="flaticon-reading"></span></div>
									<div class="text pl-3">
										<h3>Regular Classes</h3>
										<p>We are concerned for the the timely completion of the courses. </p>
									</div>
								</div>
							</div>
							<div class="col-lg-4">
								<div class="services-2 d-flex">
									<div class="icon mt-2 d-flex justify-content-center align-items-center"><span class="flaticon-diploma"></span></div>
									<div class="text pl-3">
										<h3>Certified Teachers</h3>
										<p>We have a team of expertise having insight on the particular subject domain focusing on providing excellent skills to our students.</p>
									</div>
								</div>
							</div>
							<div class="col-lg-4">
								<div class="services-2 d-flex">
									<div class="icon mt-2 d-flex justify-content-center align-items-center"><span class="flaticon-education"></span></div>
									<div class="text pl-3">
										<h3>Sufficient Classrooms</h3>
										<p>Our classed are well equipped and adequate to address the modern tools and designs..</p>
									</div>
								</div>
							</div>
							<div class="col-lg-4">
								<div class="services-2 d-flex">
									<div class="icon mt-2 d-flex justify-content-center align-items-center"><span class="flaticon-jigsaw"></span></div>
									<div class="text pl-3">
										<h3>Creative Lessons</h3>
										<p>Knowledge and skills are a part of higher learning. We focus on skill oriented knowledge teaching. </p>
									</div>
								</div>
							</div>
							<div class="col-lg-4">
								<div class="services-2 d-flex">
									<div class="icon mt-2 d-flex justify-content-center align-items-center"><span class="flaticon-kids"></span></div>
									<div class="text pl-3">
										<h3>Sports Facilities</h3>
										<p>Far far away, behind the word mountains, far from the countries Vokalia.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
			</div>
			</div>
		</section>
		

		<section class="ftco-section bg-light">
			<div class="container-fluid px-4">
				<div class="row justify-content-center mb-5 pb-2">
          <div class="col-md-8 text-center heading-section ftco-animate">
            <h2 class="mb-4">Some of our works</h2>
            <p></p>
          </div>
        </div>	
		<div class="container">
				<div class="row">
					
				@foreach($video as $blog)
					<div class="col-md-4 col-lg-4 ftco-animate">
						<div class="staff">
							<div class="img-wrap d-flex align-items-stretch">
								<div class="img align-self-stretch" ></div>
								<iframe width="400" height="300" src="{{$blog->yvideo}}"  frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
							</div>
							<div class="text pt-3 text-center">
								<h3>{{$blog->title}}</h3>
								<span class="position mb-2">{!! htmlspecialchars_decode($blog->descrip) !!}</span>
								
							</div>
						</div>
					</div>
					@endforeach
					</div>
					</div>
					
		</section>



		<section class="ftco-section">
			<div class="container-fluid px-4">
				<div class="row justify-content-center mb-5 pb-2">
          <div class="col-md-8 text-center heading-section ftco-animate">
            <h2 class="mb-4"><span>Our</span>  Main Courses</h2>
            <p>We focus on creating competent and skill oriented bartenders focusing on theoretical technique of teaching. Here are our core course:  </p>
          </div>
        </div>	<div class="container">
				<div class="row">
					<div class="col-md-4 course ftco-animate">
						<div class="img"  style="background-image: url('{{ asset('/user/images/course-1.jpg')}}');"></div>
						<div class="text pt-4">
							
							<h3><a href="#">Bartending Courses</a></h3>
							<p>It is highly Scoped Job in the world. 7 Days Basic course also available. Course Details includes</p>
							<p><a href="/services" class="btn btn-primary">View More</a></p>
						</div>
					</div>
					<div class="col-md-4 course ftco-animate">
						<div class="img" style="background-image: url('{{ asset('/user/images/barista.jpg')}}');"></div>
						<div class="text pt-4">
							
							<h3><a href="#">Barista Courses</a></h3>
							<p>It is highly Scoped Job in the world. 7 Days Basic course also available. Course Details includes</p>
							<p><a href="/services" class="btn btn-primary">View More</a></p>
						</div>
					</div>
					<div class="col-md-4 course ftco-animate">
						<div class="img" style="background-image: url('{{ asset('/user/images/123.jpg')}}');"></div>
						<div class="text pt-4">
							
							<h3><a href="#">Flair Bartending Courses</a></h3>
							<p>It is highly Scoped Job in the world. 7 Days Basic course also available. Course Details includes</p>
							<p><a href="/services" class="btn btn-primary">View More</a></p>
						</div>
					</div>
					
				</div></div>
			</div>
		</section>

		
		<section class="ftco-section bg-light">
			<div class="container">
			<div class="row justify-content-center mb-5 pb-2">
          <div class="col-md-8 text-center heading-section ftco-animate">
            <h2 class="mb-4"><span>Recent</span> Blog</h2>
            <p>Our latest Blog are shown below:</p>
          </div>
        </div>
				<div class="row">
                        
                @foreach($abc as $blog)
                <?php $month1= array("NULL","January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December");
                                $m=$blog->created_at;
                                $month = substr($m,5,2); 
                                $day=substr($m,8,2);
                                $ab=intval($month);
                                $bc= $month1[$ab];
                                $year=substr($m,0,4);

                            ?>
          <div class="col-md-4 col-lg-4 ftco-animate">
            <div class="blog-entry">
              <a  href="/blog-details/{{$blog->slug}}" class="block-20 d-flex align-items-end"  style="background-image: url('{{ asset('storage/blog_images/'.$blog->image)}}');">
								<div class="meta-date text-center p-2">
                  <span class="day"><?php echo $day;?></span>
                  <span class="mos"><?php echo $bc;?></span>
                  <span class="yr"><?php echo $year;?></span>
                </div>

                <h2></h2>
                              
              </a>
              <div class="text bg-white p-4">
                <h3 class="heading"><a  href="/blog-details/{{$blog->slug}}">{{$blog->title}}</a></h3>
                <p>{{$blog->subtitle}}</p>
                <div class="d-flex align-items-center mt-4">
	                <p class="mb-0"><a  href="/blog-details/{{$blog->slug}}" class="btn btn-primary">Read More <span class="ion-ios-arrow-round-forward"></span></a></p>
	                <p class="ml-auto mb-0">
	                	<a href="#" class="mr-2"></a>
	                	<a href="/blog-details/{{$blog->slug}}" class="meta-chat"><span class="icon-chat"></span> </a>
	                </p>
                </div>
              </div>
            </div>
          </div>
          @endforeach
     
            </div>
</section>
		<section class="ftco-section testimony-section">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-2">
          <div class="col-md-8 text-center heading-section ftco-animate">
            <h2 class="mb-4">Student Says About Us</h2>
            <p>Here is our students experience and suggestions regarding us.</p>
          </div>
        </div>
        <div class="row ftco-animate justify-content-center">
          <div class="col-md-12">
            <div class="carousel-testimony owl-carousel">
              <div class="item">
                <div class="testimony-wrap d-flex">
                  <div class="user-img mr-4" style="background-image: url('{{ asset('/user/images/teacher-1.jpg')}}');">
                  </div>
                  <div class="text ml-2">
                  	<span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="name">Prashant Gautam</p>
					<span class="position">flair Course</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap d-flex">
                  <div class="user-img mr-4"   style="background-image: url('{{ asset('/user/images/teacher-2.jpg')}}');">
                  </div>
                  <div class="text ml-2">
                  	<span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="name">Henry Dee</p>
                    <span class="position">Mother</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap d-flex">
                  <div class="user-img mr-4" style="background-image: url('{{ asset('/user/images/teacher-3.jpg')}}');">
                  </div>
                  <div class="text ml-2">
                  	<span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="name">Mark Huff</p>
					<span class="position">Basic Barista Course</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap d-flex">
                  <div class="user-img mr-4"  style="background-image: url('{{ asset('/user/images/teacher-4.jpg')}}');">
                  </div>
                  <div class="text ml-2">
                  	<span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="name">Rodel Golez</p>
                    <span class="position">Advanced Bartending Course</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap d-flex">
                  <div class="user-img mr-4"  style="background-image: url('{{ asset('/user/images/teacher-5.jpg')}}');">
                  </div>
                  <div class="text ml-2">
                  	<span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="name">Ken Bosh</p>
                    <span class="position">Basic Barista Course</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
<br><br><br><br>
    @endsection
