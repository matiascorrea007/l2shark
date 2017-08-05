@extends('layouts.newland')
@include('alerts.errors')
@section('content')
@include('alerts.errors')
@include('alerts.request')
@include('alerts.success')
@include('flash::message')


<section class="padding-top-40 padding-bottom-40">	
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
  <li><a href="{{ url('top-pk') }}">Top PK</a></li>
  <li><a href="{{ url('top-clan') }}">Top Clan</a></li>
  <li><a href="{{ url('top-hp') }}">Top HP</a></li>
  <li class="active"><a href="{{ url('top-mp') }}">Top MP</a></li>
  <li><a href="{{ url('top-olympiad') }}">Olympiad Ranking</a></li>
  <li><a href="{{ url('top-heroes') }}">Heroes</a></li>
  <li><a href="{{ url('top-mas-activos') }}">Top Activos</a></li>
  <li><a href="{{ url('top-donadores') }}">Top Donadores</a></li>
  <li><a href="{{ url('player-online') }}">Online</a></li>
</ul>
<hr>

	
	<h1>Top 100 MP </h1>
	
	<div class="pddInner">
		A continuación se muestran los 100 jugadores con más puntos de MP
	</div>
	
	<table cellspacing="0" cellpadding="0" border="0" class="table table-bordered table-hover">
		
		<tr>
			<th class="pos"></th>
			<th>Nombre</th>
			<th>Level</th>
			<th>MP</th>
			<th title="Tiempo Online">Tiempo Online</th>
		</tr>
		@if(!empty($playermps))
		@foreach($playermps as $playermp)
		<tbody>
			<tr class="two">
				<td class="pos">{{$contador = $contador + 1}}º</td>
				<td><b>{{$playermp->char_name}}</b></td>
				<td><b>{{$playermp->level}}</b></td>
				<td class="foco" style="color: red;">{{$playermp->maxMp}}</td>
				
				<td>
				{{$onlinetimeH=round(($playermp->onlinetime/60/60)-0.5)}} Horas
				{{$onlinetimeM=round(((($playermp->onlinetime/60/60)-$onlinetimeH)*60)-0.5)}} Minutos
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
		</section>





@endsection