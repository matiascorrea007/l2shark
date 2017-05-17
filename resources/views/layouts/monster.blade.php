<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>


<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta http-equiv="imagetoolbar" content="no">
<meta name="keywords" content="l2mk, high five, l2, lineage, lineage2, lineage 2, lainiege, laineage, lainiage, lineage dois, lineage ii, internacional, international, portuguese, english, espanish, espanol, espanhol, portugues, ingles, gringo, br, 1x, 5x, 10x, 30x, 50x, 70x, 100x, 150x, 200x, 300x, 1000x, free fun, diversao gratis, gratuito, gratuitamente, free fun, new server, novo servidor, o melhor servidor de lineage 2, o melhor servidor">
<meta name="description" content="L2MK, the best server of Lineage 2 High Five. Join us for free and play!">
<link rel="shortcut icon" href="imgs\favicon.ico">
<title>L2MK - High Five</title>
<link rel="image_src" href="imgs\image_src.jpg">
<meta property="og:title" content="L2MK - High Five">
<meta property="og:site_name" content="L2MK">
<meta property="og:url" content="http://www.l2monsterkill.com.br">
<meta property="og:description" content="L2MK, the best server of Lineage 2 High Five. Join us for free and play!">
<meta property="og:type" content="website">
<meta property="og:image" content="http://www.l2monsterkill.com.br/imgs/image_src.jpg">



<!-- Bootstrap Core CSS -->
<link rel="stylesheet" type="text/css" href="skin/monster/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="skin/monster/css/global.css" media="all">
<link rel="stylesheet" type="text/css" href="skin/monster/css/mi-css.css" media="all">

<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="skin/monster/js//bootstrap.js"></script>
<script type="text/javascript" src="skin/monster/js/global.js"></script>
<script type="text/javascript" src="skin/monster/js/jquery.cookie.js"></script>
<script type="text/javascript" src="skin/monster/js/mis-funciones.js"></script>


 


</head>
<body>



<div id="fb-root"></div>
<script>
	(function(d, s, id) {
		var js, fjs = d.getElementsByTagName(s)[0];
		if (d.getElementById(id)) return;
		js = d.createElement(s); js.id = id;
		js.src = "//connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v2.7&appId=577018195656213";
		fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));
</script>


<!--si la session es english -->
@if(\Session::get('lang') == 'en')
<div class='all en'>
@endif

