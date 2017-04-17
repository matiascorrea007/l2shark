@extends('layouts.monster')
@include('alerts.errors')
@section('content')


              <h1>Grand Boss</h1>
<div class="portlet-body">
        <div class="table-scrollable">
<table  class="default table table-hover table-light">
	
	<tr>
		<th style="width:100px;"></th>
		<th>Nombre</th>
		<th>Level</th>
		<th>Status</th>
		<th>Respawn</th>
	</tr>
	@foreach($boss as $bos)
	<tbody>
		<tr class="">
			<td><img class="bossImg" src="imgs/bosses/29020.jpg"></td>
			<td>{{$bos->name}}</td>
			<td>{{$bos->level}}</td>


			@if($bos->respawn_time > 0)<!--si respanea significa q esta muerto-->
			<td style="font-weight:bold;"><font color="red">Muerto</font></td>
			@else
			<td style="font-weight:bold;"><font color="green">Vivo</font></td>
			@endif
			
			<td>
			
			@if($bos->respawn_time > 0)
			{{	$bos->respawn_time = date('d/m/Y \\s H:i:s') }}
				
			@endif
			</td>
		</tr>
		
	</tbody>
	@endforeach

	</table>
 </div>
</div>


<hr>


              <h1>Raid Boss</h1>
<div class="portlet-body">
        <div class="table-scrollable">
<table  class="default table table-hover table-light">
	
	<tr>
		<th>Nombre</th>
		<th>Level</th>
		<th>Status</th>
		<th>Respawn</th>
	</tr>
	@foreach($raids as $raid)
	<tbody>
		<tr class="">
			<td>{{$raid->name}}</td>
			<td>{{$raid->level}}</td>


			@if($raid->respawn_time > 0)<!--si respanea significa q esta muerto-->
			<td style="font-weight:bold;"><font color="red">Muerto</font></td>
			@else
			<td style="font-weight:bold;"><font color="green">Vivo</font></td>
			@endif
			
			<td>
			
			@if($raid->respawn_time > 0)
			{{	$raid->respawn_time = date('d/m/Y \\s H:i:s') }}
				
			@endif
			</td>
		</tr>
		
	</tbody>
	@endforeach

	</table>
 </div>
</div>


@endsection