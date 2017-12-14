<!DOCTYPE html>
<html lang="en">
    <head>

    @if(!empty($servidor))
      <title>{{$servidor->nombre}} | Lineage 2 {{$servidor->cronica}}</title> 
 @else
      <title>SharkEstudio.com | Lineage 2</title> 
  @endif


        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="Description" content="L2Jserver, lineage 2 free to play!">
        <meta name="keywords" content="#1 desarrollo web , lineage 2 , paginas web , web , app , software web , software app , responsive , interlude , software , apliacaciones , web responsive , diseño web , web developers , sharkestudio , shark estudio" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
        <meta name="format-detection" content="telephone=no">
        <link rel="icon" href="skin/animus/images/favicon.ico" type="image/x-icon" />
        
        {!!Html::style('skin/globales/css/bootstrap.css')!!}
        {!!Html::style('skin/animus/css/style.css')!!}
        {!!Html::style('skin/animus/css/mi-css.css')!!}


        

    
    </head>


<body>
    <div id="wrapper">
        <div class="bg-top"></div>
        <div class="bg-body"></div>
        <div class="bg-bottom"></div>


        <div class="navigation">
            <ul>
                <li> <a href="{{ url('/') }}">Home</a> </li>
                <li> <a href="#">Info</a>
                    <ul class="navi">
                        <li><a href="{{ url('/top-pvp') }}" class="more">Estadisticas</a>
                        </li>
                        <li><a href="{{ url('/reglas') }}">Reglas</a></li>
                        <li><a href="{{ url('/soporte') }}">Soporte</a></li>
                        <li><a href="{{ url('/informacion') }}">Servidor</a></li>
                        <li><a href="{{ url('/donar') }}">Donaciones</a></li>
                    </ul>
                </li>
                <li><a href="{{ url('/boss') }}">Raid Boss</a></li>
                <li><a href="{{ url('/siege') }}">Castillos</a></li>
                <li> <a href="#">Forum</a> </li>
                <li> <a href="{{ url('/descargas') }}">Descargar</a> </li>
                <li> <a href="{{ url('/registrarse') }}" >Registrarse</a> </li>
                <li> <a href="{{ url('/loguear') }}" >Login</a> </li>
            </ul>
        </div>
<h1>
        <span style="display:none;">Play FREE on lineage 2 classic server</span>
        <a href="/" class="logo"></a>
        </h1>

        <div class="server">

                            <div class="server-block">
                    <div class="icon"><img src="skin/animus/images/serv-icon5.png"></div>
                    <div class="name">Server status: <br/><span>Talking Island</span><span2></span2></div>
                                        <div class="online"><span style=" color: green; ">online</span></div>
                </div>
            
        </div>

        <div class="slider">


            <div class="pages">
                <a class="active">1</a>
                <a>2</a>
                <a>3</a>
            </div>

            <div class="item active">
                <a href="http://l2classic.club/forum/topic/2197-talking-island-x3-opening-october-24th-description/" target="_blank" class="slider-link"></a>
                <div class="slider-im"><img src="skin/animus/images/slider14.png"></div>
                <div class="read-more" style="top: 175px; right: 185px;">Read more ...</div>
            </div>
            <div class="item">
                <a href="http://l2classic.club/forum/topic/6436-starting-pack-its-time-to-join-classic/" target="_blank" class="slider-link"></a>
                <div class="slider-im"><img src="skin/animus/images/slider7.png"></div>
                <div class="read-more" style="top: 315px; right: 365px;">Read more ...</div>
            </div>
            <div class="item">
                <a href="http://l2classic.club/forum/topic/6438-lucky-wheel/" target="_blank" class="slider-link"></a>
                <div class="slider-im"><img src="skin/animus/images/slider8.png"></div>
                <div class="read-more" style="top: 85px; left: 400px;">Read more ...</div>
            </div>

        </div>

        <div class="content">
            <div id="newsRowCont">

             @yield('content')     
    


    <div class="arhive"><a href="http://l2classic.club/forum/index.php?/forum/40-news/">News archive</a><div class="arhive-im"></div></div>

    <script>
        $('.page_navigator #pager ul li a').on('click',function(e){
            e.preventDefault();
            var thisUrls = $(this).attr('href');
            $.ajax({
                url: thisUrls,
                type:'GET',
                success: function(data){
                    $('#newsRowCont').html(data);
                }
            });
            return false;
        });
    </script>
