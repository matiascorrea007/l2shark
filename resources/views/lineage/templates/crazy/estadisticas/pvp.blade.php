@extends('layouts.crazy')
@include('alerts.errors')
@section('content')
@include('alerts.errors')
@include('alerts.request')
@include('alerts.success')
@include('flash::message')


<div class="">
		
		<div class="">
		<div class="thumbnail-header">
		<div class="news_info"><h2>Estadisticas</h2><div class="ndate"></div></div>

		<div class="news_info">
		<div class="news_date">Estado: <span>Actualizado</span></div>
		</div>
	
		</div>

		<br><br>
		<div class="">
			
			<div class="page">

<ul class="nav nav-tabs ">
  <li class="active"><a href="{{ url('top-pvp') }}">Top PVP</a></li>
  <li><a  href="{{ url('top-pk') }}" class="">Top PK</a></li>
  <li><a  href="{{ url('top-clan') }}">Top Clan</a></li>
  <li><a  href="{{ url('top-hp') }}">Top HP</a></li>
  <li><a  href="{{ url('top-mp') }}">Top MP</a></li>
  <li><a  href="{{ url('top-olympiad') }}">Olympiad Ranking</a></li>
  <li><a  href="{{ url('top-heroes') }}">Heroes</a></li>
  <li><a  href="{{ url('top-mas-activos') }}">Top Activos</a></li>
  <li><a  href="{{ url('top-donadores') }}">Top Donadores</a></li>
  <li><a  href="{{ url('player-online') }}">Online</a></li>
</ul>
<hr>

	
	<h1>Top 100 PvP </h1>
	
	<div class="pddInner">
		A continuación se muestran los 100 jugadores con más puntos de PvP (Player vs Player)
	</div>
	
	<table cellspacing="0" cellpadding="0" border="0" class="table table-bordered table-hover">
		
		<tr>
			<th class="pos"></th>
			<th>Nombre</th>
			<th>Level</th>
			<th>PVP's</th>
			<th title="Tiempo Online">Tiempo Online</th>
		</tr>
		
		@if(!empty($playerpvps))
		@foreach($playerpvps as $playerpvp)
		<tbody>
			<tr class="two">
				<td class="pos">{{$contador = $contador + 1}}º</td>
				<td><b>{{$playerpvp->char_name}}</b></td>
				<td><b>{{$playerpvp->level}}</b></td>
				<td class="foco" style="color: #006202;">{{$playerpvp->pvpkills}}</td>
				
				<td>
				{{$onlinetimeH=round(($playerpvp->onlinetime/60/60)-0.5)}} Horas
				{{$onlinetimeM=round(((($playerpvp->onlinetime/60/60)-$onlinetimeH)*60)-0.5)}} Minutos
				</td>

			</tr>
		</tbody>
		@endforeach
		@endif

		</table>
	</div>
	
		

		</div>
	</div>

</div>






@endsection