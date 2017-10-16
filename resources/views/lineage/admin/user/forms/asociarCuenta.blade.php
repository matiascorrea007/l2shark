@if($enlazado == false ) 

<div class="panel-body">
<div class="row">
<div class="col-xs-12 col-sm-12 col-md-3"></div>
<div class="col-xs-12 col-sm-12 col-md-6">

<div class="note note-info">
          <h4 class="block">Informacion del enlace</h4>
             <p> Esta acción crea una nueva cuenta en la Base de Datos del servidor de juegos Lineage 2 y la enlaza con esta cuenta web , esto se debe a que se registró un nuevo usuario cuando no había una conexión a una Base de Datos de Lineage 2. </p>
   </div>



</div>
<div class="col-xs-12 col-sm-12 col-md-3"></div>
</div>



<div class="row col-xs-12 col-sm-12 col-md-12" >
{!!Form::submit('Enlazar Cuenta',['class'=>'btn btn-primary pull-right'])!!}


</div>
</div>

@endif



@if($enlazado == true ) 

<div class="panel-body">
<div class="row">
<div class="col-xs-12 col-sm-12 col-md-3"></div>
<div class="col-xs-12 col-sm-12 col-md-6">

<div class="note note-success">
     <h4 class="block">El Enlace fue exitoso!!</h4>
        <p> Su cuenta web ya se encuetra enlazada con su cuenta en el juego . </p>
   </div>

</div>
<div class="col-xs-12 col-sm-12 col-md-3"></div>
</div>
</div>


@endif

<input type="hidden" name="_token" value="{{ csrf_token() }}">