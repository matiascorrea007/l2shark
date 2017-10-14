<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    @if(!empty($servidor))
      <title>{{$servidor->nombre}} | Lineage 2 {{$servidor->cronica}}</title> 
 @else
      <title>SharkEstudio.com | Lineage 2</title> 
  @endif

	<meta name="Description" content="L2Jserver, lineage 2 free to play!">
	<meta name="keywords" content="#1 desarrollo web , lineage 2 , paginas web , web , app , software web , software app , responsive , interlude , software , apliacaciones , web responsive , diseño web , web developers , sharkestudio , shark estudio" />
    <!-- Bootstrap -->
    <link href="skin/tristana/css/bootstrap.min.css" rel="stylesheet">
	<link href='https://fonts.googleapis.com/css?family=PT+Sans:400,700&subset=latin,cyrillic-ext' rel='stylesheet' type='text/css'>
	<link href="skin/tristana/css/hover-min.css" rel="stylesheet">
	<link href="skin/tristana/css/animate.css" rel="stylesheet">
	<link href="skin/tristana/css/styles.css?19" rel="stylesheet">
	<link href="skin/tristana/css/mi-css.css" rel="stylesheet">
	<link href="skin/tristana/css/userarea.css" rel="stylesheet">
	<!-- modal 1 -->
	<link href="skin/globales/css/my-form1.css" rel="stylesheet">


	<script src="skin/tristana/js/jquery.min.js"></script>
	<script src="skin/tristana/js/progressbar.min.js"></script>
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="skin/tristana/js/bootstrap.js"></script>
	<script src="skin/tristana/js/jquery.mixitup.js"></script>
	

	

	
	


	

	
	<script type="text/javascript">
		jQuery(document).ready(function($){
			//open popup
			$('.reg-popup').on('click', function(event){
				event.preventDefault();
				$('.cd-popup').addClass('is-visible');
			});
			
			//close popup
			$('.cd-popup').on('click', function(event){
				if( $(event.target).is('.cd-popup-close') || $(event.target).is('.cd-popup') ) {
					event.preventDefault();
					$(this).removeClass('is-visible');
				}
			});
			//close popup when clicking the esc keyboard button
			$(document).keyup(function(event){
				if(event.which=='27'){
					$('.cd-popup').removeClass('is-visible');
				}
			});
		});
	</script>

	
	

	<script type="text/javascript">
		$(function(){
			$('#sortplayers').mixItUp({
				load: {
					filter: '.PvP',
					sort: false
				},
				layout: {
					display: 'table'
				}
			});
		});
	</script>

	<script type="text/javascript">
		$(document).ready(function(){
		  $('body').addClass('loaded');
		});
	</script>


  </head>
  <body>
	<!-- Donations Block Start -->
	<!-- Donations Block End -->
	<!-- Header Start -->
	<nav class="nav-main">
		<ul class="list-unstyled main-menu">
			<li class="active"><a href="{{ url('/') }}" class="">Home</span></a></li>
		<li><a href="{{ url('/registrarse') }}" >Registro</a></li>
		<li><a href="{{ url('/informacion') }}" >Servidor</a></li>
		<li><a href="{{ url('/donar') }}" >Donaciones</a></li>
		<li><a href="{{ url('/descargas') }}" role="button" class="hvr-underline-from-left reg-popup">Archivos</a></li>
		<li><a href="{{ url('/top-pvp') }}" >Estadisticas</a></li>
		<li><a href="{{ url('/boss') }}" >Raid Boss</a></li>
		<li><a href="{{ url('/siege') }}" >Castles</a></li>
		<li><a href="{{ url('/reglas') }}" >Reglas</a></li>
		<li><a href="{{ url('/soporte') }}" >Soporte</a></li>
		<li><a href="http://forum.agecold.ru/" >Foro</a></li>
			
		</ul>
	</nav>

	<div class="jumbotron header" id="header">
		<div class="overlay">

			<!-- Navigation Menu Start -->
			<nav class="navbar navbar-default" id="navbar">
				<div class="navbar-overlay">

					<div class="">
					
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
					
					  <a href="#" id="nav-expander" class="nav-expander fixed">MENU<img class="close" src="skin/tristana/images/x.png"></a>
					</div>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse navi" id="bs-example-navbar-collapse-1">
					  <ul class="nav navbar-nav">

		<li class="active"><a href="{{ url('/') }}" class="hvr-underline-from-left">Home</span></a></li>
		<li><a href="{{ url('/registrarse') }}" class="hvr-underline-from-left">Registro</a></li>
		<li><a href="{{ url('/informacion') }}" class="hvr-underline-from-left">Servidor</a></li>
		<li><a href="{{ url('/donar') }}" class="hvr-underline-from-left">Donaciones</a></li>
		<li><a href="{{ url('/descargas') }}"  class="hvr-underline-from-left ">Archivos</a></li>
		<li><a href="{{ url('/top-pvp') }}" class="hvr-underline-from-left">Estadisticas</a></li>
		<li><a href="{{ url('/boss') }}" class="hvr-underline-from-left">Raid Boss</a></li>
		<li><a href="{{ url('/siege') }}" class="hvr-underline-from-left">Castles</a></li>
		<li><a href="{{ url('/reglas') }}" class="hvr-underline-from-left">Reglas</a></li>
		<li><a href="{{ url('/soporte') }}" class="hvr-underline-from-left">Soporte</a></li>
		<li><a href="http://forum.agecold.ru/" class="hvr-underline-from-left">Foro</a></li>
		
					  </ul>
					  
					</div><!-- /.navbar-collapse -->
				  </div>
			  </div>
			</nav>
			<!-- Navigation Menu End -->

			<div class="container header-content">
				<div class="col-md-6">
	@if(!empty($logo))
	<img class=""  src="storage/paginas/home/logo/{{$logo->logo}}" alt="" height="250" width="500" />
	@endif
	
	

					
						<div class="row servers">
						
