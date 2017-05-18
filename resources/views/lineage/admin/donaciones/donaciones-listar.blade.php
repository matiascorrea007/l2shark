@extends('layouts.metronic')
@section('content')
@include('alerts.request')
@include('alerts.success')
@include('alerts.errors')
@include('flash::message')

@if(Auth::user()->admin == 1)
<div class="row">
    <div class="col-md-12">
    <div class="portlet light ">
        <div class="portlet-title">
            <div class="caption">

<i class="fa fa-database  font-red"></i>
<span class="caption-subject font-red sbold uppercase">Configuracion de la Base de Datos</span>

    <div><br>
    </div>

     </div><!--end caption-->

    <div class="actions">
       <div class="btn-group btn-group-devided" >
       </div>
   </div>
        </div><!--portlet-title-->




            <div class="portlet-body">
               <div class="table-scrollable">
            <table class="table table-hover table-light">
  <thead>
      <tr>
    <th>Id</th>
    <th>Account</th>
    <th>Coins</th>
    <th>Bonus</th>
    <th>Coins Entregados</th>
    <th>Total</th>
    <th>Metodo</th>
    <th>Status</th>
    <th>creado en</th>
    <th class="col-md-4">Operaciones</th> 
      </tr>
    </thead>
    @foreach($donaciones as $donacione)
    <tbody>
  <td>{{ $donacione -> id}}</td>
  <td>{{ $donacione -> account}}</td>
  <td>{{ $donacione -> coin}}</td>
  <td>{{ $donacione -> bonus}}</td>
  <td> <img src="storage/icono admin/coins.svg" alt="" width="25"  height="25"> {{ $donacione -> bonus + $donacione -> coin}}</td>
  <td>${{ $donacione -> total}}</td>
  <td>{{ $donacione -> metodo}}</td>

  <td>@if ($donacione -> status == "pendiente")
      <span class="label label-warning">{{ $donacione -> status}}</span>
      @elseif ($donacione -> status == "entregado")
      <span class="label label-success">{{ $donacione -> status }}</span>
      @endif
  </td>
  
  <td>{{ $donacione -> created_at}}</td>


  
  
<td>

      


<!--para el metodo eliminar necesito de un formulario para ejecutarlo-->
 <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#confirmDelete-{{ $donacione->id }}"><i class="fa fa-trash-o"> Eliminar</i></button>

</td>

  </tbody>
  @endforeach
  </table>
                    </div>



                </div>


            </div>
            <!-- END SAMPLE TABLE PORTLET-->
        </div>
    </div>





@include('lineage.admin.donaciones.modal.status')
@include('lineage.admin.donaciones.modal.delete')
@endif
@endsection
