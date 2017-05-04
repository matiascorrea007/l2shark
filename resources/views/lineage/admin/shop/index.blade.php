@extends('layouts.metronic')
@include('alerts.errors')
@include('alerts.request')
@include('alerts.success')
@section('content')


 <div class="row">
    <div class="col-md-12">
    <div class="portlet light ">
        <div class="portlet-title">
            <div class="caption">

<i class="fa fa-bank font-red"></i>
<span class="caption-subject font-red sbold uppercase">Seccion Shop</span>

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

            <!--Categorias-->
            @include('lineage.admin.shop.forms.formscategoria')

                </div>
            </div>
            <!-- END SAMPLE TABLE PORTLET-->
        </div>
    </div>


@include('lineage.admin.shop.modal.modal-crear-categoria')








<div class="row">
    <div class="col-md-12">
    <div class="portlet light ">
        <div class="portlet-title">
            <div class="caption">

<i class="fa fa-image font-red"></i>
<span class="caption-subject font-red sbold uppercase">Shop</span>
    <div><br>
    </div>
     </div><!--end caption-->

    <div class="actions">
       <div class="btn-group btn-group-devided" >
              <a class="btn btn-success" href="{{ url('combo-create') }}" >
              <i class="fa  fa-plus fa-lg"></i></a>
       </div>
   </div>

        </div><!--portlet-title-->
          
          <div class="row">
            
            
          


          </div>



            </div>
            <!-- END SAMPLE TABLE PORTLET-->
        </div>
    </div>


@endsection