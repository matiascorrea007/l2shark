
<div class="panel-body">
<div class="row">
<div class="col-xs-12 col-sm-12 col-md-3"></div>
<div class="col-xs-12 col-sm-12 col-md-6">
<div class="form-group form-md-line-input has-success">
    <div class="input-icon right">
        <input type="text" name="login" class="form-control" value="">
            <label for="form_control_1">Login</label>
        <i class="fa fa-user"></i>
    </div>
 </div>
</div>
<div class="col-xs-12 col-sm-12 col-md-3"></div>
</div>

<div class="row">
<div class="col-xs-12 col-sm-12 col-md-3"></div>
<div class="col-xs-12 col-sm-12 col-md-6">
<div class="form-group form-md-line-input has-success">
    <div class="input-icon right">
        <input type="password" class="form-control" name="password_actual" value="">
            <label for="form_control_1">Contraseña Actual</label>
        <i class="fa fa-unlock-alt"></i>
    </div>
 </div>
</div>
<div class="col-xs-12 col-sm-12 col-md-3"></div>
</div>

<div class="row">
<div class="col-xs-12 col-sm-12 col-md-3"></div>
<div class="col-xs-12 col-sm-12 col-md-6">
<div class="form-group form-md-line-input has-success">
    <div class="input-icon right">
        <input type="password" class="form-control" name="password" value="">
            <label for="form_control_1">Nueva Contraseña:</label>
        <i class="fa fa-unlock-alt"></i>
    </div>
 </div>
</div>
<div class="col-xs-12 col-sm-12 col-md-3"></div>
</div>

<div class="row">
<div class="col-xs-12 col-sm-12 col-md-3"></div>
<div class="col-xs-12 col-sm-12 col-md-6">
<div class="form-group form-md-line-input has-success">
    <div class="input-icon right">
        <input type="password" class="form-control" name="password_confirmation" value="">
            <label for="form_control_1">Repetir Contraseña</label>
        <i class="fa fa-unlock-alt"></i>
    </div>
 </div>
</div>
<div class="col-xs-12 col-sm-12 col-md-3"></div>
</div>


<div class="row col-xs-12 col-sm-12 col-md-12" >
{!!Form::submit('Cambiar Password',['class'=>'btn btn-primary pull-right'])!!}


</div></div>

<input type="hidden" name="_token" value="{{ csrf_token() }}">