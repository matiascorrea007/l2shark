
<div class="modal bs-example-modal-lg fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="confirmDelete">
 <div class="modal-dialog modal-lg" role="document">
     <div class="modal-content">
         <div class="modal-header">
             <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
              <h4 class="modal-title">Edit post</h4>
         </div>

{!!Form::open(['url'=>['post-update'],'method'=>'PUT' , 'files'=>True])!!}
<!--aqui le mandamos la id-->
<input type="text" hidden  id="noticia_id" name="id">
<div class="modal-body">   
@include('lineage.admin.post.forms.formscreate') 
</div>

<div class="modal-footer">
<button type="submit" class="btn btn-primary">Guardar</button>
<button type="button" class="btn btn-primary pull-left" data-dismiss="modal">Close</button>
{!!Form::close()!!}
</div>


     </div>
   </div>
 </div>
