<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml" lang="en">

<head runat="server">
  <meta charset="utf-8">
	<meta name="viewport" content="width=device-width", initial-scale=1>
	<meta charset="utf-8" />
   
	<meta name="author" content="Untree.co">
	<link rel="shortcut icon" href="favicon.png">

	<meta name="description" content="" />
	<meta name="keywords" content="bootstrap, bootstrap4" />

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&family=Source+Serif+Pro:wght@400;700&display=swap" rel="stylesheet">
	<link rel="icon" type="image/x-icon" href="{{ asset('assets/img/favicon/logo.ico') }}" />
	<link rel="stylesheet" href="{{ asset("assets/wisata/css/bootstrap.min.css")}}">
	<link rel="stylesheet" href="{{ asset("assets/wisata/css/owl.carousel.min.css") }}">
	<link rel="stylesheet" href="{{ asset('assets/wisata/css/owl.theme.default.min.css') }}">
	<link rel="stylesheet" href="{{asset('assets/wisata/css/jquery.fancybox.min.css')}}">
	<link rel="stylesheet" href="{{asset('assets/wisata/fonts/icomoon/style.css')}}">
	<link rel="stylesheet" href="{{asset('assets/wisata/fonts/flaticon/font/flaticon.css')}}">
	<link rel="stylesheet" href="{{ asset('assets/wisata/css/daterangepicker.css')}}">
	<link rel="stylesheet" href="{{ asset('assets/wisata/css/aos.css')}}">
	<link rel="stylesheet" href="{{ asset('assets/wisata/css/style.css')}}">
  <title>GO UMKM</title>
    
    @yield('csspage') 
    

</head> 

<body>
@inject('setting', 'App\Http\Controllers\Settings')
  <div class="site-mobile-menu site-navbar-target">
		<div class="site-mobile-menu-header">
			<div class="site-mobile-menu-close">
				<span class="icofont-close js-menu-toggle"></span>
			</div>
		</div>
		<div class="site-mobile-menu-body"></div>
	</div>

	<nav class="site-nav navbar-dark">
		<div class="container">
			<div class="site-navigation">
				{{--  <a href="index.html" class="logo m-0">GO UMKM <span class="text-primary">.</span></a>  --}}
				<img src="{{ asset('assets/img/logo/logo.jpg')}}" alt="imam" width="50" class="rounded-circle logo  ml-1" />
				<ul class="js-clone-nav d-none d-lg-inline-block text-left site-menu float-right">
					<li class="active"><a href="/">Home</a></li>
					<li class="has-children">
						<a href="#">Our Service</a>
						<ul class="dropdown">
							<li><a href="/kuliner">Kuliner Madura</a></li>
							<li><a href="/batik">Batik Madura</a></li>
							<li><a href="/Madura-tv">Madura Tv</a></li>
							<li><a href="/ojol-madura">Ojol Madura</a></li>
							<li><a href="/wisata">Pariwisata</a></li>
							<li><a href="https://wa.me/{{ $setting::get("whatsapp-admin-sponsor") }}">Branding Bisnis</a></li>
							<li><a href="https://wa.me/{{ $setting::get("whatsapp-admin-website") }}">Pembuatan Website</a></li>
							<li><a href="https://wa.me/{{ $setting::get("whatsapp-admin-ecommerce") }}">Pembuatan E-commers</a></li>
						</ul>
					</li>
					<li><a href="/about">About</a></li>
					<li><a href="/login">Login</a></li>
				</ul>

				<a href="#" class="burger ml-auto float-right site-menu-toggle js-menu-toggle d-inline-block d-lg-none light" data-toggle="collapse" data-target="#main-navbar">
					<span></span>
				</a>

			</div>
		</div>
	</nav>
@yield('content')
            
           
<div class="py-5 cta-section">
	<div class="container">
	  <div class="row text-center">
		<div class="col-md-12">
		  <h2 class="mb-2 text-white">
			Lets you Explore the Best. Contact Us Now
		  </h2>
		</div>
	  </div>
	</div>
  </div>    
