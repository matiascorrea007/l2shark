@extends('layouts.newland')

@section('menu')
<div class="container">
			<span class="bar hide"></span>
			<a href="index.html" class="logo"><img src="skin/newland/img/logo.png" alt=""></a>
				<nav>
				<div class="nav-control">
					<ul>
						<li><a class="active" href="{{ url('/') }}">INICIO</a></li>
						<li><a href="{{ url('/descargas') }}">DESCARGAS</a></li>
						<li><a href="{{ url('/como-jugar') }}">COMO JUGAR</a></li>
						<li><a href="{{ url('/informacion') }}">INFORMACIÓN</a></li>
					    <li><a href="{{ url('/noticias') }}">NOTICIAS</a></li>

						<li><a href="{{ url('/galeria-imagen') }}">GALERIA</a></li>
					</ul>
				</div>
			</nav>
			<div class="nav-right">
				<div class="nav-profile dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="skin/newland/img/user/avatar.jpg" alt=""> <span>PANEL DE USUARIO</span></a>
					<ul class="dropdown-menu">
					@if(Auth::check())
					<li><a href="{{ url('/panel') }}"><i class="fa fa-universal-access"></i>Panel</a></li>
					<li><a href="{{ url('/logout') }}"><i class="fa fa-sign-out "></i>Salir</a></li>
					@else
						<li><a href="{{ url('/registrarse') }}"><i class="fa fa-user-plus"></i>Registrarte</a></li>
						<li class="divider"></li>
						<li><a href="{{ url('/ingresar') }}"><i class="fa fa-user"></i>Iniciar Sesión</a></li>
						<li class="divider"></li>
						<li><a href="{{ url('/soporte') }}"><i class="fa fa-support"></i>Soporte</a></li>
						@endif
					</ul>
				</div>
			</div>
			<div class="nav-right">
				<div class="nav-profile dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown"><span>ESTADISTICAS</span></a>
					<ul class="dropdown-menu">
						<li><a href="{{ url('/top-pvp') }}"><i class="ra ra-bat-sword"></i>TOP</a></li>
						<li class="divider"></li>
						<li><a href="{{ url('/siege') }}"><i class="ra ra-castle-emblem"></i>SIEGUE</a></li>
						<li class="divider"></li>
						<li><a href="{{ url('/boss') }}"><i class="ra ra-monster-skull"></i>BOSS</a></li>
					</ul>
				</div>
			</div>
		</div>
@endsection





@section('content')
@include('alerts.errors')
@include('alerts.request')
@include('alerts.success')
@include('flash::message')






<div id="full-carousel" class="ken-burns carousel slide full-carousel carousel-fade" data-ride="carousel">
			<ol class="carousel-indicators">
				<li data-target="#full-carousel" data-slide-to="0" class="active"></li>
				<li data-target="#full-carousel" data-slide-to="1"></li>
				<li data-target="#full-carousel" data-slide-to="2"></li>
			</ol>
			<div class="carousel-inner">
				<div class="item active inactiveUntilOnLoad">
					<img src="skin/newland/img/slideshow/1.jpg" alt="">
					<div class="container">
						<div class="carousel-caption">
							<h1 data-animation="animated animate1 bounceInDown">Lineage 2 Newland</h1>
							<p data-animation="animated animate7 fadeInUp">Servidor Interlude-C4 Subclasses Acumulativas</p>
							<a href="#trailer" class="btn btn-primary btn-lg btn-rounded" data-animation="animated animate10 fadeInDown">VER EL TRAILER</a>
							
						</div>		
					</div>
				</div>
				
				<div class="item">
					<img src="skin/newland/img/slideshow/2.jpg" alt="">
					<div class="container">
						<div class="carousel-caption">
							<h1 data-animation="animated animate1 fadeInDown">Preparate para el lanzamiento</h1>
							<p data-animation="animated animate7 fadeIn">Descarga nuestro parche y sé el primero en jugarlo.</p>
							<a href="{{ url('/descargas') }}" data-toggle="modal" class="btn btn-primary btn-lg btn-rounded" data-animation="animated animate10 fadeIn">descargar parche</a>
						</div>
					</div>
				</div>
				
				<div class="item">
					<img src="skin/newland/img/slideshow/3.jpg" alt="">
					<div class="container">
						<div class="carousel-caption">
							<h1 data-animation="animated animate1 fadeIn">PARTICIPA DE LA BETA</h1>
							<p data-animation="animated animate7 fadeIn">Próximamente anunciaremos el lanzamiento de la beta</p>
							<a href="{{ url('/registrarse') }}" target="_blank"  class="btn btn-primary btn-lg btn-rounded" data-animation="animated animate10 fadeIn">entrar a la beta</a>
						</div>
					</div>
				</div>
							
				<a class="left carousel-control" href="#full-carousel" data-slide="prev">
					<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
				</a>
				<a class="right carousel-control" href="#full-carousel" data-slide="next">
					<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
				</a>
			</div>
		</div>

<section class="background-image" id="trailer" style="background-image: url(https://img.youtube.com/vi/NIw4C24mQ6I/hqdefault.jpg);" id="trailer">
			<span class="background-overlay"></span>
			<div class="container">
				<div class="embed-responsive embed-responsive-16by9">
					<iframe class="embed-responsive-item" src="http://www.youtube.com/embed/NIw4C24mQ6I?rel=0&amp;showinfo=0" allowfullscreen></iframe>
					
				</div>		
			</div>
			
		</section>	<br>	


<center><h3>Lanzamiento del periodo Beta 01/10/2017</h3><br><div id="countdown" class="margin-top-10 color-white"></div>
</center><br>



@endsection