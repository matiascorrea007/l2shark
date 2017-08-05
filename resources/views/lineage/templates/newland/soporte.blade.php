@extends('layouts.newland')
@section('content')
@include('alerts.errors')
@include('alerts.request')
@include('alerts.success')
@include('flash::message')



<section class="hero parallax" style="background-image: url(skin/newland/img/cover/cover-parallax.jpg);">
			<div class="hero-bg"></div>
			<div class="container">
				<div class="page-header">
					<div class="page-title">Soporte</div>
					<ol class="breadcrumb">
						<li><a href="{{ url('/') }}" class="no-padding-left">Inicio</a></li>
						<li class="active">Soporte</li>
					</ol>
				</div>
				
			</div>
		</section>
	
		<section class="overflow-hidden">
			<div class="container">
				<div class="row">
					<div class="col-lg-7">
						<div class="title">
							<h4><i class="fa fa-envelope"></i> ¡Envianos tu mensaje!</h4>
							<p>Por cualquier consulta o problema enviarnos tu mensaje rellenando el siguiente formulario.</p>
						</div>
						<form>
							<div class="form-group">
								<input type="text" class="form-control" placeholder="Email" required>
							</div>
							<div class="form-group">
								<input type="text" class="form-control" placeholder="Asunto" required>
							</div>
							<div class="form-group">
								<textarea class="form-control" rows="7" placeholder="Mensaje"></textarea>
							</div>
							<div class="text-center margin-top-30">
								<button type="button" class="btn btn-primary btn-lg btn-rounded btn-shadow">Enviar</button>
							</div>
						</form>
					</div>
					<div class="col-lg-5 height-300">
						<img src="skin/newland/img/content/contact.jpg" class="image-right" alt="">
					</div>
				</div>



			</div>
		</section>







@endsection