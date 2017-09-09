<!doctype html>
<html lang="ru">
<head>

<!-- META -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="robots" content="index, follow" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="description" content="Servidor de Lineage 2 Interlude-C4 Subclasse Acumulativas">
    <meta name="author" content="">
    <meta name="theme-color" content="#141619">
    

    <meta content="Server de L2 Interlude Subclasse Acumulativas" name="description" />
    <meta content="lineage 2,Interlude,l2,Subclasse Acumulativas,l2 servers interlude,server l2 interlude,l2 lineage,l2 interlude client,lineage ll,l2 interlude servers,l2 hopzone interlude,lineage 2 c4,lineage ii,lineage 2 interlude,l2 c6,lineage top servers,lineage 2 classic,server pvp,top server,l2top200,l2 top,l2 eu,top l2,lineage download,lineage classic,lineage 2 c4,lineage 2 download,lineage 2 interlude,lineage interlude,lineage 2 interlude download,lineage 2 high five,l2 high five,lineage 2 servers,server l2,l2 h5,l2 interlude servers,l2 pvp,lineage 2 private server" name="keywords" />
    

    
    <!-- TITULO -->
     @if(!empty($servidor))
      <title>{{$servidor->nombre}} | Lineage 2 {{$servidor->cronica}}</title> 
     @else
      <title>SharkEstudio.com | Lineage 2</title> 
     @endif


    <!-- FAVICON -->
    <link rel="shortcut icon" href="skin/esmerald/skin/esmerald/images/favicon.ico">

    <!-- CORE CSS -->
    {!!Html::style('skin/esmerald/css/bootstrap-3.2.css')!!}
    {!!Html::style('skin/esmerald/css/pager.css')!!}
    {!!Html::style('skin/esmerald/css/style.min.css')!!}
    {!!Html::style('skin/esmerald/css/ghtweb.css')!!}
    {!!Html::style('skin/esmerald/css/style.css')!!}
    {!!Html::style('skin/esmerald/css/engine.css')!!}
    <!-- sweetalert -->
    {!!Html::style('layout/css/sweetalert.css')!!}
    {!!Html::style('layout/css/select2.css')!!}
    {!!Html::style('layout/css/bootstrap-select.min.css')!!}
    <!-- ICON RPG AWESOME -->
    {!!Html::style('layout/css/rpg-awesome.css')!!}
    <!--  Alert Toastr -->
    {!!Html::style('layout/css/toastr.css')!!}
    <!-- Mis css -->
    {!!Html::style('skin/monster/css/mi-css.css')!!}
    


    <!-- CORE JS -->
    {!!Html::script('skin/esmerald/js/jquery.js')!!} 
    {!!Html::script('skin/esmerald/js/bootstrap.js')!!} 
    {!!Html::script('skin/esmerald/js/flexcroll.js')!!} 
    {!!Html::script('skin/esmerald/js/jquery.nice-select.min.js')!!} 
    {!!Html::script('skin/esmerald/js/scripts.js')!!} 
    {!!Html::script('skin/esmerald/js/jquery.slimscroll.min.js')!!} 
    {!!Html::script('skin/esmerald/js/main.js')!!} 


</head>

<body>

<header>
    <div class='langs'>         
        <a href="{{ url('lang', ['en']) }}" class='en noJquery' title='English'><span></span></a>

        <a href="{{ url('lang', ['es']) }}" class='es noJquery' title='Espa&ntilde;ol'><span></span></a>

        <a href='?changelang=pt' class='pt noJquery' title='Portugu&ecirc;s'><span></span></a>

        </div>
</header>





<div class="container">
<div class="bg">
    <div class="bg__item1"></div>
    <div class="bg__item2"></div>
    <div class="bg__item3"></div>
</div>


<div class="wrapper">
     @if(!empty($logo))
<img id="logo" height="300"  width="400" src="storage/paginas/home/logo/{{$logo->logo}}" alt="" class="logo center-block" />
        @endif
    <a href="/" class="logo"></a>
    



    <ul class="nav2">
        <div class="language__heading">
            <li class="nav__item"><a href="{{ url('/') }}" class="nav__link">INICIO<span>Página principal</span></a></li>
            <li class="nav__item"><a href="{{ url('/descargas') }}"  class="nav__link">DESCARGAR ARCHIVOS<span>
