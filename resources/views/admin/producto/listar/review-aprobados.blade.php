@extends('layouts.metronic')
@section('content')
<!-- muestra mensaje que se a modificado o creado exitosamente-->
<!--include('alerts.success')-->


 <div class="row">
    <div class="col-md-12">
    <div class="portlet light ">
        <div class="portlet-title">
            <div class="caption">

<i class="fa fa-cubes font-red"></i>
<span class="caption-subject font-red sbold uppercase">Seccion de Productos</span>
@include('alerts.request')
@include('alerts.success')

    <div><br>
    </div>


    <div class="box-body">
<ul class="nav nav-tabs">
  <li><a href="{{ url('producto') }}">Todos </a></li>
  <li><a href="{{ url('producto-combo') }}">Combos</a></li>
  <li><a href="{{ url('producto-oferta') }}">Oferta</a></li>
  <li><a href="{{ url('producto-stock-critico') }}">Stock Critico</a></li>
  <li><a href="{{ url('producto-desabilitado') }}">Desabilitados</a></li>
  <li  class="active"><a href="{{ url('producto-review') }}">Review ({{$count}})</a></li>
</ul>
</div>

<!--buscador-->
{!!Form::open(['url'=>'producto', 'method'=>'GET' , 'class'=>'navbar-form navbar-left' , 'role'=>'Search'])!!}
<div class="form-group">
{!!Form::text('codigo',null,['class'=>'form-control','placeholder'=>'Codigo'])!!}
{!!Form::text('descripcion',null,['class'=>'form-control','placeholder'=>'Descripcion'])!!}
 <button type="submit" class="fa  fa-search btn btn-success"> BUSCAR </button>
</div>
{!!Form::close()!!}
 <!--endbuscador--> 




     </div><!--end caption-->



    <div class="actions">
       <div class="btn-group btn-group-devided" >

  
<br><a class="btn btn-success" href="{!! URL::to('producto-create') !!}">
  <i class="fa fa-cubes fa-lg"></i> Nuevo Producto</a>

<a class="btn btn-success" href="{!! URL::to('producto-combo-pc') !!}">
  <i class="fa fa-desktop fa-lg"></i> Nuevo Combo</a>
      
       </div>
   </div>


        </div><!--portlet-title-->
    <div class="portlet-body">
        <div class="table-scrollable">
            <table class="table table-hover table-light">       
  <thead>
    <th>Comentario</th>
    <th>Usuario</th>
    <th>Status</th> 
    <th class="col-md-4">Operaciones</th>
  </thead>
  @foreach($reviews as $review)
  <tbody>
  <!-- -->
  <td>{{ $review -> comment}}</td>
  <td>{{ $review ->user->nombre}}</td>

  <td>
      @if ($review -> approved == 1)
      <span class="label label-success">Aprobado</span>
      @elseif ($review -> approved == 0)
     <span class="label label-danger">Spam</span>
      @endif
  </td>


<td>

<a class="btn btn-success" href="{!! URL::to('producto-review-confirm/'.$review->id) !!}"><i class="fa fa-check">check</i></a>

<a class="btn btn-warning" href="{!! URL::to('producto-review-spam/'.$review->id) !!}"><i class="fa fa-close">span</i></a>

<!--esto es para que solo el administrador pueda eliminar-->
@if (Auth::user()->perfil_id == 1)
<!--para el metodo eliminar necesito de un formulario para ejecutarlo-->
 <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#confirmDelete-{{ $review->id }}"><i class="fa fa-trash-o"> Eliminar</i></button>
@endif

</td>
@endforeach

  </tbody>
  </table>
                    </div>
                </div>
            </div>
            <!-- END SAMPLE TABLE PORTLET-->
        </div>
    </div>


<!--modal de eliminar producto-->
 @include('admin.producto.modal.modal-delete-review')


<!--para renderizar la paginacion-->
   {!! $reviews->appends(Request::only(['codigo','descripcion']))->render() !!}

@endsection
