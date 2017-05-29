<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Flame.pw - Lineage 2 Interlude Project</title>
<meta name="keywords" content="l2, l2 c6, l2 Interlude, l2 c6 Interlude, la2, la2 c6, la2 Interlude, la2 c6 Interlude, Lineage, Lineage 2, Lineage 2 C4, Lineage Interlude, Lineage 2 Interlude, Lineage 2 C4 Interlude, LineageClassic, LineageClassic 2, LineageClassic C4, Flame.PW 2 C4, Flame.PW 2 Interlude, Flame.PW 2 C4 Interlude, Lineage Classic, Lineage Classic 2, Lineage Classic C4, Lineage Classic 2 C4, Lineage Classic 2 Interlude, Lineage Classic 2 C4 Interlude, Классический сервер, Классический сервер Lineage, Классический сервер Lineage 2, Классический сервер Lineage 2 C4, Классический сервер Lineage 2 Interlude, Классический сервер Lineage 2 C4 Scions of Destony, Lineage PTS, Lineage 2 PTS, Lineage 2 C4 PTS, Lineage 2 C4 Interlude PTS, Лучший Lineage, Лучший Lineage 2, Лучший Lineage 2 C4, Лучший Lineage Interlude, Лучший Lineage 2 C4 Interlude, PTS сервер Lineage , PTS сервер Lineage 2, PTS сервер Lineage 2 C4, PTS сервер Lineage Interlude, PTS сервер Lineage 2 C4 Scions of Desiny, PVP сервер Lineage, PVP сервер Lineage 2, PVP сервер Lineage 2 C4, PVP сервер Lineage 2 Interlude, PVP сервер Lineage 2 C4 Interlude, lineage 2 pvp server c6, lineage 2 pvp server scions of destiny, lineage 2 pvp server interlude, il, ил, интерлюд, lineage 2 pvp server gracia, lineage 2 pvp server gracia final, lineage 2 pvp server epilogue, lineage 2 pvp server freya, lineage 2 pvp server high five, lineage 2 pvp server goodes of destruction, lineage 2 pvp server lindvior, сервер pvp, l2 пвп сервер, l2 классик сервер, сервер для l2, lineage2 pvp server, lineage2 classic server, tera сервер, скачать линейка, скачать линейка 2, скачать линягу, скачать линягу 2, скачать lineage, скачать lineage 2, download lineage, download lineage 2, aion server top, diablo 2 lord of destruction скачать, бесплатный wow сервер, goha forums, aion скачать, aion top, top pvp server lineage 2, top classic server lineage 2, top l2, top lineage, top lineage 2, дата выхода blade and soul, MMORPG, RPG, TOPMMORPG, lineage MMO, MMO">
<meta name="description" content="Flame.PW: Лучший сервер Lineage 2 C6 Interlude в рунете!">
<link rel="shortcut icon" href="skin/diamond/favicon.ico?v=1">

{!!Html::style('skin/diamond/css/bootstrap.css')!!}
{!!Html::style('skin/diamond/css/style.css')!!}
{!!Html::style('skin/diamond/css/style.css')!!}
{!!Html::style('skin/diamond/css/main.css')!!}
{!!Html::style('skin/diamond/css/animate.css')!!}
{!!Html::style('skin/diamond/css/tabs.css')!!}
{!!Html::style('skin/diamond/css/mi-css.css')!!}


<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
{!!Html::script('skin/diamond/js/bootstrap.js')!!} 
{!!Html::script('skin/diamond/js/jquery.cookie.js')!!} 
{!!Html::script('skin/diamond/js/jquery-ui-personalized-1.5.2.packed.js')!!} 
{!!Html::script('skin/diamond/js/SmoothScroll.js')!!} 
{!!Html::script('skin/diamond/js/flame.pw.js')!!} 
{!!Html::script('skin/diamond/js/sprinkle.js')!!} 



