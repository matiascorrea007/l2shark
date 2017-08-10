@extends('layouts.newland')

@section('menu')
<div class="container">
			<span class="bar hide"></span>
			<a href="index.html" class="logo"><img src="skin/newland/img/logo.png" alt=""></a>
				<nav>
				<div class="nav-control">
					<ul>
						<li><a  href="{{ url('/') }}">INICIO</a></li>
						<li><a  href="{{ url('/descargas') }}">DESCARGAS</a></li>
						<li><a class="active" href="{{ url('/como-jugar') }}">COMO JUGAR</a></li>
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


<section class="hero parallax" style="background-image: url(skin/newland/img/cover/cover-parallax.jpg);">
			<div class="hero-bg"></div>
			<div class="container">
				<div class="page-header">
					<div class="page-title">Como jugar</div>
					<ol class="breadcrumb">
						<li><a href="{{ url('/') }}" class="no-padding-left">Inicio</a></li>
						<li class="active">Como jugar</li>
					</ol>
				</div>
				
			</div>
		</section>
<section class="bg-primary padding-40">
			<div class="container text-center">
					<blockquote class="blockquote-primary no-border no-padding no-margin">
					<p class="font-size-24 color-white font-weight-300 no-margin"><em>"En solo 3 pasos vas a poder jugar"</em></p>
					<footer class="bg-transparent text-center no-padding-top margin-top-10 font-size-14 color-white">Staff Newland</footer>
				</blockquote>	
                        </div>
                        </section>


<section>	
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="title outline">
						</div>

						
					</div>
					<div class="row">
					<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 center-block">
					<div>
					<iframe width="100" height="200" src="https://www.youtube.com/embed/59H1uLWgjho" frameborder="0" allowfullscreen></iframe>
                  <h3>Instalar Lineage 2</h3>
                  <span class="label label-primary label-icon-left"><i class="fa fa-hourglass-1"></i> PASO 1</span><br><br>
                   <p>Para jugar Newland necesitaras tener instalado Lineage 2, puede ser C4 o Interlude. <br>En caso de no tener ninguno de estos dos clientes podrás encontrar links de descarga en nuestra sección de descargas. </p>
                   <a href="{{ url('/descargas') }}" target="_blank" class="btn btn-block btn-warning">Descarga Lineage 2</a>
                    </div></div>
                    
                    
					<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 center-block"><div>
					<iframe width="100" height="200" src="https://www.youtube.com/embed/59H1uLWgjho" frameborder="0" allowfullscreen></iframe>
						<h3>Instalar Nuestro Parche</h3> <span class="label label-primary label-icon-left"><i class="fa fa-hourglass-2"></i> PASO 2</span><br><br> <p>Una vez instalado lineage 2, <a href="descargas.html" target="_blank">descargamos</a> e instalamos el parche de Newland.<br>
Puedes seguir los pasos que te dejamos en el tutorial aquí arriba.<br><br>
</p>
                   <a href="#videodeyoutube" target="_blank" class="btn btn-block btn-success">Ver tutorial </a>
                    </div></div>
                    
                    
					<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 center-block">
					<div>
           <iframe width="100" height="200" src="https://www.youtube.com/embed/59H1uLWgjho" frameborder="0" allowfullscreen></iframe>
                   <h3>Registarte</h3> 
                    <span class="label label-primary label-icon-left"><i class="fa fa-hourglass-end"></i> PASO 3</span><br><br><p>¡Listo! Ahora solo queda registrar tu cuenta y comenzar a jugar.<br>
Por cualquier problema no dudes en consultarnos, en el área de soporte o en Facebook.
</p><br>

                   <a href="{{ url('/registrarse') }}" target="_blank" class="btn btn-block btn-primary">Registarte</a>
                    </div>
                    </div>
                    
                    
					</div>			
				</div>
			</div>
		</section>




@endsection