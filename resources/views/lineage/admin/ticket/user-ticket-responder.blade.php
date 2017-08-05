<?php 
$skin =  DB::table('web_skins')->first();
 ?>

@extends($skin->nombre == "newland" ? 'layouts.newland.index' : 'layouts.metronic');
@section('content')
@include('alerts.errors')
@include('alerts.request')
@include('alerts.success')
@include('flash::message')

<div class="row">
    <div class="col-md-12">
    <div class="portlet light ">
        <div class="portlet-title">
            <div class="caption">

<i class="fa fa-ticket font-red"></i>
<span class="caption-subject font-red sbold uppercase">Responder Ticket</span>

    <div><br>
    </div>





<!--buscador-->
{!!Form::open(['url'=>'myaccount-facturas', 'method'=>'GET' , 'class'=>'navbar-form navbar-left' , 'role'=>'Search'])!!}
<div class="form-group">


<i class="fa fa-calendar"></i>
{!!Form::label('Fecha Inicial')!!}
{!!Form::text('fecha_inicio',null,['class'=>'form-control','id'=>'datepicker','placeholder'=>'Fecha de Inicio'])!!}

<i class="fa fa-calendar"></i>
{!!Form::label('Fecha Final')!!}
{!!Form::text('fecha_final',null,['class'=>'form-control','id'=>'datepicker2','placeholder'=>'Fecha de Fin'])!!}

 <button type="submit" class="glyphicon glyphicon-search btn btn-success"> BUSCAR </button>
</div>
{!!Form::close()!!}
 <!--endbuscador-->


     </div><!--end caption-->



    <div class="actions">
       <div class="btn-group btn-group-devided" >

          <div><a class="btn btn-success  pull-right " data-toggle="modal"  href="#ticket-crear">
        <i class="fa fa-ticket fa-lg"></i> Nuevo Ticket</a></div>
      
       </div>
   </div>


        </div><!--portlet-title-->
    <div class="portlet-body">
        
  {!!Form::model($ticket,['url'=>['user-ticket-comentario',$ticket->id],'method'=>'PUT' , 'files'=>True])!!}

          @include('lineage.admin.ticket.forms.user-ticket-responder')

{!!Form::submit('Responder',['class'=>'btn btn-success pull-right'])!!}
<a class="btn btn-primary pull-left" href="{!! URL::to('myaccount-ticket') !!}">
  <i class="fa fa-backward fa-lg"></i> Back</a>
{!!Form::close()!!}

                </div>
            </div>
            <!-- END SAMPLE TABLE PORTLET-->
        </div>
    </div>



@section('scriptdatepicker')
<!-- bootstrap datepicker -->
<script src="plugins/datepicker/bootstrap-datepicker.js"></script>
<script>
  $(function () {
    //Date picker
    $('#datepicker').datepicker({
      autoclose: true  
    });
     $('#datepicker2').datepicker({
      autoclose: true
    });
  });
</script>
@stop

@endsection
