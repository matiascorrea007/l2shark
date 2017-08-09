<!DOCTYPE html>
<html lang="en">

 
<head>
	<!-- META -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="robots" content="index, follow" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<meta name="description" content="Servidor de Lineage 2 Interlude-C4 Subclasse Acumulativas">
	<meta name="author" content="">
	<meta name="theme-color" content="#141619">
	
	<title>L2 Newland</title>
	<meta content="Server de L2 Interlude Subclasse Acumulativas" name="description" />
<meta content="lineage 2,Interlude,l2,Subclasse Acumulativas,l2 servers interlude,server l2 interlude,l2 lineage,l2 interlude client,lineage ll,l2 interlude servers,l2 hopzone interlude,lineage 2 c4,lineage ii,lineage 2 interlude,l2 c6,lineage top servers,lineage 2 classic,server pvp,top server,l2top200,l2 top,l2 eu,top l2,lineage download,lineage classic,lineage 2 c4,lineage 2 download,lineage 2 interlude,lineage interlude,lineage 2 interlude download,lineage 2 high five,l2 high five,lineage 2 servers,server l2,l2 h5,l2 interlude servers,l2 pvp,lineage 2 private server" name="keywords" />
	
	<!-- Anclar un sitio con Windows 7 -->
<meta content='L2 Newland' name='application-name'/>
<meta content='L2 Newland - Interlude Subclasse Acumulativas' name='msapplication-tooltip'/>
<meta content='http://newland.net' name='msapplication-starturl'/>
<meta content='black' name='msapplication-navbutton-color'/>
<meta content='name=Codigobit;action-uri=http://www.newland.net;icon-uri=http://newland.net/favicon.ico' name='msapplication-task'/>
<meta content='name=HTML5 - Etiqueta Meta;action-uri=http://newland.net/'/>
<!-- Fin de titulo & SEO -->



<!-- Google Analitycs -->



<!-- Fin de google analitycs -->
	
	<!-- FAVICON -->
	<link rel="shortcut icon" href="skin/newland/img/favicon.ico">
	
	<!-- CORE CSS -->
	<link href="skin/newland/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="skin/newland/css/theme.min.css" rel="stylesheet">
	<link href="skin/newland/css/custom.css" rel="stylesheet"> 
	<link href="skin/newland/css/helpers.min.css" rel="stylesheet">
	<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700' rel='stylesheet' type='text/css'> 
   <link href="https://fonts.googleapis.com/css?family=Marcellus" rel="stylesheet" type='text/css'> 
   
    
	<!-- PLUGINS -->
	<link href="skin/newland/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">
	<link href="skin/newland/plugins/ionicons/css/ionicons.min.css" rel="stylesheet">
	<link href="skin/newland/plugins/animate/animate.min.css" rel="stylesheet">
	<link href="skin/newland/plugins/animate/animate.delay.css" rel="stylesheet">
	<link href="skin/newland/plugins/owl-carousel/owl.carousel.css" rel="stylesheet">

		<!-- sweetalert -->
        <link href="{{ asset('layout/css/sweetalert.css') }}" rel="stylesheet"/>
        <link href="{{ asset('layout/css/select2.css') }}" rel="stylesheet"/>
        <link href="{{ asset('layout/css/bootstrap-select.min.css') }}" rel="stylesheet" type="text/css" />
        <!-- ICON RPG AWESOME -->
        <link rel="stylesheet" type="text/css" href="layout/css/rpg-awesome.css" media="all">
        <link rel="stylesheet" type="text/css" href="layout/css/parallax.css" media="all">
        <!--  Alert Toastr -->
        {!!Html::style('layout/css/toastr.css')!!}
        <!-- Mis css -->
        <link rel="stylesheet" type="text/css" href="skin/monster/css/mi-css.css" media="all">
	
	
</head>
<body class="fixed-header">
<header>
    
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
	</header>
	<!-- /header -->
	
	<!-- wrapper --> 
	<div id="wrapper">	
		
		
		@yield('content')

		    

