
@extends('layouts.app')
@section('headSection')
<style>
p.groove {
    font-family: "Times New Roman", Times, serif;
   
   
    color: black;
  
    font-size: 16px;
    text-justify: inter-word;

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
            <h1 class="mb-2 bread">Services</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Services <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>
    
    <br>

    <section class="ftco-section ftco-no-pt ftc-no-pb">
			<div class="container">
				<div class="row d-flex">
					<div class="col-lg-5 col-md-12 col-sm-12 order-md-last wrap-about wrap-about d-flex align-items-stretch">
           
<br><br>
                    <table class="table table-striped mt-20">
      <thead class="thead-dark">
        <tr>
          <th>SN</th>
          <th>Courses Available</th>
          <th>Fee Structure</th>
          <th>Duration</th>
        
   
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>1</td>
          <td>Professional Bartending </td>
          <td>Rs. 35,000</td>
          <td>45 Days</td>
        
         
                </tr>
                <tr>
          <td>2</td>
          <td>Basic Bartending</td>
          <td>Rs. 20,000</td>
          <td>20 Days</td>
                    </tr>
                    <tr>
          <td>3</td>
          <td>Flair </td>
          <td>Rs. 20,000</td>
          <td>20 Days</td>
                    </tr>
                    <tr>
          <td>4</td>
          <td>Barista</td>
          <td>Rs. 20,000</td>
          <td>18 Days</td>
                    </tr>
                    <tr>
          <td>5</td>
          <td>Advanced Bartending</td>
          <td>Rs. 25,000</td>
          <td>10 Days</td>
                    </tr>
      </tbody>
    </table>

</br>

				

					</div>
					<div class="col-lg-7 col-sm-12 col-md-12 wrap-about  pr-md-4 ftco-animate">
          	<h3 style="font-style:underline;" class="mb-1">What is Bartending?</h3>
						<p class="groove" >Bartending is world recognized field of Hospitality Industry.Its not about working behind the bar its all about how you can present you knowledge and skill to your guest and satisfy them.It consists of various factors like dealing with all the bevarages, cocktails and mocktails which require contain techniques.It is a fascinating job which includes serving quality drinks with a style.
                        <br>We offer Bartending Course for basic  learners as well as who have work experience behind the bars.Our course is mainly focused on practical based training which included mixology, flair, free pouring and Theory.We run our course in 3 shifts and our courses are based on European Bartending Standards. </p>
			
                    <br>
                 
                    <h3>About Barista Course</h3>
					<p class="groove" >We are offering barista course which includes 3 week complete course and one week basic course. This course deals with the different types of coffee making, its theory, handling of coffee machines and basic coffee arts.  </p>
                                         
                                            <br>


                  
				</div>
			</div>
		</section>



    <div class="container">
    <section class="ftco-section">
			<div class="container-fluid px-4">
				<div class="row">
					<div class="col-md-4 course ftco-animate">
						<div class="img" style="background-image: url('{{ asset('/user/images/course-1.jpg')}}');"></div>
						<div class="text pt-4">
							<p class="meta d-flex">
							<span><i class="icon-user mr-2"></i>Sun - Fri</span>
								<span><i class="icon-inr mr-2"></i>Rs. 35,000</span>
								<span><i class="icon-calendar mr-2"></i>45 Days </span>
							</p>
							<h3><a href="#">Professional Bartending Course</a></h3>
							<p>Course Details includes:</p>
							<ul>
								<li>Mixology</li>
								<li>Flair</li>
									<li>Free Pouring</li>
									<li>Theory</li>
							
							</ul>
							<p><a href="/apply" class="btn btn-primary">Apply now</a></p>
						</div>
					</div>
					<div class="col-md-4 course ftco-animate">
						<div class="img" style="background-image: url('{{ asset('/user/images/course-2.jpg')}}');"></div>
						<div class="text pt-4">
							<p class="meta d-flex">
							<span><i class="icon-user mr-2"></i>Sun - Fri</span>
								<span><i class="icon-inr mr-2"></i>Rs. 20,000</span>
								<span><i class="icon-calendar mr-2"></i>20 Days </span>
							</p>
							<h3><a href="#">Basic Bartending Course</a></h3>
							<p>This course is applicable for abroad going student. Course Details includes</p>
							<ul>
								<li>Fully Practical Training </li>
								<li>20 Days</li>
									<li>3 Hours everyday </li>
									
							
							</ul>
							
							<p><a href="/apply" class="btn btn-primary">Apply now</a></p>
						</div>
					</div>
					<div class="col-md-4 course ftco-animate">
						<div class="img" style="background-image: url('{{ asset('/user/images/course-3.jpg')}}');"></div>
						<div class="text pt-4">
							<p class="meta d-flex">
								<span><i class="icon-user mr-2"></i>Sun - Fri</span>
								<span><i class="icon-inr mr-2"></i>Rs. 20,000</span>
								<span><i class="icon-calendar mr-2"></i>15 Days</span>
							</p>
							<h3><a href="#">Flair Bartending Course</a></h3>
					<p>	Course Details includes</p>
							<ul>
								<li>Exhibition Flair</li>
								<li>Working Flair</li>
									<li>Fire Flair </li>
							
									<li>3 Hours everyday </li>
							
							</ul>
							<p><a href="/apply" class="btn btn-primary">Apply now</a></p>
						</div>
					</div>
					<div class="col-md-4 course ftco-animate">
						<div class="img" style="background-image: url('{{ asset('/user/images/barista.jpg')}}');"></div>
						<div class="text pt-4">
						<p class="meta d-flex">
								<span><i class="icon-user mr-2"></i>Sun - Fri</span>
								<span><i class="icon-inr mr-2"></i>Rs. 20,000</span>
								<span><i class="icon-calendar mr-2"></i>18 Days</span>
							</p>
							<h3><a href="/apply">Barista Course</a></h3>
					<p>It is highly Scoped Job in the world. 7 Days Basic course also available. Course Details includes</p>
							<ul>
								<li>Theory of  Coffee</li>
								<li>Recipes</li>
								
									<li>18 Days</li>
								
							
							</ul>
							<p><a href="#" class="btn btn-primary">Apply now</a></p>
						</div>
					</div>

					<div class="col-md-4 course ftco-animate">
						<div class="img" style="background-image: url('{{ asset('/user/images/course-5.jpg')}}');"></div>
						<div class="text pt-4">
							<p class="meta d-flex">
								<span><i class="icon-user mr-2"></i>Mr. Khan</span>
								<span><i class="icon-table mr-2"></i>10 seats</span>
								<span><i class="icon-calendar mr-2"></i>4 Years</span>
							</p>
							<h3><a href="#">Barista Course </a></h3>
							<p>It is highly Scoped Job in the world. </p>
							<p><a href="/apply" class="btn btn-primary">Apply now</a></p>
						</div>
					</div>
					<div class="col-md-4 course ftco-animate">
						<div class="img" style="background-image: url('{{ asset('/user/images/course-6.jpg')}}');"></div>
						<div class="text pt-4">
							<p class="meta d-flex">
								<span><i class="icon-user mr-2"></i>Sun - Fri</span>
								<span><i class="icon-inr mr-2"></i>Rs. 25,000</span>
								<span><i class="icon-calendar mr-2"></i>10 Days </span>
							</p>
							<h3><a href="#">Advanced Bartending Course</a></h3>
							<p>Course Details includes:</p>
							<ul>
								<li>Mixology</li>
								<li>Cocktail Categories</li>
								<li>Family and Themes</li>
						

									<li>Methods, Techniques & Equipment</li>
									<li>About Ice</li>
							
							</ul>
							<p><a href="#" class="btn btn-primary">Apply now</a></p>
						</div>
					</div>
					<div class="col-md-4 course ftco-animate">
						<div class="img" style="background-image: url(images/course-7.jpg);"></div>
						<div class="text pt-4">
							<p class="meta d-flex">
								<span><i class="icon-user mr-2"></i>Mr. Khan</span>
								<span><i class="icon-table mr-2"></i>10 seats</span>
								<span><i class="icon-calendar mr-2"></i>4 Years</span>
							</p>
							<h3><a href="#">Electric Engineering</a></h3>
							<p>Separated they live in. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country</p>
							<p><a href="/apply" class="btn btn-primary">Apply now</a></p>
						</div>
					</div>
					</div>
				</div>
			</div>
		</section>

    
    @endsection