<div class="panel panel-primary">
		<div class="panel-heading">
   		 	<h3 class="panel-title">Agregar Videos de Youtube</h3>
 		</div>	
  <div class="panel-body">
<div class="row">

<div class="form-horizontal  col-xs-12 col-sm-12 col-md-12">
	{!!Form::label('Ingrese la Url del Video')!!}
	{!!Form::text('link',null,['class'=>'form-control '])!!}
</div>
<br>	


</div>
<br><br>
{!!Form::submit('Agregar',['class'=>'btn btn-primary pull-right'])!!}
</div>
</div>
