
<div class="panel-body">
<div class="row">
<div class="col-xs-12 col-sm-12 col-md-3"></div>
<div class="col-xs-12 col-sm-12 col-md-6">
<div class="form-group form-md-line-input has-success">
    <div class="input-icon right">
        <input type="text" name="host" class="form-control" value="{{$db->host}}">
            <label for="form_control_1">Host</label>
        <i class="fa fa-terminal"></i>
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
        <input type="text" class="form-control" name="db" value="{{$db->db}}">
            <label for="form_control_1">Base de Datos</label>
        <i class="fa fa-database"></i>
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
        <input type="text" class="form-control" name="user" value="{{$db->user}}">
            <label for="form_control_1">Usuario</label>
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
        <input type="text" class="form-control" name="password" value="{{$db->password}}">
            <label for="form_control_1">Contraseña</label>
        <i class="fa fa-unlock-alt"></i>
    </div>
 </div>
</div>
<div class="col-xs-12 col-sm-12 col-md-3"></div>
</div>


<div class="row col-xs-12 col-sm-12 col-md-12" >
{!!Form::submit('Guardar',['class'=>'btn btn-primary pull-right'])!!}

<a class="btn btn-success  pull-right" href="{{ url('db-check') }}" >
              <i class="fa  fa-plug fa-lg"></i>Probar Conexion</a>
</div>


</div>





