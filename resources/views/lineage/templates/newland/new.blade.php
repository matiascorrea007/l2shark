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
						<li><a  href="{{ url('/informacion') }}">INFORMACIÓN</a></li>
					    <li class="active"><a  href="{{ url('/noticias') }}">NOTICIAS</a></li>

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


<div class="owl-carousel">
			<div class="post-carousel">
				<a href="#" class="link">
					<img src="skin/newland/img/slideshow/sm-1.jpg" alt="">
					<div class="overlay">
						<div class="caption">
							
							
							<div class="post-title"><h4>Zonas de lvl: Nuevas Zonas</h4></div>
							<p>Te contamos las nuevas caractericas de las zonas de lvl.</p>
						</div>
					</div>
				</a>
			</div>
			<div class="post-carousel">
				<a href="#" class="link">
					<img src="skin/newland/img/slideshow/sm-2.jpg" alt="">
					<div class="overlay">
						<div class="caption">
							
							
							<div class="post-title"><h4>Zonas de lvl: Nuevas Zonas</h4></div>
							<p>Te contamos las nuevas caractericas de las zonas de lvl.</p>
						</div>
					</div>
				</a>
			</div>
			<div class="post-carousel">
				<a href="#" class="link">
					<img src="skin/newland/img/slideshow/sm-3.jpg" alt="">
					<div class="overlay">
						<div class="caption">
					
							
							<div class="post-title"><h4>Zonas de lvl: Nuevas Zonas</h4></div>
							<p>Te contamos las nuevas caractericas de las zonas de lvl.</p>
						</div>
					</div>
				</a>
			</div>
			<div class="post-carousel">
				<a href="#" class="link">
					<img src="skin/newland/img/slideshow/sm-4.jpg" alt="">
					<div class="overlay">
						<div class="caption">
							
							
							<div class="post-title"><h4>Zonas de lvl: Nuevas Zonas</h4></div>
							<p>Te contamos las nuevas caractericas de las zonas de lvl.</p>
						</div>
					</div>
				</a>
			</div>
			<div class="post-carousel">
				<a href="#" class="link">
					<img src="skin/newland/img/slideshow/sm-5.jpg" alt="">
					<div class="overlay">
						<div class="caption">
						
							
							<div class="post-title"><h4>Zonas de lvl: Nuevas Zonas</h4></div>
							<p>Te contamos las nuevas caractericas de las zonas de lvl.</p>
						</div>
					</div>
				</a>
			</div>
		</div>



		<section class="padding-top-40 padding-bottom-40">	
			<div class="container">
				<div class="row sidebar">
					<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 leftside">
						<div class="row">
							<div class="col-lg-12">
								<div class="headline">
									<h4>Ultimas Noticias</h4>
								</div>
							</div>
						</div>

						@foreach($posts as $post)	
						<div class="post post-md">
							<div class="row">
								<div class="col-lg-4">
									<div class="post-thumbnail">
									@if($post->imagen == "noticia.jpg")
							<a href="#"><img src="storage/noticias/noticia.jpg" alt=""></a>
							@else
							<img src='{{$post->portada}}' width="400" height="150">
							@endif

									</div>
								</div>
								<div class="col-lg-8">
									<div class="post-header">
										<div class="post-title">
											<h4><a href="{{ url('blogdetail-post'.$post->id) }}">{{$post->titulo}}</a></h4>
											<ul class="post-meta">
												<li><i class="fa fa-calendar-o"></i> {{$post->created_at}}</li>
											</ul>
										</div>
									</div>
									<p>{!!$post->descripcioncorta!!} </p>
								</div>
							</div>
						</div>
						@endforeach
						
						
						
					
						
					</div>
					
					<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 rightside">
					<iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fl2newland%2F&tabs=timeline&width=340&height=162&small_header=true&adapt_container_width=true&hide_cover=true&show_facepile=true&appId=115028639145040" width="340" height="162" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
				
						
				
						
						
						
						
						
					
					</div>
				</div>
			</div>
		</section>







@endsection