
<div class="panel-body">
<div class="row">
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group form-md-line-input has-success">
    <div class="input-icon right">
        <input type="text" name="private_key" class="form-control" >
            <label for="form_control_1">Private_key (Clave secreta)</label>
        <i class="fa fa-terminal"></i>
    </div>
 </div>
</div>
</div>

<div class="row">
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group form-md-line-input has-success">
    <div class="input-icon right">
        <input type="text" class="form-control" name="public_key" >
            <label for="form_control_1">Public_key (Clave del sitio)</label>
        <i class="fa fa-terminal"></i>
    </div>
 </div>
</div>
</div>


<div class="row col-xs-12 col-sm-12 col-md-12" >
{!!Form::submit('Guardar',['class'=>'btn btn-primary pull-right'])!!}
</div>


</div>

<input type="hidden" name="_token" value="{{ csrf_token() }}">