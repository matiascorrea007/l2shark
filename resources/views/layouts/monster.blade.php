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
<link rel="stylesheet" href="shop/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="skin/monster/css/global.css" media="all">
<link rel="stylesheet" type="text/css" href="skin/monster/css/mi-css.css" media="all">

<script src="js/jquery.min.js"></script>
<script src="shop/js/bootstrap.min.js"></script>
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

<div class='all en'>
	
	<header>


		<img src='imgs\bg-top.jpg' id='bg-top'>
		<div class='bg-top-logo'> <img height="400" width="450" src="../public_html/storage/paginas/home/logo/1479094397.png" alt="" /></div>
		<img src='imgs\nm\loader.gif' style='width:0;height:0;display:none;'>
		<div id='mainLoading'></div>
		
				<div class='serverStatus on'><span></span></div>
		
		<a class='downloadButton' href='index-1.htm?page=download'><span></span></a>
		
		<div class='langs'>			<a href='?changelang=en' class='en noJquery' title='English' onclick="document.location.replace('./index.php?changelang=en&url=http://l2monsterkill.com.br%2F');return false;"><span></span></a>
			<a href='?changelang=es' class='es noJquery' title='Espa&ntilde;ol' onclick="document.location.replace('./index.php?changelang=es&url=http://l2monsterkill.com.br%2F');return false;"><span></span></a>
			<a href='?changelang=pt' class='pt noJquery' title='Portugu&ecirc;s' onclick="document.location.replace('./index.php?changelang=pt&url=http://l2monsterkill.com.br%2F');return false;"><span></span></a>
		</div>
		
		<div class='userarea'>
				
				@if(Auth::guest())		
				<div class='anpc'><div>Don't have account?</div> <a data-toggle="modal" data-target="#registrarse" id="#registrarse" class='default'>Register</a></div>
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
						<div class='ess'><a href='index-3.htm?page=forgot'>Olvidaste tu contraseña?</a></div>
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
				<a href='index-2.htm?page=register'>Register</a>
				<a href='index-4.htm?page=changepass'>Change Password</a>
				<a href='index-3.htm?page=forgot'>Recover</a>
			</div>
		</span>
		<span class='o3'><span class='opac'></span>
			<a href='index-5.htm?page=info'></a>
			<div style='left: -39px;'>
				<a href='index-1.htm?page=download'>Downloads</a>
				<a href='index-5.htm?page=info'>Informations</a>
				<a href='index-6.htm?page=support' class='noJquery'>Support</a>
				<a href='index-7.htm?page=rules'>Rules</a>
				<a href='index-8.htm?page=donations'>Donations</a>
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
						<a title='Grand Olympiad' href='index-13.htm?page=oly_rank' class='b2'><span></span></a>
						<a title='Castle & Siege' title='' href='index-16.htm?page=siege' class='b3'><span></span></a>
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
					<a class='default dbig' href='index-9.htm?page=toppvp'>view more</a>
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
					<a class='default dbig' target='_blank' href='http://www.l2monsterkill.com.br/forum/index.php?/forum/5-main/'>view more</a>
				</div>
				<div class='box'>
					<div class='title'>
						<div class='bg'></div>
						<div class='txt t3'></div>
					</div>
	
					<div class='galleryBox'><div>
						
									
										
										<a href="#" class="btn btn-default" data-toggle="modal" data-target="#videoModal" data-theVideo="http://www.youtube.com/embed/loFtozxZG0s" >VIDEO
										<img src='imgs\gallery\thumbnail\YGpZnIakNHE.jpg'>
										<div></div>
										<span></span>
									</a>
									
									<a href='//www.youtube.com/watch?v=4K640l4ogK4&rel=0' class='iframe' rel='prettyPhoto[fullGallery]'>
										<img src='imgs\gallery\thumbnail\4K640l4ogK4.jpg'>
										<div></div>
										<span></span>
									</a>
									
									<a href='//www.youtube.com/watch?v=TQvDgJJ4D-s&rel=0' class='iframe' rel='prettyPhoto[fullGallery]'>
										<img src='imgs\gallery\thumbnail\TQvDgJJ4D-s.jpg'>
										<div></div>
										<span></span>
									</a>
									
									<a href='//www.youtube.com/watch?v=i5NI2FvE6RQ&rel=0' class='iframe' rel='prettyPhoto[fullGallery]'>
										<img src='imgs\gallery\thumbnail\i5NI2FvE6RQ.jpg'>
										<div></div>
										<span></span>
									</a>
									
					</div></div>
					<a style='margin-top:4px !important;' class='default dbig' href='index-17.htm?page=gallery'>view more</a>
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
	<h1>Follow Us!</h1>
	<div class='pddInner'>
		Like our <a href='https://www.facebook.com/l2monsterkill' target='_blank'>facebook page!</a>	</div>
	<style>
		.faceIndex > div { width: 496px !important; }
	</style>
	<div class='faceIndex'><div>
	
			@if(!empty($box))
			{!! $box->box!!}
			@endif
			
		
	</div></div>


