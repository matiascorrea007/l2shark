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
	<link href="skin/newland/css/bootstrap.css" rel="stylesheet">
	<link href="skin/newland/css/theme.min.css" rel="stylesheet">
	<link href="skin/newland/css/custom.css" rel="stylesheet"> 
	<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700' rel='stylesheet' type='text/css'> 
   	<link href="https://fonts.googleapis.com/css?family=Marcellus" rel="stylesheet" type='text/css'>

	<link href="skin/newland/css/helpers.min.css" rel="stylesheet">
	 <link href="{{ asset('layout/css/font-awesome.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('layout/css/simple-line-icons.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('layout/css/bootstrap-switch.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('layout/css/colorpicker.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('layout/css/daterangepicker.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('layout/css/morris.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('layout/css/fullcalendar.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('layout/css/components.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('layout/css/plugins.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('layout/css/layout.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('layout/css/custom.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('layout/css/jquery.minicolors.css') }}" rel="stylesheet" type="text/css" />
 
    

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
	<section class="hero cover hidden-xs" style="background-image: url(skin/newland/img/cover/cover-profile.jpg);">
			<div class="hero-bg"></div>
			<div class="container relative">
				<div class="page-header">
					<div class="page-title">Bienvenido {{ Auth::user()->login}}</div>	
					<div class="profile-avatar">
						<div class="thumbnail" data-toggle="tooltip" title="YAKUZI">
							<a href="#">
								<img src="skin/newland/img/user/profile.jpg">
							</a>
						</div>
					</div>
				</div>
			</div>
		</section>


		<section class="profile-nav height-50 border-bottom-1 border-grey-300  hidden-xs">
			<div class="tab-select sticky">
				<div class="container">
					<ul class="nav nav-tabs" role="tablist">
		

		<!--con esta condicion activio cada tap al cambiar el menu con un active-->
		@if(!empty($link) and  $link == "home")<li class="active" >@else <li class="" > @endif
		<a href="{{ url('panel') }}" >Home</a></li>




		@if(Auth::user()->admin == 1)<!--permiso de admin-->
		@if(!empty($link) and  $link == "Configuracion / General" or $link == "Configuracion / Paginas" or $link=="Configuracion / DB")
		<!--con esta condicion activio cada tap al cambiar el menu con un active-->
		<li class="active" >@else<li class="" >@endif

		<a href="{{ url('panel') }}" class="dropdown-toggle" data-toggle="dropdown">Configuracion</a>
			<ul class="dropdown-menu">
			<li class=" ">
                <a href="{!! URL::to('panel-config/') !!}" class="nav-link"><i class="fa fa-cogs"></i> General</a>
            </li>
            <li class=" ">
                <a href="{!! URL::to('panel-paginas/') !!}" class="nav-link"><i class="fa fa-columns"></i> Paginas </a>
            </li>
            <li class=" ">
                <a href="{!! URL::to('db-config/') !!}" class="nav-link"><i class="fa fa-database"></i> DB</a>
            </li>
            @if(Auth::user()->login == "gandalf007")
            <li class=" ">
                <a href="{!! URL::to('skines/') !!}" class="nav-link"><i class="fa fa-paint-brush"></i> Skin</a>
            </li>
            @endif
			</ul>
		@endif
		</li>

		<!--con esta condicion activio cada tap al cambiar el menu con un active-->
		 @if(!empty($link) and  $link == "Donaciones / Donar" or $link == "Donaciones / Listar" or $link=="Donaciones / Hechas" or $link == "Donaciones / Pendientes" or $link == "Donaciones / Transferir" or $link == "Donaciones / Transferecnias / Realizadas")
		<li class="active" >@else<li class="" >@endif

		<a href="{{ url('panel') }}" class="dropdown-toggle" data-toggle="dropdown">Donaciones</a>
						<ul class="dropdown-menu">
						 <li class=" ">
                <a href="{!! URL::to('donaciones/') !!}" class="nav-link"><i class="fa fa-plus-circle"></i> Adquirir Coins</a>
            </li>
            <li class=" ">
                <a href="{!! URL::to('donaciones-hechas/') !!}" class="nav-link"><i class="fa fa-list"></i> Donaciones Hechas </a>
            </li>
            @if(Auth::user()->admin == 1)<!--permiso de admin-->
            <li class=" ">
                <a href="{!! URL::to('donaciones-listar/') !!}" class="nav-link"><i class="fa fa-list"></i> Listar Donaciones </a>
            </li>
            <li class=" ">
                <a href="{!! URL::to('donaciones-pendientes/') !!}" class="nav-link"><i class="fa fa-list"></i> Donaciones Pendientes </a>
            </li>
            @endif
            <li class=" ">
                <a href="{!! URL::to('transferir-coin/') !!}" class="nav-link"><i class="fa fa-exchange"></i> Transferir Coins</a>
            </li>
            <li class=" ">
                <a href="{!! URL::to('transfererencias-realizadas/') !!}" class="nav-link"><i class="fa fa-exchange"></i> Transferencias Realizadas</a>
            </li>
					</ul>
		</li>



		<!--con esta condicion activio cada tap al cambiar el menu con un active-->
		@if(!empty($link) and  $link == "servicios")<li class="active" >@else <li class="" > @endif
		<a href="{{ url('servicios') }}" >Servicios</a></li>




		@if(!empty($link) and  $link == "Ticket / Administrar" or $link == "ticket" or $link=="Ticket / listar" )
		<li class="active" >@else<li class="" >@endif
		<a href="{{ url('panel') }}" class="dropdown-toggle" data-toggle="dropdown">Tciket</a>
		<ul class="dropdown-menu">
		<li class=" ">
                <a href="{!! URL::to('user-ticket/') !!}" class="nav-link"><i class="fa fa-plus-circle"></i> Mis Ticket</a>
            </li>
            @if(Auth::user()->admin == 1)<!--permiso de admin-->
            <li class=" ">
                <a href="{!! URL::to('administrar-tickets/') !!}" class="nav-link"><i class="fa fa-list"></i> Administrar ticket </a>
            </li>
            @endif
		</ul>
		</li>



		@if(Auth::user()->admin == 1)<!--permiso de admin-->
		<!--con esta condicion activio cada tap al cambiar el menu con un active-->
		@if(!empty($link) and  $link == "Noticias")<li class="active" >@else <li class="" > @endif
		<a href="{{ url('post') }}" >Noticias</a>
		</li>
		@endif


		@if(!empty($link) and  $link == "Shop")<li class="active" >@else <li class="" > @endif
		<a href="{{ url('combo') }}">Shop</a></li>




		@if(!empty($link) and  $link == "Galeria" or $link == "Galeria / Imagenes" or $link=="Galeria / Videos" )
		<li class="active" >@else<li class="" >@endif
		<a href="{{ url('panel') }}" class="dropdown-toggle" data-toggle="dropdown">Galeria</a>
			<ul class="dropdown-menu">
			@if(Auth::user()->admin == 1)<!--permiso de admin-->
            <li class=" ">
              <a href="{!! URL::to('galeria-imagen-show') !!}" class="nav-link"><i class="fa fa-image"></i> Galeria de Imagenes</a>
            </li>
            <li class=" ">
                <a href="{!! URL::to('galeria-video-show') !!}" class="nav-link"><i class="fa fa-youtube-play"></i> Galeria de Videos </a>
            </li>
        	@endif
            <li class=" ">
            <a href="{!! URL::to('galeria') !!}" class="nav-link"><i class="fa fa-link"></i> Enviar Imagen/Video</a>
            </li>
			</ul>
		</li>


		
                                        <!-- BEGIN USER LOGIN DROPDOWN -->
                                       <li class="dropdown dropdown-user dropdown-dark">
                                                    <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                                        <i class=""><img src="storage/icono admin/coins.svg" alt="" width="20"  height="20"></i> Saldo :
                                                        <span class="badge badge-danger">{{$user->saldo}}</span>
                                                    </a>
                                                    <ul class="dropdown-menu dropdown-menu-dark">
                                                     <li>
                                                         <a href="{!! URL::to('donaciones') !!}">
                                                        <i class="fa fa-credit-card  "></i> Agregar Saldo</a>
                                                     </li>
                                                     <li>
                                                         <a href="{!! URL::to('transferir-coin') !!}">
                                                        <i class="fa fa-exchange "></i> Transferir Saldo </a>
                                                     </li>
                                                    </ul>
                                                </li>



                                        <li class="dropdown dropdown-user dropdown-dark">
                                            <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                                <img alt="" class="img-circle" src="skin/globales/img/avatar/human_female_fighter.jpg" height="30" width="30">
                                                <span class="username username-hide-mobile">{{$user->login}}</span>
                                            </a>
                                            <ul class="dropdown-menu dropdown-menu-default">
                                                <li>
                                                    <a href="{!! URL::to('usuario-config') !!}" >
                                                        <i class="fa fa-cog "></i> Configuracion</a>
                                                </li>
                                                <li>
                                                    <a href="{!! URL::to('logout') !!}" >
                                                        <i class="fa fa-sign-out "></i> Log Out </a>
                                                </li>
                                            </ul>
                                        </li>
                                    


					</ul>
				</div>
			</div>
		</section>
		<br><br>
		<section class="bg-grey-50 border-bottom-1 border-grey-300 padding-top-10 padding-bottom-10">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<ol class="breadcrumb">
							<li><a href="{!! URL::to('panel') !!}">Panel /</a></li>
							<li class="active"> @if(!empty($link)) {{$link}} @endif</li>
						</ol>	
					</div>
				</div>
			</div>
		</section>

		
		
		<section>
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="post post-fl">
							
							
							@yield('content')  
				
						</div>
					</div>
				</div>		
			</div>
		</section>
    
       
		
		
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
								<li><a href="{{ url('/') }}">INICIO</a></li>
								<li><a href="{{ url('/descargas') }}">DESCARGAS</a></li>
								<li><a href="{{ url('/como-jugar') }}">COMO JUGAR</a></li>
								<li><a href="{{ url('/informacion') }}">INFORMACIÓN</a></li>
							</ul>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
							<ul class="nav">
								<li><a href="{{ url('/noticias') }}">NOTICIAS</a></li>
								<li><a href="{{ url('/top-pvp') }}">ESTADISTICAS</a></li>
								<li><a href="{{ url('/galeria-imagen') }}">GALERIA</a></li>
								<li><a href="{{ url('/soporte') }}">SOPORTE</a></li>
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
	<script src="{{ asset('layout/js/jquery.min.js') }}" type="text/javascript"></script>
	<script src="skin/newland/plugins/bootstrap/js/bootstrap.min.js"></script>
	<script src="skin/newland/plugins/core.min.js"></script>
	<script src="skin/newland/plugins/owl-carousel/owl.carousel.min.js"></script>
		{!!Html::script('layout/js/js.cookie.min.js')!!}
        {!!Html::script('layout/js/jquery.slimscroll.js')!!}
        {!!Html::script('layout/js/jquery.blockui.min.js')!!}
        {!!Html::script('layout/js/bootstrap-switch.js')!!}
        {!!Html::script('layout/js/moment.min.js')!!}
        {!!Html::script('layout/js/daterangepicker.js')!!}
        {!!Html::script('layout/js/morris.js')!!}
        {!!Html::script('layout/js/raphael-min.js')!!}
        {!!Html::script('layout/js/jquery.waypoints.min.js')!!}
        {!!Html::script('layout/js/jquery.counterup.js')!!}
        {!!Html::script('layout/js/fullcalendar.js')!!}
        {!!Html::script('layout/js/jquery.flot.js')!!}
        {!!Html::script('layout/js/jquery.flot.resize.js')!!}
        {!!Html::script('layout/js/jquery.flot.categories.js')!!}
        {!!Html::script('layout/js/jquery.easypiechart.js')!!}
        {!!Html::script('layout/js/jquery.sparkline.min.js')!!}
        {!!Html::script('layout/js/app.js')!!}
        {!!Html::script('layout/js/dashboard.js')!!}
        {!!Html::script('layout/js/layout.js')!!}
        {!!Html::script('layout/js/demo.js')!!}
        {!!Html::script('layout/js/quick-sidebar.js')!!}
        {!!Html::script('layout/js/quick-nav.js')!!}
        {!!Html::script('layout/js/jquery.cubeportfolio.min.js')!!}
        {!!Html::script('layout/js/portfolio-1.min.js')!!}

		{!!Html::script('layout/js/components-color-pickers.js')!!}
        {!!Html::script('layout/js/bootstrap-colorpicker.js')!!}
        {!!Html::script('layout/js/jquery.minicolors.js')!!}

	<!-- Bootstrap 3.3.2 JS -->
