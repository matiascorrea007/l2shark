<div class="panel panel-primary">
		<div class="panel-heading">
   		 	<h3 class="panel-title">Agregar Imagenes</h3>
 		</div>	
  <div class="panel-body">
<div class="row">

<div class="form-horizontal  col-xs-12 col-sm-12 col-md-12">
	{!!Form::label('Seleccione la Imagen')!!}
	{!!Form::file('imagen')!!}
</div>
<br><br><br>

<div class="form-horizontal  col-xs-12 col-sm-12 col-md-12">
    <label class="mt-radio">
          <input type="radio" name="optionsRadios" id="optionsRadios4" value="1" > Visible
          <span></span>
    </label>
    <label class="mt-radio">
          <input type="radio" name="optionsRadios" id="optionsRadios5" value="0" checked=""> Oculto
          <span></span>
    </label>
</div>

</div>

{!!Form::submit('Agregar',['class'=>'btn btn-primary pull-right'])!!}
</div>
</div>
