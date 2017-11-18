<!DOCTYPE html>
<html >
<head>

  @if(!empty($servidor))
      <title>{{$servidor->nombre}} | Lineage 2 {{$servidor->cronica}}</title> 
 @else
      <title>SharkEstudio.com | Lineage 2</title> 
  @endif

  <link rel="shortcut icon" href="{url}/favicon.ico">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta name="Description" content="L2Jserver, lineage 2 free to play!">
  <meta name="keywords" content="#1 desarrollo web , lineage 2 , paginas web , web , app , software web , software app , responsive , interlude , software , apliacaciones , web responsive , diseño web , web developers , sharkestudio , shark estudio" />


  <link href="skin/hawk/css/style.css" rel="stylesheet" type="text/css" />
  <link href="skin/globales/css/bootstrap.css" rel="stylesheet" type="text/css" />
  <link href="skin/hawk/css/styles_ru.css" rel="stylesheet" type="text/css" />
  <link href="skin/hawk/css/jquery.mCustomScrollbar.css" rel="stylesheet" type="text/css" />
  <link href="skin/hawk/css/slider.css" rel="stylesheet" type="text/css" />
  <link href="skin/hawk/css/animate.css" rel="stylesheet" type="text/css" />
  <link href="skin/hawk/css/facebook-popup.css" rel="stylesheet" type="text/css" />
  <link href="skin/hawk/css/mi-css.css" rel="stylesheet" type="text/css" />
  <link href="skin/globales/css/font-awesome.css" rel="stylesheet" type="text/css" />

  <script type="text/javascript" src="skin/hawk/js/jquery-1.11.3.min.js"></script>
  <script type="text/javascript" src="skin/globales/js/bootstrap.js"></script>
  <script type="text/javascript" src="skin/hawk/js/scripts.js"></script>
  <script type="text/javascript" src="skin/hawk/js/slider.js" ></script>
  <script type="text/javascript" src="skin/hawk/js/easypaginate.js"></script>
  <script type="text/javascript" src="skin/hawk/js/jquery.mCustomScrollbar.js"></script>
  <script type="text/javascript" src="skin/hawk/js/facebook-popup.js"></script>


<script type="text/javascript">   
    jQuery(function($){  
        $('#shares_inner').easyPaginate({
            step:1
        });
    });        
  </script>
  
</head>








<body id="index" class="ru">







<div id="general">
  <div id="wrapper">
    


<div class="languages">
<ul>
  <li>
                     <!--si la session es english -->
@if(\Session::get('lang') == 'en')
<div class='all en'>
@endif
 </li>
 <li>
              <!--si la session es español -->
@if(\Session::get('lang') == 'es' or \Session::get('lang') == '' )
<div class='all es'>
@endif
   </li>
</ul>
  </div>
  

    <div id="navi">
      <ul>
        <li><a href="{{ url('/') }}"></a></li>
        <li><a href="{{ url('/registrarse') }}"></a></li>
        <li><a href="{{ url('/informacion') }}"></a></li>
        <li><a href="{{ url('/descargas') }}"></a></li>
        <li><a href="{{ url('/donar') }}"></a></li>
        <li><a href="{{ url('/top-pvp') }}"></a></li>
        <li class="last"><a href=""></a></li>
      </ul>
    </div>


     @if(!empty($logo))
       <br><br><br>
<img id="logo" height="350"  width="450" src="storage/paginas/home/logo/{{$logo->logo}}" alt="" class="center" />
        @endif


    <!--статус-->
    <div id="server_status">
      <div class="total_block"></div>
      <div id="server_inner">
        
        

<div id="server_block">







<div class="status_THRNpicture"></div>

<div class="status_item">

<div class="status_title">Multi-Craft x100<p></div>

<div class="status_online"><p> 0</p></div>

</div>







<div class="status_THRNpicture"></div>

<div class="status_item">

<div class="status_title">Classic PvP x1200<p></div>

<div class="status_online"><p> 0</p></div>

</div>



</div>



<div class="server_total">

    <div class="total_first"></div> 

    <span>Usuarios en Linea : <strong style="color:green;">0</strong></span> 

    <div class="total_second"></div>

</div>








                

<style type="text/css">
    .status_item:nth-child(1) .status_title p:before {
        content: 'interlude';
    }
    .status_item:nth-child(2) .status_title p:before {
        content: 'interlude';
    }
    .status_item:nth-child(3) .status_title p:before {
        content: 'interlude';
    }
    .status_item:nth-child(4) .status_title p:before {
        content: 'interlude';
    }
    .status_item:nth-child(5) .status_title p:before {
        content: 'interlude';
    }
</style>      </div>
      <a class="server_prev"><span></span></a>
      <a class="server_next"><span></span></a>
    </div>
        <!--стрим блок-->
        
<div id="shares_block">


 <div class='userarea'><!--astar userarea-->
    

            <div class='loginarea'>          
                @if(Auth::check())

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

            
                @else
                
                <form id='form' action="{{ url('/login') }}" method="post">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">

                        <div class='fieldsBox row'>
                            
                    <div class="input-group col-12">
                      <div class="input-group-addon"><li class="fa fa-user"></li></div>
                      <input type="text" class="" name='email' placeholder='Email'  id="inputEmail" required="" aria-required="true" data-msg-required="Please enter your email address." data-msg-email="Please enter a valid email address.">
                    </div>

                    

                    <div class="input-group col-12">
                      <div class="input-group-addon"><li class="fa fa-lock"><br></li></div>
                      <input type='password' name='password'  class="" placeholder='Password' title='Password' id="inlineFormInputGroup" placeholder="Username">
                    </div>
                    
                  

                      <div class="col-12">
                      <input type="submit"  class='btn btn-danger center-block' value='Login'>
                      </div>
                        </div>
                        <div class='ess'><a href='index-3.htm?page=forgot'>{{ trans('layout.Olvidaste tu contraseña?') }}</a></div>
                    </form>
                  @endif
                </div>
            </div>



<div class="pagination">
<ol>
<li></li>
<li></li>
<li></li>
<li></li>
</ol>
</div>
</div>
        <!--стрим блок-->
    <div id="stream_block">
      <!--что бы трансляция с твича сразу не начиналась при загрузке страницы, в конце ссылки видео после названия канала я добавил код &autoplay=false-->
    </div>


    <!--content-->
    <div id="content_wrapper">
      <div id="content_wrapper_inner">
                



 @yield('content')

<div id='pager'><a class='nopager'>1</a>
<a href='index-7.htm?f=news&page=2'>2</a>
</div>    
</div>
    </div>
    <!--footer-->
    <div id="footer">


      <ul class="socials">
        
      </ul>

      <div class="copycenter">
         &copy; 2017 <a class="footertext" href="http://sharkestudio.com">Sharkestudio.com</a> Lineage 2 Servers.
      </div>
    </div>
  </div>
</div>

<!--скрипт слайдера-->
<script>
$(document).ready(function() {        
  $('#banner').bjqs({
          'animation' : 'fade',
          'width' : 800,
          'height' : 95,
          'rotationSpeed': 10000
  });        
});
</script> 

</body>
</html>
<!-- 2008-2013 © http://stressweb.ru -->
<!-- STRESS WEB rev.13 -->



