<!--si la session es español -->
@if(\Session::get('lang') == 'es' or \Session::get('lang') == '' )
<div class='all es'>
@endif


	<header>


		
		<div class='bg-top-logo'> 
		<img src='' style="background:url('skin/monster/imgs/bg-top.jpg') no-repeat center top" >
		@if(!empty($logo))
		<img height="400" width="450" src="../public_html/storage/paginas/home/logo/{{$logo->logo}}" alt="" />
		@endif
		</div>
		<img src='imgs\nm\loader.gif' style='width:0;height:0;display:none;'>
		<div id=''></div>
		
				<div class='serverStatus off'><span></span></div>
		
		<a class='downloadButton' href='index-1.htm?page=download'><span></span></a>
		
		<div class='langs'>			
		<a href="{{ url('lang', ['en']) }}" class='en noJquery' title='English'><span></span></a>

		<a href="{{ url('lang', ['es']) }}" class='es noJquery' title='Espa&ntilde;ol'><span></span></a>

		<a href='?changelang=pt' class='pt noJquery' title='Portugu&ecirc;s'><span></span></a>

		</div>
		
		<div class='userarea'>
				
				@if(Auth::guest())		
			<div class='anpc'><div>{{ trans('layout.no tiene una cuenta?') }}
			</div> <a data-toggle="modal" data-target="#registrarse" id="#registrarse" class='default'>{{ trans('layout.registrarse') }}</a></div>
				@endif

				<div class='avatar' style='background-image: url(skin/monster/imgs/avatar/human_male_mage.jpg);'></div>
				


			<div class='loginarea'><!--Login Area-->

				@if (count($errors) > 0)
        			<div class="alert alert-danger">
            			<strong>Whoops!</strong> Hubo algunos problemas con su entrada.<br><br>
            			<ul>
                			@foreach ($errors->all() as $error)
                    			<li>{{ $error }}</li>
                			@endforeach
            			</ul>
        			</div>
    			@endif
				
				@if(Auth::check())

				<div class="logged">{{$user->login}}</div>
					<div class="loggedOptions">
						<span class="default o1">
							<span>PDU</span>
							<div>
						<a href="./ucp" class="default noJquery">Panel de Usuario</a>			
						<a href="./?page=ucp_changepass" class="default">Cambiar Pass</a>
						<a href="./?page=ucp_changeemail" class="default">Cambiar E-mail</a>	
						<a href="./?page=ucp_unstuck" class="default">Unstuck Char</a>
							</div>
						</span>
						<a href="{{ url('/logout') }}" class="default o2 noJquery">Logout</a>
					</div>

			
				@else

				<form id='form' action="{{ url('/login') }}" method="post">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">

						<div class='fieldsBox'>
							<label>
								<input type='text' name='email' class='inpt' placeholder='Login' title='Username' autocomplete='off'>
								<div class='acc_icon user'></div>
							</label>
							<label>
								<input style='border-radius: 4px 0 0 4px;' type='password' name='password' class='inpt pass' placeholder='Password' title='Password' autocomplete='off'>
								<div class='acc_icon pass'></div>
							</label>
							<input type="submit"  class='default gologin' value='Login'>		
						</div>
						<div class='ess'><a href='index-3.htm?page=forgot'>{{ trans('layout.Olvidaste tu contraseña?') }}</a></div>
					</form>
				  @endif
				</div><!--END Login AREA-->
			</div>
	
	</header>
		
			
		
		<nav>
		<a href="{{ url('/') }}" class='o1'><span class='opac'></span></a>
		<span class='o2'><span class='opac'></span>
			<a href='index-2.htm?page=register'></a>
			<div style='left: -26px;'>
				<a href='index-2.htm?page=register'>{{ trans('layout.registrarse') }}</a>
				<a href='index-4.htm?page=changepass'>{{ trans('layout.cambiar contraseña') }}</a>
				<a href='index-3.htm?page=forgot'>{{ trans('layout.recuperar contraseña') }}</a>
			</div>
		</span>
		<span class='o3'><span class='opac'></span>
			<a href='index-5.htm?page=info'></a>
			<div style='left: -39px;'>
			<a href="{{ url('/descargas') }}">{{ trans('layout.Descargas') }}</a>
			<a href="{{ url('/donaciones') }}">{{ trans('layout.Donaciones') }}</a>
			<a href="{{ url('/reglas') }}">{{ trans('layout.Reglas') }}</a>
			<a href="{{ url('/soporte') }}" class='noJquery'>{{ trans('layout.Soporte') }}</a>
			<a href="{{ url('/informacion') }}">{{ trans('layout.Informacion') }}</a>	
			</div>
		</span>
		<span class='o4'><span class='opac'></span>
			<a href='index-5.htm?page=info'></a>
			<div style='left: -11px;'>
				
				<a href="{{ url('boss') }}">Boss Status</a>
				<a href="{{ url('top-pvp') }}" class='ativa'>Top Players</a>
				<a href="{{ url('siege') }}">Castle & Siege</a>

			
							</div>
		</span>
		<a href='http://www.l2monsterkill.com.br/forum/index.php?/forum/5-main/' target='_blank' class='o5'><span class='opac'></span></a>
		<a href='http://www.l2monsterkill.com.br/forum' class='o6' target='_blank'><span class='opac'></span></a>
	</nav>

	


	<section>
		
		<aside>
			
			
				<div class='box'>
					<div class='statsButtons'>
						<a title='Boss Status' title='' href="{{ url('/boss') }}" class='b1'><span></span></a>
						<a title='Grand Olympiad' href="{{ url('/top-olympiad') }}" class='b2'><span></span></a>
						<a title='Castle & Siege' title='' href="{{ url('/siege') }}" class='b3'><span></span></a>
					</div>
				</div>
				<div class='box'>
					<div class='title'>
						<div class='bg'></div>
						<div class='txt t1'></div>
					</div>
					<div class='dualRank'>
					<table border='0' cellpadding='0' cellspacing='0' class='table table-hover table-light indexRank'>
						<thead>
							<tr>
								<th>Name</th>
								<th>PVP</th>
							</tr>
						</thead>
						@foreach($pvps as $pvp)
								<tbody>
									<tr class='two'>
										<td>{{$pvp->char_name}}</td>
										<td>{{$pvp->pvpkills}}</td>
									</tr>
								</tbody>
							@endforeach	
					</table>


					<table border='0' cellpadding='0' cellspacing='0' class='table table-hover table-light indexRank'>
						<thead>
							<tr>
								<th>Name</th>
								<th>PK</th>
							</tr>
						</thead>
						@foreach($pks as $pk)
								<tbody>
									<tr class='two'>
										<td>{{$pk->char_name}}</td>
										<td>{{$pk->pkkills}}</td>
									</tr>
								</tbody>
						@endforeach	
					</table>


					</div>
					<a class='default dbig' href="{{ url('/top-pvp') }}">{{ trans('layout.ver más') }}</a>
				</div>

				<div class='box'>
					<div class='title'>
						<div class='bg'></div>
						<div class='txt t2'></div>
					</div>
					<div class='forumLines'>
					
								<a class='forumLine two' href='http://www.l2monsterkill.com.br/forum/index.php?/topic/33-telas-no-windowns-10/' target='_blank'>
									<div class='avatar'><img src='http://www.l2monsterkill.com.br/forum/uploads/'></div>
									<div class='text'>
										<span>Telas no windowns 10</span>
										<div>by Kallies <span>10 February, 2017</span></div>
									</div>
								</a>
								
								<a class='forumLine one' href='http://www.l2monsterkill.com.br/forum/index.php?/topic/18-area-pvp-por-grade/' target='_blank'>
									<div class='avatar'><img src='forum\uploads\monthly_2017_01\AVATAR.jpg.3f05cec697ee9684431b9bbd60fa2af3.thumb.jpg.fa1eeb3628c827e23a0c16d84feea50a.jpg'></div>
									<div class='text'>
										<span>Area PvP por Grade</span>
										<div>by Staff <span>05 February, 2017</span></div>
									</div>
								</a>
								
								<a class='forumLine two' href='http://www.l2monsterkill.com.br/forum/index.php?/topic/19-gmedal-e-event-medal/' target='_blank'>
									<div class='avatar'><img src='forum\uploads\monthly_2017_01\AVATAR.jpg.3f05cec697ee9684431b9bbd60fa2af3.thumb.jpg.fa1eeb3628c827e23a0c16d84feea50a.jpg'></div>
									<div class='text'>
										<span>G.Medal e Event Medal</span>
										<div>by Staff <span>05 February, 2017</span></div>
									</div>
								</a>
								</div>
					<a class='default dbig' target='_blank' href='http://www.l2monsterkill.com.br/forum/index.php?/forum/5-main/'>{{ trans('layout.ver más') }}</a>
				</div>
				<div class='box'>
					<div class='title'>
						<div class='bg'></div>
						<div class='txt t3'></div>
					</div>
	
					<div class='galleryBox'><div>
						
					
								
									
					</div></div>
					<a style='margin-top:4px !important;' class='default dbig' href="{{ url('galeria-video') }}">{{ trans('layout.ver más') }}</a>
				</div>	

		<div class='box'>
					<div class='title'>
						<div class='bg'></div>
						<div class='txt t3'></div>
					</div>
	
				<div class='thumbnail img-responsive'>
					<div>
						
									
					@foreach($imagenes as $imagene)					
					<a href="#" class="btn btn-default" data-toggle="modal" data-target="#imagenes-{{$imagene->id}}" >
					<img height="100" width="100" 	src='{{$imagene->url}}'>
					<div></div><span></span>
					</a>
					@endforeach	

		
		<!--Cargo el modal-->	
		@foreach($imagenes as $imagene)
			<div class="modal fade modal-fullscreen" id="imagenes-{{$imagene->id}}" tabindex="-1" role="dialog" aria-labelledby="videoModal" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-body">
                            <button  type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            <div>
                                <img src="{{$imagene->url}}" height="850" width="850" alt="" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
		@endforeach

								
									
					</div>
				</div>
					<a style='margin-top:4px !important;' class='default dbig' href="{{ url('galeria-imagen') }}">{{ trans('layout.ver más') }}</a>
				</div>

		</aside>
		
		<article>
			
			<span id='pageTop'></span>
			
			<div class='page'>
				

