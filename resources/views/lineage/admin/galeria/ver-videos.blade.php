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

<i class="fa fa-youtube  font-red"></i>
<span class="caption-subject font-red sbold uppercase">Galeria de Videos</span>

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

    @foreach($videos as $video)
    <div class="form-horizontal  col-xs-12 col-sm-12 col-md-3">
        <a href="" class="thumbnail img-responsive"  data-toggle="modal" data-target="#video-{{$video->id}}">
        <img width="350" height="350" src="{{$video->imagen}}"></a>

          
        
       
        @if($video->visible == 1)

        {!!Form::open(['url'=>['galeria-video-update',$video->id],'method'=>'PUT' , 'files'=>True])!!}
         <input type="text" value="0" name="visible" hidden >
        <button type="submit" class="form-horizontal  col-xs-12 col-sm-12 col-md-6 btn btn-default"> <i class="fa  fa-eye-slash fa-lg"></i></button>
        {!!Form::close()!!}

        @else

        {!!Form::open(['url'=>['galeria-video-update',$video->id],'method'=>'PUT' , 'files'=>True])!!}
        <input type="text" value="1" name="visible" hidden >
        <button type="submit" class="form-horizontal  col-xs-12 col-sm-12 col-md-6 btn btn-warning"> <i class="fa  fa-eye fa-lg"></i></button>
        {!!Form::close()!!}

        @endif

        <a href="" class="form-horizontal  col-xs-12 col-sm-12 col-md-6 btn btn-danger" data-toggle="modal" data-target="#confirmDelete-{{ $video->id }}"><i class="fa  fa-trash fa-lg"></i></a>

    </div>
     @endforeach


     <!--modal-->
            @foreach($videos as $video)
            <div class="modal fade" id="video-{{$video->id}}" tabindex="-1" role="dialog" aria-labelledby="videoModal" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-body">
                            <button  type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            <div>
                                <iframe width="560" height="360" src="{{$video->link}}" frameborder="10" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach

</div>
        
                </div>
            </div>
            <!-- END SAMPLE TABLE PORTLET-->
        </div>
    </div>


@include('lineage.admin.galeria.modal.modal-delete-video')
@endsection
