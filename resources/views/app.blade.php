<!DOCTYPE html>
<html class="js csstransitions">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="Diaa Educational Platform">
		<meta name="author" content="Zuhair AlSader, Karam Shawish">
		<title>
			@yield('title', 'Diaa Educational Platform')
		</title>
		<!-- <link rel="shortcut icon" href="/image/favicon.png"> -->
		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
		<!-- Main Stylesheet -->
		<link href="{{ asset('/css/style.css') }}" rel="stylesheet">
		<style type="text/css">.fancybox-margin{margin-right:17px;}</style>
	</head>
	<body>

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

		<!-- ========== TITLE START ========== -->

		<div class="title">
			<div class="title-image"></div>
			<div class="container">
				<div class="row">
					<div class="col-sm-12 text-center">
						@yield('title')
					</div>
				</div>
			</div>
		</div>

		<!-- ========== TITLE END ========== -->

		<!-- ========== CONTENT START ========== -->

		<section id="content">
			<div class="container">
				<div class="row">
					@yield('content')
				</div>
			</div>
		</section>

		<!-- ========== CONTENT END ========== -->

		<!-- ========== FOOTER START ========== -->

		<footer>
			<div class="container">
				<div class="row">

					<!-- ==== CREDITS START == -->
					<div class="col-sm-8">
						© 2015 Diaa Educational Platform
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


	<!-- Scripts -->
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/underscore.js/1.8.2/underscore-min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/list.js/1.1.1/list.min.js"></script>
	<script src="//cdn.ckeditor.com/4.4.7/standard/ckeditor.js"></script>
	<script src="{{ asset('js/list.fuzzysearch.min.js') }}"></script>
	<script src="{{ asset('js/list.pagination.min.js') }}"></script>

	<!-- Modernizr Plugin -->
	<script src="{{ asset('js/modernizr.custom.97074.js') }}"></script>

	<!-- Retina Plugin -->
	<script src="{{ asset('js/retina-1.1.0.min.js') }}"></script>

	<!-- Superslides Plugin -->
	<script src="{{ asset('js/jquery.easing.1.3.js') }}"></script>
	<script src="{{ asset('js/jquery.animate-enhanced.min.js') }}"></script>
	<script src="{{ asset('js/jquery.superslides.js') }}"></script>

	<!-- Owl Carousel Plugin -->
	<script src="{{ asset('js/owl.carousel.min.js') }}"></script>

	<!-- Parallax ImageScroll Plugin -->
	<script src="{{ asset('js/jquery.parallax-1.1.3.js') }}"></script>

	<!-- Fancybox Plugin -->
	<script src="{{ asset('js/jquery.fancybox.js') }}"></script>

	<!-- ImagesLoaded Plugin -->
	<script src="{{ asset('js/imageloaded.pkgd.min.js') }}"></script>

	<!-- Masonry Plugin -->
	<script src="{{ asset('js/masonry.pkgd.min.js') }}"></script>

	<!-- Progressbar Plugin -->
	<script src="{{ asset('js/bootstrap-progressbar.js') }}"></script>

	<!-- Scroll Reveal Plugin -->
	<script src="{{ asset('js/scrollReveal.js') }}"></script>

	<!-- Magic Form Processing -->
	<script src="{{ asset('js/magic.js') }}"></script>

	<!-- jQuery Settings -->
	<script src="{{ asset('js/settings.js') }}"></script>
	@yield('scripts')
</body>
</html>
