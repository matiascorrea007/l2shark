
<div class="row">
<p>Concede el estatus de héroe al personaje seleccionado.
Él recibirá un aura, una serie de habilidades especiales y se puede disfrutar de varias ventajas en el juego. Sólo tienes que seleccionar por debajo de lo período deseado. Si ya es héroe, lo período seleccionado se añadirá a la que ya tiene.
</p> 

<div class="form-horizontal col-xs-12 col-sm-12 col-md-3">
</div>


<div class="form-horizontal col-xs-12 col-sm-12 col-md-6">
<input type="text" name="charnombre" value=""  disabled="" class="form-control char" placeholder="">
	{!!Form::text('charnombre',null,['class'=>'form-control hidden char', 'placeholder'=>'ingrese el codigo del color'])!!}
</div>


<div class="form-horizontal col-xs-12 col-sm-12 col-md-3">
</div>

</div>


<input type="hidden" name="_token" value="{{ csrf_token() }}">