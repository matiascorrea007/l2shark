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
<br>	


</div>
<br><br>
{!!Form::submit('Agregar',['class'=>'btn btn-primary pull-right'])!!}
</div>
</div>
