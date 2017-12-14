<!doctype html>
<html>
<head>
<meta charset="utf-8">

 @if(!empty($servidor))
      <title>{{$servidor->nombre}} | Lineage 2 {{$servidor->cronica}}</title> 
 @else
      <title>SharkEstudio.com | Lineage 2</title> 
  @endif

<link rel="stylesheet" type="text/css" href="skin\exter\css\style.css">
<link rel="stylesheet" type="text/css" href="skin\globales\css\font-awesome.css">
<link rel="stylesheet" type="text/css" href="skin\exter\css\engine.css">
<link rel="stylesheet" type="text/css" href="skin\exter\css\mi-css.css">
<link rel="stylesheet" type="text/css" href="skin\globales\css\bootstrap.css">
<link rel="stylesheet" href="skin\exter\fancybox\jquery.fancybox-thumbs.css?v=1.0.7">
<link rel="stylesheet" href="skin\exter\fancybox\jquery.fancybox.css?v=2.1.5" media="screen">
<link rel="stylesheet" href="skin\exter\fancybox\jquery.fancybox-buttons.css?v=1.0.5">


<script src="skin\exter\js\jquery-1.11.1.min.js"></script>
<script src="skin\globales\js\bootstrap.js"></script>
<script src="skin\exter\fancybox\jquery.mousewheel-3.0.6.pack.js"></script>
<script src="skin\exter\fancybox\jquery.fancybox.js?v=2.1.5"></script>
<script src="skin\exter\fancybox\jquery.fancybox-buttons.js"></script>
<script src="skin\exter\fancybox\jquery.fancybox-thumbs.js?v=1.0.7"></script>
<script src="skin\exter\fancybox\jquery.fancybox-media.js?v=1.0.6"></script>
<script src="skin\exter\js\jquery.slimscroll.js"></script>
<script src="skin\exter\js\scritps.js"></script>



<!-- VK Widget -->
<div id="vk_community_messages"></div>
</head>


<body>
<div class="wrapper">

    <div class="bg1"></div>
    <div class="bg2"></div>
    <div class="bg3"></div>
    
    

	 
    
    <ul class="navi">
    	<li><a href="index.htm" class="home"><p>Inicio</p></a></li>   
        <li><a href="index.htm" class="registrarse"><p>Registrarse</p></a></li>   
        <li><a href="index.htm" class="estadisticas"><p>Estadisticas</p></a></li>   
        <li><a href="index.htm" class="server"><p>Server</p></a></li>  
        <li><a href="index.htm" class="donaciones"><p>Donaciones</p></a></li>       
        <li><a href="index.htm" class="foro"><p>Foro</p></a></li>         
        <li><a href="http://f.l2exter.ru/index.php?/topic/204-opisanie-servera-kh10000/#entry653" class="about" target="_blank"></a></li>
	<li><a href="register.htm" class="register"></a></li>
        <li><a href="files.htm" class="files"></a></li>
        <li><a href="donates.htm" class="donate"></a></li>
        <li><a href="http://f.l2exter.ru" class="forum" target="_blank"></a></li>
    </ul>
    
    <!--Logo-->
    <div class="logo">
    @if(!empty($logo))
<img id="logo"  src="storage/paginas/home/logo/{{$logo->logo}}" alt="" class="" />
        @endif
        </div>
    <!--Logo-->
    
    <a href="files.htm" class="quickstart"></a>
    
    
    
    
    <!--Logo
    <ul class="quick-btn">
    	<li><a href="files.htm">Патч для игры<br>300 мб</a></li>
        <li><a href="http://torrentigri.xyz/mmorpg/9-lineage-2-interlude-skachat-torrent.html" target="_blank">Клиент игры<br>3.0гб</a></li>
    </ul>-->
    
    <ul class="slides">
    	<div class="unlim-width">
    	<li class="current"><a href="skin\exter\images\s2.jpg" class="fancybox"><img src="skin\exter\images\s2b.jpg"></a></li>    
        <li class="current"><a href="skin\exter\images\s4.jpg" class="fancybox"><img src="skin\exter\images\s4b.jpg"></a></li>
        <li class="current"><a href="skin\exter\images\s6.jpg" class="fancybox"><img src="skin\exter\images\s6b.jpg"></a></li>
        <li class="current"><a href="skin\exter\images\s6.jpg" class="fancybox"><img src="skin\exter\images\s6b.jpg"></a></li>
        </div>
    </ul>   
    
    <div class="laspost">
    	



<div class="item">
        	<div class="link"><a href='http://f.l2exter.ru/index.php?showtopic=254' title='open' target='_blank'>Just what’s more, you ...</a></div>
            <div class="author">Написал <a href='http://f.l2exter.ru/index.php?showuser=548' target='_blank'>VickieRayf</a> 08.04.17 22:30</div>
        </div>




<div class="item">
        	<div class="link"><a href='http://f.l2exter.ru/index.php?showtopic=208' title='open' target='_blank'>[Акция] Я выбираю EXTE...</a></div>
            <div class="author">Написал <a href='http://f.l2exter.ru/index.php?showuser=545' target='_blank'>iEbashQq</a> 06.04.17 19:57</div>
        </div>




<div class="item">
        	<div class="link"><a href='http://f.l2exter.ru/index.php?showtopic=253' title='open' target='_blank'>Всем удачного старта...</a></div>
            <div class="author">Написал <a href='http://f.l2exter.ru/index.php?showuser=544' target='_blank'>Yragan</a> 06.04.17 19:52</div>
        </div>




