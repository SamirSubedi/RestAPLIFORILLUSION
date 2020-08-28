
@extends('layouts.app')


@section('headSection')
<style>


a.hello:link, a.hello:visited {
  background-color: #1877F2;
  color: white;
  padding: 10px 15px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size:15px;
  font-weight: normal;
}
a.he:link, a.he:visited {
  background-color:#182C39;
  color: white;
  padding: 12px 32px;
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
a.hello:hover, a.hello:active {
  background-color:navy;
  display: inline-block;
}
a.he:hover, a.he:active {
  background-color:#0D2D3E;
  
  display: inline-block;
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


</style>

@endsection


@section('main-content')

<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v7.0&appId=289377179019430&autoLogAppEvents=1" nonce="Td6Ij62p"></script>


<section class="hero-wrap hero-wrap-2" style="background-image: url('{{ asset('/user/images/bg_1.jpg')}}');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-2 bread">Blog Single</h1>
             <p class="breadcrumbs"><span class="mr-2"><a href="/">Home <i class="ion-ios-arrow-forward"></i></a></span> <span class="mr-2"><a href="index.html">Blog <i class="ion-ios-arrow-forward"></i></a></span> <span>Blog Single <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>

		<br>
		<section class="ftco-section">
			<div class="container">
				<div class="row">
          <div class="col-lg-8 ftco-animate">
             
            <h2 class="mb-3">{{$slug->title}}</h2>
            <span class="icon-calendar"></span> {{$slug->created_at}}
   <div class="fb-like" data-href="{{Request::url()}}" data-width="" data-layout="standard" data-action="like" data-size="small" data-share="false"></div>
   <hr>
            <p>  <i>'{{$slug->subtitle}}'</i></p>
            <p>
              <img src="{{ asset('storage/blog_images/'.$slug->image) }}" alt="" class="img-fluid">
            </p>
           <p> {!! htmlspecialchars_decode($slug->body) !!}</p>
            <div class="tag-widget post-tag-container mb-5 mt-5">
            @foreach ($slug->categories as $category)
              <div class="tagcloud">
                <a href="#" class="tag-cloud-link"> {{$category->name}}</a>
            
              </div>
              @endforeach
            </div>
            
       
            <a href="https://www.youtube.com/watch?v=vxtOglAcYZQ&list=RDvxtOglAcYZQ&start_radio=1" name="hello" class="hello">
                                View Promotional Video
                                </a>

            <div class="pt-5 mt-5">
              <h3 class="mb-5 h4 font-weight-bold">Facebook Comments</h3>
              <ul class="comment-list">
                

           

                
              <div class="comment-list">
                        <div class="single-comment justify-content-between d-flex">
                           <div class="user justify-content-between d-flex">
                           <div class="fb-comments" data-href="{{Request::url()}}" data-numposts="6" data-width=""></div>
                           </div>
                        </div>
                     </div>
              </ul>
              <!-- END comment-list -->
         
              
     
            </div>
          </div> <!-- .col-md-8 -->

          <div class="col-lg-4 sidebar ftco-animate">
            <div class="sidebar-box">
            
            </div>

            <div class="sidebar-box ftco-animate">
              <h3>Category</h3>
              @foreach ($slug->categories as $category)
              <ul class="tagcloud m-0 p-0">
                <a href="#" class="tag-cloud-link"> {{$category->name}}</a>
             
              </ul>
              @endforeach
            </div>
                                      
                                      
        

            <div class="sidebar-box ftco-animate">
              <h3>Latest Articles</h3>
              @foreach($abc as $blog)
              <?php $month1= array("NULL","January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December");
                                $m=$blog->created_at;
                                $month = substr($m,5,2); 
                                $day=substr($m,8,2);
                                $ab=intval($month);
                                $bc= $month1[$ab];
                                $year=substr($m,0,4);

                            ?>
              <div class="block-21 mb-4 d-flex">
                <a href="/blog-details/{{$blog->slug}}" class="blog-img mr-4" style="background-image: url('{{ asset('storage/blog_images/'.$blog->image)}}');"></a>
                <div class="text">
                  <h3 class="heading"><a href="/blog-details/{{$blog->slug}}">{{$blog->title}}</a></h3>
                  <div class="meta">
                    <div><a href="#"><span class="icon-calendar"></span>
                                  <?php echo $bc." ".$day.", ".$year;?>     </a></div>
                    <div><a href="#"><span class="icon-person"></span> Admin</a></div>
              
                  </div>
                </div>
              </div>
           
             @endforeach
            </div>

       

        


           
          </div><!-- END COL -->
        </div>
			</div>
		</section>
@endsection