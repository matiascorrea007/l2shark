@extends('layouts.esmerald')
@include('alerts.errors')
@section('content')
@include('alerts.errors')
@include('alerts.request')
@include('alerts.success')
@include('flash::message')


<div class="page">

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
	
	<table cellspacing="0" cellpadding="0" border="0" class="default table-hover">
		
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
	
	<table cellspacing="0" cellpadding="0" border="0" class="default">
		
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



@endsection