<hr>
<h1>Help Us Voting</h1>
<style>
	.votelinks { display: table; margin: 0 auto;  margin: 20px 0 0 0; padding: 5px; padding: 10px; background: rgba(0,0,0,0.2); border-radius: 7px; }
	.votelinks a { display: block; float: left; margin: 0 0 0 5px; }
	.votelinks a, .votelinks a img { width: 90px; height: 60px; border-radius: 5px; }
	.votelinks a:first-child { margin: 0; }
	.votelinks a:hover { opacity: 0.7; }
</style>
<div class='pddInner'>
	
	With your help we will have greater visibility, attracting more players and providing even more fun for you!	
	<div class='votelinks'>
		<a target="_blank" href="http://vgw.hopzone.net/site/vote/102012/1"><img src="http://642507963.r.cdnsun.net/img/_vbanners/lineage2/lineage2-90x60-2.gif" alt="Vote our server on HopZone.Net" width="90" height="60" border="0"></a>
		<a target="_blank" href="https://l2topzone.com/vote/id/14446" target="_blank" title="l2topzone"><img src="https://l2topzone.com/90x60.png" alt="l2topzone.com" border="0"></a>
		<a target="_blank" href="http://l2top.co/vote/server/L2MonsterKill"><img src="http://l2top.co/img/banners/banner_3.png" alt="Vote for L2MonsterKill in L2Top.CO" border="0"></a>
		<a target="_blank" href="https://l2network.eu/index.php?a=in&u=l2monsterkill"><img src="https://l2network.eu/images/button2.png" alt="L2TopNetwork"></a>
		<a target="_blank" href="https://www.gamebytes.net/index.php?a=in&u=l2monsterkill"><img src="https://www.gamebytes.net/button.php?u=l2monsterkill&buttontype=static" alt="GameBytes - Best Lineage 2 Toplist"></a>
		<a target="_blank" href="http://www.topservers200.com/in.php?id=19191" target="_blank"><img src="http://www.topservers200.com/button/19191.png" alt="Vote no Top 200" border="0"></a>
		<a target="_blank" href="http://www.topgs200.com/?in=992"><img src="http://www.topgs200.com/vote.jpg" border="0" alt="private server"></a>
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
			<div>Account</div>
			<a href='index-2.htm?page=register'>Register</a>
			<a href='index-4.htm?page=changepass'>Change Password</a>
			<a href='index-3.htm?page=forgot'>Recover</a>
		</div>
		<div style='width: 146px;'>
			<div>Server</div>
			<a href='index-1.htm?page=download'>Downloads</a>
			<a href='index-5.htm?page=info'>Informations</a>
			<a href='index-6.htm?page=support' class='noJquery'>Support</a>
			<a href='index-7.htm?page=rules'>Rules</a>
			<a href='index-8.htm?page=donations'>Donations</a>
		</div>
		<div style='width: 172px;'>
			<div>Stats</div>
			
			<a href='index-9.htm?page=toppvp'>Top PvP</a>
			<a href='index-10.htm?page=toppk' class='ativa'>Top Pk</a>
			<a href='index-11.htm?page=toponline'>Top Online</a>
			<a href='index-12.htm?page=topclan'>Top Clan</a>
			<a href='index-13.htm?page=oly_rank'>Grand Olympiad</a>
			<a href='index-15.htm?page=boss'>Boss Status</a>
			<a href='index-16.htm?page=siege'>Castle & Siege</a>
					</div>
		<div style='width: 120px; border-right: 0;'>
			<div>Others</div>
			
			<a href='index-17.htm?page=gallery'>Gallery</a>
			<a href='http://www.l2monsterkill.com.br/forum/index.php?/forum/5-main/' target='_blank'>Knowledge Base</a>
			<a href='http://www.l2monsterkill.com.br/forum' target='_blank'>Forum</a>
					</div>
	</div>
	<div class='copyright'>
		&copy 2017 L2 Monster Kill - All rights reserved
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
	@include('lineage.modal.video') 


</body>
</html>
