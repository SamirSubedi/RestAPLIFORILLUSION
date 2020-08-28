
@extends('layouts.app')
@section('main-content')
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v8.0&appId=289377179019430&autoLogAppEvents=1" nonce="AE0jRJLs"></script>



<main>
        <!--? Hero Start -->
        
    <section class="hero-wrap hero-wrap-2" style="background-image: url('{{ asset('/user/images/bg_1.jpg')}}');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-2 bread">Blogs</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="/">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Blog <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>
<br>
		
		<section class="ftco-section bg-light">
			<div class="container">
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
          <div class="col-md-6 col-lg-4 ftco-animate">
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
            {!! $abc->render() !!}<br>
          </div>
      
	
		</section>
		
    @endsection
  