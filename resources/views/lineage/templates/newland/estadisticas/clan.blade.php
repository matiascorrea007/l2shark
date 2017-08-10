@section('menu')
<div class="container">
            <span class="bar hide"></span>
            <a href="index.html" class="logo"><img src="skin/newland/img/logo.png" alt=""></a>
                <nav>
                <div class="nav-control">
                    <ul>
                        <li><a  href="{{ url('/') }}">INICIO</a></li>
                        <li><a href="{{ url('/descargas') }}">DESCARGAS</a></li>
                        <li><a href="{{ url('/como-jugar') }}">COMO JUGAR</a></li>
                        <li><a href="{{ url('/informacion') }}">INFORMACIÓN</a></li>
                        <li><a href="{{ url('/noticias') }}">NOTICIAS</a></li>

                        <li><a href="{{ url('/galeria-imagen') }}">GALERIA</a></li>
                    </ul>
                </div>
            </nav>
            <div class="nav-right">
                <div class="nav-profile dropdown">
                    <a href="#" class="dropdown-toggle " data-toggle="dropdown"><img src="skin/newland/img/user/avatar.jpg" alt=""> <span>PANEL DE USUARIO</span></a>
                    <ul class="dropdown-menu">
                    @if(Auth::check())
                    <li><a href="{{ url('/panel') }}"><i class="fa fa-universal-access"></i>Panel</a></li>
                    <li><a href="{{ url('/logout') }}"><i class="fa fa-sign-out "></i>Salir</a></li>
                    @else
                        <li><a href="{{ url('/registrarse') }}"><i class="fa fa-user-plus"></i>Registrarte</a></li>
                        <li class="divider"></li>
                        <li><a href="{{ url('/ingresar') }}"><i class="fa fa-user"></i>Iniciar Sesión</a></li>
                        <li class="divider"></li>
                        <li><a href="{{ url('/soporte') }}"><i class="fa fa-support"></i>Soporte</a></li>
                        @endif
                    </ul>
                </div>
            </div>
            <div class="nav-right">
                <div class="nav-profile dropdown">
                    <a href="#" class="dropdown-toggle active" data-toggle="dropdown"><span>ESTADISTICAS</span></a>
                    <ul class="dropdown-menu">
                        <li><a href="{{ url('/top-pvp') }}"><i class="ra ra-bat-sword"></i>TOP</a></li>
                        <li class="divider"></li>
                        <li><a href="{{ url('/siege') }}"><i class="ra ra-castle-emblem"></i>SIEGUE</a></li>
                        <li class="divider"></li>
                        <li><a href="{{ url('/boss') }}"><i class="ra ra-monster-skull"></i>BOSS</a></li>
                    </ul>
                </div>
            </div>
        </div>
@endsection

@extends('layouts.newland')
@include('alerts.errors')
@section('content')
@include('alerts.errors')
@include('alerts.request')
@include('alerts.success')
@include('flash::message')




<section class="padding-top-40 padding-bottom-40" style="background-image: url(skin/newland/img/top.jpg);background-repeat: no-repeat; background-attachment: fixed;">	
			<div class="container">
				<div class="row sidebar">
					<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 leftside">
						<div class="row">
							<div class="col-lg-12">
								<div class="headline">
								<div class="thumbnail-header">
			<h3><a href="#" class="hvr-underline-from-center">Estadisticas</a></h3>
			
		</div>
								</div>
							</div>
						</div>



<ul class="nav nav-tabs ">
  <li><a href="{{ url('top-pvp') }}">Top PVP</a></li>
  <li><a  href="{{ url('top-pk') }}">Top PK</a></li>
  <li class="active"><a  href="{{ url('top-clan') }}">Top Clan</a></li>
  <li><a  href="{{ url('top-hp') }}">Top HP</a></li>
  <li><a  href="{{ url('top-mp') }}">Top MP</a></li>
  <li><a  href="{{ url('top-olympiad') }}">Olympiad Ranking</a></li>
  <li><a  href="{{ url('top-heroes') }}">Heroes</a></li>
  <li><a  href="{{ url('top-mas-activos') }}">Top Activos</a></li>
  <li><a  href="{{ url('top-donadores') }}">Top Donadores</a></li>
  <li><a  href="{{ url('player-online') }}">Online</a></li>
</ul>
<hr>

	
	<h1>Clanes </h1>
	
	<div class="pddInner">
		A continuación se muestran Todos los Clanes
	</div>
	
	<table cellspacing="0" cellpadding="0" border="0" class="table table-bordered">
		
		<tr>
			<th class="pos"></th>
			<th>Nombre del Clan</th>
			<th>Leader</th>
			<th>Level</th>
		</tr>
		@if(!empty($clans))
		@foreach($clans as $clan)
		<tbody>
			<tr class="two">
				<td class="pos">{{$contador = $contador + 1}}º</td>
				<td><b>{{$clan->clan_name}}</b></td>
				<td><b>{{$clan->char_name}}</b></td>
				<td><b>{{$clan->clan_level}}</b></td>
				


			</tr>
		</tbody>
		@endforeach
		@endif
		</table>


<hr>

	
	<h1>Clanes Con Castillos</h1>
	
	<div class="pddInner">
		A continuación se muestran Todos los Clanes Con Castillos
	</div>
	
	<table cellspacing="0" cellpadding="0" border="0" class="table table-bordered table-hover">
		
		<tr>
			<th class="pos"></th>
			<th>Nombre del Clan</th>
			<th>Leader</th>
			<th>Level</th>
			<th>Castle</th>
		</tr>
		@if(!empty($clanCastles))
		@foreach($clanCastles as $clanCastle)
		<tbody>
			<tr class="two">
				<td class="pos">{{$contador = $contador + 1}}º</td>
				<td><b>{{$clanCastle->clan_name}}</b></td>
				<td><b>{{$clanCastle->char_name}}</b></td>
				<td><b>{{$clanCastle->clan_level}}</b></td>
				<td><b>{{$clanCastle->name}}</b></td>
				


			</tr>
		</tbody>
		@endforeach
		@endif
		</table>


						
						
					</div>
					
					</div>
				</div>
			</div>
		</section>








@endsection