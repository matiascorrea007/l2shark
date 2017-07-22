@extends('layouts.crazy')
@section('content')
@include('alerts.errors')
@include('alerts.request')
@include('alerts.success')
@include('flash::message')



        <!--Star Registro-->
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
           


<div class="smart_content_title">
Registro<br><br>
<p></p><br>
<p style="color: #fe4040;">Utilizar la direccion de Correo Real!</p>
</div>
<form class="smart_form" name="form" action="{{ url('/register') }}" method="post" id="form">
<input type="hidden" name="_token" value="{{ csrf_token() }}">

<table>
<!--
<tr>
    <td><label></label></td>
    <td><select name="sid"><option value="">asdas</option></select></td>
</tr>-->

<tr>
    <td><label></label></td>
    <td><input type="text" name="login" maxlength="14" placeholder="Ingrese el Login" required /></td>
</tr>
<tr>
    <td><label></label></td>
    <td><input type="email" name="email" maxlength="16" placeholder="Ingrese el Email" required /></td>
</tr>
<tr>
    <td><label></label></td>
    <td><input type="password" name="password" maxlength="16" placeholder="ingrese el password" required /></td>
</tr>
<tr>
    <td><label></label></td>
    <td><input type="password" name="password_confirmation" maxlength="64" placeholder="Re-ingrese el password" required /></td>
</tr>





 <tr>
  <td><label for="inputPassword" class="col-lg-3 control-label">Captcha</label></td>
       <td> {!! Recaptcha::render() !!}</td>              
 </tr>


<tr>
    <td><input type="submit" name="register"  value="" class="smart_btn smart_btn_reg" style="margin-top: 15px !important;"></td>
</tr>

</table>
</form>

       
         </div>
        </div>
     <!--END Registro-->









@endsection