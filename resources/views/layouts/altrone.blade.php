<!DOCTYPE html>
<html lang="en">
<head>
  <title>{title}</title>
  <link rel="shortcut icon" href="{url}/favicon.ico">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta name="Description" content="stress, lineage2, la2, stressweb.ru">
  <meta name="Keywords" content="stress, lineage2, la2, stressweb.ru">
  <link href="skin/altrone/css/style.css" rel="stylesheet" type="text/css" />
  <link href="skin/altrone/css/bootstrap.css" rel="stylesheet" type="text/css" />
  <link href="skin/altrone/css/engine.css" rel="stylesheet" type="text/css" />
  <link href="skin/altrone/css/animate.css" rel="stylesheet" type="text/css" />
  <link href="skin/altrone/css/slides.css" rel="stylesheet" type="text/css" />
  <script type="text/javascript" src="skin/altrone/js/jquery-3.1.0.min.js"></script>
  <script type="text/javascript" src="skin/altrone/js/bootstrap.js"></script>
  <script type="text/javascript" src="skin/altrone/js/jquery.tools.min.js"></script>
  <script type="text/javascript" src="skin/altrone/js/progress.js" ></script>
  <script type="text/javascript" src="skin/altrone/js/to-top.js"></script>
  <script type="text/javascript" src="skin/altrone/js/jquery.jrumble.1.3.min.js"></script>
  <script src="skin/altrone/js/slides.min.jquery.js"></script>
  <script>
    $(function(){
      $('#slides').slides({
        preload: true,
        preloadImage: 'skin/altrone/images/loading.gif',
        play: 5000,
        pause: 2500,
        hoverPause: true,
        animationStart: function(){
          $('.caption').animate({
            bottom:-35
          },100);
        },
        animationComplete: function(current){
          $('.caption').animate({
            bottom:0
          },200);
          if (window.console && console.log) {
            // example return of current slide number
            console.log(current);
          };
        }
      });
    });
  </script>
  
</head>
<body>

<div id="top-text-panel">

  <!-- float images
  <div style="float: right;">
    <div style="margin-top: 7px; margin-left: -200px;">
    <a class="temno" href="http://l2design.ru">
    <img src="http://l2design.ru/banners/88x31.gif" title="Шаблоны Lineage 2" alt="Шаблоны Lineage 2"></a><a class="temno" style="margin-left: 10px;" href="http://l2design.ru">
    <img src="http://l2design.ru/banners/88x31.gif" title="Шаблоны Lineage 2" alt="Шаблоны Lineage 2"></a>
    </div>
  </div>-->

  </div>

  
<div id="body-top" style="margin-top: 0px;">
    <div id="body-bottom">
      <div id="wrapper">
        <div id="header">
          <div id="logo"><a href="/"></a></div>
        </div>

<!--MENU -->
<div id="navigation">
  <li><a href="{{ url('/') }}">INICIO</a></li>
  <li><a href="{{ url('/registrarse') }}">REGISTRARSE</a></li>
  <li><a href="{{ url('/informacion') }}">SERVER</a></li>
  <li><a href="{{ url('/descargas') }}">DOWNLOAD</a></li>
  <li><a href="{{ url('/donar') }}">DONACIONES</a></li>
  <li><a href="{{ url('/top-pvp') }}">ESTADISTICAS</a></li>
  <li class="last"><a href="/index.php?f=donate">FORO</a></li>
</div>  
<!--MENU -->      
        
        <div id="left-sideblock">



          <div id="left-block" class="servers">
            <div class="server">
  <div id="serv-info">
    <div id="s-name">{name} <b style="color: #e01c2a;"></b></div>
    <b><div id="online" class="{game}" style="margin-right: 0px;margin-top: -3px;font-size: 15px;"><div id="accountbtn">{online}</div></div></b>
  </div>
  <div class="box-1">
    <div class="progress" data-load="{online}" data-max-load="1000">
      <div class="progress-1"></div>
    </div>
  </div>