<!-- Countdown INI -->
<!-- Countdown  FIM -->



<!-- News -->

@yield('content')


<!-- Facebook Box -->
	<hr>
	<h1>{{ trans('layout.Síguenos') }}!</h1>
	<style>
		.faceIndex > div { width: 496px !important; }
	</style>
	<div class='faceIndex'><div>
	
			@if(!empty($box))
			{!! $box->box!!}
			@endif
			
		
	</div></div>


<hr>
<h1>{{ trans('layout.Ayúdenos a votar') }}</h1>
<style>
	.votelinks { display: table; margin: 0 auto;  margin: 20px 0 0 0; padding: 5px; padding: 10px; background: rgba(0,0,0,0.2); border-radius: 7px; }
	.votelinks a { display: block; float: left; margin: 0 0 0 5px; }
	.votelinks a, .votelinks a img { width: 90px; height: 60px; border-radius: 5px; }
	.votelinks a:first-child { margin: 0; }
	.votelinks a:hover { opacity: 0.7; }
</style>
<div class='pddInner'>
	
	{{ trans('layout.Con su ayuda') }}	
	<div class='votelinks'>

		@foreach($votos as $voto)
			{!!$voto->link!!}
		@endforeach


	</div>
	
</div>

			</div>
			
		</article>
		
	</section>
	
