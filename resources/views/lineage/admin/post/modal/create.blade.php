<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
  <div class="modal-dialog modal-lg">
  {!!Form::open(['url'=>['post-store'],'method'=>'POST' , 'files'=>True])!!}
    <div class="modal-content">
   
   <div class="panel panel-primary">
		<div class="panel-heading">
   		 	<h3 class="panel-title">Titulo</h3>
 		</div>	
  <div class="panel-body">
<div class="row">

<div class="form-horizontal  col-xs-12 col-sm-12 col-md-12">
	{!!Form::label('')!!}
	{!!Form::text('titulo',null,['class'=>'form-control noticia_titulo','placeholder'=>'ingrese el titulo','id'=>''])!!}
</div>

</div>
</div>
</div>

<div class="panel panel-primary">
		<div class="panel-heading">
   		 	<h3 class="panel-title">Imagen de Portada</h3>
 		</div>	
  <div class="panel-body">
<div class="row">

<div class="form-horizontal  col-xs-12 col-sm-12 col-md-12">
	{!!Form::label('')!!}
	{!!Form::file('imagen')!!}
</div>

</div>
</div>
</div>

<div class="panel panel-primary">
		<div class="panel-heading">
   		 	<h3 class="panel-title">Descripcion Corta</h3>
 		</div>	
  <div class="panel-body">
<div class="row">

<div class="form-horizontal col-xs-12 col-sm-12 col-md-12">
	{!!Form::label('')!!}
	{!!Form::textarea ('descripcioncorta',null,['class'=>'my-editor noticia_descrip_corta','placeholder'=>'ingrese la observacion'])!!}<br><br><br>
</div>

</div>
</div>
</div>

    </div>

  <div class="modal-footer">
	<button type="submit" class="btn btn-primary">Crear</button>
	<button type="button" class="btn btn-primary pull-left" data-dismiss="modal">Close</button>
 </div>
    {!!Form::close()!!}
  </div>
</div>