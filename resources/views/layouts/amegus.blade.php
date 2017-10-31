<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

	@if(!empty($servidor))
      <title>{{$servidor->nombre}} | Lineage 2 {{$servidor->cronica}}</title> 
 @else
      <title>SharkEstudio.com | Lineage 2</title> 
  @endif


	<link rel="shortcut icon" href=""> 
	<link rel="stylesheet" href="skin/Amegus/css/style.css" type="text/css">
    <link rel="stylesheet" type="text/css" href="skin/Amegus/css/engine.css">

	<script src="skin/Amegus/js/jquery-1.8.3.min.js"></script>
	<script src="skin/Amegus/js/jquery-ui.min.js"></script>
	<script src="skin/Amegus/js/jquery.nivo.slider.pack.js"></script>
	<script src="skin/Amegus/js/m.js"></script>




	<script type="text/javascript">
	$(window).load(function() {
		$('#slider').nivoSlider();
	});
	</script>





</head>

<div class='langs'>  
       
    <a href="{{ url('lang', ['en']) }}" class='en noJquery' title='English'><span></span></a>

    <a href="{{ url('lang', ['es']) }}" class='es noJquery' title='Espa&ntilde;ol'><span></span></a>

    <a href="{{ url('lang', ['br']) }}" class='pt noJquery' title='Portugu&ecirc;s'><span></span></a>

    </div>   


<body>
	<div id="body_top">
		<div id="body_bottom">
			<div id="wrapper">


				<div id="top_panel">
				<div id="menu">
					<a href="{{ url('/') }}">{{ trans('layout.inicio') }}</a>
					<a href="{{ url('/registrarse') }}" >{{ trans('layout.registrarse') }}</a>
					<a href="{{ url('/informacion') }}">{{ trans('layout.server') }}</a>
					<a href="{{ url('/descargas') }}">{{ trans('layout.Descargas') }}</a>
					<a href="{{ url('/donar') }}">{{ trans('layout.Donaciones') }}</a>
					<a href="{{ url('/top-pvp') }}">{{ trans('layout.Estadísticas') }}</a>
					<a href="{{ url('/foro') }}" target="_blank">{{ trans('layout.foro') }}</a>
				</div>

				</div>
				<div id="header">
				</div>
				<div id="menu_bg">
				</div>
				<div id="button_bg">
					<a href="files.htm"></a>
				</div>
				<div id="content"><div id="left_block">
	<div id="left_top">
	</div>
	<div id="market_bg">		
	
	</div>
	
	<div id="left_bottom">
	</div>
	
</div>
<div id="right_block">
	<div id="account_bg">


	<div id="login" class="login">
		        <form id="login_form" action="" method="post" name="dologin">
				<input id="login_input" type="text" name="sw_name" maxlength="16" placeholder="Логин">
				<input id="password_input" type="password" name="sw_pass" maxlength="16" placeholder="Password">
                    <a href="index-2.htm?f=forget" class="btn-blue">Забыли пароль?</a>
			</form>
				<div id="login_button">
					<a href="cp.htm"><button></button></a>
				</div>
				</div>
	</div>
	
	
	<!-- Status -->
	<div id="status_bg">
				<div class="server">
				
    

<div class="s_online">0</div>
            <div class="s_bar">
            <div style="height: 0%" id="s_bar_l2b"></div></div>
            <div class="s_name">x1200</div>


		</div>
			</div>
			
	<div id="right_bottom">
	</div>
</div>	

<div id="center_block">
<div id="slider_bg">
	<div id="slider-wrapper">
		<div id="slider" class="nivoSlider">
			<img src="" alt="" title="#htmlcaption1">
			<img src="" alt="" title="#htmlcaption2">
		</div>

		<div id="htmlcaption1" class="nivo-html-caption">
			<span class="slide_title"><center><a href="#">Открытие сервера x1200 - 31 Марта в 20:00 по МСК</a></center></span>
		</div>
		<div id="htmlcaption2" class="nivo-html-caption">
			<span class="slide_title"><center><a href="http://forum.amegus.ru/index.php?/topic/6-bonusy-za-zakhvat-zamkov/" target="_blank">Власть замков - Реальные Деньги</a></center></span>
			
		</div>
	</div>

	
	</div><div id="news">
	<div id="news_title">
		НОВОСТИ
	</div>


	@yield('content')
	
</div>
</div>
				</div>
				<div id="footer">
					<div id="f_menu">
						<a href="index.htm">Главная</a>
						<span></span>
						<a href="http://forum.amegus.ru" target="_blank">Форум</a>
						<span></span>
						<a href="files.htm">Файлы</a>
						<span></span>
						<a href="register.htm">Регистрация</a>
						<span></span>
						<a href="unitpay.htm">Пожертвования</a>
						<span></span>
						<a href="http://forum.amegus.ru/index.php?/topic/2" target="_blank">О сервере</a>
					</div>
					
					<div id="copyright">
						COPYRIGHT 2017 <a href="index.htm">Amegus.ru</a><br><p>
					</div>



				</div>
			</div>
		</div>
	</div>
</body>
</html>
<!-- 2008-2013 © http://stressweb.ru -->
<!-- STRESS WEB rev.13 -->