<div class="item">
        	<div class="link"><a href='http://f.l2exter.ru/index.php?showtopic=252' title='open' target='_blank'>Курим</a></div>
            <div class="author">Написал <a href='http://f.l2exter.ru/index.php?showuser=544' target='_blank'>Yragan</a> 06.04.17 19:51</div>
        </div>






    </div>
    
    <div class="prev"></div>
    <div class="next"></div>
    
    
<!-- Online / offline -->
<?php  
 $login = @fsockopen( $ip, 2106, $errno, $errstr, 1);
 $server = @fsockopen( $ip, 7777, $errno, $errstr, 1);
?>
    
    @if(!empty($login >= 1 and $server >= 1))
        <div class="status" style=" background:url(skin/exter/images/off.png);padding: 20px;
    margin: -25px -8px;">
        <div class="server">
            <div class="sname">x10&#039;000</div>
            <div class="item">Status: <span class="off cur-status">Ofline</span></div>
            <div class="item">Player Online: <span class="off">0</span></div>
            <div class="item">Croonica: <span>Interlude+</span></div>
        </div>
    </div>
    @else
       <div class="status" style=" background:url(skin/exter/images/on.png);padding: 20px;
    margin: -25px -8px;">
        <div class="server">
            <div class="sname">x10&#039;000</div>
            <div class="item">Status: <span class="on cur-status">online</span></div>
            <div class="item">Player Online: <span class="online">506</span></div>
            <div class="item">Croonica: <span>Interlude+</span></div>
        </div>
    </div>

    @endif
<!-- Online / offline -->
    

<!--LOGIN-->
    <div class="counters">
                
                @if(Auth::check())
                <div class='userarea'>
            <div class='loginarea'>  

                <div class="logged">{{$user->login}}</div>
                    <div class="loggedOptions">
                        <span class="default o1">
                            <span>PDU</span>
                            <div>
                    <a href="{{ url('/panel') }}" class="default noJquery">{{ trans('layout.Panel de Usuario') }}</a> 
                            </div>
                        </span>
                        <a href="{{ url('/logout') }}" class="default o2 noJquery">{{ trans('layout.Salir') }}</a>
                    </div>

                    </div>
            </div>

            
                @else
                
                <form id='form' action="{{ url('/login') }}" method="post">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">

                        <div class=' row'>
                            
                    <div class="input-group col-12">
                     
                      <input type="text" class="" name='email' placeholder='Email'  id="inputEmail" required="" aria-required="true" data-msg-required="Please enter your email address." data-msg-email="Please enter a valid email address.">
                    </div>

                    

                    <div class="input-group col-12">
                     
                      <input type='password' name='password'  class="" placeholder='Password' title='Password' id="inlineFormInputGroup" placeholder="Username">
                    </div>
                    
                  

                      <div class="input-group col-12">
                      <input type="submit"  class='btn btn-danger center-block' value='Login'>
                      </div>
                        </div>
                        <div class='ess'><a href='index-3.htm?page=forgot'>{{ trans('layout.Olvidaste tu contraseña?') }}</a></div>
                    </form>
                  @endif
                
    </div>
<!--LOGIN-->



    <!--Noticias-->
    <div class="main-content">
        @yield('content')
    </div>
    <!--Noticias-->


    <div class="copyright">
    	&copy; 2017 <a class="footertext" href="http://sharkestudio.com"> Sharkestudio.com </a> Lineage 2 Servers.
    </div>



    <ul class="fnavi">
    	<li><a href="index.htm">Inicio</a></li>
        <li><a href="http://f.l2exter.ru" target="_blank">Registrarse</a></li>
        <li><a href="http://f.l2exter.ru/index.php?/topic/204-opisanie-servera-kh10000/#entry653" target="_blank">Estadisticas</a></li>
        <li><a href="index-2.htm?f=stat">Server</a></li>
        <li><a href="donates.htm">Descargas</a></li>
        <li><a href="files.htm">Donaciones</a></li>
        <li><a href="register.htm">Foro</a></li>
    </ul>
    
</div>


<!--modale
<div class="overlay">
	<div class="popup lk">
    	<div class="close">x</div>
        <div class="title">Личный кабинет</div>
    <section class="lk">
    
    
    
        <form action="" method="post" name="dologin">
        <input type="hidden" value="1" name="doLogin">
        <input type="submit" style="display:none">
        
        
        			<div class="item">
                        <p>Логин:</p>
                        <input type="text" name="sw_name" maxlength="16" placeholder="Логин">
                    </div>
                    <div class="item">
                        <p>Пароль:</p>
                        <input type="password" name="sw_pass" maxlength="16" placeholder="********">
                    </div>
                    
                    
                    
                    <div class="item">
                    	<p><div id='sw1-captcha' class='captcha'><a onclick="reload1(); return false;" href='#'><img src='module\antibot.jpg' alt='code' title='Обновить' border='0'></a></div></p>
                        <input type="text" class="s-input" name="l2sec_code" maxlength="10" placeholder="Введите код">
                    </div>
                    
                    
                    <a href="index.htm" class="regbutton" onclick="javascript: document.dologin.submit(); return false;">Войти</a>
					<br>
                    <a href="index-3.htm?f=forget" class="btn-blue">Забыли пароль?</a>
                    <a href="prefix.htm" class="btn-blue">Забыли префикс?</a>
        </form>
    
</section>
    </div>
</div>
modale-->



</body>
</html>
