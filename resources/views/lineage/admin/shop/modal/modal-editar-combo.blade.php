
<div class="modal fade" id="editar-combo" tabindex="-1" role="dialog" aria-labelledby="confirmDelete">
 <div class="modal-dialog modal-fade" role="document">
     <div class="modal-content">
         <div class="modal-header">
             <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
              <h4 class="modal-title">Crear Categoria</h4>
         </div>


{!!Form::open(['url'=>['combo-update-imagen-'.$combo->id],'method'=>'PUT' , 'files'=>True])!!}
{{Form::token()}}
<div class="modal-body">      

<table cellspacing="0" cellpadding="0" border="0" class="default itemList table-hover table-light">
      
        <tbody><tr>
          
           <th>Imagen</th>
          <th>Nombre</th>
          <th>Precio</th>
          <th>Cargar Imagen</th>
        </tr>
        
            @foreach($productos as $producto)
               <tr >
              
              <td><img width="32" height="32" src="imgs/icons.php?type=1&amp;id=104"></td>
              <td>{{$producto->nombre}} <b>+10</b></td>
              <td><b>{{$producto->precio}}</b> Online Coin's</td>
              <td><b><input type="file" name="imagen{{$producto->item_id}}"></td>

            </tr>
          @endforeach
           
            
                  
      </tbody></table>


</div>

<div class="modal-footer">
{!!Form::submit('Editar',['class'=>'btn btn-primary pull-right'])!!}
<button type="button" class="btn btn-primary pull-left" data-dismiss="modal">Close</button>
{!!Form::close()!!}
</div>


     </div>
   </div>
 </div>