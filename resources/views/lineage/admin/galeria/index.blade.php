@extends('layouts.metronic')
@section('content')
@include('alerts.request')
@include('alerts.success')
@include('alerts.errors')




<div class="row">
    <div class="col-md-12">
    <div class="portlet light ">
        <div class="portlet-title">
            <div class="caption">

<i class="fa fa-youtube  font-red"></i>
<span class="caption-subject font-red sbold uppercase">Videos</span>

    <div><br>
    </div>


     </div><!--end caption-->



    <div class="actions">
       <div class="btn-group btn-group-devided" >
               

       </div>
   </div>


        </div><!--portlet-title-->
    <div class="portlet-body">
        
        {!!Form::open(['url'=>['galeria-video-store'],'method'=>'POST' , 'files'=>True])!!}
			@include('lineage.admin.galeria.forms.formscreatevideo')
		{!!Form::close()!!}

        
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

<i class="fa fa-picture-o  font-red"></i>
<span class="caption-subject font-red sbold uppercase">Imagenes</span>

    <div><br>
    </div>


     </div><!--end caption-->



    <div class="actions">
       <div class="btn-group btn-group-devided" >
               

       </div>
   </div>


        </div><!--portlet-title-->
    <div class="portlet-body">
        
        {!!Form::open(['url'=>['galeria-imagen-store'],'method'=>'POST' , 'files'=>True])!!}
			@include('lineage.admin.galeria.forms.formscreateImagen')
		{!!Form::close()!!}

        
                </div>
            </div>
            <!-- END SAMPLE TABLE PORTLET-->
        </div>
    </div>


@endsection