<!— Модуль Статус Серверов —>




<div class="col-md-4">
	<div class="progress-overlay">
		<div id="progressbar-first" class="progressbar">
			<span class="online" id="online1"></span>
			<p class="progressbar-text"><span>x50k</span> Interlude</p>
		</div>
	</div>
</div>
<div class="col-md-4">
	<div class="progress-overlay">
		<div id="progressbar-second" class="progressbar">
			<span class="online" id="online2">Soon...</span>
			<p class="progressbar-text"><span>x10k</span> Soon...</p>
		</div>
	</div>
</div>
<div class="col-md-4">
	<div class="progress-overlay">
		<div id="progressbar-third" class="progressbar">
			<span class="online" id="online3">Soon...</span>
			<p class="progressbar-text"><span>x1200</span> Soon...</p>
		</div>
	</div>
</div>
<script type="text/javascript">
$(function() {
var online;
var temp_date=new Date();
var hours=temp_date.getHours();
if(hours<1)
{online=Math.floor(Math.random()*(7700-7500+1))+7500;}else
if(hours<2)
{online=Math.floor(Math.random()*(7300-7100+1))+7100;}else
if(hours<3)
{online=Math.floor(Math.random()*(6500-6300+1))+6300;}else
if(hours<4)
{online=Math.floor(Math.random()*(5800-5600+1))+5600;}else
if(hours<9)
{online=Math.floor(Math.random()*(4700-4500+1))+4500;}else
if(hours<12)
{online=Math.floor(Math.random()*(6100-5800+1))+5800;}else
if(hours<15)
{online=Math.floor(Math.random()*(7000-6800+1))+6800;}else
if(hours<20)
{online=Math.floor(Math.random()*(7900-7700+1))+7700;}else
if(hours>=20)
{online=Math.floor(Math.random()*(8300-8100+1))+8100;}
online='0';
//document.getElementById('online1').innerHTML=online;
document.getElementById('online1').innerHTML='ONLINE';


var online1,online2,online3;
var startColor = '#7fc51a';
var endColor = 'rgba(255,123,0,1)';
var optsGradient = {
	from: { color: startColor},
	to: { color: endColor}
};
var optsBar = {
	color: startColor,
	strokeWidth: 12.25,
	trailWidth: 0,
	duration: 0,
	easing: 'linear',
	text: {
	value: "",
	autoStyle: false
	}
};
var optsBarGradient = {
	color: startColor,
	strokeWidth: 12.25,
	trailWidth: 0,
	duration: 0,
	easing: 'linear',
	text: {
	value: "",
	autoStyle: false
},
// Set default step function for all animate calls
step: function(state, circle) {
circle.path.setAttribute('stroke', state.color);
}
};

//online1 = document.getElementById('online1').innerText / 100 / 100;
//online = online / 90 / 100;
online = 8153 / 90 / 100;
var first = new ProgressBar.Circle('#progressbar-first', optsBar);
first.animate(online, function() {first.animate(online);});

var second = new ProgressBar.Circle('#progressbar-second', optsBar);
second.animate(online2, function() {second.animate(online2);});

var third = new ProgressBar.Circle('#progressbar-third', optsBar);
third.animate(online3, function() {third.animate(online3);});
});
</script>




						</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Header End -->
	<!-- Content Block Start -->
		<div class="jumbotron content">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 logo">
					
					@yield('content')
					
				</div>



				<div class="col-lg-3 forumposts">
					<div class="sidebar-head clearfix">
						<h2>Login</h2>
					</div>
					
