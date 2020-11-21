
<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>soft-{{ $title }}</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="shortcut icon" href="{{ asset('./img/icons/icons1.png') }}" type="image/x-icon">
    <!-- External CSS -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/bootstrap/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/select2/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/owlcarousel/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/lightcase/lightcase.css') }}">
     <link rel="stylesheet" href="{{ asset('https://unpkg.com/aos@next/dist/aos.css') }}" />
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400|Work+Sans:300,400,700" rel="stylesheet">

    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.min.css') }}">
    <link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

    <!-- Modernizr JS for IE8 support of HTML5 elements and media queries -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.js"></script>

</head>
<body data-spy="scroll" data-target="#navbar-nav-header" class="static-layout">
	<div class="boxed-page">
		<nav id="header-navbar" class="navbar navbar-expand-lg py-4">
            <div class="container">
                <a class="navbar-brand d-flex align-items-center text-white" href="/">
                    <h3 class="logo font-weight-bolder mb-0"><img src="./img/icons/icons.png" style="width: 100px;"></h3>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-nav-header" aria-controls="navbar-nav-header" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="lnr lnr-menu"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbar-nav-header">
                    <ul class="navbar-nav ml-auto">
                        {{  menu('main', 'layouts.menus.navbar') }}
                        <li class="nav-item">
                            @include('layouts.menus.parts_language')
                        </li>
                        <li class="nav-item">
                            <a id="side-search-open" class="nav-link" href="#">
                                <span class="lnr lnr-magnifier"></span>
                            </a>
                        </li> 
                         <li class="nav-item only-desktop">
                            <a class="nav-link" id="side-nav-open" href="#">
                                <span class="lnr lnr-menu"></span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

<div id="side-nav" class="sidenav">
	<a href="javascript:void(0)" id="side-nav-close">&times;</a>
	
	<div class="sidenav-content">
		<p>
			Urganch shaxar Pahlavon Mahmud ko'chasi
		</p>
		<p>
			<span class="fs-16 primary-color">(+998) 97 2215858</span>
		</p>
		<p>id_group@gmail.com</p>
	</div>
</div>
<div id="side-search" class="sidenav">
	<a href="javascript:void(0)" id="side-search-close">&times;</a>
	<div class="sidenav-content">
		<form action="">

			<div class="input-group md-form form-sm form-2 pl-0">
			  <input class="form-control my-0 py-1 red-border" type="text" placeholder="Qidiruv" aria-label="Search">
			  <div class="input-group-append">
			    <button class="input-group-text red lighten-3" id="basic-text1">
			    	<span class="lnr lnr-magnifier"></span>
			    </button>
			  </div>
			</div>

		</form>
	</div>
</div> 


@yield('content')

<footer class="mastfoot my-3">
    <div class="inner container">
         <div class="row">
         	<div class="col-lg-4 col-md-12 d-flex align-items-center">
         		
         	</div>
         	<div class="col-lg-4 col-md-12 d-flex align-items-center">
         		<p class="mx-auto text-center mb-0">&copy; @lang('home.home23') <a href="https://id-cam.uz" target="_blank">ID soft</a>.</p>
         	</div>
           
            <div class="col-lg-4 col-md-12">
            	<nav class="nav nav-mastfoot justify-content-center">
	                <a class="nav-link" href="https://t.me/ossuz">
	                	<i class="fab fa-telegram"></i>
	                </a>
	                <a class="nav-link" href="https://www.instagram.com/onlineserviceuz/">
	                	<i class="fab fa-instagram"></i>
	                </a>
	                <a class="nav-link" href="https://www.youtube.com/channel/UC3GHe_oxDYY_Hs9cbySjQJg">
	                	<i class="fab fa-youtube"></i>
	                </a>
	            </nav>
            </div>
            
        </div>
    </div>
</footer>	<!-- External JS -->
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.js"></script>
	<script src="vendor/bootstrap/popper.min.js"></script>
	<script src="vendor/bootstrap/bootstrap.min.js"></script>
	<script src="vendor/select2/select2.min.js "></script>
	<script src="vendor/owlcarousel/owl.carousel.min.js"></script>
	<script src="vendor/stellar/jquery.stellar.js" type="text/javascript" charset="utf-8"></script>
	<script src="vendor/isotope/isotope.min.js"></script>
	<script src="vendor/lightcase/lightcase.js"></script>
	<script src="vendor/waypoints/waypoint.min.js"></script>
	 <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
	 
	<!-- Main JS -->
	<script src="{{ asset('js/app.min.js') }}"></script>
	<script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>
	<script src="//localhost:35729/livereload.js"></script>
</body>
</html>