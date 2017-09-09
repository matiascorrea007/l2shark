@extends('layouts.esmerald')
@section('content')
@include('alerts.errors')
@include('alerts.request')
@include('alerts.success')
@include('flash::message')



        <!--Star Registro-->
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="registrationform">



    <div class="inner">
    <h2 class="title register">Registrarse<span>Completa los siguientes campos para registrarte</span></h2>

    <form class="form-horizontal donate-form" name="form" action="{{ url('/register') }}" method="post" >
<input type="hidden" name="_token" value="{{ csrf_token() }}">


<div class="form-group clearfix">
    <label class="required">Login <span class="required">*</span></label>
        <div class="field">
            <input placeholder="Login" class="form-control" name="login" type="text" />
            <p class="help-block">Разрешенные символы: A-Za-z0-9-<br>Длина должна быть от 5 до 14 символов<br></p>
        </div>
</div>
<div class="form-group clearfix">
    <label class="required">Email <span class="required">*</span></label>
        <div class="field">
            <input placeholder="Email" class="form-control" style="position: inherit;" name="email" type="text" />
            <p class="help-block">Длина должна быть от 5 до 16 символов<br></p>
                <a class="js-password-generator">сгенерировать пароль</a>
        </div>
</div>
<div class="form-group clearfix">
    <label class="required">Password <span class="required">*</span></label>
        <div class="field">
            <input placeholder="Password" class="form-control" name="password" type="password" />
            <p class="help-block">Длина должна быть от 5 до 16 символов<br></p>
        </div>
</div>
<div class="form-group clearfix">
    <label class="required">Re-Password <span class="required">*</span></label>
        <div class="field">
            <input placeholder="Re-Password" class="form-control" name="password_confirmation" type="password"  />
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
        <span>Registrarse</span>
    </button>
</div>


</form>
</div>


         </div>
         </div>
        </div>
     <!--END Registro-->









@endsection