<script src="{{ asset('layout/js/bootstrapselect.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('layout/js/select2.min.js') }}"></script>
<!-- manejo de graficas -->
<script src="{{ asset('layout/js/graficas.js') }}" type="text/javascript"></script>
<script src="{{ asset('layout/js/highcharts.js') }}" type="text/javascript"></script>
<!--estos dos scrip es para mandar la cantidad de item del carrito y actualizar-->
<script src="{{ asset('layout/js/main.js') }}" ></script>
<script src="{{ asset('layout/js/pinterest_grid.js') }}"></script>
<!--sweetalert-->
<script src="{{ asset('layout/js/sweetalert.min.js') }}"></script>
<script src="{{ asset('layout/js/sweetalert-dev.js') }}"></script>
@include('sweet::alert')

<!-- Alert Toastr -->
{!!Html::script('layout/js/toastr.js')!!} 
{!! Toastr::message() !!}

<script src="{{ asset('layout/js/parallax.js') }}"></script>

<!--Filemanager-->
<script src="{{ asset('../vendor/unisharp/laravel-filemanager/public/js/lfm.js') }}"></script>
<script src="{{ asset('../vendor/unisharp/laravel-ckeditor/ckeditor.js') }}"></script>
<script src="{{ asset('../vendor/unisharp/laravel-ckeditor/adapters/jquery.js') }}"></script>

