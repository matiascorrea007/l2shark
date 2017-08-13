@extends('layouts.newland')
@section('menu')
<div class="container" >
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

@section('content')
@include('alerts.errors')
@include('alerts.request')
@include('alerts.success')
@include('flash::message')



<section class="padding-top-40 padding-bottom-40" style="background-image: url(skin/newland/img/boss.jpg); background-repeat: no-repeat; background-attachment: fixed;">	
			<div class="container">
				<div class="row sidebar">
					<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 leftside">
						<div class="row">
							<div class="col-lg-12">
								<div class="headline">
								<div class="thumbnail-header">
	
			
		</div>
								</div>
							</div>
						</div>
						
						
					</div>
					
					</div>
<div class="">
		<div class="">
			


              <h1>Grand Boss</h1>
<div class="portlet-body">
        <div class="table-scrollable">
<table  class="table table-bordered ">
	
	<tr>
		<th></th>
		<th>Nombre</th>
		<th>Level</th>
		<th>Status</th>
		<th>Respawn</th>
	</tr>
	
	<tbody>
		@if(!empty($Antharas))
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
		@endif

		@if(!empty($Valakas))
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
		@endif

		@if(!empty($Benom))
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
		@endif

		@if(!empty($Baium))
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
		@endif

		@if(!empty($QueenAnt))
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
		@endif

		@if(!empty($Core))
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
		@endif

		@if(!empty($Zaken))
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
		@endif

		@if(!empty($ScarletvanHalisha))
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
		@endif

		@if(!empty($Frintezza))
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
		@endif

		@if(!empty($Orfen))
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
		@endif
	</tbody>

	</table>
 </div>
</div>


<hr>


              <h1>Raid Boss</h1>
<div class="portlet-body">
        <div class="table-scrollable">
<table  class=" table table-bordered ">
	
	<tr>
		<th>Nombre</th>
		<th>Level</th>
		<th>Status</th>
		<th style="width:200px;" >Respawn</th>
	</tr>
	@if(!empty($raids))
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
	@endif
	</table>
 </div>
</div>




		</div>
	</div>


				</div>
			
		</section>






@endsection