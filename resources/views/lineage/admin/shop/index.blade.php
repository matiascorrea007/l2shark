@extends('layouts.metronic')
@section('content')
@include('alerts.errors')
@include('alerts.request')
@include('alerts.success')


                    <h1 class="page-title"> <br>
                        <small></small>
                    </h1>
                    <div class="page-bar">
                        <ul class="page-breadcrumb">
                            <li>
                                <i class="fa fa-cart-arrow-down"></i>
                                <a href="{{ url('combo') }}" >Shop</a>
                                <i class="fa fa-angle-right"></i>
                            </li>
                            <li>
                                <a href="" >Lista de paquetes</a>
                                <i class="fa fa-angle-right"></i>
                            </li>
                        </ul>
                    </div>




 <div class="row">
    <div class="col-md-12">
    <div class="portlet light ">
        <div class="portlet-title">
            <div class="caption">

<i class="fa fa-cart-arrow-down font-red"></i>
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

<i class="ra ra-lightning-sword font-red"></i>
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
            
 @foreach($combos as $combo)
    <!-- si es sin foto cargo la foto por defecto -->
  @if($combo->imagen == "sin-foto.jpg")
  <div class="form-group col-xs-12 col-sm-12 col-md-2">
    <a class="btn center-block" href="{{ url('combo-ver-'.$combo->id) }}"><div>{{$combo->nombre}}</div><img src="storage/combos/{{$combo->imagen}}" alt="" height="100" width="100" ></a>

    <a class="btn btn-danger btn-lg fa fa-trash-o col-xs-12 col-sm-12 col-md-6" data-toggle="modal" data-target="#confirmDelete-{{ $combo->id }}"> </a>
   
    <a href="{{ url('combo-edit-'.$combo->id) }}" class="btn btn-primary btn-lg fa fa-edit col-xs-12 col-sm-12 col-md-6"></a>
    
    </div>
     <!-- caso contrario cargo la foto -->
  @elseif($combo->imagen != "sin-foto.jpg")
  <div class="form-group col-xs-12 col-sm-12 col-md-2">
    <a class="btn center-block" href="{{ url('combo-ver-'.$combo->id) }}"><div>{{$combo->nombre}}</div><img src="{{$combo->ruta}}" alt="" height="100" width="100" ></a>

    <a class="btn btn-danger btn-lg fa fa-trash-o col-xs-12 col-sm-12 col-md-6" data-toggle="modal" data-target="#confirmDelete-{{ $combo->id }}"> </a>
   
    <a href="{{ url('combo-edit-'.$combo->id) }}" class="btn btn-primary btn-lg fa fa-edit col-xs-12 col-sm-12 col-md-6"></a>

    </div>
  @endif
@endforeach



          </div>



            </div>
            <!-- END SAMPLE TABLE PORTLET-->
        </div>
    </div>



@include('lineage.admin.shop.modal.modal-delete-combo')
@endsection