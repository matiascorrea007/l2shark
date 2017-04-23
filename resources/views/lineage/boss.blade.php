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
	
	<tbody>
		<tr class="">
			<td><img class="bossImg" src="skin/monster/imgs/boss/antharas.jpg"></td>
			<td>{{$Antharas->name}}</td>
			<td>{{$Antharas->level}}</td>


			@if($Antharas->respawn_time > 0)<!--si respanea significa q esta muerto-->
			<td style="font-weight:bold;"><font color="red">Muerto</font></td>
			@else
			<td style="font-weight:bold;"><font color="green">Vivo</font></td>
			@endif
			
			<td>
			
			@if($Antharas->respawn_time > 0)
			{{	$Antharas->respawn_time = date('d/m/Y \\s H:i:s') }}
				
			@endif
			</td>
		</tr>

		<tr class="">
			<td><img class="bossImg" src="skin/monster/imgs/boss/valakas.jpg"></td>
			<td>{{$Valakas->name}}</td>
			<td>{{$Valakas->level}}</td>


			@if($Valakas->respawn_time > 0)<!--si respanea significa q esta muerto-->
			<td style="font-weight:bold;"><font color="red">Muerto</font></td>
			@else
			<td style="font-weight:bold;"><font color="green">Vivo</font></td>
			@endif
			
			<td>
			
			@if($Valakas->respawn_time > 0)
			{{	$Valakas->respawn_time = date('d/m/Y \\s H:i:s') }}
				
			@endif
			</td>
		</tr>

		<tr class="">
			<td><img class="bossImg" src="skin/monster/imgs/boss/benom.jpg"></td>
			<td>{{$Benom->name}}</td>
			<td>{{$Benom->level}}</td>


			@if($Benom->respawn_time > 0)<!--si respanea significa q esta muerto-->
			<td style="font-weight:bold;"><font color="red">Muerto</font></td>
			@else
			<td style="font-weight:bold;"><font color="green">Vivo</font></td>
			@endif
			
			<td>
			
			@if($Benom->respawn_time > 0)
			{{	$Benom->respawn_time = date('d/m/Y \\s H:i:s') }}
				
			@endif
			</td>
		</tr>

		<tr class="">
			<td><img class="bossImg" src="skin/monster/imgs/boss/baium.jpg"></td>
			<td>{{$Baium->name}}</td>
			<td>{{$Baium->level}}</td>


			@if($Baium->respawn_time > 0)<!--si respanea significa q esta muerto-->
			<td style="font-weight:bold;"><font color="red">Muerto</font></td>
			@else
			<td style="font-weight:bold;"><font color="green">Vivo</font></td>
			@endif
			
			<td>
			
			@if($Baium->respawn_time > 0)
			{{	$Baium->respawn_time = date('d/m/Y \\s H:i:s') }}
				
			@endif
			</td>
		</tr>

		<tr class="">
			<td><img class="bossImg" src="skin/monster/imgs/boss/queen.jpg"></td>
			<td>{{$QueenAnt->name}}</td>
			<td>{{$QueenAnt->level}}</td>


			@if($QueenAnt->respawn_time > 0)<!--si respanea significa q esta muerto-->
			<td style="font-weight:bold;"><font color="red">Muerto</font></td>
			@else
			<td style="font-weight:bold;"><font color="green">Vivo</font></td>
			@endif
			
			<td>
			
			@if($QueenAnt->respawn_time > 0)
			{{	$QueenAnt->respawn_time = date('d/m/Y \\s H:i:s') }}
				
			@endif
			</td>
		</tr>

		<tr class="">
			<td><img class="bossImg" src="skin/monster/imgs/boss/core.jpg"></td>
			<td>{{$Core->name}}</td>
			<td>{{$Core->level}}</td>


			@if($Core->respawn_time > 0)<!--si respanea significa q esta muerto-->
			<td style="font-weight:bold;"><font color="red">Muerto</font></td>
			@else
			<td style="font-weight:bold;"><font color="green">Vivo</font></td>
			@endif
			
			<td>
			
			@if($Core->respawn_time > 0)
			{{	$Core->respawn_time = date('d/m/Y \\s H:i:s') }}
				
			@endif
			</td>
		</tr>


		<tr class="">
			<td><img class="bossImg" src="skin/monster/imgs/boss/zaken.jpg"></td>
			<td>{{$Zaken->name}}</td>
			<td>{{$Zaken->level}}</td>


			@if($Zaken->respawn_time > 0)<!--si respanea significa q esta muerto-->
			<td style="font-weight:bold;"><font color="red">Muerto</font></td>
			@else
			<td style="font-weight:bold;"><font color="green">Vivo</font></td>
			@endif
			
			<td>
			
			@if($Zaken->respawn_time > 0)
			{{	$Zaken->respawn_time = date('d/m/Y \\s H:i:s') }}
				
			@endif
			</td>
		</tr>

		<tr class="">
			<td><img class="bossImg" src="skin/monster/imgs/boss/vanhalisha.jpg"></td>
			<td>{{$ScarletvanHalisha->name}}</td>
			<td>{{$ScarletvanHalisha->level}}</td>


			@if($ScarletvanHalisha->respawn_time > 0)<!--si respanea significa q esta muerto-->
			<td style="font-weight:bold;"><font color="red">Muerto</font></td>
			@else
			<td style="font-weight:bold;"><font color="green">Vivo</font></td>
			@endif
			
			<td>
			
			@if($ScarletvanHalisha->respawn_time > 0)
			{{	$ScarletvanHalisha->respawn_time = date('d/m/Y \\s H:i:s') }}
				
			@endif
			</td>
		</tr>

		<tr class="">
			<td><img class="bossImg" src="skin/monster/imgs/boss/frintezza.jpg"></td>
			<td>{{$Frintezza->name}}</td>
			<td>{{$Frintezza->level}}</td>


			@if($Frintezza->respawn_time > 0)<!--si respanea significa q esta muerto-->
			<td style="font-weight:bold;"><font color="red">Muerto</font></td>
			@else
			<td style="font-weight:bold;"><font color="green">Vivo</font></td>
			@endif
			
			<td>
			
			@if($Frintezza->respawn_time > 0)
			{{	$Frintezza->respawn_time = date('d/m/Y \\s H:i:s') }}
				
			@endif
			</td>
		</tr>


		<tr class="">
			<td><img class="bossImg" src="skin/monster/imgs/boss/orfen.jpg"></td>
			<td>{{$Orfen->name}}</td>
			<td>{{$Orfen->level}}</td>


			@if($Orfen->respawn_time > 0)<!--si respanea significa q esta muerto-->
			<td style="font-weight:bold;"><font color="red">Muerto</font></td>
			@else
			<td style="font-weight:bold;"><font color="green">Vivo</font></td>
			@endif
			
			<td>
			
			@if($Orfen->respawn_time > 0)
			{{	$Orfen->respawn_time = date('d/m/Y \\s H:i:s') }}
				
			@endif
			</td>
		</tr>
		
	</tbody>

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