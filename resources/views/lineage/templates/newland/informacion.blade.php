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
						<li><a  href="{{ url('/como-jugar') }}">COMO JUGAR</a></li>
						<li><a class="active" href="{{ url('/informacion') }}">INFORMACIÓN</a></li>
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
					<div class="page-title">Información</div>
					<ol class="breadcrumb">
						<li><a href="{{ url('/') }}" class="no-padding-left">Inicio</a></li>
						<li class="active">Información</li>
					</ol>
				</div>
				
			</div>
		</section>
<section class="bg-primary padding-40">
			<div class="container text-center">
					<blockquote class="blockquote-primary no-border no-padding no-margin">
					<p class="font-size-24 color-white font-weight-300 no-margin"><em>"Cansados de jugar servidores mediocres por eso creamos Newland"</em></p>
					<footer class="bg-transparent text-center no-padding-top margin-top-10 font-size-14 color-white">Staff Newland</footer>
				</blockquote>	
                        </div>
  </section>

  <section class="elements">
  <div class="ncontent">{!!$paginas->informacion!!}</div>

<!--
  <div class="container">
				<h3>Panels Alternatives</h3>
				<p>Like other components, easily make a panel more meaningful to a particular context by adding any of the contextual state classes.</p>
				<div class="row">
					<div class="col-lg-4 col-md-4 col-sm-4 co-xs-12 margin-bottom-sm-30">
						<div class="panel panel-primary">
							<div class="panel-heading">
								<h3 class="panel-title">Panel title</h3>
							</div>
							<div class="panel-body">
								Lorem ipsum dolor sit amet, consectetur adiping.
							</div>
						</div>
					</div>

					<div class="col-lg-4 col-md-4 col-sm-4 co-xs-12 margin-bottom-sm-30">
						<div class="panel panel-info">
							<div class="panel-heading">
								<h3 class="panel-title">Panel title</h3>
							</div>
							<div class="panel-body">
								Lorem ipsum dolor sit amet, consectetur adiping.
							</div>
						</div>
					</div>

					<div class="col-lg-4 col-md-4 col-sm-4 co-xs-12 margin-bottom-sm-30">
						<div class="panel panel-danger">
							<div class="panel-heading">
								<h3 class="panel-title">Panel title</h3>
							</div>
							<div class="panel-body">
								Lorem ipsum dolor sit amet, consectetur adiping.
							</div>
						</div>
					</div>
				</div>
				
				<div class="row margin-top-30">
					<div class="col-lg-4 col-md-4 col-sm-4 co-xs-12 margin-bottom-sm-30">
						<div class="panel panel-success">
							<div class="panel-heading">
								<h3 class="panel-title">Panel title</h3>
							</div>
							<div class="panel-body">
								<div class="widget">
							<div class="panel panel-default">
								
								<div class="panel-body no-padding">
									<ul class="panel-list-bordered">
										<li><a>Rate(x50)</a></li>
										<li><a>Exp (x2)</a></li>
										<li><a>Adena (Habilitado)</a></li>
									</ul>
							</div>
						</div>
							</div>
						</div>
					</div>

					

					
				</div>
			</div>
    </div>
    -->
  </section>






@endsection