<!--Filemanager para crear-->
    <script>
       $('textarea.my-editor').ckeditor({
filebrowserImageBrowseUrl: 'laravel-filemanager?type=Images',
filebrowserImageUploadUrl: 'laravel-filemanager/upload?type=Images&_token={{csrf_token()}}',
filebrowserBrowseUrl: 'laravel-filemanager?type=Files',
filebrowserUploadUrl: 'laravel-filemanager/upload?type=Files&_token={{csrf_token()}}'});
        $('#lfm').filemanager('image');
    </script>
<!--Filemanager para editar-->
    <script>
       $('textarea.my-editor2').ckeditor({
filebrowserImageBrowseUrl: 'laravel-filemanager?type=Images',
filebrowserImageUploadUrl: 'laravel-filemanager/upload?type=Images&_token={{csrf_token()}}',
filebrowserBrowseUrl: 'laravel-filemanager?type=Files',
filebrowserUploadUrl: 'laravel-filemanager/upload?type=Files&_token={{csrf_token()}}'});
        $('#lfm2').filemanager('image');
    </script>




@yield('scriptdatepicker')
@yield('ventas')
@yield('compras')
@yield('presupuestos')


<!--dropzone-->
<script src="{{ asset('layout/js/dropzone/dropzone.js') }}" ></script>
<script>
        Dropzone.options.myDropzone = {
            autoProcessQueue: false,
            uploadMultiple: true,
           addRemoveLinks: true,
           dictRemoveFile: 'Remove',
            maxFilezise: 20,
             parallelUploads: 100,
            maxFiles: 4,

            
            init: function() {
                var submitBtn = document.querySelector("#submit");
                myDropzone = this;
                
                submitBtn.addEventListener("click", function(e){
                    e.preventDefault();
                    e.stopPropagation();
                    myDropzone.processQueue();
                });
                
                
                this.on("complete", function(file) {
                    myDropzone.removeFile(file);
                });

                this.on("success", 
                    myDropzone.processQueue.bind(myDropzone)
                );
            }
        };
    </script>




