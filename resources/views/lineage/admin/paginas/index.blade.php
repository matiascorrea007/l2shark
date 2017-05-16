@extends('layouts.metronic')
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

<i class="fa fa-hand-o-down font-red"></i>
<span class="caption-subject font-red sbold uppercase">Configuracion De las Paginas</span>


    <div><br>
    </div>


     </div><!--end caption-->



    <div class="actions">
       <div class="btn-group btn-group-devided" >
               
      
           @if(empty(DB::table('web_paginas')->get()))
              <a class="btn btn-success" data-toggle="modal" data-target="#crear-paginas" >
              <i class="fa  fa-plus fa-lg"></i></a>
            @endif
      
       </div>
   </div>


        </div><!--portlet-title-->
    <div class="portlet-body">

 @foreach($paginas as $pagina)
{!!Form::model($pagina,['url'=>['paginas-update',$pagina->id],'method'=>'PUT' , 'files'=>True])!!}

<div class="modal-body">      
@include('lineage.admin.paginas.forms.formscreate')
</div>
<div class="modal-footer">
{!!Form::submit('Guardar',['class'=>'btn btn-primary pull-right'])!!}
<button type="button" class="btn btn-primary pull-left" data-dismiss="modal">Close</button>
{!!Form::close()!!}
@endforeach
                </div>
            </div>
            <!-- END SAMPLE TABLE PORTLET-->
        </div>
    </div>
                  

<!--modal editar user-->
 @include('lineage.admin.paginas.modal.modal-crear-paginas')


@endsection
