
<div class="row">
<p>Mueve el personaje seleccionado en una ubicación segura , a la ciudad de Giran.
Este servicio es esencial si no se puede abrir el juego debido a errores graves causados por una instalación incompleta de Lineage 2.
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