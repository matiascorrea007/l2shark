
<div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="confirmDelete">
 <div class="modal-dialog" role="document">
     <div class="modal-content">
         <div class="modal-header">
             <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
              <h4 class="modal-title">Confirm post Deletion</h4>
         </div>
         <div class="modal-body">
             <p>Esta seguro que desea eliminar el post <span class="noticia_titulo"></span></p>
         </div>
         <div class="modal-footer">
             <button type="button" class="btn btn-primary pull-left" data-dismiss="modal">Close</button>

              {!! Form::open(['method' => 'DELETE', 'url' => ['post-destroy']]) !!}
              <!--aqui le mandamos la id-->
              <input type="text" hidden  id="noticia_id" name="id">
              
             <button type="submit" class="btn btn-danger">Delete</button>
               {!! Form::close() !!}
         </div>
     </div>
   </div>
 </div>
