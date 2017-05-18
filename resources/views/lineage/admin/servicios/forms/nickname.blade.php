
<div class="row">
<p>Le permite cambiar el nombre del personaje seleccionado.
Introduzca el nuevo nombre y haga clic en el botón de abajo.</p>

<div class="form-horizontal col-xs-12 col-sm-12 col-md-3">
</div>


<div class="form-horizontal col-xs-12 col-sm-12 col-md-6">

	{!!Form::text('nickname',null,['class'=>'form-control', 'placeholder'=>'ingrese el nombre'])!!}
	{!!Form::text('nickname_confirmation',null,['class'=>'form-control', 'placeholder'=>'re-ingrese el nombre'])!!}

	{!!Form::text('charnombre',null,['class'=>'form-control hidden char', 'placeholder'=>'ingrese el codigo del color'])!!}
</div>
	

<div class="form-horizontal col-xs-12 col-sm-12 col-md-3">
</div>

</div>