<center><h3>Lanzamiento del periodo Beta 01/09/2017</h3><br><div id="countdown" class="margin-top-10 color-white"></div>

 
</center>
<br>
		
			<!-- footer -->
	<footer id="footer">
		<div class="container">
			<div class="widget row">
				<div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
					<h4 class="title">Sobre Newland</h4>
					<p>Servidor Interlude - C4 Subclasse Acumulativas <br /> <br />Desarrollamos Newland con metas muy claras queremos lograr un servidor que traiga nuevas experiencias de juego y un balance de clases totalmente diferente.</p>
				</div>
					
				<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
					<h4 class="title">MAPA DEL SITIO</h4>
					<div class="row">
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">	
							<ul class="nav">
								<li><a href="index.html">INICIO</a></li>
								<li><a href="descargas.html">DESCARGAS</a></li>
								<li><a href="como-jugar.html">COMO JUGAR</a></li>
								<li><a href="informaci%C3%B3n.html">INFORMACIÓN</a></li>
							</ul>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
							<ul class="nav">
								<li><a href="noticias.html">NOTICIAS</a></li>
								<li><a href="eventos.html">EVENTOS</a></li>
								<li><a href="galeria.html">GALERIA</a></li>
								<li><a href="soporte.html">SOPORTE</a></li>
							</ul>
						</div>
					</div>
				</div>
		
				<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
					<iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fl2newland&tabs=timeline&width=340&height=500&small_header=true&adapt_container_width=true&hide_cover=true&show_facepile=true&appId=115028639145040" width="340" height="340" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
				</div>
			</div>
		</div>
		
		<div class="footer-bottom">
			<div class="container">	
				&copy; 2017 Newland. Todos los derechos reservados.
			</div>
		</div>
	</footer>	
	<!-- /.footer -->

	<!-- Javascript -->
	<script src="skin/newland/plugins/jquery/jquery-1.11.1.min.js"></script>
	<script src="skin/newland/plugins/bootstrap/js/bootstrap.min.js"></script>
	<script src="skin/newland/plugins/core.min.js"></script>
	<script src="skin/newland/plugins/owl-carousel/owl.carousel.min.js"></script>
	<script>
	(function($) {
	"use strict";
		var owl = $(".owl-carousel");
			 
		owl.owlCarousel({
			items : 4, //4 items above 1000px browser width
			itemsDesktop : [1000,3], //3 items between 1000px and 0
			itemsTablet: [600,1], //1 items between 600 and 0
			itemsMobile : false // itemsMobile disabled - inherit from itemsTablet option
		});
			 
		$(".next").click(function(){
			owl.trigger('owl.next');
			return false;
		})
		$(".prev").click(function(){
			owl.trigger('owl.prev');
			return false;
		})
	})(jQuery);
	</script>
	
		<!-- Javascript -->
	<script src="plugins/countdown/jquery.countdown.min.js"></script>
	<script src="plugins/easypiechart/jquery.easypiechart.min.js"></script>
	<script>
	$(function() {
		$('#countdown').countdown('2017/9/1').on('update.countdown', function(event) {
			var $this = $(this).html(event.strftime(''
			+'<span>%-w semana%!w</span>'
			+'<span>%-d día%!d</span>'
			+'<span>%H horas</span>'
			+'<span>%M minutos</span>'
			+'<span>%S segundos</span>'));
		});
		$('.chart-color').easyPieChart({
			easing: 'easeOutBounce',
			barColor: '#5eb404',
			trackColor: '#e3e3e3',
			onStep: function(from, to, percent) {
				$(this.el).find('.percent').text(Math.round(percent));
				}
		});
		
		$('.chart-extra').easyPieChart({
			easing: 'easeOutBounce',
			onStep: function(from, to, percent) {
				$(this.el).find('.percent').text(Math.round(percent));
			}
		});
	});
	</script>
    </div>
        </body>
    </html>