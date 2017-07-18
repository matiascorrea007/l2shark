
<div class="panel-body">
<div class="row">

<div class="col-xs-12 col-sm-12 col-md-3">
<div class="form-group form-md-line-input has-success">
    <div class="input-icon right">
        <input type="text" name="nombre" class="form-control" value="{{$servidor->nombre}}">
            <label for="form_control_1">Nombre del Servidor :</label>
        <i class="ra ra-castle-emblem"></i>
    </div>
 </div>
</div>

<div class="col-xs-12 col-sm-12 col-md-3">
<div class="form-group form-md-line-input has-success">
    <div class="input-icon right">
        <input type="text" name="cronica" class="form-control" value="{{$servidor->cronica}}">
            <label for="form_control_1">Cronica :</label>
        <i class="ra ra-lightning-sword"></i>
    </div>
 </div>
</div>

</div>


<div class="row col-xs-12 col-sm-12 col-md-12" >
{!!Form::submit('Guardar',['class'=>'btn btn-primary pull-right'])!!}

</div>


</div>