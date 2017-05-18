@extends('layouts.metronic')
@section('content')
@include('alerts.errors')
@include('alerts.request')
@include('alerts.success')
@include('flash::message')

@if(Auth::user()->admin == 1)

 <div class="row">
    <div class="col-md-12">
    <div class="portlet light ">
        <div class="portlet-title">
            <div class="caption">

<i class="fa fa-bank font-red"></i>
<span class="caption-subject font-red sbold uppercase">Editar Paquete {{$combo->nombre}}</span>

    <div><br>
    </div>
     </div><!--end caption-->

    <div class="actions">
       <div class="btn-group btn-group-devided" >
         <!--aqui van los botones-->
       </div>
   </div>

        </div><!--portlet-title-->
    <div class="portlet-body">


            <div class="panel-body">
                
    {!!Form::model($combo,['url'=>['combo-update-'.$combo->id],'method'=>'PUT' , 'files'=>True])!!}
      @include('lineage.admin.shop.forms.formseditarcombo')
    {!!Form::submit('modificar',['class'=>'btn btn-primary pull-right'])!!}
    {!!Form::close()!!}

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
<span class="caption-subject font-red sbold uppercase">Editar Items del Paquete {{$combo->nombre}}</span>

    <div><br>
    </div>
     </div><!--end caption-->

    <div class="actions">
       <div class="btn-group btn-group-devided" >
         <!--aqui van los botones-->
       </div>
   </div>

        </div><!--portlet-title-->
    <div class="portlet-body">


            <div class="panel-body">
                

  {!!Form::open(['url'=>['combo-update-item-'.$combo->id],'method'=>'PUT' , 'files'=>True])!!}
  {{Form::token()}}
    @include('lineage.admin.shop.forms.formseditarcomboitems')
  {!!Form::submit('Editar',['class'=>'btn btn-primary pull-right'])!!}
  {!!Form::close()!!}



            </div>
                </div>
            </div>
            <!-- END SAMPLE TABLE PORTLET-->
        </div>
    </div>

@include('lineage.admin.shop.modal.modal-crear-categoria')



@endif
@endsection