</div>
          </div>
          <div id="left-block" style="margin-bottom: 25px;">
            <div id="block-title">
              <img src="skin/altrone/images/top.png" alt="">
            </div>
            <div id="top-players">
              <div id="top-line" class="top-head">
                <div id="top-left" class="tl">Nombre</div>
                <div id="top-right" class="tl">PVP</div>
              </div>
              @foreach($pvps as $pvp)
                <div id='top-line'>
                  <div id='top-left' class='tl'>
                    <span>{{$pvp->char_name}}</span>
                  </div>
                   <div id='top-right' class='tl'> {{$pvp->pvpkills}}</div>
                  </div>
                   @endforeach  
            </div>
            <hr><br>
            <div id="top-players">
              <div id="top-line" class="top-head">
                <div id="top-left" class="tl">Nombre</div>
                <div id="top-right" class="tl">PK</div>
              </div>
              @foreach($pks as $pk)
                <div id='top-line'>
                  <div id='top-left' class='tl'>
                    <span>{{$pk->char_name}}</span>
                  </div>
                   <div id='top-right' class='tl'> {{$pk->pkkills}}</div>
                  </div>
                   @endforeach  
            </div>

          </div>
          
         <!-- <div id="left-block">
            <div id="block-title" style="margin-top: -18px;">
              <img src="skin/altrone/images/my.png" alt="">
              </div>
            <center class="text animated bounceInLeft" style="margin-top: 20px;">
              <img src="skin/altrone/images/server.png" alt="">
            <font color="98a3b3">
              У нас самые надежные и быстрые сервера Lineage 2 без лагов и вайпов 365 дней в году!
              <br><br>
              <img src="skin/altrone/images/100.png" alt="" style="margin-top: 5px;margin-bottom: -32px;">
              </font>
            </center>
          </div>-->
          

         <!-- <div id="left-block" style="margin-top: -15px;">

            <div id="block-title">
              <img src="skin/altrone/images/social.png" alt="">
            </div>
            <div id="socials">
            
              <div id="vk"><noindex><a rel="nofollow" href="http://vk.com/my.altrone">ВКонтакте</br><span>http://vk.com/my.altrone</span></a></noindex></div>
            </div>
          </div>-->

          
        </div>
        
        <div id="center-block"> 

          <div id="example">
        <img src="skin/altrone/images/new-ribbon.png" width="112" height="112" alt="New Ribbon" id="ribbon">
        <div id="slides">
            <div class="slides_container">
        <div>
            <a><img src="skin/altrone/images/slider/1.jpg" width="460" height="112" alt="Slide 1"></a>
          </div>
          <div>
            <a><img src="skin/altrone/images/slider/2.jpg" width="460" height="112" alt="Slide 2"></a>
          </div>
        </div>
        <a href="#" class="prev"><img src="skin/altrone/images/arrow-prev.png" width="24" height="43" alt="Arrow Prev"></a>
        <a href="#" class="next"><img src="skin/altrone/images/arrow-next.png" width="24" height="43" alt="Arrow Next"></a>
      </div>
      <img src="skin/altrone/images/example-frame.png" width="739" height="341" alt="Example Frame" id="frame">
    </div>    


          <div style="color: rgb(57, 62, 82);"><br><div style="margin-top: -15px;">

          @yield('content')

            


              
            </div>
          </div>

</div>
        <div id="right-sideblock">


          <div id="right-block">
            <div id="block-title">
              <img src="skin/altrone/images/account.png" alt="">
            </div>

            <div class='userarea'><!--astar userarea-->
    
                
                

            <div class='loginarea'>          
                @if(Auth::check())

                <div class="logged">{{$user->login}}</div>
                    <div class="loggedOptions">
                        <span class="default o1">
                            <span>PDU</span>
                            <div>
                    <a href="{{ url('/panel') }}" class="default noJquery">Panel de Usuario</a> 
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
                            <input type="submit"  class='btn btn-danger center-block' value='Login'>        
                        </div>
                        <div class='ess'><a href='index-3.htm?page=forgot'>{{ trans('layout.Olvidaste tu contraseña?') }}</a></div>
                    </form>
                  @endif
                </div>
            </div>

          </div>



          <div id="right-block">
            <div id="block-title">
              <img src="skin/altrone/images/account.png" alt="">
            </div>
            <a href="/index.php?f=cp"><div class="account last"><div id="accountbtn"></div></div></a>
                        <center><a class="rec" href="/index.php?f=forget">Забыли пароль?</a></center>
                        <center><a class="reg" href="/index.php?f=register">Регистрация</a></center>
          </div>

          <!--
          <div id="right-block" style="margin-bottom: 15px;">
            <div id="block-title">
              <img src="skin/altrone/images/lastpost.png" alt="">
            </div>
            <div id="last-block">
              <div id='last-line'>
              {link}
              Автор: {author}
              </div>
            </div>
          </div>


          <div id="right-block">
          <div id="block-title" style="margin-top: 0px; margin-bottom: 40px;">
              <img src="skin/altrone/images/support.png" alt="">
              </div>
            <center class="text animated bounceInRight">
               <img src="skin/altrone/images/contacts.png" alt="" style="margin-top: -20px;">
             <font color="98a3b3">
             Теперь Вам не нужно ждать часами ответ от Администрации! 
             У нас самая быстрая Техническая Поддержка, которая готова мгновенно ответить Вам и решить проблему.
             <br>
             <div id="button-contact">
             <a href="/index.php?f=support" style="margin-left: 5px;">
             </a>
             </div>
              </font>
            </center>
          </div>-->


        </div>
        <div class="clr"></div>
        <div style="padding-top: 130px;"><div id="footer">
  <div id="rights">
  &copy; 2017 <a class="footertext" href="http://sharkdesing.com">Sharkdesing.com</a> Lineage 2 Servers.
  <br><br>

  </div>
</div></div>
      </div>
    </div>
  </div>
  <div id="scroll-top"><a id="gotop" class="scrollTop" href="#" onclick="top.goTop(); return false;"></a> </div>
  <script>
$(function(){
  $('#accountbtn').jrumble();
  var demoStart = function(){
    $('#accountbtn').trigger('startRumble');
    setTimeout(demoStop, 1000);
  };
  var demoStop = function(){
    $('#accountbtn').trigger('stopRumble');
    setTimeout(demoStart, 5000);
  };
  demoStart();    
  $('.view-source pre').hide();
  $('.view-source a').toggle(function(){
  $(this).html('Hide Source');
  }, function(){
  $(this).html('View Source');
  });
});
</script>
</body>
</html>