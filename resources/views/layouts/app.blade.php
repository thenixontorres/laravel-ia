<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<title>@yield('titulo', 'Bienvenido')</title>
		<link rel="shortcut icon" href="{{ asset('img/favicon.png') }}" />
    	<link rel="apple-touch-icon" href="{{ asset('img/favicon.png') }}" />
   	 	<link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    	<link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    	<link rel="stylesheet" href="{{ asset('css/icon.css') }}">
    	<script src=" {{ asset('js/jquery.js') }}"></script>
    	<script src=" {{ asset('assets/js/smoothscroll.min.js') }}"></script>
    	<script src=" {{ asset('assets/js/appear.min.js') }}"></script>
    	<script src="{{ asset('assets/js/animations.min.js') }}"></script>
    	<link rel="stylesheet" href="{{ asset('assets/css/animations.min.css') }}">
		@yield('css')
	</head>
	<div class="container">
		<header class="header animate-in" data-anim-type="zoom-in-up" data-anim-delay="60">
			<img class="logoSafetyMaxyma" src="{{ asset('img/safety.svg') }}" alt="">
		</header>
	</div>
	<div class="navbar navbar-inverse">
	    <div class="container">
	        <div class="navbar-header">
	            <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbar-main">
	                <span class="icon-bar"></span>
	                <span class="icon-bar"></span>
	                <span class="icon-bar"></span>
	            </button>
	        </div>
	        <div class="navbar-collapse collapse" id="navbar-main">

	            <ul class="nav navbar-nav">
		            <li>
		            	<a href="./">HOME</a>
		            </li>
	                <li>
	                	<a href="{{ route('paginas.cursos')}}" >CURSOS</a>
	                </li>
	                <li>
	                	<a href="{{ route('paginas.certificacion')}}">CERTIFICACION</a>
	                </li>
	                <li>
	                	<a href="{{ route('paginas.servicios')}}">SERVICIOS</a>
	                </li>
	                <li>
	                	<a href="{{ route('paginas.catalogo')}}">CATALOGO</a>
	                </li>
	                <li>
	                	<a href="{{ route('paginas.galerias')}}">GALERIAS</a>
	                </li>
	                <li>
	                	<a href="{{ route('paginas.video')}}">VIDEO</a>
	                </li>
	                <li>
	                	<a href="{{ route('paginas.nosotros')}}">NOSOTROS</a>
	                </li>
	                <li>
	                	<a href="{{ route('paginas.contactenos')}}">CONTACTENOS</a>
	                </li>
	            </ul>

	            <ul class="nav navbar-nav navbar-right navbar-social-pc">
					<li><a href="#"><i class="icon-facebook icon-nav"></i></a></li>
					<li><a href="#"><i class="icon-twitter icon-nav"></i></a></li>
					<li><a href="#"><i class="icon-instagram icon-nav"></i></a></li>
					<li><a href="#"><i class="icon-youtube icon-nav"></i></a></li>
				</ul>

	        </div>
	    </div>
	</div>	
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					@yield('content')	
				</div>
			</div>
		</div>
		<div class="scroll-up">
		    <a href=""><i class="icon-circle-up"></i>UP</a>
		</div>

	<body>
		<script src="{{ asset('js/bootstrap.min.js') }}"></script>
		<script src="{{ asset('js/main.js') }}"></script>
		@yield('scripts')
	</body>
</html>