<div class="site-footer">
	<div class="inner first">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-lg-4">
					<div class="widget">
						<h3 class="heading">About Tour</h3>
						<p>{{ $setting::get("text-slide-landing") }}</p>
					</div>
					<div class="widget">
						<ul class="list-unstyled social">
							{{--  <li><a href="#"><span class="icon-twitter"></span></a></li>  --}}
							<li><a href="{{ $setting::get("instagram") }}"><span class="icon-instagram"></span></a></li>
							{{--  <li><a href="#"><span class="icon-facebook"></span></a></li>
							<li><a href="#"><span class="icon-linkedin"></span></a></li>
							<li><a href="#"><span class="icon-dribbble"></span></a></li>
							<li><a href="#"><span class="icon-pinterest"></span></a></li>
							<li><a href="#"><span class="icon-apple"></span></a></li>  --}}
							<li><a href="{{ $setting::get("email") }}"><span class="icon-google"></span></a></li>
						</ul>
					</div>
				</div>
				{{--  <div class="col-md-6 col-lg-2 pl-lg-5">
					<div class="widget">
						<h3 class="heading">Pages</h3>
						<ul class="links list-unstyled">
							<li><a href="#">Blog</a></li>
							<li><a href="#">About</a></li>
							<li><a href="#">Contact</a></li>
						</ul>
					</div>
				</div>
				<div class="col-md-6 col-lg-2">
					<div class="widget">
						<h3 class="heading">Resources</h3>
						<ul class="links list-unstyled">
							<li><a href="#">Blog</a></li>
							<li><a href="/about">About</a></li>
							<li><a href="/contact">Contact</a></li>
						</ul>
					</div>
				</div>  --}}
				<div class="col-md-6 col-lg-4">
					<div class="widget">
						<h3 class="heading">Contact</h3>
						<ul class="list-unstyled quick-info links">
							<li class="email"><a href="#">{{ $setting::get("email") }}</a></li>
							<li class="phone"><a href="#">{{ $setting::get("whatsapp-primary-admin") }}</a></li>
							<li class="address"><a href="#">Bangkalan Madura</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>



	<div class="inner dark">
		<div class="container">
			<div class="row text-center">
				<div class="col-md-8 mb-3 mb-md-0 mx-auto">
					<p>Copyright &copy;<script>document.write(new Date().getFullYear());</script>. All Rights Reserved. &mdash; Designed with love by Go Umkm 
					</p>
				</div>
				
			</div>
		</div>
	</div>
</div>

<div id="overlayer"></div>
<div class="loader">
	<div class="spinner-border" role="status">
		<span class="sr-only">Loading...</span>
	</div>
</div>
	<script src="{{ asset('assets/wisata/js/jquery-3.4.1.min.js')}}"></script>
	<script src="{{ asset('assets/wisata/js/popper.min.js')}}"></script>
	<script src="{{ asset('assets/wisata/js/bootstrap.min.js')}}"></script>
	<script src="{{ asset('assets/wisata/js/owl.carousel.min.js')}}"></script>
	<script src="{{ asset('assets/wisata/js/jquery.animateNumber.min.js')}}"></script>
	<script src="{{ asset('assets/wisata/js/jquery.waypoints.min.js')}}"></script>
	<script src="{{ asset('assets/wisata/js/jquery.fancybox.min.js')}}"></script>
	<script src="{{ asset('assets/wisata/js/aos.js')}}"></script>
	<script src="{{ asset('assets/wisata/js/moment.min.js')}}"></script>
	<script src="{{ asset('assets/wisata/js/daterangepicker.js')}}"></script>

	<script src="{{ asset('assets/wisata/js/typed.js')}}"></script>
	
	<script src="{{ asset('assets/wisata/js/custom.js')}}"></script>
</body>
</html>
