   <p>Si desea transferir coin&#39;s, rellene los campos siguientes.</p>

<ul>
  <li><strong>Cantidad:</strong>&nbsp;Cantidad de coin&#39;s a transferir.</li>
  <li><strong>Destinatario:</strong>&nbsp;Nombre del personaje que recibir&aacute; el coin&#39;s.</li>
</ul>

<p>&nbsp;</p>

<h2>Transferir - Para su personaje in-game</h2>

<p>Sus&nbsp;<strong>Online Coin&#39;s</strong>&nbsp;se convierten en&nbsp;<strong>Donate Coin&#39;s</strong>&nbsp;y se insertan en su inventario y se pueden utilizar en el juego para tomar ventaja de los beneficios y recursos.</p>



<div class="row">
<div class="form-horizontal col-xs-12 col-sm-12 col-md-3"></div>
<div class="form-horizontal col-xs-12 col-sm-12 col-md-6">             
<div class="input-group input-icon right">
     <span class="input-group-addon"><i class=" font-blue"><img src="storage/icono admin/coins.svg" alt="" width="20"  height="20"> CANTIDAD :</i></span>
      <input id="email" name="cantidad"  class="form-control" type="text" value=""> 
 </div>
</div>
<div class="form-horizontal col-xs-12 col-sm-12 col-md-3"></div>
</div>

<br>
<div class="row">
<div class="form-horizontal col-xs-12 col-sm-12 col-md-3"></div>
<div class="form-horizontal col-xs-12 col-sm-12 col-md-6">     
<div class="input-group input-icon right ">
  <span class="input-group-addon"><i class=" font-blue"><img src="storage/icono admin/helmet.svg" alt="" width="20"  height="20"> DESTINATARIO : </i></span>
       <select name="destinatario"  class="form-control">
       @if(!empty($characters))
       @foreach($characters as $character)
          <option value="{{$character->obj_Id}}">{{$character->char_name}}</option>
        @endforeach
        @endif
       </select>
 </div>

  <br><button type="submit" class="btn dark center-block">Transferir</button>

</div>
<div class="form-horizontal col-xs-12 col-sm-12 col-md-3"></div>
</div>

<input type="hidden" name="_token" value="{{ csrf_token() }}">