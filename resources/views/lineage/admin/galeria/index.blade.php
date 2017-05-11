@extends('layouts.metronic')
@section('content')
@include('alerts.request')
@include('alerts.success')





<div class="row">
    <div class="col-md-12">
    <div class="portlet light ">
        <div class="portlet-title">
            <div class="caption">

<i class="fa fa-wordpress  font-red"></i>
<span class="caption-subject font-red sbold uppercase">Seccion de Post</span>

    <div><br>
    </div>


     </div><!--end caption-->



    <div class="actions">
       <div class="btn-group btn-group-devided" >
               
      <a class="btn btn-success" data-toggle="modal" data-target="#nuevo-post" >
      <i class="fa  fa-plus fa-lg"></i></a>
      
       </div>
   </div>


        </div><!--portlet-title-->
    <div class="portlet-body">
        
        {!!Form::open(['url'=>['galeria-video-store'],'method'=>'POST' , 'files'=>True])!!}
			@include('lineage.admin.galeria.forms.formscreatevideo')
		{!!Form::submit('Guardar',['class'=>'btn btn-primary pull-right'])!!}
		{!!Form::close()!!}

        
                </div>
            </div>
            <!-- END SAMPLE TABLE PORTLET-->
        </div>
    </div>

                          

@endsection
