
<div class="row">
<p>Cambia el sexo / género del personaje seleccionado.
Seleccione el género y confirme haciendo clic en el botón de abajo.
</p> 

<div class="form-horizontal col-xs-12 col-sm-12 col-md-3">
</div>


<div class="form-horizontal col-xs-12 col-sm-12 col-md-6">
	
	
            <div class="input-group input-icon right ">
                <span class="input-group-addon"><i class="fa fa-male font-blue"></i> <i class="fa fa-female font-blue"></i></span>
                 <select name="sex"  class="form-control">
                       <option value="hombre">Hombre</option>
                       <option value="mujer">Mujer</option>
                </select>
            </div>
       
{!!Form::text('charnombre',null,['class'=>'form-control hidden char', 'placeholder'=>'ingrese el codigo del color'])!!}
</div>


<div class="form-horizontal col-xs-12 col-sm-12 col-md-3">
</div>

</div>


<input type="hidden" name="_token" value="{{ csrf_token() }}">