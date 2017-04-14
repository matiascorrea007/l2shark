@foreach($marcas as $marca)
<div class="modal fade" id="ver-{{ $marca->id }}" tabindex="-1" role="dialog" aria-labelledby="confirmDelete">
 <div class="modal-dialog" role="document">
     <div class="modal-content">
         <div class="modal-header">
             <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
              <h4 class="modal-title">Ver marca {{ $marca->descripcion }}</h4>
         </div>


{!!Form::model($marca,['url'=>['marca-update',$marca->id],'method'=>'PUT'])!!}

<div class="modal-body">      
<fieldset disabled>
@include('admin.configuracion.marca.forms.formscreate')
</fieldset>  
</div>

<div class="modal-footer">
<button type="button" class="btn btn-primary pull-left" data-dismiss="modal">Close</button>
{!!Form::close()!!}
</div>


     </div>
   </div>
 </div>
	@endforeach