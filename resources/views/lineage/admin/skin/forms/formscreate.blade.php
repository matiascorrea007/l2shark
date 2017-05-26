        <br> <br> <br>
        <div class="panel panel-primary">
    <div class="panel-heading">
        <h3 class="panel-title">Estilo</h3>
    </div>  
  <div class="panel-body">
<div class="row">
  


  <div class="form-group col-xs-12 col-sm-12 col-md-12">
<div class="input-group input-icon right ">
 <span class="input-group-addon"><i class="fa fa-paint-brush font-blue"> Escoger el estilo :</i></span>
{!! Form::select('skin', config('options.skin'),'', array('class' => 'form-control')) !!}
</div>
</div>
  
  <div class="form-group col-xs-12 col-sm-12 col-md-12">
{!!Form::submit('modificar',['class'=>'btn btn-primary pull-right'])!!}
	</div>



</div>
</div>
</div>








<div class="mt-element-card mt-element-overlay">
   <div class="row">
   <div class="col-md-4"></div>
       <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
           <div class="mt-card-item">
               <div class="mt-card-avatar mt-overlay-4">
                   <img src="layout/img/skin/{{$skin->nombre}}.png">
                   <div class="mt-overlay">
                       <h2>Template {{$skin->nombre}} </h2>
                       <div class="mt-info font-white">
                           <div class="mt-card-content">
                               <p class="mt-card-desc font-white">Ver el diseño</p>
                               <div class="mt-card-social">
                                   <ul>
                                       <li>
                                           <a class="btn btn-primary" href="{{ url('/') }}"> VER</a>
                                      </li>
                                   </ul>
                               </div>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
       </div>
  </div>
</div>



