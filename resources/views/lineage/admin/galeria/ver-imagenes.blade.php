<?php 
$skin =  DB::table('web_skins')->first();
 ?>

@extends($skin->nombre == "newland" ? 'layouts.newland.index' : 'layouts.metronic');
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
    <div class="portlet-body ">
        
<div class="row" style="padding: 0 20px 40px 20px;">

    @foreach($imagenes as $imagene)
    <div class="form-horizontal  col-xs-12 col-sm-12 col-md-3">
        <a href="" class="thumbnail img-responsive"  data-toggle="modal" data-target="#img-{{$imagene->id}}">
        <img width="350" height="350" src="{{$imagene->url}}"></a>
        
        
        
        @if($imagene->visible == 1)

        {!!Form::open(['url'=>['galeria-imagen-update',$imagene->id],'method'=>'PUT' , 'files'=>True])!!}
         <input type="text" value="0" name="visible" hidden >
        <button type="submit" class="form-horizontal  col-xs-12 col-sm-12 col-md-6 btn btn-default"> <i class="fa  fa-eye-slash fa-lg"></i></button>
        {!!Form::close()!!}

        @else

        {!!Form::open(['url'=>['galeria-imagen-update',$imagene->id],'method'=>'PUT' , 'files'=>True])!!}
        <input type="text" value="1" name="visible" hidden >
        <button type="submit" class="form-horizontal  col-xs-12 col-sm-12 col-md-6 btn btn-warning"> <i class="fa  fa-eye fa-lg"></i></button>
        {!!Form::close()!!}

        @endif

        <a href="" class="form-horizontal  col-xs-12 col-sm-12 col-md-6 btn btn-danger" data-toggle="modal" data-target="#confirmDelete-{{ $imagene->id }}"><i class="fa  fa-trash fa-lg"></i></a>

    </div>
     @endforeach

</div>
        
                </div>
            </div>
            <!-- END SAMPLE TABLE PORTLET-->
        </div>
    </div>


@include('lineage.admin.galeria.modal.modal-delete-imagen')
@endsection
