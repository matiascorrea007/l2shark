@extends('layouts.metronic')
@section('content')
@include('alerts.errors')
@include('alerts.request')
@include('alerts.success')
@include('flash::message')

<div class="row">
    <div class="col-md-12">
    <div class="portlet light ">
        <div class="portlet-title">
            <div class="caption">

  {!!Form::open(['url'=>'combo-store', 'method'=>'POST' , 'class'=>'navbar-form navbar-left'])!!}<!-- FORM OPEN-->

<i class="fa fa-bank font-red"></i>
<span class="caption-subject font-red sbold uppercase">Crear Combo</span>

    <div><br>
    </div>
     </div><!--end caption-->

    <div class="actions">
       <div class="btn-group btn-group-devided" >


{!!Form::submit('Crear Combo',['class'=>'btn btn-primary pull-right'])!!}

<a class="btn btn-danger pull-right" href="{{ url('combo-item-trash') }}">Vaciar Combo<i class="fa  fa-trash "></i></a>

         <!--aqui van los botones-->
       </div>
   </div>

        </div><!--portlet-title-->
    <div class="portlet-body">

      <div class="row">
<div class="form-horizontal col-xs-12 col-sm-12 col-md-6">
  {!!Form::label('Titulo del Combo')!!}
  {!!Form::text ('nombre',null,['class'=>'form-control', 'placeholder'=>''])!!}
</div>

<div class="form-horizontal col-xs-12 col-sm-12 col-md-6">
  {!!Form::label('file', 'Imagen del Combo') !!}
  {!!Form::file('imagen')!!}
</div>
    </div>

    <div class="row form-group col-xs-12 col-sm-12 col-md-12">
        <label for="cliente">Seleccionar la Categoria</label>
            <div class="input-group">
                <select required name="categoria_id"  class="form-control"> 
                <option  value="">Seleccione la Categoria</option>
                    @foreach($categorias as $categoria)
                     <option  value="{{$categoria->id}}">{{$categoria->nombre}} </option>
                     @endforeach 
                </select> 
                <div class="input-group-btn">
                  <button type="button" class="btn btn-success" data-toggle="modal" data-target="#crear-categoria"><i class="fa fa-plus"></i></button>
                </div>
              </div>
        </div>

  <br><br>

<div class="table-scrollable">
<table id="example2" class="table table-hover table-light">
  <thead>
    
    <th>id</th>
    <th>Nombre</th>
    <th class="col-md-4">Operaciones</th>

  </thead>
 
  <tbody id="datos" >
 

  </tbody>


  </table>
  
  {!!Form::close()!!}<!-- FORM CLOSE-->

                    </div>
                </div>
            </div>
            <!-- END SAMPLE TABLE PORTLET-->
        </div>
    </div>










 <div class="row">
    <div class="col-md-12">
    <div class="portlet light ">
        <div class="portlet-title">
            <div class="caption">

<i class="fa fa-bank font-red"></i>
<span class="caption-subject font-red sbold uppercase">Seleccionar Items</span>

    <div><br>
    </div>

    <!--buscador-->

<div class="form-group navbar-form navbar-left">
  {!!Form::label('')!!}
  
  <input type="text" onkeyup="searchItems();" class="form-control"  id="searchid" name="id">
  <input type="text" onkeyup="searchItems();" class="form-control" id="searchnombre" name="nombre">

 
  {{ Form::select('type',config('options.l2items'),'',['class'=>'form-control']) }}
 <button type="submit" class="glyphicon glyphicon-search btn btn-success" id="search"> BUSCAR </button>
</div>

 <!--endbuscador-->


     </div><!--end caption-->

    <div class="actions">
       <div class="btn-group btn-group-devided" >
         <!--aqui van los botones-->
       </div>
   </div>

        </div><!--portlet-title-->
    <div class="portlet-body">

            <div class="table-scrollable">
            <table id="example2" class="table table-hover table-light">
  <thead>
    
    <th>id</th>
    <th>Nombre</th>

    <th class="col-md-4">Operaciones</th>
  </thead>
  
  <tbody id="datos2">

  </tbody>

  </table>
                    </div>

                </div>
            </div>
            <!-- END SAMPLE TABLE PORTLET-->
        </div>
    </div>


@include('lineage.admin.shop.modal.modal-crear-categoria')




  @if(!empty($alls))
<!--para renderizar la paginacion-->
  {!! $alls->render() !!}
@endif


@endsection