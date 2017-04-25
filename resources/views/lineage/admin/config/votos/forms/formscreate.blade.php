<div class="panel panel-default">
		<div class="panel-heading">
   		 	<h3 class="panel-title">Votos</h3>
 		</div>	
  <div class="panel-body">
<div class="row">
	

<div class="form-horizontal">
	{!!Form::label('')!!}
	{!!Form::text('nombre',null,['class'=>'form-control ','placeholder'=>'ingrese el titulo'])!!}
</div>
<br>
<div class="form-horizontal">
	{!!Form::label('')!!}
	{!!Form::textarea ('link',null,['class'=>'form-control', 'placeholder'=>'ingrese el codigo HTML para la imagen del voto'])!!}
</div>


</div>
</div>
</div>