<!--select dinamico para crear-->
<script>
$('#categoria').on('change',function(e){
var cat_id = e.target.value;
//ajax
$.get('../ajax-subcategoria?cat_id='+ cat_id, function(data){
    console.log(data);
    $('#subcategoria').empty();
    $.each(data, function(index, subcatObj){
        $('#subcategoria').append('<option value="'+subcatObj.id+'">'+subcatObj.nombre+'</option>');
    });
});
});
</script>

<!--select dinamico para editar-->
<script>
$('#categoriaedit').on('change',function(e){
var cat_id = e.target.value;
//ajax
$.get('../../ajax-subcategoria?cat_id='+ cat_id, function(data){
    console.log(data);
    $('#subcategoriaedit').empty();
    $.each(data, function(index, subcatObj){
        $('#subcategoriaedit').append('<option value="'+subcatObj.id+'">'+subcatObj.nombre+'</option>');
    });
});
});
</script>

<!--select dinamico para crear combo-->
<script>
$('#categoria').on('change',function(e){
var cat_id = e.target.value;
//ajax
$.get('ajax-subcategoria?cat_id='+ cat_id, function(data){
    console.log(data);
    $('#subcategoria').empty();
    $.each(data, function(index, subcatObj){
        $('#subcategoria').append('<option value="'+subcatObj.id+'">'+subcatObj.nombre+'</option>');
    });
});
});
</script>



<script src="{{ asset('layout/js/productocombo.js') }}" ></script>

	
<!--===============scrip de los tags========-->

<script type="text/javascript">
    $(document).ready(function () {
        // inicializamos el plugin
        $('#tags').select2({
            // Activamos la opcion "Tags" del plugin
            tags: true,
            tokenSeparators: [','],
            ajax: {
                dataType: 'json',
                url: '{{ url("tags") }}',
                delay: 250,
                data: function(params) {
                    return {
                        term: params.term
                    }
                },
                processResults: function (data, page) {
                  return {
                    results: data
                  };
                },
            }
        });
    });
</script>

<!-----------------------MIS SCRIPT---------------------------->
<script type="text/javascript" src="skin/monster/js/mis-funciones.js"></script>
<script type="text/javascript" src="layout/js/mis-js/mis-ajax-modales.js"></script>


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
        </script></div>
</body>


</html>