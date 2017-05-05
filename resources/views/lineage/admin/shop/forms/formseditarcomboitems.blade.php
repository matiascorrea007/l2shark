<div class="row">
      <table cellspacing="0" cellpadding="0" border="0" class="default itemList table-hover table-light">
        <tbody><tr>
           <th>Imagen</th>
          <th>Nombre</th>
          <th>Precio</th>
          <th>Editar Precio</th>
          <th>Cargar Imagen</th>
        </tr>
            @foreach($productos as $producto)
              <tr>
              @if($producto->imagen == "sin-foto.jpg")
              <td><img width="32" height="32" src="storage/combos/{{$producto->imagen}}"></td>
              @else
              <td><img width="32" height="32" src="{{$producto->ruta}}"></td>
              @endif
              <td>{{$producto->nombre}} <b>(1)</b></td>
              <td><b>{{$producto->precio}}</b> Online Coin's</td>
              <td><b><input type="text" name="precio{{$producto->id}}" class="form-control"></b> Online Coin's</td>
              <td><b><input type="file" name="imagen{{$producto->id}}"></td>
              </tr>
            @endforeach
           

           </tbody>
        </table>
      </div>
  <br>