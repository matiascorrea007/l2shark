@extends('layouts.newland')
@section('content')
@include('alerts.errors')
@include('alerts.request')
@include('alerts.success')
@include('flash::message')




<section class="hero hero-panel" style="background-image: url(skin/newland/img/cover/cover-login.jpg);">
			<div class="hero-bg"></div>
			<div class="container relative">
				<div class="row">
					<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 pull-none margin-auto">
						<div class="panel panel-default panel-login">
							<div class="panel-heading">
								<h3 class="panel-title"><i class="fa fa-user"></i>Iniciar Sesión</h3>
							</div>
							<div class="panel-body">

								<form id='form' action="{{ url('/login') }}" method="post">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">

									<div class="form-group input-icon-left">
										<i class="fa fa-user"></i>
										<input type="text" class="form-control" name="email" placeholder="Ingrese el Email">
									</div>
									<div class="form-group input-icon-left">
										<i class="fa fa-lock"></i>
										<input type="password" class="form-control" name="password" placeholder="Contraseña">
									</div>
									<button type="submit" class="btn btn-primary btn-block">Logear</button>
									
									<div class="form-actions">
										<div class="checkbox checkbox-primary">
											<input type="checkbox" id="checkbox"> 
											<label for="checkbox">Recordar</label>
										</div>
									</div>
								</form>
							</div>
							<div class="panel-footer">
								<center>¿No estas registrado? <br><a href="{{ url('/registrarse') }}">Registrarte Ahora.</a></center>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>




@endsection