Descarga los archivos para el juego</span></a></li>
            <li class="nav__item"><a href="#files" rel="popup" class="nav__link">INFORMACION<span>Conoce mas sobre nosotros</span></a></li>
            <li class="nav__item"><a href="/" class="nav__link">FORO<span>Comunidad</span></a></li>
             

    </ul>

    <div class="fast-nav">
        <div class="fast-nav__item">
            <div class="fast-nav__icon"><img src="skin/esmerald/images/ico-donate.png" alt=""></div>
            <div class="fast-nav__info">
                <div class="fast-nav__name">DONACIONES</div>
                <div class="fast-nav__desc">Ayuda en el desarrollo de servidores y compra de valores de juego</div>
					<a href="{{ url('/donar') }}" rel="popup" class="fast-nav__link">Ir a las donaciones</a>
            </div>
        </div>
        <div class="fast-nav__item">
            <div class="fast-nav__icon"><img src="skin/esmerald/images/ico-register.png" alt=""></div>
            <div class="fast-nav__info">
                <div class="fast-nav__name">REGISTRO</div>
                <div class="fast-nav__desc">Registrar una cuenta de juego para comenzar a jugar en el servidor</div>
			<a href="{{ url('/registrarse') }}" class="fast-nav__link">Ir a la inscripción</a>
            </div>
        </div>
    </div>

    <div class="content">
        <div class="scrollbar">
            <style>
				.content { width: 706px; left: 28px; }
			</style>



			


        @yield('content')

       
        																					

            
		</div>
    </div>

    <div class="stream">
        <div class="stream__item">
		<!--	<iframe src="https://player.twitch.tv/?channel=" frameborder="0" allowfullscreen="true" scrolling="no" height="378" width="620"></iframe><a href="https://www.twitch.tv/elf_power?tt_medium=live_embed&tt_content=text_link" style="padding:2px 0px 4px; display:block; width:345px; font-weight:normal; font-size:10px; text-decoration:underline;"></a>-->
		</div>
        <div class="stream__item">
		<!--	<iframe src="https://player.twitch.tv/?channel=" frameborder="0" allowfullscreen="true" scrolling="no" height="378" width="620"></iframe><a href="https://www.twitch.tv/syntha1337?tt_medium=live_embed&tt_content=text_link" style="padding:2px 0px 4px; display:block; width:345px; font-weight:normal; font-size:10px; text-decoration:underline;"></a>-->
		</div>
        <div class="stream__item">
			<!--<iframe src="https://player.twitch.tv/?channel=" frameborder="0" allowfullscreen="true" scrolling="no" height="378" width="620"></iframe><a href="https://www.twitch.tv/gtobias?tt_medium=live_embed&tt_content=text_link" style="padding:2px 0px 4px; display:block; width:345px; font-weight:normal; font-size:10px; text-decoration:underline;"></a>-->
		</div>
        <div class="stream__info">
            <div class="stream__heading">Galeria</div>Envianos tu imagen <br>   o Video asi pueda ser compartida con la comunidad!
        </div>
    </div>

    
    <div class="status" data-info="Сервер открыт 14 июля 2017; Сервер открыт 3 июня 2017; Coming Soon...">
		<div class="status__item" data-online="{online}">
    <div class="status__info">
        <div class="status__name">{name}</div>
        <div class="status__desc"></div>
    </div>
    <div class="status__load">
        <div class="status__line"></div>
    </div>
    <div class="status__link"><a href="/index.php?f=stat">Ver estadísticas del servidor</a></div></div>

   
     <div class='userarea'>
                

   

                <div class='avatar' style='background-image: url(skin/monster/imgs/avatar/human_male_mage.jpg);'></div>
                

            <div class='loginarea'><!--Login Area-->

                
                
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
                           <div class="pull-right"> <input type="submit"  class='btn btn-danger center-block"' value='Login'>   </div>
                        </div>
                        <div class='ess'><a href='index-3.htm?page=forgot'>{{ trans('layout.Olvidaste tu contraseña?') }}</a></div>
                    </form>
                  @endif
                </div><!--END Login AREA-->
            </div>

    </div>
    


    <div class="about">
                <div class="about__item">
            <div class="about__icon">Raid</div>
            <div class="about__info">
                <div class="about__name">Raid Boss</div>
                <div class="about__desc">Estadisaticas actualizadas<br>
					<a href="{{ url('/boss') }}">Ver mas!!</a>
				</div>
            </div>
        </div>
        <div class="about__item">
            <div class="about__icon">Sieges</div>
            <div class="about__info">
                <div class="about__name">Sieges</div>
                <div class="about__desc">Estadisaticas actualizadas<br>
					<a href="{{ url('/siege') }}">Ver mas!!</a>
				</div>
            </div>
        </div>
        <div class="about__item">
            <div class="about__icon">Top</div>
            <div class="about__info">
                <div class="about__name">Top</div>
                <div class="about__desc">Estadisaticas actualizadas<br>
					<a href="{{ url('/top-pvp') }}">Ver mas!!</a>
				</div>
            </div>
        </div>
        
    </div>

    <div class="promo">
        <div class="promo__video">
			@if(!empty($box))
        <div class="text-center center-block">
      {!! $box->box!!}
      </div>
      @endif
		</div>
			<div class="promo__name"></div>
        </div>

 


    <div class="footer">
                    <p>Desarrollado por <a href="https://www.sharkestudio.com">Sharkestudio.com</a></p>
    </div>

    



