<div class="modal " id="crear-paginas" tabindex="-1" role="dialog" aria-labelledby="crear-paginas">
 <div class="modal-dialog modal-lg" role="document">
     <div class="modal-content">
         <div class="modal-header">
             <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
              <h4 class="modal-title">Crear Paginas </h4>
         </div>


{!!Form::open(['url'=>['paginas-store'],'method'=>'POST' , 'files'=>True])!!}

<div class="modal-body">      


@include('lineage.admin.paginas.forms.formscreate')
</div>

<div class="modal-footer">
{!!Form::submit('modificar',['class'=>'btn btn-primary pull-right'])!!}
<button type="button" class="btn btn-primary pull-left" data-dismiss="modal">Close</button>
{!!Form::close()!!}
</div>


     </div>
   </div>
 </div>
