@extends('layouts.metronic')
@section('content')
@include('alerts.request')
@include('alerts.success')




<div class="row">
    <div class="col-md-12">
    <div class="portlet light ">
        <div class="portlet-title">
            <div class="caption">

<i class="icon-user font-red"></i>
<span class="caption-subject font-red sbold uppercase">Configuracion Box Facebook</span>

    <div><br>
    </div>


     </div><!--end caption-->



    <div class="actions">
       <div class="btn-group btn-group-devided" >
               
      
           @if(empty(DB::table('web_facebooks')->get()))
              <a class="btn btn-success" data-toggle="modal" data-target="#crear-facebook" >
              <i class="fa  fa-plus fa-lg"></i></a>
            @endif
      
       </div>
   </div>


        </div><!--portlet-title-->
    <div class="portlet-body">
        <div class="table-scrollable">
            <table class="table table-hover table-light">
  <thead>
      <tr>
    <th>Id</th>
    <th>link</th>

    <th class="col-md-4">Operaciones</th> 
      </tr>
    </thead>
    @if(!empty($boxs))
    @foreach($boxs as $box)
    <tbody>
  <td>{{ $box -> id}}</td>
  <td>{!! $box -> box !!}</td>


  
<td>
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#Edit-{{ $box->id }}"><i class="fa fa-edit"> Editar</i></button>
<!--esto es para que solo el administrador pueda eliminar-->
@if (Auth::user()->perfil_id == 1)
<!--para el metodo eliminar necesito de un formulario para ejecutarlo-->
 <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#confirmDelete-{{ $box->id }}"><i class="fa fa-trash-o"> Eliminar</i></button>
@endif
</td>

  </tbody>
  @endforeach
  @endif
  </table>
                    </div>
                </div>
            </div>
            <!-- END SAMPLE TABLE PORTLET-->
        </div>
    </div>

@if(!empty($boxs))
<!--modal editar user-->
 @include('lineage.admin.config.facebook.modal.modal-edit-boxfacebook')
<!--modal eliminar usuario-->
 @include('lineage.admin.config.facebook.modal.modal-delete-boxfacebook')
 @endif
<!--modal crear usuario-->
 @include('lineage.admin.config.facebook.modal.modal-crear-boxfacebook')












<div class="row">
    <div class="col-md-12">
    <div class="portlet light ">
        <div class="portlet-title">
            <div class="caption">

<i class="fa fa-image font-red"></i>
<span class="caption-subject font-red sbold uppercase">Configurar Logo</span>


    <div><br>
    </div>


     </div><!--end caption-->



    <div class="actions">
       <div class="btn-group btn-group-devided" >


    @if(empty(DB::table('web_logos')->get()))
              <a class="btn btn-success" data-toggle="modal" data-target="#crear-logo" >
              <i class="fa  fa-plus fa-lg"></i></a>
            @endif
      
       </div>
   </div>


        </div><!--portlet-title-->
    <div class="portlet-body">
        <div class="table-scrollable">
            <table class="table table-hover table-light">
  <thead>
      <tr>
    <th>Id</th>
    <th>Logo</th>
    <th>Imagen</th>
    <th class="col-md-4">Operaciones</th> 
      </tr>
    </thead>
    @foreach($logos as $logo)
    <tbody>
  <td>{{ $logo -> id}}</td>
  <td>{{ $logo -> logo}}</td>
  <td><i class="icon fa fa-fw"><img src="storage/paginas/home/logo/{{$logo->logo}}"  width="40" height="40"></i></td> 

  
<td>
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#Editlogo-{{$logo->id}}"><i class="fa fa-edit"> Editar</i></button>
<!--esto es para que solo el administrador pueda eliminar-->

<!--para el metodo eliminar necesito de un formulario para ejecutarlo-->
 <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#confirmDelete-logo-{{ $logo->id }}"><i class="fa fa-trash-o"> Eliminar</i></button>

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

<!--modal editar user-->
 @include('lineage.admin.config.logo.modal.modal-edit-logo')
<!--modal eliminar usuario-->
 @include('lineage.admin.config.logo.modal.modal-delete-logo')
 <!--modal crear usuario-->
 @include('lineage.admin.config.logo.modal.modal-crear-logo')










<div class="row">
    <div class="col-md-12">
    <div class="portlet light ">
        <div class="portlet-title">
            <div class="caption">

<i class="fa fa-image font-red"></i>
<span class="caption-subject font-red sbold uppercase">Configurar Votos</span>


    <div><br>
    </div>


     </div><!--end caption-->



    <div class="actions">
       <div class="btn-group btn-group-devided" >


    
              <a class="btn btn-success" data-toggle="modal" data-target="#crear-voto" >
              <i class="fa  fa-plus fa-lg"></i></a>
            
      
       </div>
   </div>


        </div><!--portlet-title-->
    <div class="portlet-body">
        <div class="table-scrollable">
            <table class="table table-hover table-light">
  <thead>
      <tr>
    <th>Id</th>
    <th>titulo</th>
    <th>Imagen</th>
    <th class="col-md-4">Operaciones</th> 
      </tr>
    </thead>
    @foreach($votos as $voto)
    <tbody>
  <td>{{ $voto -> id}}</td>
  <td>{{ $voto -> nombre }}</td>
  <td>{!! $voto -> link !!}</td>


  
<td>
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#Editvoto-{{$voto->id}}"><i class="fa fa-edit"> Editar</i></button>
<!--esto es para que solo el administrador pueda eliminar-->

<!--para el metodo eliminar necesito de un formulario para ejecutarlo-->
 <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#confirmDelete-voto-{{ $voto->id }}"><i class="fa fa-trash-o"> Eliminar</i></button>

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

<!--modal editar user-->
 @include('lineage.admin.config.votos.modal.modal-edit-voto')
<!--modal eliminar usuario-->
 @include('lineage.admin.config.votos.modal.modal-delete-voto')
 <!--modal crear usuario-->
 @include('lineage.admin.config.votos.modal.modal-crear-voto')






                          

@endsection
