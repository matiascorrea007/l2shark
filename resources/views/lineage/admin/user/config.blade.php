@extends('layouts.metronic')
@section('content')
@include('alerts.errors')
@include('alerts.request')
@include('alerts.success')
@include('flash::message')
{!! Toastr::message() !!}



<div class="row">
    <div class="col-md-12">
    <div class="portlet light ">
        <div class="portlet-title">
            <div class="caption">

<i class="fa fa-unlock-alt font-red"></i>
<span class="caption-subject font-red sbold uppercase">Cambiar Password</span>

    <div><br>
    </div>


     </div><!--end caption-->



    <div class="actions">
       <div class="btn-group btn-group-devided" >
       </div>
   </div>


        </div><!--portlet-title-->
    <div class="portlet-body">
        
      
    

     {!!Form::model($user,['url'=>['cambiar-password',$user->id],'method'=>'PUT' , 'files'=>True])!!}
         @include('lineage.admin.user.forms.cambiarPassword')
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

<i class="fa fa-envelope font-red"></i>
<span class="caption-subject font-red sbold uppercase">Cambiar Email</span>

    <div><br>
    </div>


     </div><!--end caption-->



    <div class="actions">
       <div class="btn-group btn-group-devided" >
       </div>
   </div>


        </div><!--portlet-title-->
    <div class="portlet-body">
        
      
    

     {!!Form::model($user,['url'=>['cambiar-email',$user->id],'method'=>'PUT' , 'files'=>True])!!}
         @include('lineage.admin.user.forms.cambiarEmail')
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

<i class="fa fa-exchange font-red"></i>
<span class="caption-subject font-red sbold uppercase">Asociar cuenta con el servidor Lineage 2</span>

    <div><br>
    </div>


     </div><!--end caption-->



    <div class="actions">
       <div class="btn-group btn-group-devided" >
       </div>
   </div>


        </div><!--portlet-title-->
    <div class="portlet-body">
        
      
    

     {!!Form::model($user,['url'=>['asociar-cuenta',$user->id],'method'=>'PUT' , 'files'=>True])!!}
         @include('lineage.admin.user.forms.asociarCuenta')
    {!!Form::close()!!}
       
        
                </div>
            </div>
            <!-- END SAMPLE TABLE PORTLET-->
        </div>
    </div>





@endsection