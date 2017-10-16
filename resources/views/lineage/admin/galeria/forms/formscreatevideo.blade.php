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
<br><br><br><br>

@if(Auth::user()->admin == 1)
<div class="form-horizontal  col-xs-12 col-sm-12 col-md-12">
    <label class="mt-radio ">
          <input type="radio" name="optionsRadios" id="optionsRadios4" value="1" > Visible
          <span></span>
    </label>
    <label class="mt-radio">
          <input type="radio" name="optionsRadios" id="optionsRadios5" value="0" checked=""> Oculto
          <span></span>
    </label>
</div>
@else
<div class="form-horizontal  col-xs-12 col-sm-12 col-md-12">
    <label class="mt-radio hidden">
          <input type="radio" name="optionsRadios" id="optionsRadios4" value="1" > Visible
          <span></span>
    </label>
    <label class="mt-radio hidden">
          <input type="radio" name="optionsRadios" id="optionsRadios5" value="0" checked=""> Oculto
          <span></span>
    </label>
</div>
@endif

</div>

{!!Form::submit('Agregar',['class'=>'btn btn-primary pull-right'])!!}
</div>
</div>


<input type="hidden" name="_token" value="{{ csrf_token() }}">