@extends('layouts.tristana')
@include('alerts.errors')
@section('content')

<div class="col-lg-12">
		
		<div class="thumbnail">
		<div class="thumbnail-header">
			<h3><a href="#" class="hvr-underline-from-center">Estadisticas</a></h3>
			<span><img src="skin/tristana/images/clocks.png" alt="clocks"><time>Actualizado</time>
		</div>
		<div class="caption">
		
		
<div class="page">

<ul class="nav nav-tabs ">
  <li><a href="{{ url('top-pvp') }}">Top PVP</a></li>
  <li><a href="{{ url('top-pk') }}">Top PK</a></li>
  <li><a href="{{ url('top-clan') }}">Top Clan</a></li>
  <li><a href="{{ url('top-hp') }}">Top HP</a></li>
  <li><a href="{{ url('top-mp') }}">Top MP</a></li>
  <li><a href="{{ url('top-olympiad') }}">Olympiad Ranking</a></li>
  <li><a href="{{ url('top-heroes') }}">Heroes</a></li>
  <li class="active"><a href="{{ url('top-mas-activos') }}">Top Activos</a></li>
  <li><a href="{{ url('top-donadores') }}">Top Donadores</a></li>
  <li><a href="{{ url('player-online') }}">Online</a></li>
</ul>
<hr>

	
	<h1>Top 100 Activos </h1>
	
	<div class="pddInner">
		A continuación se muestran los 100 jugadores con más Actividad en el Juego
	</div>
	
	<table cellspacing="0" cellpadding="0" border="0" class="table table-bordered table-hover">
		
		<tr>
			<th class="pos"></th>
			<th>Nombre</th>
			<th>Level</th>
			<th title="Tiempo Online">Tiempo Online</th>
		</tr>
		
		@if(!empty($playeractivos))
		@foreach($playeractivos as $playeractivo)
		<tbody>
			<tr class="two">
				<td class="pos">{{$contador = $contador + 1}}º</td>
				<td><b>{{$playeractivo->char_name}}</b></td>
				<td><b>{{$playeractivo->level}}</b></td>
				
				<td>
				{{$onlinetimeH=round(($playeractivo->onlinetime/60/60)-0.5)}} Horas
				{{$onlinetimeM=round(((($playeractivo->onlinetime/60/60)-$onlinetimeH)*60)-0.5)}} Minutos
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