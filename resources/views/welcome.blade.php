<!DOCTYPE html>
<html class="js csstransitions">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="Diaa Educational Platform">
		<meta name="author" content="Zuhair AlSader, Karam Shawish">
		<title>Diaa Educationa Platform</title>

		<!-- Main Stylesheet -->
		<link href="{{ asset('/css/style.css') }}" rel="stylesheet">

		<!-- HTML5 shiv and Respond.js IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
		<script src="js/html5shiv.js"></script>
		<script src="js/respond.min.js"></script>
		<![endif]-->

	<style type="text/css"></style><style type="text/css">.fancybox-margin{margin-right:17px;}</style></head>
	<body id="homepage" style="margin: 0px;">

		<div id="home" style="height: 505px;"></div>

		<!-- ========== HEADER START ========== -->

		<header class="fixed">
			<!-- ==== TOOLS START ==== -->
			<div class="tools">
				<div class="container">
					&nbsp;
				</div>
			</div>
			<!-- ==== TOOLS END ==== -->
			<!-- ==== NAVBAR START ==== -->
			<div class="navbar navbar-default navbar-static-top" role="navigation">
				<div class="container">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a href="#" class="navbar-brand"><img src="{{asset('/image/logo.png')}}" alt="Diaa Educational Platform" class="img-responsive logo"></a>
					</div>
					<nav class="navbar-collapse collapse">
						<ul class="nav navbar-nav navbar-right">
							<li><a href="{{ url('/') }}">Home</a></li>
							<li><a href="{{ route('course.index')}}">Courses</a></li>
							<li><a href="#">About</a></li>
							@if (Auth::guest())
								<li><a href="{{ url('/auth/login') }}">Login</a></li>
								<li><a href="{{ url('/auth/register') }}">Register</a></li>
								@else
									<li class="dropdown">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ Auth::user()->full_name }} <span class="caret"></span></a>
										<ul class="dropdown-menu" role="menu">
											<li><a href="#">Dashboard</a></li>
											<li><a href="{{ url('/auth/logout') }}">Logout</a></li>
										</ul>
									</li>
								@endif
						</ul>
					</nav>
				</div>
			</div>
			<!-- ==== NAVBAR END ==== -->
		</header>

		<!-- ========== HEADER END ========== -->

		<!-- ========== BANNER START ========== -->

		<div id="slides" style="position: relative; overflow: hidden; width: 100%; height: 623px;">
			<div class="slides-control" style="position: relative; height: 100%; width: 1349px; left: -1349px;"><div class="slides-container" style="display: block; margin: 0px; padding: 0px; list-style: none; position: relative; height: 100%; opacity: 1; transition-property: all; -webkit-transition-property: all; transition-duration: 0s; -webkit-transition-duration: 0s; transition-timing-function: ease; -webkit-transition-timing-function: ease;">
				<div style="display: none; left: 1349px; position: absolute; overflow: hidden; height: 100%; width: 1349px; top: 0px; z-index: 0; opacity: 1; transition-property: all; -webkit-transition-property: all; transition-duration: 0s; -webkit-transition-duration: 0s; transition-timing-function: ease; -webkit-transition-timing-function: ease;"><img src="{{ asset('image/banner1.jpg') }}" alt="" style="-webkit-backface-visibility: hidden; position: absolute; left: 0px; top: -68px; z-index: -1; max-width: none; height: 758.8125px; width: 1349px;"></div>
				<div style="display: none; left: 1349px; position: absolute; overflow: hidden; height: 100%; width: 1349px; top: 0px; z-index: 0; opacity: 1; transition-property: all; -webkit-transition-property: all; transition-duration: 0s; -webkit-transition-duration: 0s; transition-timing-function: ease; -webkit-transition-timing-function: ease;"><img src="{{ asset('image/banner2.jpg') }}" alt="" style="-webkit-backface-visibility: hidden; position: absolute; left: 0px; top: -67.90625px; z-index: -1; max-width: none; height: 758.8125px; width: 1349px;"></div>
				<div style="display: block; left: 1349px; position: absolute; overflow: hidden; height: 100%; width: 1349px; top: 0px; z-index: 2; opacity: 1;"><img src="{{ asset('image/banner3.jpg')}}" alt="" style="-webkit-backface-visibility: hidden; position: absolute; left: 0px; top: -67.90625px; z-index: -1; max-width: none; height: 758.8125px; width: 1349px;"></div>
			</div></div>

			<div class="tint"></div>

			<!-- SLIDER OFFERS START -->
			<div class="slider-offers text-center">
				<ul>
					<li style="transition-property: all; -webkit-transition-property: all; transition-duration: 0s; -webkit-transition-duration: 0s; transition-timing-function: ease; -webkit-transition-timing-function: ease; display: none;">
						<h3>Learning As was never before</h3>
						<h4></h4>
					</li>
					<li style="display: none; transition-property: all; -webkit-transition-property: all; transition-duration: 0s; -webkit-transition-duration: 0s; transition-timing-function: ease; -webkit-transition-timing-function: ease;">
						<h3></h3>
						<h4></h4>
					</li>
					<li style="display: list-item; opacity: 1; transition-property: all; -webkit-transition-property: all; transition-duration: 0s; -webkit-transition-duration: 0s; transition-timing-function: ease; -webkit-transition-timing-function: ease;">
						<h3></h3>
						<h4></h4>
					</li>
				</ul>
			</div>
			<!-- SLIDER OFFERS END -->

			<a class="arrow" href="#welcome">
				<i class="fa fa-arrow-down fa-2x"></i>
			</a>
		</div>

		<!-- ========== BANNER END ========== -->

		<!-- ========== WELCOME START ========== -->

		<section id="welcome">
			<div class="container">
				<div class="row text-center">
					<div class="col-sm-3">
						<p><img src="{{ asset('image/feature1.gif') }}" alt=""></p>
						<h3>Art</h3>
						<p>Non ipsum vulputate condimentum eu id tellus. Praesent commodo arcu quis rhoncus porttitor. Suspendisse volutpat, quam eu rutrum laoreet, ex sapien pellentesque.</p>
						<p><a href="#" target="_blank" class="btn btn-primary">Read More</a></p>
					</div>
					<div class="col-sm-3">
						<p><img src="{{ asset('image/feature2.gif') }}" alt=""></p>
						<h3>Geometry</h3>
						<p>Non ipsum vulputate condimentum eu id tellus. Praesent commodo arcu quis rhoncus porttitor. Suspendisse volutpat, quam eu rutrum laoreet, ex sapien pellentesque.</p>
						<p><a href="#" target="_blank" class="btn btn-primary">Read More</a></p>
					</div>
					<div class="col-sm-3">
						<p><img src="{{ asset('image/feature3.gif') }}" alt=""></p>
						<h3>Science</h3>
						<p>Non ipsum vulputate condimentum eu id tellus. Praesent commodo arcu quis rhoncus porttitor. Suspendisse volutpat, quam eu rutrum laoreet, ex sapien pellentesque.</p>
						<p><a href="#" target="_blank" class="btn btn-primary">Read More</a></p>
					</div>
					<div class="col-sm-3">
						<p><img src="{{ asset('image/feature4.gif') }}" alt=""></p>
						<h3>Geography</h3>
						<p>Non ipsum vulputate condimentum eu id tellus. Praesent commodo arcu quis rhoncus porttitor. Suspendisse volutpat, quam eu rutrum laoreet, ex sapien pellentesque.</p>
						<p><a href="#" target="_blank" class="btn btn-primary">Read More</a></p>
					</div>
				</div>
			</div>
		</section>

		<!-- ========== WELCOME END ========== -->

		<!-- ========== RECENT COURSES START ========== -->

		<section id="featured-posts" class="alt-background">
			<div class="container">

				<h2 class="text-center carousel-title">
					Recent Courses
					<a href="{{ route('course.index') }}">View All</a>
				</h2>

				<!-- OWL CAROUSEL START -->
				<div class="owl-carousel owl-theme owl-loaded">
				  <div class="owl-stage-outer">
				    <div class="owl-stage" style="transform: translate3d(-1950px, 0px, 0px); transition: 1.5s; -webkit-transition: 1.5s; width: 3900px;">
				      @foreach(\App\Course::latest()->get() as $course)
							<div class="owl-item cloned" style="width: 360px; margin-right: 30px;">
				        <div class="item">
				          <a href="{{ route('course.show', $course->permalink)}}">
				            <img src="./Smartway - HTML Template2_files/course02.jpg" alt="" class="img-responsive">
				          </a>
				          <h3><a href="{{ route('course.show', $course->permalink)}}">{{ $course->name }}</a></h3>
				          <div class="meta">
				          </div>
				        </div>
				      </div>
							@endforeach
				    </div>
				  </div>
				  <div class="owl-controls">
				    <div class="owl-nav">
				      <div class="owl-prev" style=""><a class="btn btn-primary"><i class="fa fa-caret-left"></i></a></div>
				      <div class="owl-next" style=""><a class="btn btn-primary"><i class="fa fa-caret-right"></i></a></div>
				    </div>
				    <div class="owl-dots" style="display: none;"></div>
				  </div>
				</div>
				<!-- OWL CAROUSEL END -->

			</div>
		</section>

		<!-- ========== RECENT COURSES END ========== -->

		<!-- ========== SEARCH START ========== -->

		<section id="search" style="background-position: 100% -72px;">
			<div class="tint"></div>
			<div class="container">
				<div class="row">
					<div class="col-sm-12 text-center" data-scroll-reveal="" style="-webkit-transform: translatey(0);transform: translatey(0);opacity: 1;-webkit-transition: -webkit-transform 0.66s ease-in-out 0s,  opacity 0.66s ease-in-out 0s;transition: transform 0.66s ease-in-out 0s, opacity 0.66s ease-in-out 0s;-webkit-perspective: 1000;-webkit-backface-visibility: hidden;" data-scroll-reveal-initialized="true">

						<h2 class="carousel-title">
							Search for Courses
							<a href="http://coffeecreamthemes.com/themes/smartway/site/courses-list-right-sidebar.html">View All Courses</a>
						</h2>

						<form class="form-inline" role="form">
							<div class="form-group">
								<label class="sr-only" for="input-keywords">Keywords</label>
								<input type="text" class="form-control input-lg" id="input-keywords" placeholder="Keywords">
							</div>
							<button type="submit" class="btn btn-primary btn-lg">Search</button>
						</form>

					</div>
				</div>
			</div>
		</section>

		<!-- ========== SEARCH END ========== -->

		<!-- ========== FEATURED TEACHERS START ========== -->

		<section id="featured-teachers" class="alt-background">
			<div class="container">

				<h2 class="carousel-title text-center">
					Featured Teachers
					<a href="http://coffeecreamthemes.com/themes/smartway/site/teachers-list.html">Meet Our Staff</a>
				</h2>

				<!-- OWL CAROUSEL START -->
				<div class="owl-carousel owl-theme owl-loaded">











				<div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(-1755px, 0px, 0px); transition: 1.5s; -webkit-transition: 1.5s; width: 3802.5px;"><div class="owl-item cloned" style="width: 262.5px; margin-right: 30px;"><div class="item">
						<img src="./Smartway - HTML Template2_files/sidebar-post2.jpg" alt="" class="img-responsive">
						<div class="description">
							<h3>Judy Williams</h3>
							<p>Non ipsum vulputate condimentum eu id tellus. Praesent commodo arcu quis rhoncus porttitor.</p>
							<a href="http://coffeecreamthemes.com/themes/smartway/site/teachers-profile.html">Read More <i class="fa fa-angle-right"></i></a>
						</div>
					</div></div><div class="owl-item cloned" style="width: 262.5px; margin-right: 30px;"><div class="item">
						<img src="./Smartway - HTML Template2_files/sidebar-post3.jpg" alt="" class="img-responsive">
						<div class="description">
							<h3>Jerry Ramirez</h3>
							<p>Non ipsum vulputate condimentum eu id tellus. Praesent commodo arcu quis rhoncus porttitor.</p>
							<a href="http://coffeecreamthemes.com/themes/smartway/site/teachers-profile.html">Read More <i class="fa fa-angle-right"></i></a>
						</div>
					</div></div><div class="owl-item cloned" style="width: 262.5px; margin-right: 30px;"><div class="item">
						<img src="./Smartway - HTML Template2_files/sidebar-post4.jpg" alt="" class="img-responsive">
						<div class="description">
							<h3>Daniel Roberts</h3>
							<p>Non ipsum vulputate condimentum eu id tellus. Praesent commodo arcu quis rhoncus porttitor.</p>
							<a href="http://coffeecreamthemes.com/themes/smartway/site/teachers-profile.html">Read More <i class="fa fa-angle-right"></i></a>
						</div>
					</div></div><div class="owl-item cloned" style="width: 262.5px; margin-right: 30px;"><div class="item">
						<img src="./Smartway - HTML Template2_files/sidebar-post5.jpg" alt="" class="img-responsive">
						<div class="description">
							<h3>Charles Turner</h3>
							<p>Non ipsum vulputate condimentum eu id tellus. Praesent commodo arcu quis rhoncus porttitor.</p>
							<a href="http://coffeecreamthemes.com/themes/smartway/site/teachers-profile.html">Read More <i class="fa fa-angle-right"></i></a>
						</div>
					</div></div><div class="owl-item" style="width: 262.5px; margin-right: 30px;"><div class="item">
						<img src="./Smartway - HTML Template2_files/sidebar-post1.jpg" alt="" class="img-responsive">
						<div class="description">
							<h3>Anthony	Kelly</h3>
							<p>Non ipsum vulputate condimentum eu id tellus. Praesent commodo arcu quis rhoncus porttitor.</p>
							<a href="http://coffeecreamthemes.com/themes/smartway/site/teachers-profile.html">Read More <i class="fa fa-angle-right"></i></a>
						</div>
					</div></div><div class="owl-item" style="width: 262.5px; margin-right: 30px;"><div class="item">
						<img src="./Smartway - HTML Template2_files/sidebar-post2.jpg" alt="" class="img-responsive">
						<div class="description">
							<h3>Judy Williams</h3>
							<p>Non ipsum vulputate condimentum eu id tellus. Praesent commodo arcu quis rhoncus porttitor.</p>
							<a href="http://coffeecreamthemes.com/themes/smartway/site/teachers-profile.html">Read More <i class="fa fa-angle-right"></i></a>
						</div>
					</div></div><div class="owl-item active" style="width: 262.5px; margin-right: 30px;"><div class="item">
						<img src="./Smartway - HTML Template2_files/sidebar-post3.jpg" alt="" class="img-responsive">
						<div class="description">
							<h3>Jerry Ramirez</h3>
							<p>Non ipsum vulputate condimentum eu id tellus. Praesent commodo arcu quis rhoncus porttitor.</p>
							<a href="http://coffeecreamthemes.com/themes/smartway/site/teachers-profile.html">Read More <i class="fa fa-angle-right"></i></a>
						</div>
					</div></div><div class="owl-item active" style="width: 262.5px; margin-right: 30px;"><div class="item">
						<img src="./Smartway - HTML Template2_files/sidebar-post4.jpg" alt="" class="img-responsive">
						<div class="description">
							<h3>Daniel Roberts</h3>
							<p>Non ipsum vulputate condimentum eu id tellus. Praesent commodo arcu quis rhoncus porttitor.</p>
							<a href="http://coffeecreamthemes.com/themes/smartway/site/teachers-profile.html">Read More <i class="fa fa-angle-right"></i></a>
						</div>
					</div></div><div class="owl-item active" style="width: 262.5px; margin-right: 30px;"><div class="item">
						<img src="./Smartway - HTML Template2_files/sidebar-post5.jpg" alt="" class="img-responsive">
						<div class="description">
							<h3>Charles Turner</h3>
							<p>Non ipsum vulputate condimentum eu id tellus. Praesent commodo arcu quis rhoncus porttitor.</p>
							<a href="http://coffeecreamthemes.com/themes/smartway/site/teachers-profile.html">Read More <i class="fa fa-angle-right"></i></a>
						</div>
					</div></div><div class="owl-item cloned active" style="width: 262.5px; margin-right: 30px;"><div class="item">
						<img src="./Smartway - HTML Template2_files/sidebar-post1.jpg" alt="" class="img-responsive">
						<div class="description">
							<h3>Anthony	Kelly</h3>
							<p>Non ipsum vulputate condimentum eu id tellus. Praesent commodo arcu quis rhoncus porttitor.</p>
							<a href="http://coffeecreamthemes.com/themes/smartway/site/teachers-profile.html">Read More <i class="fa fa-angle-right"></i></a>
						</div>
					</div></div><div class="owl-item cloned" style="width: 262.5px; margin-right: 30px;"><div class="item">
						<img src="./Smartway - HTML Template2_files/sidebar-post2.jpg" alt="" class="img-responsive">
						<div class="description">
							<h3>Judy Williams</h3>
							<p>Non ipsum vulputate condimentum eu id tellus. Praesent commodo arcu quis rhoncus porttitor.</p>
							<a href="http://coffeecreamthemes.com/themes/smartway/site/teachers-profile.html">Read More <i class="fa fa-angle-right"></i></a>
						</div>
					</div></div><div class="owl-item cloned" style="width: 262.5px; margin-right: 30px;"><div class="item">
						<img src="./Smartway - HTML Template2_files/sidebar-post3.jpg" alt="" class="img-responsive">
						<div class="description">
							<h3>Jerry Ramirez</h3>
							<p>Non ipsum vulputate condimentum eu id tellus. Praesent commodo arcu quis rhoncus porttitor.</p>
							<a href="http://coffeecreamthemes.com/themes/smartway/site/teachers-profile.html">Read More <i class="fa fa-angle-right"></i></a>
						</div>
					</div></div><div class="owl-item cloned" style="width: 262.5px; margin-right: 30px;"><div class="item">
						<img src="./Smartway - HTML Template2_files/sidebar-post4.jpg" alt="" class="img-responsive">
						<div class="description">
							<h3>Daniel Roberts</h3>
							<p>Non ipsum vulputate condimentum eu id tellus. Praesent commodo arcu quis rhoncus porttitor.</p>
							<a href="http://coffeecreamthemes.com/themes/smartway/site/teachers-profile.html">Read More <i class="fa fa-angle-right"></i></a>
						</div>
					</div></div></div></div><div class="owl-controls"><div class="owl-nav"><div class="owl-prev" style=""><a class="btn btn-primary"><i class="fa fa-caret-left"></i></a></div><div class="owl-next" style=""><a class="btn btn-primary"><i class="fa fa-caret-right"></i></a></div></div><div class="owl-dots" style="display: none;"></div></div></div>
				<!-- OWL CAROUSEL END -->

			</div>
		</section>

		<!-- ========== FEATURED TEACHERS END ========== -->

		<!-- ========== POPULAR COURSES START ========== -->

		<section id="popular-courses">
			<div class="container text-center">
				<div class="row">
					<div class="col-sm-12">
						<h2 class="carousel-title">
							Popular Courses
							<a href="http://coffeecreamthemes.com/themes/smartway/site/courses-list-right-sidebar.html">View All Courses</a>
						</h2>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-4">
						<p><a href="http://coffeecreamthemes.com/themes/smartway/site/courses-details-right-sidebar.html"><img src="./Smartway - HTML Template2_files/popular1.jpg" alt="" class="img-responsive"></a></p>
					</div>
					<div class="col-sm-4">
						<p><a href="http://coffeecreamthemes.com/themes/smartway/site/courses-details-right-sidebar.html"><img src="./Smartway - HTML Template2_files/popular2.jpg" alt="" class="img-responsive"></a></p>
					</div>
					<div class="col-sm-4">
						<p><a href="http://coffeecreamthemes.com/themes/smartway/site/courses-details-right-sidebar.html"><img src="./Smartway - HTML Template2_files/popular3.jpg" alt="" class="img-responsive"></a></p>
					</div>
				</div>
			</div>
		</section>

		<!-- ========== POPULAR COURSES END ========== -->

		<!-- ========== REVIEWS START ========== -->

		<section id="about-reviews">
			<div class="tint"></div>
			<div class="container">
				<div class="row">
					<div class="col-sm-12 text-center" data-scroll-reveal="" style="-webkit-transform: translatey(24px);transform: translatey(24px);opacity: 0;-webkit-transition: -webkit-transform 0.66s ease-in-out 0s,  opacity 0.66s ease-in-out 0s;transition: transform 0.66s ease-in-out 0s,  opacity 0.66s ease-in-out 0s;-webkit-perspective: 1000;-webkit-backface-visibility: hidden;" data-scroll-reveal-initialized="true">

						<h2>What Our Students Say</h2>

						<!-- OWL CAROUSEL START -->
						<div class="owl-carousel owl-theme owl-loaded">









						<div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(-4560px, 0px, 0px); transition: 0s; -webkit-transition: 0s; width: 9120px;"><div class="owl-item cloned" style="width: 1140px; margin-right: 0px;"><div class="item">
								<blockquote><span class="quote"><i class="fa fa-quote-right"></i></span>Integer faucibus orci eu lorem vulputate, non semper odio consectetur. Phasellus eu commodo lectus, interdum molestie nunc. Maecenas aliquet sagittis elementum. Nulla lobortis diam nisl, id consectetur nunc faucibus viverra. Donec vel porta augue, eget accumsan lorem. Sed dictum consequat ipsum eget porta. Donec imperdiet dolor at ante interdum, sed viverra orci iaculis. Donec vestibulum nulla at tortor molestie, vel convallis neque vestibulum. Phasellus luctus purus ut tincidunt imperdiet. <small>Antonia Owen, Student</small></blockquote>
							</div></div><div class="owl-item cloned" style="width: 1140px; margin-right: 0px;"><div class="item">
								<blockquote><span class="quote"><i class="fa fa-quote-right"></i></span>Vestibulum viverra dolor lorem, vitae ornare velit facilisis eget. Phasellus ornare, mauris id interdum cursus, velit libero dictum dolor, a vehicula lacus enim id tortor. Vestibulum faucibus nec elit id iaculis. Aenean lorem ante, pretium ac iaculis non, tincidunt in quam. Nunc lobortis dictum dui. Pellentesque sagittis luctus posuere. Sed suscipit mi vitae orci accumsan, ut imperdiet odio molestie. <small>Jared Murray, Student</small></blockquote>
							</div></div><div class="owl-item" style="width: 1140px; margin-right: 0px;"><div class="item">
								<blockquote><span class="quote"><i class="fa fa-quote-right"></i></span>Donec varius ante in turpis faucibus sagittis. Vestibulum lacinia ante eget fringilla lobortis. Nunc sollicitudin, arcu at fringilla varius, turpis dui venenatis augue, at adipiscing ante ipsum vel leo. In a sem sit amet mi condimentum semper. Nulla eleifend convallis gravida. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec blandit erat eu suscipit porttitor. Sed vestibulum mauris sit amet eros feugiat egestas. Ut rhoncus imperdiet est eget ullamcorper. Fusce at orci sed augue aliquam malesuada. <small>Sally Peterson, Student</small></blockquote>
							</div></div><div class="owl-item" style="width: 1140px; margin-right: 0px;"><div class="item">
								<blockquote><span class="quote"><i class="fa fa-quote-right"></i></span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam semper consectetur nunc ac pretium. Nullam vel lectus non augue imperdiet porta. Proin commodo malesuada faucibus. Integer at lacinia lacus. Vestibulum dignissim imperdiet est vel ornare. Sed vehicula luctus massa, sit amet porta purus feugiat a. Cras tincidunt neque vitae enim pellentesque, nec congue mauris suscipit. Praesent sit amet odio lacus. <small>Malcolm Carr, Student</small></blockquote>
							</div></div><div class="owl-item active" style="width: 1140px; margin-right: 0px;"><div class="item">
								<blockquote><span class="quote"><i class="fa fa-quote-right"></i></span>Integer faucibus orci eu lorem vulputate, non semper odio consectetur. Phasellus eu commodo lectus, interdum molestie nunc. Maecenas aliquet sagittis elementum. Nulla lobortis diam nisl, id consectetur nunc faucibus viverra. Donec vel porta augue, eget accumsan lorem. Sed dictum consequat ipsum eget porta. Donec imperdiet dolor at ante interdum, sed viverra orci iaculis. Donec vestibulum nulla at tortor molestie, vel convallis neque vestibulum. Phasellus luctus purus ut tincidunt imperdiet. <small>Antonia Owen, Student</small></blockquote>
							</div></div><div class="owl-item" style="width: 1140px; margin-right: 0px;"><div class="item">
								<blockquote><span class="quote"><i class="fa fa-quote-right"></i></span>Vestibulum viverra dolor lorem, vitae ornare velit facilisis eget. Phasellus ornare, mauris id interdum cursus, velit libero dictum dolor, a vehicula lacus enim id tortor. Vestibulum faucibus nec elit id iaculis. Aenean lorem ante, pretium ac iaculis non, tincidunt in quam. Nunc lobortis dictum dui. Pellentesque sagittis luctus posuere. Sed suscipit mi vitae orci accumsan, ut imperdiet odio molestie. <small>Jared Murray, Student</small></blockquote>
							</div></div><div class="owl-item cloned" style="width: 1140px; margin-right: 0px;"><div class="item">
								<blockquote><span class="quote"><i class="fa fa-quote-right"></i></span>Donec varius ante in turpis faucibus sagittis. Vestibulum lacinia ante eget fringilla lobortis. Nunc sollicitudin, arcu at fringilla varius, turpis dui venenatis augue, at adipiscing ante ipsum vel leo. In a sem sit amet mi condimentum semper. Nulla eleifend convallis gravida. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec blandit erat eu suscipit porttitor. Sed vestibulum mauris sit amet eros feugiat egestas. Ut rhoncus imperdiet est eget ullamcorper. Fusce at orci sed augue aliquam malesuada. <small>Sally Peterson, Student</small></blockquote>
							</div></div><div class="owl-item cloned" style="width: 1140px; margin-right: 0px;"><div class="item">
								<blockquote><span class="quote"><i class="fa fa-quote-right"></i></span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam semper consectetur nunc ac pretium. Nullam vel lectus non augue imperdiet porta. Proin commodo malesuada faucibus. Integer at lacinia lacus. Vestibulum dignissim imperdiet est vel ornare. Sed vehicula luctus massa, sit amet porta purus feugiat a. Cras tincidunt neque vitae enim pellentesque, nec congue mauris suscipit. Praesent sit amet odio lacus. <small>Malcolm Carr, Student</small></blockquote>
							</div></div></div></div><div class="owl-controls"><div class="owl-nav"><div class="owl-prev" style="display: none;">prev</div><div class="owl-next" style="display: none;">next</div></div><div class="owl-dots" style="display: none;"></div></div></div>
						<!-- OWL CAROUSEL END -->

					</div>
				</div>
			</div>
		</section>

		<!-- ========== REVIEWS END ========== -->

		<!-- ========== RECENT BLOG POSTS START ========== -->

		<section id="recent-posts">
			<div class="container">

				<h2 class="text-center carousel-title">
					Recent Blog Posts
					<a href="http://coffeecreamthemes.com/themes/smartway/site/blog-list-right-sidebar.html">View All</a>
				</h2>

				<!-- OWL CAROUSEL START -->
				<div class="owl-carousel owl-theme owl-loaded">







				<div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(-2340px, 0px, 0px); transition: 1.5s; -webkit-transition: 1.5s; width: 4095px;"><div class="owl-item cloned" style="width: 555px; margin-right: 30px;"><div class="item">
						<div class="post row" data-scroll-reveal="" style="-webkit-transform: translatey(24px);transform: translatey(24px);opacity: 0;-webkit-transition: -webkit-transform 0.66s ease-in-out 0s,  opacity 0.66s ease-in-out 0s;transition: transform 0.66s ease-in-out 0s,  opacity 0.66s ease-in-out 0s;-webkit-perspective: 1000;-webkit-backface-visibility: hidden;" data-scroll-reveal-initialized="true">
							<div class="col-md-4">
								<a href="#"><img src="./Smartway - HTML Template2_files/sidebar-post2.jpg" alt="" class="img-responsive"></a>
								<div class="post-date">
									<div class="post-day">23</div>
									<div class="post-month">Sep</div>
								</div>
							</div>
							<div class="col-md-8">
								<h3><a href="#">Morbi nec quam sed elit pharetra</a></h3>
								<div class="meta">
									<span><i class="fa fa-user"></i><a href="#">John Doe</a></span>
									<span><i class="fa fa-tags"></i><a href="#">Chat</a>, <a href="#">Video</a></span>
									<span><i class="fa fa-comments"></i><a href="#">24</a></span>
								</div>
								<p class="intro">Praesent dui diam, vestibulum id mi at, iaculis accumsan ligula. Vivamus erat ligula, condimentum quis congue posuere, posuere id nisi. Pellentesque tempor sit amet arcu in mattis. Nullam congue, lectus vitae ultrices interdum, augue nibh lacinia ante, et tempus arcu tellus quis ligula. Aliquam congue ex vitae turpis fermentum, ac tempor nisi commodo. Ut ante turpis, pulvinar eu arcu eu, blandit blandit sapien. Proin sagittis nibh lectus, lobortis ultrices.<br>
								<a href="#">Read More <i class="fa fa-angle-right"></i></a></p>
							</div>
						</div>
					</div></div><div class="owl-item cloned" style="width: 555px; margin-right: 30px;"><div class="item">
						<div class="post row" data-scroll-reveal="" style="-webkit-transform: translatey(24px);transform: translatey(24px);opacity: 0;-webkit-transition: -webkit-transform 0.66s ease-in-out 0s,  opacity 0.66s ease-in-out 0s;transition: transform 0.66s ease-in-out 0s,  opacity 0.66s ease-in-out 0s;-webkit-perspective: 1000;-webkit-backface-visibility: hidden;" data-scroll-reveal-initialized="true">
							<div class="col-md-4">
								<a href="#"><img src="./Smartway - HTML Template2_files/sidebar-post3.jpg" alt="" class="img-responsive"></a>
								<div class="post-date">
									<div class="post-day">14</div>
									<div class="post-month">Sep</div>
								</div>
							</div>
							<div class="col-md-8">
								<h3><a href="#">Morbi nec quam sed elit pharetra</a></h3>
								<div class="meta">
									<span><i class="fa fa-user"></i><a href="#">John Doe</a></span>
									<span><i class="fa fa-tags"></i><a href="#">Chat</a>, <a href="#">Video</a></span>
									<span><i class="fa fa-comments"></i><a href="#">24</a></span>
								</div>
								<p class="intro">Praesent dui diam, vestibulum id mi at, iaculis accumsan ligula. Vivamus erat ligula, condimentum quis congue posuere, posuere id nisi. Pellentesque tempor sit amet arcu in mattis. Nullam congue, lectus vitae ultrices interdum, augue nibh lacinia ante, et tempus arcu tellus quis ligula. Aliquam congue ex vitae turpis fermentum, ac tempor nisi commodo. Ut ante turpis, pulvinar eu arcu eu, blandit blandit sapien. Proin sagittis nibh lectus, lobortis ultrices.<br>
								<a href="#">Read More <i class="fa fa-angle-right"></i></a></p>
							</div>
						</div>
					</div></div><div class="owl-item" style="width: 555px; margin-right: 30px;"><div class="item">
						<div class="post row" data-scroll-reveal="" style="-webkit-transform: translatey(24px);transform: translatey(24px);opacity: 0;-webkit-transition: -webkit-transform 0.66s ease-in-out 0s,  opacity 0.66s ease-in-out 0s;transition: transform 0.66s ease-in-out 0s,  opacity 0.66s ease-in-out 0s;-webkit-perspective: 1000;-webkit-backface-visibility: hidden;" data-scroll-reveal-initialized="true">
							<div class="col-md-4">
								<a href="#"><img src="./Smartway - HTML Template2_files/sidebar-post1.jpg" alt="" class="img-responsive"></a>
								<div class="post-date">
									<div class="post-day">28</div>
									<div class="post-month">Sep</div>
								</div>
							</div>
							<div class="col-md-8">
								<h3><a href="#">Morbi nec quam sed elit pharetra</a></h3>
								<div class="meta">
									<span><i class="fa fa-user"></i><a href="#">John Doe</a></span>
									<span><i class="fa fa-tags"></i><a href="#">Chat</a>, <a href="#">Video</a></span>
									<span><i class="fa fa-comments"></i><a href="#">24</a></span>
								</div>
								<p class="intro">Praesent dui diam, vestibulum id mi at, iaculis accumsan ligula. Vivamus erat ligula, condimentum quis congue posuere, posuere id nisi. Pellentesque tempor sit amet arcu in mattis. Nullam congue, lectus vitae ultrices interdum, augue nibh lacinia ante, et tempus arcu tellus quis ligula. Aliquam congue ex vitae turpis fermentum, ac tempor nisi commodo. Ut ante turpis, pulvinar eu arcu eu, blandit blandit sapien. Proin sagittis nibh lectus, lobortis ultrices.<br>
								<a href="#">Read More <i class="fa fa-angle-right"></i></a></p>
							</div>
						</div>
					</div></div><div class="owl-item" style="width: 555px; margin-right: 30px;"><div class="item">
						<div class="post row" data-scroll-reveal="" style="-webkit-transform: translatey(24px);transform: translatey(24px);opacity: 0;-webkit-transition: -webkit-transform 0.66s ease-in-out 0s,  opacity 0.66s ease-in-out 0s;transition: transform 0.66s ease-in-out 0s,  opacity 0.66s ease-in-out 0s;-webkit-perspective: 1000;-webkit-backface-visibility: hidden;" data-scroll-reveal-initialized="true">
							<div class="col-md-4">
								<a href="#"><img src="./Smartway - HTML Template2_files/sidebar-post2.jpg" alt="" class="img-responsive"></a>
								<div class="post-date">
									<div class="post-day">23</div>
									<div class="post-month">Sep</div>
								</div>
							</div>
							<div class="col-md-8">
								<h3><a href="#">Morbi nec quam sed elit pharetra</a></h3>
								<div class="meta">
									<span><i class="fa fa-user"></i><a href="#">John Doe</a></span>
									<span><i class="fa fa-tags"></i><a href="#">Chat</a>, <a href="#">Video</a></span>
									<span><i class="fa fa-comments"></i><a href="#">24</a></span>
								</div>
								<p class="intro">Praesent dui diam, vestibulum id mi at, iaculis accumsan ligula. Vivamus erat ligula, condimentum quis congue posuere, posuere id nisi. Pellentesque tempor sit amet arcu in mattis. Nullam congue, lectus vitae ultrices interdum, augue nibh lacinia ante, et tempus arcu tellus quis ligula. Aliquam congue ex vitae turpis fermentum, ac tempor nisi commodo. Ut ante turpis, pulvinar eu arcu eu, blandit blandit sapien. Proin sagittis nibh lectus, lobortis ultrices.<br>
								<a href="#">Read More <i class="fa fa-angle-right"></i></a></p>
							</div>
						</div>
					</div></div><div class="owl-item active" style="width: 555px; margin-right: 30px;"><div class="item">
						<div class="post row" data-scroll-reveal="" style="-webkit-transform: translatey(24px);transform: translatey(24px);opacity: 0;-webkit-transition: -webkit-transform 0.66s ease-in-out 0s,  opacity 0.66s ease-in-out 0s;transition: transform 0.66s ease-in-out 0s,  opacity 0.66s ease-in-out 0s;-webkit-perspective: 1000;-webkit-backface-visibility: hidden;" data-scroll-reveal-initialized="true">
							<div class="col-md-4">
								<a href="#"><img src="./Smartway - HTML Template2_files/sidebar-post3.jpg" alt="" class="img-responsive"></a>
								<div class="post-date">
									<div class="post-day">14</div>
									<div class="post-month">Sep</div>
								</div>
							</div>
							<div class="col-md-8">
								<h3><a href="#">Morbi nec quam sed elit pharetra</a></h3>
								<div class="meta">
									<span><i class="fa fa-user"></i><a href="#">John Doe</a></span>
									<span><i class="fa fa-tags"></i><a href="#">Chat</a>, <a href="#">Video</a></span>
									<span><i class="fa fa-comments"></i><a href="#">24</a></span>
								</div>
								<p class="intro">Praesent dui diam, vestibulum id mi at, iaculis accumsan ligula. Vivamus erat ligula, condimentum quis congue posuere, posuere id nisi. Pellentesque tempor sit amet arcu in mattis. Nullam congue, lectus vitae ultrices interdum, augue nibh lacinia ante, et tempus arcu tellus quis ligula. Aliquam congue ex vitae turpis fermentum, ac tempor nisi commodo. Ut ante turpis, pulvinar eu arcu eu, blandit blandit sapien. Proin sagittis nibh lectus, lobortis ultrices.<br>
								<a href="#">Read More <i class="fa fa-angle-right"></i></a></p>
							</div>
						</div>
					</div></div><div class="owl-item cloned active" style="width: 555px; margin-right: 30px;"><div class="item">
						<div class="post row" data-scroll-reveal="" style="-webkit-transform: translatey(24px);transform: translatey(24px);opacity: 0;-webkit-transition: -webkit-transform 0.66s ease-in-out 0s,  opacity 0.66s ease-in-out 0s;transition: transform 0.66s ease-in-out 0s,  opacity 0.66s ease-in-out 0s;-webkit-perspective: 1000;-webkit-backface-visibility: hidden;" data-scroll-reveal-initialized="true">
							<div class="col-md-4">
								<a href="#"><img src="./Smartway - HTML Template2_files/sidebar-post1.jpg" alt="" class="img-responsive"></a>
								<div class="post-date">
									<div class="post-day">28</div>
									<div class="post-month">Sep</div>
								</div>
							</div>
							<div class="col-md-8">
								<h3><a href="#">Morbi nec quam sed elit pharetra</a></h3>
								<div class="meta">
									<span><i class="fa fa-user"></i><a href="#">John Doe</a></span>
									<span><i class="fa fa-tags"></i><a href="#">Chat</a>, <a href="#">Video</a></span>
									<span><i class="fa fa-comments"></i><a href="#">24</a></span>
								</div>
								<p class="intro">Praesent dui diam, vestibulum id mi at, iaculis accumsan ligula. Vivamus erat ligula, condimentum quis congue posuere, posuere id nisi. Pellentesque tempor sit amet arcu in mattis. Nullam congue, lectus vitae ultrices interdum, augue nibh lacinia ante, et tempus arcu tellus quis ligula. Aliquam congue ex vitae turpis fermentum, ac tempor nisi commodo. Ut ante turpis, pulvinar eu arcu eu, blandit blandit sapien. Proin sagittis nibh lectus, lobortis ultrices.<br>
								<a href="#">Read More <i class="fa fa-angle-right"></i></a></p>
							</div>
						</div>
					</div></div><div class="owl-item cloned" style="width: 555px; margin-right: 30px;"><div class="item">
						<div class="post row" data-scroll-reveal="" style="-webkit-transform: translatey(24px);transform: translatey(24px);opacity: 0;-webkit-transition: -webkit-transform 0.66s ease-in-out 0s,  opacity 0.66s ease-in-out 0s;transition: transform 0.66s ease-in-out 0s,  opacity 0.66s ease-in-out 0s;-webkit-perspective: 1000;-webkit-backface-visibility: hidden;" data-scroll-reveal-initialized="true">
							<div class="col-md-4">
								<a href="#"><img src="./Smartway - HTML Template2_files/sidebar-post2.jpg" alt="" class="img-responsive"></a>
								<div class="post-date">
									<div class="post-day">23</div>
									<div class="post-month">Sep</div>
								</div>
							</div>
							<div class="col-md-8">
								<h3><a href="#">Morbi nec quam sed elit pharetra</a></h3>
								<div class="meta">
									<span><i class="fa fa-user"></i><a href="#">John Doe</a></span>
									<span><i class="fa fa-tags"></i><a href="#">Chat</a>, <a href="#">Video</a></span>
									<span><i class="fa fa-comments"></i><a href="#">24</a></span>
								</div>
								<p class="intro">Praesent dui diam, vestibulum id mi at, iaculis accumsan ligula. Vivamus erat ligula, condimentum quis congue posuere, posuere id nisi. Pellentesque tempor sit amet arcu in mattis. Nullam congue, lectus vitae ultrices interdum, augue nibh lacinia ante, et tempus arcu tellus quis ligula. Aliquam congue ex vitae turpis fermentum, ac tempor nisi commodo. Ut ante turpis, pulvinar eu arcu eu, blandit blandit sapien. Proin sagittis nibh lectus, lobortis ultrices.<br>
								<a href="#">Read More <i class="fa fa-angle-right"></i></a></p>
							</div>
						</div>
					</div></div></div></div><div class="owl-controls"><div class="owl-nav"><div class="owl-prev" style=""><a class="btn btn-primary"><i class="fa fa-caret-left"></i></a></div><div class="owl-next" style=""><a class="btn btn-primary"><i class="fa fa-caret-right"></i></a></div></div><div class="owl-dots" style="display: none;"></div></div></div>
				<!-- OWL CAROUSEL END -->

			</div>
		</section>

		<!-- ========== RECENT BLOG POSTS END ========== -->

		<!-- ========== NEWSLETTER START ========== -->

		<section id="newsletter">
			<div class="tint"></div>
			<div class="container">
				<div class="row text-center" data-scroll-reveal="" style="-webkit-transform: translatey(24px);transform: translatey(24px);opacity: 0;-webkit-transition: -webkit-transform 0.66s ease-in-out 0s,  opacity 0.66s ease-in-out 0s;transition: transform 0.66s ease-in-out 0s,  opacity 0.66s ease-in-out 0s;-webkit-perspective: 1000;-webkit-backface-visibility: hidden;" data-scroll-reveal-initialized="true">
					<div class="col-md-12">
						<h2>Newsletter</h2>
					</div>
				</div>
				<form class="form-inline" role="form" name="newsletter-form" id="newsletter-form" action="http://coffeecreamthemes.com/themes/smartway/site/process-newsletter.php">
					<div class="row" data-scroll-reveal="" style="-webkit-transform: translatey(24px);transform: translatey(24px);opacity: 0;-webkit-transition: -webkit-transform 0.66s ease-in-out 0s,  opacity 0.66s ease-in-out 0s;transition: transform 0.66s ease-in-out 0s,  opacity 0.66s ease-in-out 0s;-webkit-perspective: 1000;-webkit-backface-visibility: hidden;" data-scroll-reveal-initialized="true">
						<div class="col-sm-4 text-center" data-scroll-reveal="" style="-webkit-transform: translatey(24px);transform: translatey(24px);opacity: 0;-webkit-transition: -webkit-transform 0.66s ease-in-out 0s,  opacity 0.66s ease-in-out 0s;transition: transform 0.66s ease-in-out 0s,  opacity 0.66s ease-in-out 0s;-webkit-perspective: 1000;-webkit-backface-visibility: hidden;" data-scroll-reveal-initialized="true">
							<div class="form-group" id="newsletter-name-group">
								<label class="sr-only" for="newsletter-input-name">Your name</label>
								<div class="input-group">
									<input type="text" class="form-control input-lg" id="newsletter-input-name" placeholder="Name">
									<div class="input-group-addon"><i class="fa fa-user"></i></div>
								</div>
							</div>
						</div>
						<div class="col-sm-4 text-center" data-scroll-reveal="" style="-webkit-transform: translatey(24px);transform: translatey(24px);opacity: 0;-webkit-transition: -webkit-transform 0.66s ease-in-out 0s,  opacity 0.66s ease-in-out 0s;transition: transform 0.66s ease-in-out 0s,  opacity 0.66s ease-in-out 0s;-webkit-perspective: 1000;-webkit-backface-visibility: hidden;" data-scroll-reveal-initialized="true">
							<div class="form-group" id="newsletter-email-group">
								<label class="sr-only" for="newsletter-input-email">Your email</label>
								<div class="input-group">
									<input type="email" class="form-control input-lg" id="newsletter-input-email" placeholder="Email">
									<div class="input-group-addon"><i class="fa fa-envelope"></i></div>
								</div>
							</div>
						</div>
						<div class="col-sm-4 text-center" data-scroll-reveal="" style="-webkit-transform: translatey(24px);transform: translatey(24px);opacity: 0;-webkit-transition: -webkit-transform 0.66s ease-in-out 0s,  opacity 0.66s ease-in-out 0s;transition: transform 0.66s ease-in-out 0s,  opacity 0.66s ease-in-out 0s;-webkit-perspective: 1000;-webkit-backface-visibility: hidden;" data-scroll-reveal-initialized="true">
							<button type="submit" class="btn btn-lg btn-primary">Subscribe</button>
						</div>
					</div>
				</form>
			</div>
		</section>

		<!-- ========== NEWSLETTER END ========== -->

		<!-- ========== LINKS START ========== -->

		<div id="links">
			<div class="container">
				<div class="row">

					<!-- ==== QUICK LINKS START == -->
					<div class="col-sm-3">
						<h3>Quick Links</h3>
						<nav>
							<ul>
								<li><a href="#"><i class="fa fa-angle-right"></i>All Courses</a></li>
								<li><a href="#"><i class="fa fa-angle-right"></i>Summer Sessions</a></li>
								<li><a href="#"><i class="fa fa-angle-right"></i>Professional Courses</a></li>
								<li><a href="#"><i class="fa fa-angle-right"></i>Our Teachers</a></li>
								<li><a href="#"><i class="fa fa-angle-right"></i>Privacy Policy</a></li>
								<li><a href="#"><i class="fa fa-angle-right"></i>Terms &amp; Conditions</a></li>
							</ul>
						</nav>
					</div>
					<!-- ==== QUICK LINKS END == -->

					<!-- ==== LATEST COURSES START == -->
					<div class="col-sm-3">
						<h3>Latest Courses</h3>
						<ul>
							<li>
								<img src="./Smartway - HTML Template2_files/thumb-course1.jpg" alt="" class="pull-left">
								<h5><a href="http://coffeecreamthemes.com/themes/smartway/site/courses-details-right-sidebar.html">Web Design Basics</a></h5>
								<p class="author"><a href="http://coffeecreamthemes.com/themes/smartway/site/teachers-profile.html">by John Doe</a></p>
							</li>
							<li>
								<img src="./Smartway - HTML Template2_files/thumb-course2.jpg" alt="" class="pull-left">
								<h5><a href="http://coffeecreamthemes.com/themes/smartway/site/courses-details-right-sidebar.html">Web Development Basics</a></h5>
								<p class="author"><a href="http://coffeecreamthemes.com/themes/smartway/site/teachers-profile.html">by John Doe</a></p>
							</li>
							<li>
								<img src="./Smartway - HTML Template2_files/thumb-course3.jpg" alt="" class="pull-left">
								<h5><a href="http://coffeecreamthemes.com/themes/smartway/site/courses-details-right-sidebar.html">Photography Advanced Technics</a></h5>
								<p class="author"><a href="http://coffeecreamthemes.com/themes/smartway/site/teachers-profile.html">by John Doe</a></p>
							</li>
						</ul>
					</div>
					<!-- ==== LATEST COURSES END == -->

					<!-- ==== POPULAR COURSES START == -->
					<div class="col-sm-3">
						<h3>Popular Courses</h3>
						<ul>
							<li>
								<img src="./Smartway - HTML Template2_files/thumb-course4.jpg" alt="" class="pull-left">
								<h5><a href="http://coffeecreamthemes.com/themes/smartway/site/courses-details-right-sidebar.html">Web Design Basics</a></h5>
								<p class="author"><a href="http://coffeecreamthemes.com/themes/smartway/site/teachers-profile.html">by John Doe</a></p>
							</li>
							<li>
								<img src="./Smartway - HTML Template2_files/thumb-course5.jpg" alt="" class="pull-left">
								<h5><a href="http://coffeecreamthemes.com/themes/smartway/site/courses-details-right-sidebar.html">Web Development Basics</a></h5>
								<p class="author"><a href="http://coffeecreamthemes.com/themes/smartway/site/teachers-profile.html">by John Doe</a></p>
							</li>
							<li>
								<img src="./Smartway - HTML Template2_files/thumb-course6.jpg" alt="" class="pull-left">
								<h5><a href="http://coffeecreamthemes.com/themes/smartway/site/courses-details-right-sidebar.html">Photography Advanced Technics</a></h5>
								<p class="author"><a href="http://coffeecreamthemes.com/themes/smartway/site/teachers-profile.html">by John Doe</a></p>
							</li>
						</ul>
					</div>
					<!-- ==== POPULAR COURSES END == -->

					<!-- ==== LATEST COMMENTS START == -->
					<div class="col-sm-3">
						<h3>Latest Comments</h3>
						<ul>
							<li>
								<p><a href="http://coffeecreamthemes.com/themes/smartway/site/blog-article-right-sidebar.html">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ut rutrum eros, a rutrum urna.</a></p>
								<p class="author"><a href="http://coffeecreamthemes.com/themes/smartway/site/blog-article-right-sidebar.html">by John Doe</a></p>
							</li>
							<li>
								<p><a href="http://coffeecreamthemes.com/themes/smartway/site/blog-article-right-sidebar.html">Donec lorem mi, eleifend sit amet varius vitae, ullamcorper et urna. Aliquam tincidunt tempus purus vitae laoreet.</a></p>
								<p class="author"><a href="http://coffeecreamthemes.com/themes/smartway/site/blog-article-right-sidebar.html">by John Doe</a></p>
							</li>
						</ul>
					</div>
					<!-- ==== LATEST COMMENTS END == -->

				</div>
			</div>
		</div>

		<!-- ========== LINKS END ========== -->

		<!-- ========== PREFOOTER START ========== -->

		<div id="prefooter">
			<div class="container">
				<div class="row">

					<!-- ==== ABOUT START == -->
					<div class="col-sm-6">
						<h3>About Us</h3>
						<div class="row">
							<div class="col-sm-5">
								<p><img src="./Smartway - HTML Template2_files/prefooter-about.jpg" alt="" class="img-responsive"></p>
							</div>
							<div class="col-sm-7">
								<p>Morbi nec quam sed elit pharetra faucibus. Cras vel massa viverra ligula suscipit interdum eget nec est. Cras nibh mi, faucibus at ligula eu, eleifend tincidunt justo. Nunc porttitor massa at nisi condimentum fringilla. Nullam finibus, nibh eu hendrerit suscipit, tellus mi commodo lectus, sit amet dictum sem lorem sed neque.<br>
								<a href="#">Read More <i class="fa fa-angle-right"></i></a></p>
							</div>
						</div>
					</div>
					<!-- ==== ABOUT END == -->

					<!-- ==== APPLY FOR TEACHER START == -->
					<div class="col-sm-3">
						<h3>Apply for a Teacher</h3>
						<form role="form" name="teacher-form" id="teacher-form" action="http://coffeecreamthemes.com/themes/smartway/site/process-teacher.php">
							<div class="form-group" id="teacher-name-group">
								<div class="input-group">
									<input type="text" class="form-control" id="teacher-input-name" placeholder="Name">
									<div class="input-group-addon"><i class="fa fa-user"></i></div>
								</div>
							</div>
							<div class="form-group" id="teacher-email-group">
								<div class="input-group">
									<input type="email" class="form-control" id="teacher-input-email" placeholder="Email">
									<div class="input-group-addon"><i class="fa fa-envelope"></i></div>
								</div>
							</div>
							<div class="form-group" id="teacher-phone-group">
								<div class="input-group">
									<input type="text" class="form-control" id="teacher-input-phone" placeholder="Phone">
									<div class="input-group-addon"><i class="fa fa-phone"></i></div>
								</div>
							</div>
							<button type="submit" class="btn btn-primary">Submit</button>
						</form>
					</div>
					<!-- ==== APPLY FOR TEACHER END == -->

					<!-- ==== CONTACT START == -->
					<div class="col-sm-3">
						<h3>Contact</h3>
						<p>Smartway Learning Centre<br>
						8699 Santa Monica Blvd<br>
						Los Angeles, CA 90069-4109</p>

						<p>Phone: <a href="#">1800-123-456</a><br>
						Fax: <a href="#">1800-123-456</a><br>
						Email: <a href="mailto:info@smartway.com">info@smartway.com</a></p>

						<p><a href="#">Get Directions <i class="fa fa-angle-right"></i></a></p>
					</div>
					<!-- ==== CONTACT END == -->

				</div>
			</div>
		</div>

		<!-- ========== PREFOOTER END ========== -->

		<!-- ========== FOOTER START ========== -->

		<footer>
			<div class="container">
				<div class="row">

					<!-- ==== CREDITS START == -->
					<div class="col-sm-8">
						© 2014 Smartway Theme by Coffeecream Themes
					</div>
					<!-- ==== CREDITS END == -->

					<!-- ==== SOCIAL ICONS START == -->
					<div class="col-sm-4 text-right">
						<a href="#"><i class="fa fa-facebook fa-lg"></i></a>
						<a href="#"><i class="fa fa-twitter fa-lg"></i></a>
						<a href="#"><i class="fa fa-linkedin fa-lg"></i></a>
						<a href="#"><i class="fa fa-youtube fa-lg"></i></a>
					</div>
					<!-- ==== SOCIAL ICONS END == -->

				</div>
			</div>
		</footer>

		<!-- ========== FOOTER END ========== -->

		<!-- Modernizr Plugin -->
		<script src="./Smartway - HTML Template2_files/modernizr.custom.97074.js"></script>

		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="./Smartway - HTML Template2_files/jquery-1.11.1.min.js"></script>

		<!-- Bootstrap Plugins -->
		<script src="./Smartway - HTML Template2_files/bootstrap.min.js"></script>

		<!-- Retina Plugin -->
		<script src="./Smartway - HTML Template2_files/retina-1.1.0.min.js"></script>

		<!-- Superslides Plugin -->
		<script src="./Smartway - HTML Template2_files/jquery.easing.1.3.js"></script>
		<script src="./Smartway - HTML Template2_files/jquery.animate-enhanced.min.js"></script>
		<script src="./Smartway - HTML Template2_files/jquery.superslides.js"></script>

		<!-- Owl Carousel Plugin -->
		<script src="./Smartway - HTML Template2_files/owl.carousel.min.js"></script>

		<!-- Parallax ImageScroll Plugin -->
		<script src="./Smartway - HTML Template2_files/jquery.parallax-1.1.3.js"></script>

		<!-- Fancybox Plugin -->
		<script src="./Smartway - HTML Template2_files/jquery.fancybox.js"></script>

		<!-- ImagesLoaded Plugin -->
		<script src="./Smartway - HTML Template2_files/imagesloaded.pkgd.min.js"></script>

		<!-- Masonry Plugin -->
		<script src="./Smartway - HTML Template2_files/masonry.pkgd.min.js"></script>

		<!-- Progressbar Plugin -->
		<script src="./Smartway - HTML Template2_files/bootstrap-progressbar.js"></script>

		<!-- Scroll Reveal Plugin -->
		<script src="./Smartway - HTML Template2_files/scrollReveal.js"></script>

		<!-- Magic Form Processing -->
		<script src="./Smartway - HTML Template2_files/magic.js"></script>

		<!-- jQuery Settings -->
		<script src="./Smartway - HTML Template2_files/settings.js"></script>


</body></html>
