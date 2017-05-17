@foreach($donaciones as $donacione)
<div class="modal fade " id="status-{{ $donacione->id }}" tabindex="-1" role="dialog" aria-labelledby="confirmDelete">
 <div class="modal-dialog modal-lg" role="document">
     <div class="modal-content">
 
     <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
        <h4 class="modal-title">Cambiar Status de la Donacion</h4>
      </div>



<div class="container">
  {!!Form::open(['url'=>['donacion-cambiar-status',$donacione->id], 'method'=>'POST' ])!!}

<div class="form-horizontal">
	<span class="label label-success">{!!Form::label('Entregado', 'Entregado') !!}</span>
	<input name="status" 	type="radio" value="1" checked="checked" >
</div>
<div class="form-horizontal">
	<span class="label label-warning">{!!Form::label('Pendiente', 'Pendiente') !!}</span>
	<input name="status" type="radio" value="2" >
</div>

<br><br>
{!!Form::submit('Cambiar Estado',['class'=>'btn btn-primary'])!!}
{!!Form::close()!!}
</div>

	
         <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
         </div>
     </div>
   </div>
 </div>
@endforeach
