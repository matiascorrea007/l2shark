
<div class="portlet box dark">
     <div class="portlet-title">
         <div class="caption">
              <i class="fa  fa-text-height"></i>Titulo</div>
          <div class="tools">
                <a href="javascript:;" class="collapse" data-original-title="" title=""> </a>
                      <a href="#portlet-config" data-toggle="modal" class="config" data-original-title="" title=""> </a>
           </div>
      </div>


 <div class="portlet-body" style="display: block;">
    <div class="row">


<div class="form-horizontal col-xs-12 col-sm-12 col-md-12">
	{!!Form::label('')!!}
	{!!Form::text('titulo',null,['class'=>'form-control noticia_titulo','placeholder'=>'ingrese el titulo','id'=>''])!!}
</div>
<br>
   
    </div>
  </div>
</div>
<br>





<div class="portlet box dark">
     <div class="portlet-title">
         <div class="caption">
              <i class="fa fa-image"></i>Imagen de Portada</div>
          <div class="tools">
                <a href="javascript:;" class="collapse" data-original-title="" title=""> </a>
                      <a href="#portlet-config" data-toggle="modal" class="config" data-original-title="" title=""> </a>
           </div>
      </div>


 <div class="portlet-body" style="display: block;">
    <div class="row">


<div class="form-horizontal col-xs-12 col-sm-12 col-md-12">
	{!!Form::label('')!!}
	{!!Form::file('imagen')!!}
</div>
<br>
   
    </div>
  </div>
</div>
<br>





<div class="portlet box dark">
     <div class="portlet-title">
         <div class="caption">
              <i class="fa fa-list"></i>Descripcion Corta</div>
          <div class="tools">
                <a href="javascript:;" class="collapse" data-original-title="" title=""> </a>
                      <a href="#portlet-config" data-toggle="modal" class="config" data-original-title="" title=""> </a>
           </div>
      </div>


 <div class="portlet-body" style="display: block;">
    <div class="row">


<div class="form-horizontal col-xs-12 col-sm-12 col-md-12">
	{!!Form::label('')!!}
	{!!Form::textarea ('descripcioncorta',null,['class'=>'my-editor noticia_descrip_corta','id'=>'lfm','placeholder'=>'ingrese la observacion'])!!}<br><br><br>
</div>
<br>
   
    </div>
  </div>
</div>
<br>





<div class="portlet box dark">
     <div class="portlet-title">
         <div class="caption">
              <i class="fa fa-list"></i>Descripcion Larga</div>
          <div class="tools">
                <a href="javascript:;" class="collapse" data-original-title="" title=""> </a>
                      <a href="#portlet-config" data-toggle="modal" class="config" data-original-title="" title=""> </a>
           </div>
      </div>


 <div class="portlet-body" style="display: block;">
    <div class="row">


<div class="form-horizontal col-xs-12 col-sm-12 col-md-12">
	{!!Form::label('')!!}
	{!!Form::textarea ('descripcionlarga',null,['class'=>'my-editor noticia_descrip_larga','id'=>'lfm','placeholder'=>'ingrese la observacion', 'row' => 100, 'cols' => 80])!!}
</div>
<br>
   
    </div>
  </div>
</div>
<br>





