<!DOCTYPE html>
<html lang="zxx">
<head>
	<title>Project galery</title>
	<meta charset="UTF-8">
	<meta name="description" content="Photo Gallery HTML Template">
	<meta name="keywords" content="endGam,gGaming, magazine, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Favicon -->
	<link href="img/favicon.ico" rel="shortcut icon"/>

	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css?family=PT+Sans:400,400i,700,700i" rel="stylesheet">


	<!-- Stylesheets -->
	<link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}"/>
	<link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}"/>
	<link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}"/>
	<link rel="stylesheet" href="{{asset('css/animate.css')}}"/>

	<!-- Main Stylesheets -->
	<link rel="stylesheet" href="{{asset('css/style.css')}}"/>


	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>
<body>
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>

	<!-- Top right elements -->
	{{-- <div class="spacial-controls"> --}}
		<div class="search-switch"><img src="img/search-icon.png" alt=""></div>
		<div class="nav-switch-warp">
			<div class="nav-switch">
				<div class="ns-bar"></div>
			</div>
		</div>
	</div>
	<!-- Top right elements end -->

	<div class="main-warp">
		<!-- header section -->
		<header class="header-section">
			<div class="header-close">
				<i class="fa fa-times"></i>
			</div>
			<div class="header-warp">
				<a href="" class="site-logo">
					<img src="./img/logo.png" alt="">
				</a>
				<img src="img/menu-icon.png" alt="" class="menu-icon">
				<ul class="main-menu">
                    <li class="{{ request()->is('beranda') ? 'active' : '' }}"><a href="{{route('beranda')}}">home</a></li>
					<li class="{{ request()->is('galery') ? 'active' : '' }}" ><a href="{{route('galery')}}">gallery</a></li>
                    @auth
                    <li class="{{ request()->is('profil') ? 'active' : '' }}"><a href="{{route('profil')}}">profil</a></li>
                    <li class="{{ request()->is('album') ? 'active' : '' }}"><a href="{{route('album')}}">album</a></li>
                    <li class="ml-5">
                        <form action="/logout" method="post">
                            @csrf
                            <button type="submit">logout</button>

                        </form>
                    </li>
                    @else
                    <li><a href="{{route('login')}}">login</a></li>
                    @endauth


				</ul>

			</div>
			<div class="copyright">Reyyyzzz</div>
		</header>
		<!-- header section end -->

		<div class="content">
            @yield('content')
        </div>
	</div>

	<!-- Search model -->

	<div class="search-model">
		<div class="h-100 d-flex align-items-center justify-content-center">
			<div class="search-close-switch"></div>
			<form class="search-moderl-form">
				<input type="text" id="search-input" placeholder="Search here.....">
			</form>
		</div>
	</div>
	<!-- Search model end -->


	<!--====== Javascripts & Jquery ======-->
	<script src="{{asset('js/jquery-3.2.1.min.js')}}"></script>
	<script src="{{asset('js/bootstrap.min.js')}}"></script>
	<script src="{{asset('js/owl.carousel.min.js')}}"></script>
	<script src="{{asset('js/jquery.nicescroll.min.js')}}"></script>
	<script src="{{asset('js/isotope.pkgd.min.js')}}"></script>
	<script src="{{asset('js/imagesloaded.pkgd.min.js')}}"></script>
	<script src="{{asset('js/circle-progress.min.js')}}"></script>
	<script src="{{asset('js/main.js')}}"></script>

	</body>
</html>