</div>

<script type='text/javascript'>
$(document).ready(function(){
	var lateral = ($('aside').height());
	$('article').css({ 'min-height': ''+(lateral)+'px' });
});
</script>

<footer>
	<div class='linksPanel'>
		<div style='width: 133px; border-left: 0;'>
			<div>{{ trans('layout.Cuenta') }}</div>
			<a href='index-2.htm?page=register'>{{ trans('layout.registrarse') }}</a>
			<a href='index-4.htm?page=changepass'>{{ trans('layout.cambiar contraseña') }}</a>
			<a href='index-3.htm?page=forgot'>{{ trans('layout.recuperar contraseña') }}</a>
		</div>
		<div style='width: 146px;'>
			<div>{{ trans('layout.Servidor') }}</div>
			<a href='index-1.htm?page=download'>{{ trans('layout.Descargas') }}</a>
			<a href='index-5.htm?page=info'>{{ trans('layout.Informacion') }}</a>
			<a href='index-6.htm?page=support' class='noJquery'>{{ trans('layout.Soporte') }}</a>
			<a href='index-7.htm?page=rules'>{{ trans('layout.Reglas') }}</a>
			<a href='index-8.htm?page=donations'>{{ trans('layout.Donaciones') }}</a>
		</div>
		<div style='width: 172px;'>
			<div>{{ trans('layout.Estadísticas') }}</div>
			
			<a href='index-9.htm?page=toppvp'>Top PvP</a>
			<a href='index-10.htm?page=toppk' class='ativa'>Top Pk</a>
			<a href='index-11.htm?page=toponline'>Top Online</a>
			<a href='index-12.htm?page=topclan'>Top Clan</a>
			<a href='index-13.htm?page=oly_rank'>Grand Olympiad</a>
			<a href='index-15.htm?page=boss'>Boss Status</a>
			<a href='index-16.htm?page=siege'>Castle & Siege</a>
					</div>
		<div style='width: 120px; border-right: 0;'>
			<div>{{ trans('layout.Otros') }}</div>
			
			<a href='index-17.htm?page=gallery'>{{ trans('layout.Galeria') }}</a>
			<a href='http://www.l2monsterkill.com.br/forum/index.php?/forum/5-main/' target='_blank'>{{ trans('layout.Base de conocimientos') }}</a>
			<a href='http://www.l2monsterkill.com.br/forum' target='_blank'>Forum</a>
					</div>
	</div>
	<div class='copyright'>
		&copy 2017 L2 Shark  - All rights reserved
	</div>
</footer>





<!-- Important Terms to JS Scripts -->
<input type='hidden' id='hback' value=''><input type='hidden' id='titleDefault' value='L2MK - High Five'><input type='hidden' id='l11015' value='Please check your internet connection. The page is taking too long to respond.'><input type='hidden' id='l12055' value='Sorry, an error has occured! Please try again.'><input type='hidden' id='l11017' value='Security Code'><input type='hidden' id='l11018' value='Please fill in the code below, for security reasons.'><input type='hidden' id='l20001' value='Wait...'><input type='hidden' id='l40044' value='Your security key has expired! We will load the page and please try again.'>

<!-- Facebook PopUp -->

<div id='fanback'><div id='fan-exit'></div><div id='fanbox'><div id='fanclose'></div><iframe src='//www.facebook.com/plugins/likebox.php?href=https://www.facebook.com/l2monsterkill&amp;width=402&amp;height=255&amp;colorscheme=light&amp;show_faces=true&amp;border_color=%23E2E2E2&amp;stream=false&amp;header=false&amp;appId=577018195656213' scrolling='no' frameborder='0' allowtransparency='true'></iframe></div></div>
<script src='js\jquery.cookie.js' type='text/javascript'></script>

<script type='text/javascript'>
	$(function() { if($.cookie('atualstudioPopup') != 'yes'){ $('#fanback').delay(100).fadeIn('medium'); $('#fanclose, #fan-exit').click(function(){ $('#fanback').stop().fadeOut('medium'); }); } $.cookie('atualstudioPopup', 'yes', { path: '/', expires: 2 }); });
</script>
<!-- Control JS Flash Size -->
<script>
	$(function(){ $('section object').attr('width', $('article > .page').width()).attr('height', ((360 / 640) * $('article > .page').width())).children('embed').attr('width', $('article > .page').width()).attr('height', ((360 / 640) * $('article > .page').width())); });
</script>



<!--modal-->

    @include('lineage.modal.registrarse') 
	


</body>
</html>
