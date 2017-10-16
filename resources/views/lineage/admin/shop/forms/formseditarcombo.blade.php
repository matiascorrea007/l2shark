<div class="row">
     
 <div class="form-horizontal col-xs-12 col-sm-12 col-md-6">
	{!!Form::label('Nombre del Paquete')!!}
	{!!Form::text ('nombre',null,['class'=>'form-control'])!!}
</div>

 <div class="form-horizontal col-xs-12 col-sm-12 col-md-2">
 	@if($combo->imagen == "sin-foto.jpg")
	<img src="storage/combos/{{$combo->imagen}}" alt="" height="50" width="50">
	@else
	<img src="{{$combo->ruta}}" alt="" height="50" width="50">
	@endif
	{!!Form::file('imagen')!!}
</div>

 <div class="form-horizontal col-xs-12 col-sm-12 col-md-6">
	{!!Form::label('Categoria')!!}
	{!!Form::select('web_categoria_id',$categorias,null,[ 'class'=>'form-control','id'=>'categoriaedit'])!!}
</div>

		
	





</div>

<input type="hidden" name="_token" value="{{ csrf_token() }}">