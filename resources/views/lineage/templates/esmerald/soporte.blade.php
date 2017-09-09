@extends('layouts.esmerald')
@section('content')
@include('alerts.errors')
@include('alerts.request')
@include('alerts.success')
@include('flash::message')



<div class="col-lg-12">
		
<div id="news"><br>
  <div class="page-title">Soporte<div class="ndate"></div></div>
  <div class="ncontent"> <h3>{!!$paginas->soporte!!}</h3>	</div>
</div>



</div>





<!--Star Envio de Email-->
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="registrationform">



    <div class="inner">
    <h2 class="title register">¡ENVIANOS TU MENSAJE!<span>Por cualquier consulta o problema enviarnos tu mensaje rellenando el siguiente formulario.</span></h2>

    {!!Form::open(['url'=>'mail', 'method'=>'POST','class'=>'form-horizontal'])!!}
<input type="hidden" name="_token" value="{{ csrf_token() }}">


<div class="form-group clearfix">
    <label class="required">Email <span class="required">*</span></label>
        <div class="field">
            <input placeholder="Ingrese el Email" class="form-control" name="email" type="text" required/>
        </div>
</div>

<div class="form-group clearfix">
    <label class="required">Asunto <span class="required">*</span></label>
        <div class="field">
        <input placeholder="Ingrese el Asunto" class="form-control" style="position: inherit;" name="titulo" type="text" required/>
        </div>
</div>

<div class="form-group clearfix">
        <div class="field">
        <textarea name="mensaje" placeholder="Ingrese el Mensaje" id="" cols="30" rows="10" class="form-control" required></textarea>
        </div>
</div>





                <div class="form-group clearfix">
                        <label for="inputPassword" class="col-lg-3 control-label">
                           Captcha</label>
                           <div class="col-xs-3 col-md-3 col-lg-3"></div>
                        <div class="col-xs-3 col-md-3 col-lg-3 ">
                         {!! Recaptcha::render() !!}
                         <div class="col-xs-3 col-md-3 col-lg-3"></div>
                         <br><br>
                            
                        </div>
                    </div>


<div class="button-group center">
    <button name="register" type="submit" class="button">
        <span>Enviar Correo</span>
    </button>
</div>


{!!Form::close()!!}
</div>


         </div>
         </div>
        </div>
     <!--END Envio de Email-->


@endsection