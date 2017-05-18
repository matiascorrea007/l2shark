<div class="portlet box dark">
     <div class="portlet-title">
         <div class="caption">
              <i class="fa fa-gift"></i>Infromacion</div>
          <div class="tools">
                <a href="javascript:;" class="collapse" data-original-title="" title=""> </a>
                      <a href="#portlet-config" data-toggle="modal" class="config" data-original-title="" title=""> </a>
           </div>
      </div>


 <div class="portlet-body" style="display: block;">
    <div class="row">


<div class="form-horizontal col-xs-12 col-sm-12 col-md-12">
	{!!Form::label('')!!}
	{!!Form::text('nombre',null,['class'=>'form-control ','placeholder'=>'ingrese el titulo'])!!}
</div>
<br>


<div class="form-horizontal col-xs-12 col-sm-12 col-md-12">
	{!!Form::label('')!!}
	{!!Form::textarea ('link',null,['class'=>'form-control my-editor','id'=>'lfm', 'placeholder'=>'ingrese el codigo HTML para la imagen del voto'])!!}
</div>
<br>
   
    </div>
  </div>
</div>