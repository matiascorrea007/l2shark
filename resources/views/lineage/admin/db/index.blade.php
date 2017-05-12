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
        
        @if(!empty($db))

        {!!Form::model($db,['url'=>['db-config-update',$db->id],'method'=>'PUT' , 'files'=>True])!!}
			@include('lineage.admin.db.forms.formsconexion')
		{!!Form::close()!!}

        @else

        {!!Form::open(['url'=>['db-config-store'],'method'=>'POST' , 'files'=>True])!!}
            @include('lineage.admin.db.forms.formsCreateconexion')
        {!!Form::close()!!}

        @endif
        
                </div>
            </div>
            <!-- END SAMPLE TABLE PORTLET-->
        </div>
    </div>



@endsection
