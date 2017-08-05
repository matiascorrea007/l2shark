<?php 
$skin =  DB::table('web_skins')->first();
 ?>

@extends($skin->nombre == "newland" ? 'layouts.newland.index' : 'layouts.metronic');
@section('content')
@include('alerts.request')
@include('alerts.success')
@include('alerts.errors')
@include('flash::message')


<div class="row">
    <div class="col-md-12">
    <div class="portlet light ">
        <div class="portlet-title">
            <div class="caption">

<i class="fa fa-exchange  font-red"></i>
<span class="caption-subject font-red sbold uppercase">Historial de Transferencias </span>

    <div><br>
    </div>

     </div><!--end caption-->

    <div class="actions">
       <div class="btn-group btn-group-devided" >
       </div>
   </div>
        </div><!--portlet-title-->




            <div class="portlet-body">
            <h2>Transferencias Realizadas a Personajes</h2>  

<p>Transferencias a personaje in-game (conversión de Online Coin a Donate Coin)</p>
               <div class="table-scrollable">
            <table class="table table-hover table-light">
  <thead>
      <tr>
    <th>#</th>
    <th>Cantidad</th>
    <th>Destinatario</th>
    <th>Fecha</th>
      </tr>
    </thead>
    @foreach($transferenciasPlayers as $transferenciasPlayer)
    <tbody>
  <td>{{ $transferenciasPlayer -> id}}</td>
  <td>{{ $transferenciasPlayer -> cantidad}}</td>
  <td>{{ $transferenciasPlayer -> pj}}</td>
  <td>{{ $transferenciasPlayer -> created_at}}</td>
  

  </tbody>
  @endforeach
  </table>
                    </div>

  




  <h2>Transferencias Realizadas a otras Cuentas</h2>  

<p>Transferencias de Online Coins a otra Cuenta</p>
               <div class="table-scrollable">
            <table class="table table-hover table-light">
  <thead>
      <tr>
    <th>#</th>
    <th>Cantidad</th>
    <th>Destinatario</th>
    <th>Fecha</th>
      </tr>
    </thead>
    @foreach($transferenciasCuentas as $transferenciasCuenta)
    <tbody>
  <td>{{ $transferenciasCuenta -> id}}</td>
  <td>{{ $transferenciasCuenta -> cantidad}}</td>
  <td>{{ $transferenciasCuenta -> email}}</td>
  <td>{{ $transferenciasCuenta -> created_at}}</td>
  

  </tbody>
  @endforeach
  </table>
                    </div>



                </div>


            </div>
            <!-- END SAMPLE TABLE PORTLET-->
        </div>
    </div>



@endsection
