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
					<div class="page-title">Descargas</div>
					<ol class="breadcrumb">
						<li><a href="{{ url('/') }}" class="no-padding-left">Inicio</a></li>
						<li class="active">Descargas</li>
					</ol>
				</div>
				
			</div>
		</section>
<section class="bg-primary padding-40">
			<div class="container text-center">
					<blockquote class="blockquote-primary no-border no-padding no-margin">
					<p class="font-size-24 color-white font-weight-300 no-margin"><em>"Compatible con C4 e Interlude, podras jugar nuestro servidor teniendo cualquiera de los dos clientes."</em></p>
					<footer class="bg-transparent text-center no-padding-top margin-top-10 font-size-14 color-white">Staff Newland</footer>
				</blockquote>	
                        </div>
                        </section>


        <section class="bg-grey-50 border-bottom-1 border-grey-200 relative" id="descargas">

       
  <div class="ncontent">{!!$paginas->descargas!!}</div>

		<!--	<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2">
						<div class="title outline">
							
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 ">
						<div class="card card-hover">
							<div class="card-img">
								<img src="img/blog/md/1.jpg" alt="">
								<div class="category"><span class="label label-warning">C4 Cliente</span></div>
							</div>
							<div class="caption">
								<h3 class="card-title">Descarga Cliente C4</h3>
								<ul>
									<li>30 Julio, 2017</li>
								</ul>
								<p>Podes descargar el cliente C4 de un de las siguientes tres opciones.</p>
								<button type="button" class="btn btn-block btn-warning btn-icon-right">MEGA<i class="fa fa-download"></i></button>
								<button type="button" class="btn btn-block btn-warning btn-icon-right">MEDIAFIRE<i class="fa fa-download"></i></button>
								<button type="button" class="btn btn-block btn-warning btn-icon-right">FTP<i class="fa fa-download"></i></button>
							</div>
						</div>
					</div>
							
					<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 centered">
						<div class="card card-hover">
							<div class="card-img">
								<img src="img/blog/md/2.jpg" alt="">
								<div class="category"><span class="label label-success">Interlude Cliente</span></div>
							</div>
							<div class="caption">
								<h3 class="card-title">Descarga Cliente Interlude</h3>
								<ul>
									<li>30 Julio, 2017</li>
								</ul>
								<p>Podes descargar el cliente Interlude de un de las siguientes tres opciones.</p>                              

								<button type="button" class="btn btn-block btn-success btn-icon-right">MEGA<i class="fa fa-download"></i></button>
								<button type="button" class="btn btn-block btn-success btn-icon-right">MEDIAFIRE<i class="fa fa-download"></i></button>
								<button type="button" class="btn btn-block btn-success btn-icon-right">FTP<i class="fa fa-download"></i></button>
							</div>
						</div>
					</div>
							
					<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
						<div class="card card-hover">
							<div class="card-img">
								<img src="img/blog/md/3.jpg" alt="">
								<div class="category"><span class="label label-primary">Newland Parche</span></div>
							</div>
							<div class="caption">
								<h3 class="card-title">Descarga Newland Parche</h3>
								<ul>
									<li>30 Julio, 2017</li>
								</ul>
								<p>Destro de nuestro parche encuentras nuestro system, las texturas y nuestro updater.</p>
								
								<button type="button" class="btn btn-block btn-primary btn-icon-right">MEGA<i class="fa fa-download"></i></button>
								<button type="button" class="btn btn-block btn-primary btn-icon-right">MEDIAFIRE<i class="fa fa-download"></i></button>
								<button type="button" class="btn btn-block btn-primary btn-icon-right">FTP<i class="fa fa-download"></i></button>
							</div>
						</div>
					</div>	
							
				
				</div>
				<div class="alert alert-info text-center">
									<strong>¿Tenes algun problema con la descarga o instalación?</strong> Te damos ayudar a <a href="soporte.html" target="_blank" class="alert-link">solucionar tus problemas.</a> 
								</div>
				
			</div>-->
		</section>




@endsection