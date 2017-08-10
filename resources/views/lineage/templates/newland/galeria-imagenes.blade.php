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
					    <li><a  href="{{ url('/noticias') }}">NOTICIAS</a></li>

						<li><a class="active" href="{{ url('/galeria-imagen') }}">GALERIA</a></li>
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


<div class="page">
<h1>Galería De Imagenes</h1>

<div style="padding: 0 20px 40px 20px;">
	
		
	<div class="fullGallery">
		<div>
			
		@foreach($AllImagenes as $AllImagene)
			<a href="" class="iframe" data-toggle="modal" data-target="#img-{{$AllImagene->id}}">
				<img src="{{$AllImagene->url}}">
				<div></div>
				
			</a>
		@endforeach		


				<!--modal-->
		@foreach($AllImagenes as $AllImagene)
			<div class="modal fade" id="img-{{$AllImagene->id}}" tabindex="-1" role="dialog" aria-labelledby="videoModal" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-body">
                            <button  type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            <div>
                            <img src="{{$AllImagene->url}}" width="560" height="400" alt="">
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
		@endforeach		


		</div>
	</div>
	
	<br><br>
	
		
	<div class="rmsg" style="background: #fff2a8; color: #000;">Quiere que su screenshot o video aparezcan en nuestra galería? <a href="?page=support">Envíenos!</a></div>

</div>

</div>
@endsection