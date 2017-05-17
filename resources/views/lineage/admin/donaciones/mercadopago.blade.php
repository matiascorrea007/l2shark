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
                <div class="row">

<div class="col-xs-12 col-sm-10 no-padding">
<iframe src="<?php echo $preference['response']['init_point']; ?>" name="MP-Checkout" width="1400" height="800" frameborder="0"></iframe>
<script type="text/javascript" src="//resources.mlstatic.com/mptools/render.js"></script>
</div>

                    </div>
                </div>


            </div>
            <!-- END SAMPLE TABLE PORTLET-->
        </div>
    </div>









<!-- Important Terms to JS Scripts -->
<input type="hidden" id="l11015" value="Comprueba tu conexión a Internet. La página está tomando demasiado tiempo para responder.">
<input type="hidden" id="l11016" value="Lo sentimos, ha ocurrido un error! Por favor, vuelva a intentarlo.">
<input type="hidden" id="l20001" value="Espera...">
<input type="hidden" id="l12004" value="Para continuar, debe aceptar los términos!">
<input type="hidden" id="l40044" value="Su clave de seguridad ha caducado! Vamos a cargar la página y vuelve a intentarlo.">
@endsection
