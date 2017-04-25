@foreach($votos as $voto)
<div class="modal fade bs-example-modal-lg" id="Editvoto-{{ $voto->id }}" tabindex="-1" role="dialog" aria-labelledby="confirmDelete">
 <div class="modal-dialog modal-lg" role="document">
     <div class="modal-content">
         <div class="modal-header">
             <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
              <h4 class="modal-title">Editar carrucel </h4>
         </div>


{!!Form::model($voto,['url'=>['voto-update',$voto->id],'method'=>'PUT' , 'files'=>True])!!}

<div class="modal-body">      


@include('lineage.admin.config.votos.forms.formscreate')
</div>

<div class="modal-footer">
{!!Form::submit('modificar',['class'=>'btn btn-primary pull-right'])!!}
<button type="button" class="btn btn-primary pull-left" data-dismiss="modal">Close</button>
{!!Form::close()!!}
</div>


     </div>
   </div>
 </div>
	@endforeach