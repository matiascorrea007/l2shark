@extends('layouts.diamond')
@section('content')
@include('alerts.errors')
@include('alerts.request')
@include('alerts.success')
@include('flash::message')


<div class="animated" style="animation-delay: 0.5s; animation-name: zoomIn;">
		<img src="skin/diamond/images/news-title-raidboss.jpg" class="wr_title" id="logoTop">
			<section class="news clear_fix">
                        
                        <div class='page all' data-bind='1'>
								
						<div class="news-block animated zoomIn">
							<article class="post clear_fix" style="border-top:none;border-bottom: 1px solid #35343a;">
								<div class="">
									<div class="post_wrapp_v2">
								
										<div class="title">
											
										</div>
										<div class="date">
											
										</div>
										<div class="post_text">
											<div class="post_about" style="margin:0 0 0 0;">

												
												<div class="">
		<div class="thumbnail-header">
			<h3><a href="#" class="hvr-underline-from-center"></a></h3>
			
		</div>
		<div class="caption">
			


              <h1>Grand Boss</h1>
<div class="portlet-body">
        <div class="table-scrollable">
<table  class="table table-bordered table-hover">
	
	<tr>
		<th></th>
		<th>Nombre</th>
		<th>Level</th>
		<th>Status</th>
		<th>Respawn</th>
	</tr>
	
	<tbody>
		<tr class="">
			<td><img class="bossImg" src="skin/monster/imgs/boss/antharas.jpg" height="60" width="100"></td>
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
			<td><img class="bossImg" src="skin/monster/imgs/boss/valakas.jpg" height="60" width="100"></td>
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
			<td><img class="bossImg" src="skin/monster/imgs/boss/benom.jpg" height="60" width="100"></td>
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
			<td><img class="bossImg" src="skin/monster/imgs/boss/baium.jpg" height="60" width="100"></td>
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
			<td><img class="bossImg" src="skin/monster/imgs/boss/queen.jpg" height="60" width="100"></td>
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
			<td><img class="bossImg" src="skin/monster/imgs/boss/core.jpg" height="60" width="100"></td>
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
			<td><img class="bossImg" src="skin/monster/imgs/boss/zaken.jpg" height="60" width="100"></td>
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
			<td><img class="bossImg" src="skin/monster/imgs/boss/vanhalisha.jpg" height="60" width="100"></td>
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
			<td><img class="bossImg" src="skin/monster/imgs/boss/frintezza.jpg" height="60" width="100"></td>
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
			<td><img class="bossImg" src="skin/monster/imgs/boss/orfen.jpg" height="60" width="100"></td>
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
<table  class=" table table-bordered table-hover">
	
	<tr>
		<th>Nombre</th>
		<th>Level</th>
		<th>Status</th>
		<th style="width:200px;" >Respawn</th>
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




		</div>
	</div>




											</div>

								</div>
									
									</div>
								</div>
							</article>
						</div>

						</div>


						<div class="page_navigator">
							<div id="pager" class="clearfix">
								<ul>
									
								</ul>
							</div>
						</div>
				<a id="btn_more_news"></a>
			</section>
</div>







@endsection