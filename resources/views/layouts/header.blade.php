<div class="bg-top navbar-light">
    	<div class="container">
    		<div class="row no-gutters d-flex align-items-center align-items-stretch">
    			<div class="col-md-4 d-flex align-items-center py-4">
    				<a class="navbar-brand" href="index.html"><img src="{{ asset('user/logo.jpg') }}" width="210" height="65"></a>
    			</div>
	    		<div class="col-lg-8 d-block">
		    		<div class="row d-flex">
					    <div class="col-md d-flex topper align-items-center align-items-stretch py-md-4">
					    	<div class="icon d-flex justify-content-center align-items-center"><span class="icon-envelope"></span>&nbsp;youremail@email.com</div>
					    					    </div>
					    <div class="col-md d-flex topper align-items-center align-items-stretch py-md-4">
					    	<div class="icon d-flex justify-content-center align-items-center"><span class="icon-phone2"></span>&nbsp;01-454545454</div>
						    
					    </div>
						<div class="col-md d-flex topper align-items-center align-items-stretch py-md-4">
					    	<div class="icon d-flex justify-content-center align-items-center"><i class="icon-map-marker"></i> &nbsp;Kathmandu, Nepal</div>
						
					    </div>
					    <div class="col-md topper d-flex align-items-center justify-content-end">
					    	<p class="mb-0">
					    		<a href="/apply" class="btn py-2 px-3 btn-primary d-flex align-items-center justify-content-center">
					    			<span>Apply now</span>
					    		</a>
					    	</p>
					    </div>
				    </div>
			    </div>
		    </div>
		  </div>
		  </div>

	
		
	  <nav class="navbar navbar-expand-lg navbar-dark bg-dark ftco-navbar-light sticky-top" id="ftco-navbar">
	
		<div class="container d-flex align-items-center px-4">
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>
	    
	      <div class="collapse navbar-collapse" id="ftco-nav">

	        <ul class="navbar-nav mr-auto">
		
	        	<li class="nav-item"><a href="/" class="nav-link pl-0">Home</a></li>
				<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">About Us</a>
				<div class="dropdown-menu">
				  <a class="dropdown-item" href="/about">Company Profile</a>
				  <a class="dropdown-item" href="/message">Message From CEO</a>
				
				</div>
			  </li>
	        	<li class="nav-item"><a href="/services" class="nav-link">Courses</a></li>

				<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Gallery</a>
				<div class="dropdown-menu">
				  <a class="dropdown-item" href="/imagealbum">Photo Gallery</a>
				  <a class="dropdown-item" href="/videos">Video Gallery</a>
				
				</div>
			  </li>
	        	<li class="nav-item"><a href="/blog1" class="nav-link">Blog</a></li>
			  <li class="nav-item"><a href="/profile" class="nav-link">Bartender</a></li>

			  <li class="nav-item"><a href="/contact" class="nav-link">Contact</a></li>
			  <li class="nav-item"><a class="nav-link" href="/">&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
			  <?php      $string = Auth::user()->name;
$substring = substr($string, 0, strpos($string, ' '));?>
                                            @if(Auth::guest())
											<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user-tie"></i>&nbsp;User</a>
				<div class="dropdown-menu">
				  <a class="dropdown-item" href="{{ route('login') }}">Login</a>
				  <a class="dropdown-item" href="{{ route('register') }}">Register</a>
				
				</div>
			  </li>	
			  @else

			  <li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user-tie"></i>&nbsp;&nbsp;<?php echo $substring;?></a>
				<div class="dropdown-menu">
				  <a class="dropdown-item" href="/bartender"><i class="fas fa-address-card"></i>&nbsp;&nbsp;Dashboard</a>
				  <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                     <i class="fas fa-sign-out-alt"></i> &nbsp;&nbsp;   Logout
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                    @endif
		
				</div>
			  </li>
	        </ul>
	      </div>
	    </div>
	  </nav>
</div>