</div>

<div class="overlay">
    <div class="popup" id="files">
        <a class="popup__close" rel="close"></a>

            <a href="{{ url('/informacion') }}" class="file-link">
                <div class="file-link__icon"><img src="" alt=""></div>
                <div class="file-link__info">
                    <div class="file-link__name">Informacion</div>
                    <div class="file-link__desc">Toda la Informacion del servidor la puedes ver aqui!!</div>
                </div>
            </a>
            <a href="{{ url('/soporte') }}" class="file-link">
                <div class="file-link__icon"><img src="" alt=""></div>
                <div class="file-link__info">
                    <div class="file-link__name">Soporte</div>
                    <div class="file-link__desc">Si tienes alguna duda , este es el lugar!</div>
                </div>
            </a>
            <a href="{{ url('/galeria-imagen') }}" class="file-link">
                <div class="file-link__icon"><img src="" alt=""></div>
                <div class="file-link__info">
                    <div class="file-link__name">Galeria de Imagenes</div>
                    <div class="file-link__desc">Envianos tu Imagen sobre el servidor</div>
                </div>
            </a>
            <a href="{{ url('/galeria-video') }}" class="file-link">
                <div class="file-link__icon"><img src="" alt=""></div>
                <div class="file-link__info">
                    <div class="file-link__name">Galeria de Videos</div>
                    <div class="file-link__desc">Envianos tu video sobre el servidor</div>
                </div>
            </a>
            <a href="{{ url('/reglas') }}" class="file-link">
                <div class="file-link__icon"><img src="" alt=""></div>
                <div class="file-link__info">
                    <div class="file-link__name">Reglas</div>
                    <div class="file-link__desc">Reglas y Condiciones de la Comunidad</div>
                </div>
            </a>
           
        
    </div>

    <div class="popup" id="donate">
        <a class="popup__close" rel="close"></a>
        <div class="popup__price">1 DONATE COIN = 5 РУБ.</div>
                    <div class="form">
                <div class="form__item">
                    <select>
                        <option>3 June x1000</option>
                        <option>3 June x1000</option>
                        <option>3 June x1000</option>
                    </select>
                </div>
                <div class="form__item"><input type="text" placeholder="Количество коинов"></div>
                <div class="form__item"><input type="text" placeholder="Введите ник персонажа"></div>
                <button type="submit" class="btn-yellow btn-yellow--two-row">ПОЖЕРТВОВАТЬ<span>Переход к странице оплаты</span></button>
            </div>
        


    </div>

</div>

</div>

   
</body>
</html>