</head>
<body>
	<!-- всплывашка -->
	
	<div id="pp-bg"></div>
	<!-- всплывашка -->
	<header class="header">
		<div id="general">
			<div class="wrapper animated" style="animation-delay: 0.5s; animation-name: bounceIn;">
				<div class="left locale">
				<!-- IDIOMA 
					<div class="left locale_2">
						<a href="javascript:;" lang="rus" id="lang_rus" class="ru active"></a>
						<a href="javascript:;" lang="eng" id="lang_eng" class="en"></a>
					</div>
					 IDIOMA -->
				</div>
				<menu>
					<li class="lvl_1"><a href="{{ url('/') }}" class="home"><span></span></a>
					</li>
					<li class="lvl_1"><a href="{{ url('/descargas') }}" class="forum"><span></span></a>
					</li>
					<li class="lvl_1"><a href="{{ url('/donar') }}" class="about"><span></span></a>
					</li>

					<li class="lvl_1"><a href="#" target="_blank" class="files"><span></span></a>
						<ol class="lvl_2">
							<li><a href="{{ url('/top-pvp') }}">Estadistica</a></li>
							<li><a href="{{ url('/siege') }}">Castillos</a></li>
							<li><a href="{{ url('/boss') }}">Raid Boss</a></li>
							<li><a href="{{ url('/informacion') }}">Servidor</a></li>
							<li><a href="{{ url('/reglas') }}">Reglas</a></li>
							<li><a href="{{ url('/soporte') }}">Soporte</a></li>
							<li><a href="{{ url('/galeria-imagen') }}">Imagenes</a></li>
							<li><a href="{{ url('/galeria-video') }}">Videos</a></li>
						</ol>
					</li>

					<li class=""><a href="{{ url('/registrarse') }}" class="donate"><span></span></a></li>
					<li class=""><a href="" class="vote"><span></span></a></li>
				</menu>
				<div class="lk right"><a href="login.htm" target="_blank">Login</a></div>
			</div>
		</div>
		<section class="head">
			<div class="wrapper">

			<!--LOGO-->
				<div class="logo left">
	@if(!empty($logo))
	
	<a href="index.htm"><div class=" animated" style="animation-delay: 1.0s; animation-duration: .4s; animation-name: zoomInMain;"><img class=""  src="storage/paginas/home/logo/{{$logo->logo}}" alt="" height="200" width="300" /></div></a>
	@endif

					

					
					<ul class="sosial_link">
						<li class="vk"><a href=""></a></li>
						<li class="facebook"><a href=""></a></li>
						<li class="twetter"><a href=""></a></li>
						<li class="yutube"><a href=""></a></li>
					</ul>
					
				</div>
				<!--LOGO-->

				<div class="right-box right">
					<div style="min-height: 89px;">
					<!-- Cuenta Regresiva: -->
					<div class="timer animated" style="animation-delay: 1.1s; animation-name: rollIn;">
						<div class="right" style="left: 12px;">
							<h4>Cuenta Regresiva:</h4>
							<div id="CDT">
							<script src=""></script>
							</div>
						</div>
					</div>
					</div>
					<!-- Cuenta Regresiva: -->
					<div class="bot right">
						<a href="{{ url('/registrarse') }}" id="btn_files" class="animated" style="animation-delay: 0.5s; animation-name: zoomInLeft;"></a>
					</div>
				</div>
			</div>
		</section>
	</header>
	<!-- .header-->
	<div class="wrapper">
		<div class="middle">
			<div class="page_wrap">
				<div class="container">
					<div class="cont">
						<div class="cont_cent">
							<main class="content">
								<div class="animated" style="animation-delay: 0.5s; animation-name: flipInX;">
									
									<section class="shop">
										<!-- тут карусель -->
											<div class="shop_home clear_fix">
												<div class="slider">
												
													-->
					<!-- x1200 -->
													<div class="item active">
														<a href="http://forum.flame.pw/index.php?/topic/1361-otkrytie-servera-pvp-classic-kh1200/?p=28960" target="_blank">
															<div class="image"><img src="skin/diamond/images/slide_img\1.png"></div>
															<div class="caption">
																<div class="text">
																	<div class="title" style="color: #ff3030;text-shadow: 0 0 0 #000;font-weight: bold;">Interlude PvP-Classic x1200!</div>
																	<div class="text2">La inauguración se llevará a cabo el 29 de octubre a las 20:00 GMT!</div>
																</div>
															</div>
														</a>
													</div>
					<!-- x1200 -->
					
													<div class="item active">
														<a href="http://forum.flame.pw/index.php?/topic/1629-otkrytie-servera-multicraft-kh100/?p=30115" target="_blank">
															<div class="image"><img src="skin/diamond/images/slide_img/2.jpg" /></div>
															<div class="caption">
																<div class="text">
																	<div class="title" style="color: #ff3030;text-shadow: 0 0 0 #000;font-weight: bold;">Interlude Multicraft x100!</div>
																	<div class="text2">La inauguración se llevará a cabo el 29 de octubre a las 20:00 GMT!</span></div>
																</div>
															</div>
														</a>
													</div>
					<!-- x100 -->
													
												</div>
												
											</div>
											
									</section>
								</div>




								@yield('content')



							
								
							</main><!-- .content -->
						</div>
					</div>
				</div><!-- .container-->
				<aside class="right-sidebar">
					<div class="sta_box_top animated" style="animation-delay: 0.5s; animation-name: bounceInUp;">
						<div class="ss_title"><img src="skin/diamond/images/sta_title.jpg"></div>
						<div class="sta_cont_top sta_cont_bf">
							<div class="clear" style="height: 7px;"></div>
							<div class="clear"></div>
							<div class="clear"></div>
							<div class="line"></div>
							<div id="animates" class="Revolution-one clear_fix">
								<div class="Revolution_1 clear_fix">
									<div class="status">
										<div class="item" data-online="5050">
											<div class="name">PvP-Classic x1200</div>
											<div class="load"><div class="load-line"></div></div>
											<div class="loaded">El servidor se abrió correctamente!<!-- 29 Октября в 20:00 по МСК --Нагрузка:
												<div id="percent_online_1">
													<div class="sonline_1"><span>0</span></div>
													<span class="percent_1"></span>
												</div><!--Сервер открыт!-->
											</div>
											<div class="tooltip">
												<div id="tooltip_online2">
													<div class="tonline2"><span>5050</span></div>
													<span class="tooltip_on2"></span>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!--
							<div class="line"></div>
							<div class="Revolution-one clear_fix">
								<div class="Revolution_1 clear_fix">
									<div class="status">
										<div class="item" data-online="0">
											<div class="name">Multicraft x100</div>
											<div class="load"><div class="load-line"></div></div>
											<div class="loaded">Нагрузка:
												<div id="percent_online_0">
													<div class="sonline_0"><span>0</span></div>
													<span class="percent_0"></span>
												</div>
											</div>
											<div class="tooltip2">
												<div id="tooltip_online">
													<div class="tonline"><span>88888</span></div>
													<span class="tooltip_on"></span>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="line"></div>
							<div class="Revolution-one clear_fix">
								<div class="Revolution_1 clear_fix">
									<div class="status">
										<div class="item" data-online="0">
											<div class="name">Craft-PvP x50</div>
											<div class="load"><div class="load-line"></div></div>
											<div class="loaded">Нагрузка:
												<div id="percent_online_2">
													<div class="sonline_2"><span>0</span></div>
													<span class="percent_2"></span>
												</div>
											</div>
											<div class="tooltip3">
												<div id="tooltip_online3">
													<div class="tonline3"><span>88888</span></div>
													<span class="tooltip_on3"></span>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>-->

							<div class="line"></div>
						</div>
						<div class="sta_foot">

						<div class="total_online">

							Personajes Online:  <b>0</b>

						</div>

						</div>
					</div>
					
					<div class="sb_top animated" style="animation-delay: 0.7s; animation-name: bounceInUp;">
						<div class="ss_titlefor"><img src="skin/diamond/images/intro.png"></div>
						<div class="sta_cont_top">
							<div class="clear"></div>
							<div style="margin: 10px 10px 20px 10px;">
								<iframe src="https://player.twitch.tv/?channel=bombit0" id="chat_embed" frameborder="0" scrolling="no" height="140" width="260"></iframe>
							</div>
						</div>
						<div class="sta_foot mar0"></div>
					</div>
					
					<div class="sb_top animated" style="animation-delay: 0.7s; animation-name: bounceInUp;">
						<div class="ss_titlefor"><img src="skin/diamond/images/stat_title.png"></div>
						<div class="sta_cont_top">
							<div class="top_players">



								<div id="tabvanilla" class="widget">
									<ul class="tabnav" style="margin: 0 0 0 57px;">
										
							<li><a href="#stats_0"></a></li>
                     <!--    <li><a href="#stats_1">x1200</a></li>
						<li><a style="cursor:pointer;">x100k</a></li>--> 
		
									</ul>
									
                <div id="stats_0" class="tabdiv">
					<div id="tabvanilla" class="widget">
						<ul class="tabnav" style="position: relative; top: 0px;">
							<li><a href="#stats_0_pvp">PvP</a></li>
							<li><a href="#stats_0_pk">PK</a></li>
							<li><a href="#stats_0_clan">Clan</a></li>
						</ul>
						<br>	
					</div>


	<div id="stats_0_pvp" class="tabdiv">
		<div class='block-left'>
            <table class="table  table-hover mix PvP">
	<thead>
		<tr>
			<th>#</th>
			<th>Nombre</th>
			<th>PvP</th>
		</tr>
	</thead>
	@if(!empty($pvps))
	@foreach($pvps as $pvp)
		<tbody>
			<tr class='two'>
				<td>#</td>
				<td><span class="scope"></span> {{$pvp->char_name}}</td>
				<td>{{$pvp->pvpkills}}</td>
			</tr>
		</tbody>
	@endforeach	
	@endif
