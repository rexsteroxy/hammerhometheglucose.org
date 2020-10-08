<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Glucose, diabetes, insulin, sugar, high blood pressure, free medication, Nigeria, NGO, NGOs in Nigeria, Owerri, FUTO, care, poor, free medical screen, causes of diabetes" />
    <meta name="robots" content="index, follow" />
    <meta name="description" content="Hammer Home the Glucose® is a non-governmental body/agency that is located in Owerri, Imo State, Southeastern Nigeria. The agency is into free screening of diabetes and blood pressure especially people in remote areas where access to medical care is very limited. " />
    <meta name="generator" content="Joomla! - Open Source Content Management" />

    <link href="{{ asset('himg/fvc.png') }}" rel="shortcut icon" type="image/vnd.microsoft.icon" />

    <title>{{ config('app.name', 'hammerhometheglucose') }}</title>


        <!-- Google font -->
        <link href="https://fonts.googleapis.com/css?family=Roboto:300,400%7CSource+Sans+Pro:700" rel="stylesheet">

        <!-- Bootstrap -->
        <link type="text/css" rel="stylesheet" href="{{ asset('hcss/bootstrap.min.css') }}" />

        <!-- Owl Carousel -->
        <link type="text/css" rel="stylesheet" href="{{ asset('hcss/owl.carousel.css') }}" />
        <link type="text/css" rel="stylesheet" href="{{ asset('hcss/owl.theme.default.css') }}" />

        <!-- Font Awesome Icon -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

        <!-- Custom stlylesheet -->
        <link type="text/css" rel="stylesheet" href="{{ asset('hcss/style.css') }}" />


</head>
<body>
	<!-- HEADER -->
	<header id="home">
		<!-- NAVGATION -->
		<nav id="main-navbar">
			<div class="container">
				<div class="navbar-header">
					<!-- Logo -->
					<div class="navbar-brand">
						<a class="logo" href="/"><img src="himg/logo.png" alt="logo"></a>
					</div>
					<!-- Logo -->

					<!-- Mobile toggle -->
					<button class="navbar-toggle-btn">
							<i class="fa fa-bars"></i>
						</button>
					<!-- Mobile toggle -->

					<!-- Mobile Search toggle -->
					<button class="search-toggle-btn">
							<i class="fa fa-search"></i>
						</button>
					<!-- Mobile Search toggle -->
				</div>

				<!-- Search -->
				<div class="navbar-search">
					<button class="search-btn"><i class="fa fa-search"></i></button>
					<div class="search-form">
						<form>
							<input class="input" type="text" name="search" placeholder="Search">
						</form>
					</div>
				</div>
				<!-- Search -->

				<!-- Nav menu -->
				<ul class="navbar-menu nav navbar-nav navbar-right">
					<li><a href="/">Home</a></li>
					<li><a href="/team">Our Team</a></li>
                    <li><a href="/contact">Contact Us</a></li>
					<li class="has-dropdown"><a href="#">Photo Gallery</a>
					<ul class="dropdown">
							<li><a  class="dropdown-item" href="/diabetic_pictures">Diabetic Foot Gallery</a></li>
							<li><a  class="dropdown-item" href="/field_work">Field Work Gallery</a></li>
						</ul>
					</li>
					<li class="has-dropdown"><a href="/blog">Education</a>
						<ul class="dropdown">
							<li><a  class="dropdown-item" href="{{ asset('/education.pdf') }}">Diabetes Education</a></li>
							<li><a  class="dropdown-item" href="/blog">View Blogs</a></li>
						</ul>
					</li>
					
					@guest
                            <li class="nav-item"> 
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                        
                            <li class="has-dropdown"><a>{{ Auth::user()->name }}</a>
								<ul class="dropdown">
									<li> @if (Auth::user()->checkRole() == "Admin")
                                    <a class="dropdown-item" href="/admin">Admin Panel</a>
                                    @endif
									</li>
									<li>
											 <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
									</li>
								</ul>
                               
                            </li>
                        @endguest
				
				</ul>
				<!-- Nav menu -->
			</div>
		</nav>
		<!-- /NAVGATION -->

		<!-- HOME OWL -->
		<div id="home-owl" class="owl-carousel owl-theme">
			<!-- home item -->
			<div class="home-item">
				<!-- section background -->
				<div class="section-bg" style="background-image: url(./himg/post-4.jpg);"></div>
				<!-- /section background -->

				<!-- home content -->
				<div class="home">
					<div class="container">
						<div class="row">
							<div class="col-md-8">
								<div class="home-content">
									<h1>Hammer Home The Glucose</h1>
									<p class="lead">Providing Succor To The Helpless Diabetic Patients.</p>
									<a href="/blog" class="primary-button">View Our Blog</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /home content -->
			</div>
			<!-- /home item -->

			<!-- home item -->
			<div class="home-item">
				<!-- Background Image -->
				<div class="section-bg" style="background-image: url(./himg/background-2.jpg);"></div>
				<!-- /Background Image -->

				<!-- home content -->
				<div class="home">
					<div class="container">
						<div class="row">
							<div class="col-md-8">
								<div class="home-content">
									<h1>Become A Volunteer</h1>
									<p class="lead">Hammer Home The Glucose is run by a team of highly skilled, 
                                    dedicated and God-fearing individuals who are  driven with the passion to save the people afflicted with Diabetes.</p>
									<a href="/contact" class="primary-button">Join Us Now!</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /home content -->
			</div>
			<!-- /home item -->
		</div>
		<!-- /HOME OWL -->
	</header>
	<!-- /HEADER -->



            @yield('content')
            @yield('responses')

  


