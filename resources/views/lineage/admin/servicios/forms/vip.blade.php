
<div class="row">
<p>Subvenciones status VIP al personaje seleccionado.
Se puede disfrutar de varias ventajas en el juego. Sólo tienes que seleccionar por debajo de lo período deseado. Si ya tiene estatus VIP, lo período seleccionado se añade a la que ya tiene.
</p> 

<div class="form-horizontal col-xs-12 col-sm-12 col-md-3">
</div>


<div class="form-horizontal col-xs-12 col-sm-12 col-md-6">

	{!!Form::text('nickname',null,['class'=>'form-control', 'placeholder'=>'ingrese el nombre'])!!}
	{!!Form::text('re-nickname',null,['class'=>'form-control', 'placeholder'=>'re-ingrese el nombre'])!!}
</div>


<div class="form-horizontal col-xs-12 col-sm-12 col-md-3">
</div>

</div>


<input type="hidden" name="_token" value="{{ csrf_token() }}">