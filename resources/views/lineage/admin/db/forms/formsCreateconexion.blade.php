
<div class="panel-body">
<div class="row">
<div class="col-xs-12 col-sm-12 col-md-3"></div>
<div class="col-xs-12 col-sm-12 col-md-6">
<div class="form-group form-md-line-input has-success">
    <div class="input-icon right">
        <input type="text" name="host" class="form-control">
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
        <input type="text" class="form-control" name="db">
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
        <input type="text" class="form-control" name="user">
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
        <input type="text" class="form-control" name="password">
            <label for="form_control_1">Contraseña</label>
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
         <div class="">
            <select class="form-control" name="cronica">
                <option value="interlude">interlude</option>
                <option value="Kamael">Kamael</option>
                <option value="Hellbound">Hellbound</option>
                <option value="Gracia">Gracia</option>
                <option value="GraciaPart2">Gracia Part 2</option>
                <option value="GraciaFinal">Gracia Final</option>
                <option value="GraciaEpilogue">Gracia Epilogue</option>
                <option value="Freya">Freya</option>
                <option value="HighFive">High Five</option>
                <option value="GD">Goddess Of Destruction</option>
                <option value="Tauti">Tauti</option>
                <option value="Lindvior">Lindvior</option>
             </select>
     <label for="form_control_1">Cronica</label>
        </div>
 </div>
</div>
<div class="col-xs-12 col-sm-12 col-md-3"></div>
</div>


<div class="row">
<div class="col-xs-12 col-sm-12 col-md-3"></div>
<div class="col-xs-12 col-sm-12 col-md-6">
<div class="form-group form-md-line-input has-success">
         <div class="">
            <select class="form-control" name="serverpack">
                <option value="L2jFrozen">L2jFrozen</option>
                <option value="L2jaCis">L2jaCis</option>
             </select>
     <label for="form_control_1">Server Pack</label>
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





