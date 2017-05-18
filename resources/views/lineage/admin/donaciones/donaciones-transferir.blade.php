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

<i class="fa fa-exchange  font-red"></i>
<span class="caption-subject font-red sbold uppercase">Transferir Online Coins</span>

    <div><br>
    </div>

     </div><!--end caption-->

    <div class="actions">
       <div class="btn-group btn-group-devided" >
       </div>
   </div>
        </div><!--portlet-title-->




            <div class="portlet-body ">
             
       

    {!!Form::open(['url'=>['transferir-coin-player'],'method'=>'POST' , 'files'=>True])!!}
          @include('lineage.admin.donaciones.forms.transferir-player')  
    {!!Form::close()!!}
    

    {!!Form::open(['url'=>['transferir-coin-cuenta'],'method'=>'POST' , 'files'=>True])!!}
         @include('lineage.admin.donaciones.forms.transferir-cuenta')
    {!!Form::close()!!}




                  </div>

            </div>
            <!-- END SAMPLE TABLE PORTLET-->
        </div>
    </div>






@endsection