</div>
        </div>

        <div class="right-side">
            <a  href="/account/login" class="lk">Account manager</a>
            <a  href="https://discord.gg/A8VdVKT" class="lk">Discord</a>
            <div class="forum">
                <div class='title-h2'>last forum posts:</div>
                
                    <div class="forum-block">
            <div class="forum-icon"><img src="skin/animus/images/for-icon.png" alt="news-image"></div>
            <div class="topic"><a href='http://l2classic.club/forum/index.php?/topic/15550-advice-for-newbie' target='_blank' >Advice for newbie</a></div>
            <div class="info"><a style='color: #302519;' href='http://l2classic.club/forum/index.php?/profile/10583-kktnxbye' target='_blank'>kktnxbye</a> - 2017-05-25 07:31:24</div>
            <div class="clear"></div>
        </div>
                    <div class="forum-block">
            <div class="forum-icon"><img src="skin/animus/images/for-icon.png" alt="news-image"></div>
            <div class="topic"><a href='http://l2classic.club/forum/index.php?/topic/15541-chn' target='_blank' >CHN</a></div>
            <div class="info"><a style='color: #302519;' href='http://l2classic.club/forum/index.php?/profile/8655-BlackJack' target='_blank'>BlackJack</a> - 2017-05-24 17:48:39</div>
            <div class="clear"></div>
        </div>
                    <div class="forum-block">
            <div class="forum-icon"><img src="skin/animus/images/for-icon.png" alt="news-image"></div>
            <div class="topic"><a href='http://l2classic.club/forum/index.php?/topic/15560-since-the-9vs9-is-the-new-trend' target='_blank' >Since the 9vs9 is the new trend</a></div>
            <div class="info"><a style='color: #302519;' href='http://l2classic.club/forum/index.php?/profile/8655-BlackJack' target='_blank'>BlackJack</a> - 2017-05-26 00:28:57</div>
            <div class="clear"></div>
        </div>
                    <div class="forum-block">
            <div class="forum-icon"><img src="skin/animus/images/for-icon.png" alt="news-image"></div>
            <div class="topic"><a href='http://l2classic.club/forum/index.php?/topic/15550-advice-for-newbie' target='_blank' >Advice for newbie</a></div>
            <div class="info"><a style='color: #302519;' href='http://l2classic.club/forum/index.php?/profile/6660-GanjaRockzZz' target='_blank'>GanjaRockzZz</a> - 2017-05-25 07:31:24</div>
            <div class="clear"></div>
        </div>
                </div>

            <div class="donate-block">
                <div class="fb-page" data-href="https://www.facebook.com/Classic-685542171547133/" data-width="325" data-height="380" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true" data-show-posts="true"></div>
            </div>
        </div>



        <div class="bottom">
            <div class="left">
            </div>
            <div class="right">
                <div class="navi">
                    <ul>
                        <li> <a href="/">Home</a> </li>
                        <li> <a href="http://l2classic.club/forum/">Forum</a> </li>
                        <li> <a href="/download">Download</a> </li>
                        <li> <a href="/account/reg">Registration</a> </li>
                        <li> <a href="http://l2classic.club/forum/34-rules/">Rules</a> </li>
                        <li> <a href="http://l2classic.club/forum/39-events/">Shares</a> </li>
                        <li> <a href="/stats">Statistics</a> </li>
                        <li> <a href="/account/login">Account manager</a> </li>
                    </ul>
                </div>

               
                <div class="bottom-text">
                    
                </div>
            <div class="copyright">&copy; 2017 <a class="footertext" href="http://sharkestudio.com">Sharkestudio.com</a> Lineage 2 Servers.</div>

            </div>
        </div>

    </div>

<div style="display: none;">
    <div class="box-modal" id="FBlike">
        <div class="FBlike-header">
            <h2>Classic 1.5 is LIVE!</h2>
            <div class="box-modal_close " id=""></div>
            <div id="FBCOMM_iframe"  title="<3" class="fb-like" style="overflow: hidden; position: absolute; display: block; z-index: 12500000; opacity: 0; line-height: 1; width: 44px; height: 20px; right: -18px; top: -4px;">
                <div class="socialiframetrack_facebook" style="float:left; margin-right:12px;" id="iframe_facebook_like">
                    <iframe src="//www.facebook.com/plugins/like.php?href=https://www.facebook.com/Classic-685542171547133/timeline/&amp;send=false&amp;layout=button&amp;width=70&amp;show_faces=false&amp;font=arial&amp;colorscheme=light&amp;action=like&amp;locale=en_PI&amp;height=80" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:70px; height:80px;" allowTransparency="true"></iframe>
                </div>
            </div>
        </div>
        <div class="FBlike-body">
            <div class="fb-like" data-href="https://www.facebook.com/Classic-685542171547133/" data-layout="standard" data-action="like" data-show-faces="true" data-share="true" style="width: 300px; display: block; margin: 0 auto;"></div>
        </div>
    </div>
</div>

{!!Html::script('skin/animus/js/jquery-1.9.0.min.js')!!} 
{!!Html::script('skin/globales/js/bootstrap.js')!!} 
{!!Html::script('skin/animus/js/jquery.arcticmodal-0.3.min.js')!!} 
{!!Html::script('skin/animus/js/jquery.iframetracker.js')!!} 
{!!Html::script('skin/animus/js/openapi.js')!!} 
{!!Html::script('skin/animus/js/jquery.cookie.js')!!} 
{!!Html::script('skin/animus/js/script.js')!!} 


<!--FB like-->

</body>
</html>