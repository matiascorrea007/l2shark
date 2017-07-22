<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="ltr" xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
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


	{!!Html::style('skin/crazy/css/style.css')!!}
	{!!Html::style('skin/crazy/css/bootstrap.css')!!}
	{!!Html::style('skin/crazy/css/engine.css')!!}
	{!!Html::style('skin/crazy/css/table.css')!!}
	{!!Html::style('skin/crazy/css/modal.css')!!}
	{!!Html::style('skin/crazy/css/jquery.mCustomScrollbar.css')!!}
	
	{!!Html::script('skin/crazy/js/bootstrap.js')!!} 
	{!!Html::script('skin/crazy/js/jquery-1.11.3.min.js')!!} 
	{!!Html::script('skin/crazy/js/scripts.js')!!} 
	{!!Html::script('skin/crazy/js/jquery.mCustomScrollbar.js')!!} 

	
</head>
<body>



<div id="smart_general">
<div id="smart_general_wrapper">


<div id="navigation">
	<ul>
		<li><a href="{{ url('/') }}">INICIO</a></li>
  		<li><a href="{{ url('/registrarse') }}">REGISTRARSE</a></li>
  		<li><a href="{{ url('/informacion') }}">SERVER</a></li>
  		<li><a href="{{ url('/descargas') }}">DOWNLOAD</a></li>
  		<li><a href="{{ url('/donar') }}">DONACIONES</a></li>
  		<li><a href="{{ url('/top-pvp') }}">ESTADISTICAS</a></li>
  		<li class="last"><a href="/index.php?f=donate">FORO</a></li>
		<span class="nav_arrow_left"></span>
		<span class="nav_arrow_right"></span>
	</ul>
</div>



<a href="/index.php?f=ru" class="lang_ru" style="opacity: 1;"></a>
<a href="/index.php?f=ru" class="lang_ru" style="opacity: 1;"></a>
<a href="/index.php?f=en" class="lang_en" style="opacity: 0.5;"></a>

<!--<a href="/" class="logo hvr-icon-float-away"></a>-->

@if(!empty($logo))
<img id="logo" height="400"  width="450" src="storage/paginas/home/logo/{{$logo->logo}}" alt="" class="logo hvr-icon-float-away" />
        @endif
<a href="/index.php?f=cp" class="nav_cab"></a>





<div class="smart_tabs_block">
	<div id="smart_tab1" class="smart_tab smart_active_tab">
	
<!-- Модуль PvP Top -->
<table id="top_block" class="top_pvp">

<?php 	
$c1=1;
$c2=1;
 ?>

<tr style="background: none;">
	<th width="9%" align="center"><img src="skin/crazy/images/number.png"></th>
	<th width="66%" align="left"><img src="skin/crazy/images/player.png"></th>
	<th width="25%" align="center"><img src="skin/crazy/images/pvp.png"></th>
</tr>

@if(!empty($pvps))
  @foreach($pvps as $pvp)
<tr>
	<td width="9%" align="center" style="color: #6f7b7d;">{{$c1++}}</td>
	<td width="66%" align="left">{{$pvp->char_name}}</td>
	<td width="25%" align="center" style="color: #6f7b7d;">{{$pvp->pvpkills}}</td>
</tr>
 @endforeach  
  @endif

</table>
</div>


	<div id="smart_tab2" class="smart_tab">
	
<!-- Модуль PK Top -->
<table id="top_block" class="top_pk">
<tr style="background: none;">
	<th width="10%" align="center"><img src="skin/crazy/images/number.png"></th>
	<th width="65%" align="left"><img src="skin/crazy/images/player.png"></th>
	<th width="25%" align="center"><img src="skin/crazy/images/pk.png"></th>
</tr>



@if(!empty($pks))
  @foreach($pks as $pk)
<tr>
	<td width="9%" align="center" style="color: #6f7b7d;">{{$c2++}}</td>
	<td width="66%" align="left">{{$pk->char_name}}</td>
	<td width="25%" align="center" style="color: #6f7b7d;">{{$pk->pkkills}}</td>
</tr>
 @endforeach  
  @endif

</table>
</div>

	<ul class="smart_tab_ul">
		<li><a href="#smart_tab1"></a></li>
		<li><a href="#smart_tab2"></a></li>
	</ul>
</div>





<div id="smart_content_wrapper">
	<div class="smart_content_inner">
	
	@if(!empty($box))
      {!! $box->box!!}
      @endif
      <br />

	 @yield('content')


	</div>
</div>
<div class="sp_for_pagination"></div>

<div id="status">
	
<!-- LOGIN -->
<div id="lk">
<div id="login" style="color:#0F0; width:250px;">

@if(Auth::check())
	<div class="logged center-block">{{$user->login}}</div>

            <div>
             <a href="{{ url('/panel') }}"><button class="btn btn-danger center-block"> <span>Panel de Usuario</span></button> </a>
            </div>
                      
               <div class="col-md-12">
                <a href="{{ url('/logout') }}"><button  class="btn btn-danger center-block"> <span>Salir</span></button></a>
               </div>

                  

@else
<form  action="{{ url('/login') }}" method="post" name="dologin">
<input type="hidden" name="_token" value="{{ csrf_token() }}">

<input type="hidden" value="1" name="doLogin">
<input type="submit" style="display:none">
<table width="170" height="100" cellpadding="0" cellspacing="0">
<tr>
	<td valign="top" class="login_fon" colspan="2"><input type="email" name="email" class="login" maxlength="40" value="" data-new-placeholder="от 4 до 16 символов" placeholder="Ingrese el Email..." required/></td>
</tr>
	<tr><td colspan="2" height="10"></td></tr>
<tr>
	<td valign="top" class="password_fon"  colspan="2"><input type="password" name="password" class="password" maxlength="16" value="" data-new-placeholder="от 4 до 16 символов" placeholder="Ingrese el Password..." required/></td>
</tr>
	<tr><td colspan="2" height="10"></td></tr>



	<tr><td colspan="2" height="10"></td></tr>
    
<tr>
<td align="center" class="lktext" style="position:absolute; margin-top:-10px; left:12px; height:100px; max-height:100px; min-height:100px;">

</td>
</tr>

<tr><td><input type="submit"  class='btn btn-danger center-block' value='Login'></td></tr>
</table>
</form>
@endif
</div>
</div>
<!-- LOGIN -->





</div>




<div class="vk_block">
<!-- Online / offline -->
 <?php 

 $login = @fsockopen( 'localhost', 2106, $errno, $errstr, 1);
 $server = @fsockopen( 'localhost', 7777, $errno, $errstr, 1);

if($login >= 1 and $server >= 1) 
	echo "<div class='server_status on'><div></div></div>";
else 
	echo "<div class='server_status off'><div></div></div>";
			
?> 
<!-- Online / offline -->

</div>


</div>
<div class="smart_banner">

</div>

<div class="smart_copyright">
<a href="http://www.sharkestudio.com">sharkestudio.com</a><br>
Copyright ©  Lineage 2<br>
</div>


<!--//////////////////////-->
</div><!--smart_general_wrapper-->
<!--//////////////////////-->
</div><!--smart_general-->
<!--
<div style="position:fixed;bottom:0px;right:0px;"><a href="/" target="_blank"><img src="skin/crazy/images/bonus.png"></a></div>-->



</body>
</html>