</table>
		</div>
	</div>



    <div id="stats_0_pk" class="tabdiv">
		<div class='block-left'>
<!-- Модуль PvP Top -->
<table class="table  table-hover mix PK">
	<thead>
		<tr>
			<th>Nombre</th>
			<th>PK</th>
		</tr>
	</thead>
	@if(!empty($pks))
		@foreach($pks as $pk)
			<tbody>
				<tr class='two'>
					<td><span class="scope">1.</span> {{$pk->char_name}}</td></td>
					<td>{{$pk->pkkills}}</td>
				</tr>
			</tbody>
		@endforeach	
	@endif
	</table>
		</div>		
	</div>



					<div id="stats_0_clan" class="tabdiv">
					<!-- va el clan-->	
					</div>

                </div>


                
								</div>
							</div>
						</div>
						
					</div>
					<div class="sb_top animated" style="animation-delay: 0.9s; animation-name: bounceInUp;">
						<div class="ss_titlefor"><img src="skin/diamond/images/for_title.png"></div>
						<div class="sta_cont_top">
							<div class="forum_home">
								
							<div class="forum_item">
							<div class="fnews_image">
								<img src="http://forum.flame.pw/images/favatar.png" alt="">
							</div>
							<div class="fnews_content">
								<div class="forum_title">
									<a class='hvr-underline-from-center' href='http://forum.flame.pw/index.php?showtopic=2642' target='_blank'>Всем Привет&#33;</a>
								</div>
								<div class="forum_info">
									От <a class='hvr-underline-from-center' href='http://forum.flame.pw/index.php?showuser=3462' target='_blank'>knopo4ka</a>, 06 ноя 2016 в 00:55
								</div>
							</div>
							</div>
						
							<div class="forum_item">
							<div class="fnews_image">
								<img src="http://forum.flame.pw/images/favatar.png" alt="">
							</div>
							<div class="fnews_content">
								<div class="forum_title">
									<a class='hvr-underline-from-center' href='http://forum.flame.pw/index.php?showtopic=2328' target='_blank'>International… </a>
								</div>
								<div class="forum_info">
									От <a class='hvr-underline-from-center' href='http://forum.flame.pw/index.php?showuser=3352' target='_blank'>kofexmaker</a>, 03 ноя 2016 в 21:54
								</div>
							</div>
							</div>
						
							<div class="forum_item">
							<div class="fnews_image">
								<img src="http://forum.flame.pw/images/favatar.png" alt="">
							</div>
							<div class="fnews_content">
								<div class="forum_title">
									<a class='hvr-underline-from-center' href='http://forum.flame.pw/index.php?showtopic=2344' target='_blank'>Набор в кп</a>
								</div>
								<div class="forum_info">
									От <a class='hvr-underline-from-center' href='http://forum.flame.pw/index.php?showuser=3352' target='_blank'>kofexmaker</a>, 03 ноя 2016 в 21:54
								</div>
							</div>
							</div>
						
							<div class="forum_item">
							<div class="fnews_image">
								<img src="http://forum.flame.pw/images/favatar.png" alt="">
							</div>
							<div class="fnews_content">
								<div class="forum_title">
									<a class='hvr-underline-from-center' href='http://forum.flame.pw/index.php?showtopic=2269' target='_blank'>Vendetta*OldGame#</a>
								</div>
								<div class="forum_info">
									От <a class='hvr-underline-from-center' href='http://forum.flame.pw/index.php?showuser=3352' target='_blank'>kofexmaker</a>, 03 ноя 2016 в 21:53
								</div>
							</div>
							</div>
						
							</div>
						</div>
						<div class="sta_foot mar0">
							<a href="http://forum.flame.pw" target="_blank" id="btn_for"></a>
						</div>
					</div>
					
				</aside><!-- .right-sidebar -->
			</div>
		</div><!-- .middle-->
	</div><!-- .wrapper -->
	<footer class="footer">
		<div class="page_footer">
			<div class="to_up">
				<a href="" id="top"></a>
			</div>
			<ul class="foot_nav">
				<li><a href="{{ url('/') }}">Home</a></li>                   
				<li><a href="{{ url('/reglas') }}" >Reglas</a></li>
				<li><a href="{{ url('/informacion') }}">Server</a></li>
				<li><a href="{{ url('/donar') }}">Donaciones</a></li>
				<li><a href="{{ url('/registrarse') }}">Registrarse</a></li>
				<li><a href="{{ url('/descargas') }}">Download</a></li>
				<li><a href="{{ url('/soporte') }}">Soporte</a></li>
			</ul>
			<div class="adban">
				
			</div>
			<div class="copy">
			Copyright &copy; 2027 <a class="hvr-underline-from-center" href="">sharkdesing.com</a>
			</div>
		</div>		
	</footer><!-- .footer -->
	
	<!--<a style="position: fixed; margin-right: 50px; margin-bottom:50px; z-index:99999; bottom: 0; right: 0;" target="_blank" href="http://l2oops.com/"><img alt="Новые сервера Lineage 2, список серверов, анонсы серверов Lineage 2" border="0" title="Новые сервера Lineage 2, список серверов, анонсы серверов Lineage 2" src="http://l2oops.com/logo/left_down.png" width="186" height="59" border="0"></a>-->
</body>
<!--wrapper-->
<!-- Yandex.Metrika counter -->
<script type="text/javascript">
(function (d, w, c) {
    (w[c] = w[c] || []).push(function() {
        try {
            w.yaCounter36147790 = new Ya.Metrika({id:36147790,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true});
        } catch(e) { }
    });

    var n = d.getElementsByTagName("script")[0],
        s = d.createElement("script"),
        f = function () { n.parentNode.insertBefore(s, n); };
    s.type = "text/javascript";
    s.async = true;
    s.src = (d.location.protocol == "https:" ? "https:" : "http:") + "//mc.yandex.ru/metrika/watch.js";

    if (w.opera == "[object Opera]") {
        d.addEventListener("DOMContentLoaded", f, false);
    } else { f(); }
})(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="//mc.yandex.ru/watch/36147790" style="position:absolute; left:-9999px;" alt=""></div></noscript>
<!-- /Yandex.Metrika counter -->
</html>
