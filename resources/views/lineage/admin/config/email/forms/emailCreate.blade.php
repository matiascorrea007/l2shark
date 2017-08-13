
<div class="panel-body">
<div class="row">

<div class="col-xs-12 col-sm-12 col-md-4">
<div class="form-group form-md-line-input has-success">
    <div class="input-icon right">
        <input type="text" name="email" class="form-control" >
            <label for="form_control_1">Email :</label>
        <i class="fa fa-envelope"></i>
    </div>
 </div>
</div>


<div class="col-xs-12 col-sm-12 col-md-4">
<div class="form-group form-md-line-input has-success">
    <div class="input-icon right">
        <input type="text" name="password" class="form-control">
            <label for="form_control_1">Password :</label>
        <i class="fa fa-lock"></i>
    </div>
 </div>
</div>

<div class="col-xs-12 col-sm-12 col-md-4">
<div class="form-group form-md-line-input has-success">
    <div class="input-icon right">
        <input type="text" name="nombre" class="form-control">
            <label for="form_control_1">Nombre :</label>
        <i class="fa fa-lock"></i>
    </div>
 </div>
</div>

</div>

<div class="row col-xs-12 col-sm-12 col-md-12" >
{!!Form::submit('Guardar',['class'=>'btn btn-primary pull-right'])!!}
</div>


</div>