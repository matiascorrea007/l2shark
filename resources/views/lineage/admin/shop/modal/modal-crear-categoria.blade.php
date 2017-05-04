
<div class="modal fade" id="crear-categoria" tabindex="-1" role="dialog" aria-labelledby="confirmDelete">
 <div class="modal-dialog modal-fade" role="document">
     <div class="modal-content">
         <div class="modal-header">
             <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
              <h4 class="modal-title">Crear Categoria</h4>
         </div>


{!!Form::open(['url'=>['categoria-store'],'method'=>'POST'])!!}
{{Form::token()}}
<div class="modal-body">      

<div class="row">
	<div class="form-horizontal col-xs-12 col-sm-12 col-md-12">
	{!!Form::text('nombre',null,['class'=>'form-control', 'placeholder'=>'ingrese el nombre de la categoria'])!!}
	
	</div>
</div>

</div>

<div class="modal-footer">
{!!Form::submit('Crear',['class'=>'btn btn-primary pull-right'])!!}
<button type="button" class="btn btn-primary pull-left" data-dismiss="modal">Close</button>
{!!Form::close()!!}
</div>


     </div>
   </div>
 </div>