<div class='userarea'><!--astar userarea-->
    
                <div class='avatar' style='background-image: url(skin/monster/imgs/avatar/human_male_mage.jpg);'></div>
                

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
                            <input type="submit"  class='btn btn-danger' value='Login'>        
                        </div>
                        <div class='ess'><a href='index-3.htm?page=forgot'>{{ trans('layout.Olvidaste tu contraseña?') }}</a></div>
                    </form>
                  @endif
                </div>
            </div>
				<!--END user AREA-->

				<!-- Sidebar Top Players Start -->
				
					<div class="sidebar-head">
						<h2>Top PVP/PK</h2>
					</div>
					<div class="players-stats sidebar-content" id="sortplayers">
						
<!-- Модуль PvP Top -->
<table class="table table-bordered table-hover mix PvP">
	<thead>
		<tr>
			<th>Nombre</th>
			<th>PvP</th>
		</tr>
	</thead>
	@if(!empty($pvps))
	@foreach($pvps as $pvp)
		<tbody>
			<tr class='two'>
				<td><span class="scope">#</span> {{$pvp->char_name}}</td>
				<td>{{$pvp->pvpkills}}</td>
			</tr>
		</tbody>
	@endforeach	
	@endif
</table>


						
<!-- Модуль PvP Top -->
<table class="table table-bordered table-hover mix PK">
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


						<div class="filters">
							<button class="btn btn-default btn-xs filter" data-filter=".PvP">PvP</button>
							<button class="btn btn-default btn-xs filter" data-filter=".PK">PK</button>
							<!--<button class="btn btn-default btn-xs filter" data-filter="all">Общая</button>-->
						</div>
					</div>


					


					<div class="col-lg-3 forumposts">
					<div class="sidebar-head clearfix">
						<h2>Seguinos en nuestro Fanpage!!</h2>
					</div>
					
<!-- Модуль Темы с Форума -->
<div class="posts sidebar-content">
	<div class="postscut">



<div class="">
	@if(!empty($box))
      					{!! $box->box!!}
      				@endif
</div>
<hr/>


	</div>