<!-- FOOTER -->
<footer id="footer" class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<!-- footer contact -->
				<div class="col-md-4">
					<div class="footer">
						<div class="footer-logo">
							<a class="logo" href="#"><img src="./himg/logo.png" alt=""></a>
						</div>
						<p style="font-weight: bold;">Hammer Home The Glucose is run by a team of highly skilled,
                         dedicated and God-fearing individuals who are  driven with the passion to save the people afflicted with Diabetes.
                          The team is headed by Joakin C. Nwaokoro,
						   a well trained and Certified Diabetes Educator with other professionals serving as volunteers 
						   in different areas such as dieticians, nurses, educators, physiotherapists, endocrinologists.</p>
						<ul class="footer-contact">
							<li><i class="fa fa-map-marker"></i>Address</li>
							<li><i class="fa fa-phone"></i>PhoneNumber</li>
							<li><i class="fa fa-envelope"></i> <a href="#">hammerhometheglucose@email.com</a></li>
						</ul>
					</div>
				</div>
				<!-- /footer contact -->

				<!-- footer galery -->
				<div class="col-md-4">
					<div class="footer">
						<h3 class="footer-title">Gallery</h3>
						<ul class="footer-galery">
							<li><a href="#"><img src="{{ asset('./himg/rev_sister.jpg') }}" alt=""></a></li>
							<li><a href="#"><img src="{{ asset('./himg/post-5.png') }}" alt=""></a></li>
							<li><a href="#"><img src="{{ asset('./himg/medical_oreach001.jpg') }}" alt=""></a></li>
							<li><a href="#"><img src="{{ asset('./himg/team.jpg') }}" alt=""></a></li>
							<li><a href="#"><img src="{{ asset('./himg/our_team.jpg') }}" alt=""></a></li>
							<li><a href="#"><img src="{{ asset('./himg/training2.jpg') }}" alt=""></a></li>
						</ul>
					</div>
				</div>
				<!-- /footer galery -->

				<!-- footer newsletter -->
				<div class="col-md-4">
					<div class="footer">
						<h3 class="footer-title">Newsletter</h3>
						<p style="font-weight: bold;">Subscribe To Our Monthly Newsletter And Events</p>
						<form class="footer-newsletter">
							<input class="input" type="email" placeholder="Enter your email">
							<button class="primary-button">Subscribe</button>
						</form>
						<ul class="footer-social">
							<li><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#"><i class="fa fa-whatsapp"></i></a></li>
							<li><a href="#"><i class="fa fa-instagram"></i></a></li>
						</ul>
					</div>
				</div>
				<!-- /footer newsletter -->
			</div>
			<!-- /row -->

          


			<!-- footer copyright & nav -->
			<div id="footer-bottom" class="row">
				<div class="col-md-6 col-md-push-6">
					<ul class="footer-nav">
						<li><a href="/">Home</a></li>
						<li><a href="/">About Us</a></li>
						<li><a href="/contact">Contact Us</a></li>
						<li><a href="/blog">Blog</a></li>
						
					</ul>
				</div>

				<div class="col-md-6 col-md-pull-6">
					<div class="footer-copyright">
						<span><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script>Hammer Home the Glucose ® | Built With <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://amadiaustin.me" target="_blank">Rexsteroxy</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></span>
					</div>
				</div>
			</div>
			<!-- /footer copyright & nav -->
		</div>
		<!-- /container -->
	</footer>
	<!-- /FOOTER -->


</body>
    <script src="{{ asset('hjs/jquery.min.js') }}"></script>
	<script src="{{ asset('hjs/bootstrap.min.js') }}"></script>
	<script src="{{ asset('hjs/owl.carousel.min.js') }}"></script>
	<script src="{{ asset('hjs/jquery.stellar.min.js') }}"></script>
	<script src="{{ asset('hjs/main.js') }}"></script>
</html>
