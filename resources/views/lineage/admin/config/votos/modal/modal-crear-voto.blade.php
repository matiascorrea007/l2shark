<div class="modal " id="crear-voto" tabindex="-1" role="dialog" aria-labelledby="confirmDelete">
 <div class="modal-dialog modal-lg" role="document">
     <div class="modal-content">
         <div class="modal-header">
             <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
              <h4 class="modal-title">Crear Box Facebook </h4>
         </div>


{!!Form::open(['url'=>['voto-store'],'method'=>'POST' , 'files'=>True])!!}

<div class="modal-body">      


@include('lineage.admin.config.votos.forms.formscreate')
</div>

<div class="modal-footer">
{!!Form::submit('Agregar',['class'=>'btn btn-primary pull-right'])!!}
<button type="button" class="btn btn-primary pull-left" data-dismiss="modal">Close</button>
{!!Form::close()!!}
</div>


     </div>
   </div>
 </div>