</div>

				</div>

				</div>




				<!-- Sidebar Top Players End -->
				<!-- Sidebar Forum posts Start -->
				
				<!-- Sidebar Forum posts End -->
				<!-- Sidebar VK Start 
				<div class="col-lg-3 VK">
					<div class="sidebar-head clearfix">
						<h2>мы вконтакте</h2>
					</div>
					<div id="vk_groups"></div>
				</div>
				Sidebar VK End -->
			</div>
		</div>
	</div>
	<!-- Content Block End -->
	<!-- Footer Start -->


	<!-- Fast start Block Start -->
	<div class="cd-popup start" role="alert">
		<div class="cd-popup-container">
			<h4>Файлы для игры</h4>
			<hr/ class="bl">
			<div class="row">
				<div class="col-lg-12">
					<h5><img src="http://agecold.ru/templates/agecold_2015/images/ico-files1.png">1. СКАЧАЙ И УСТАНОВИ ИГРУ</h2>
					<p>Для игры на серверах AgeCold.Ru тебе необходим клиент игры Lineage II Interlude.</p>
					<a href="http://rutracker.org/forum/viewtopic.php?t=3820599" target="_blank" class="btn btn-default btn-lg btn-patch">скачать клиент</a>
					<a href="http://www.utorrent.com/intl/ru/downloads/complete/os/win/track/stable" class="torrent"><img src="http://agecold.ru/templates/agecold_2015/images/ico-torrent.png">Скачать торрент-клиент (если его нет)</a>
					<input type="text" class="form-control">
				</div>
				<hr/>
				<div class="col-lg-12">
					<h5><img src="http://agecold.ru/templates/agecold_2015/images/ico-files2.png">2. УСТАНОВИ ПАТЧ ИЛИ ЗАПУСТИ АПДЕЙТЕР</h2>
					<p>Также следует установить наш патч или запустить полную проверку файлов (апдейтер).</p>
					<p><b>Патч распакуй в корневую папку игры. Клиент запускай через l2.exe или апдейтер.</b></p>
					<p>Если ты используешь апдейтер - он должен находиться в корне папки Lineage II.</p>
					<!--<br>
					<p>Файлы для игры на сервере x50000:</p>-->
					<a href="http://agecold.ru/AgeCold_x50000_2017_v1.7z" target="_blank" class="btn btn-default btn-lg btn-patch">скачать патч</a>
					<a href="https://mega.nz/#!M0xDyRpT!51qW2Avvl1wq9mrrux3c6K9RPF0OjdqlxoLJrnbU23A" target="_blank" class="btn btn-default btn-lg btn-mirror">зеркало</a>
					<a href="http://agecold.ru/AgeCold_Updater.exe" target="_blank" class="btn btn-default btn-lg btn-patch" style="margin-left: 15px;">скачать апдейтер</a>
					<!--<br>
					<p>Файлы для игры на ОБТ сервера x1200:</p>
					<a href="https://yadi.sk/d/3ekrDfSQsZFBN" target="_blank" class="btn btn-default btn-lg btn-patch">скачать обт патч x1200</a>-->
				</div>
				<hr/>
				<div class="col-lg-12">
					<h5><img src="http://agecold.ru/templates/agecold_2015/images/ico-user.png">3. ЗАРЕГИСТРИРУЙ АККАУНТ</h2>
					<p>Осталось лишь зарегистрировать аккаунт в Личном Кабинете.</p>
					<a href="http://agecold.ru/cp/registration/" class="btn btn-default btn-lg btn-patch">СОЗДАТЬ АККАУНТ</a>
				</div>
			</div>
			<a href="#0" class="cd-popup-close img-replace">Close</a>
		</div> 
	</div>
	<!-- Fast start Block End -->




	<footer class="footer">
		<div class="container text-center">
			<div class="pull-left">
	@if(!empty($logo))
	<img class="logo-footer"  src="storage/paginas/home/logo/{{$logo->logo}}" alt="" height="100" width="250" />
	@endif

				
				<p>© 2017 l2 server - Lineage II <br/><a href="http://www.sharkestudio.com">Sharkestudio.com</a></p>
			</div>
			<a href="#header"><img src="http://agecold.ru/templates/agecold_2015/images/toparrow.png" class="toparrow scroll"></a>
			<a href="#" class="payments pull-right"><img src="http://agecold.ru/templates/agecold_2015/images/payments.png"></a>
 		</div>
	</footer>
	<!-- Footer End -->
	<script type="text/javascript">
		$(document).ready(function(){												
       //Navigation Menu Slider
        $('#nav-expander').on('click',function(e){
      		e.preventDefault();
      		$('body').toggleClass('nav-expanded');
      	});
      });
	</script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->


</head>
<body>

  </body>
</html>
