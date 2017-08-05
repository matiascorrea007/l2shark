@extends('layouts.newland')
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

		


@endsection