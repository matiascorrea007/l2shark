@extends('layouts.metronic')
@section('content')
@include('alerts.errors')
@include('alerts.request')
@include('alerts.success')
@include('flash::message')
  


<div class="row">
    <div class="col-md-12">
    <div class="portlet light ">
        <div class="portlet-title">
            <div class="caption">

<i class="fa fa-image font-red"></i>
<span class="caption-subject font-red sbold uppercase">Shop</span>
    <div><br>
    </div>
     </div><!--end caption-->

    <div class="actions">
       <div class="btn-group btn-group-devided" >
              
       </div>
   </div>

        </div><!--portlet-title-->
          
          
    
  <br>
  <div class="shopItemList">
  <div>
  {!!Form::open(['url'=>['combo-comprar'],'method'=>'POST' ,'id'=>'buyItemForm', 'files'=>True])!!}

      
      <div class="packImg">
        <img src="storage/combos/sin-foto.jpg">
      </div>
        
      <table cellspacing="0" cellpadding="0" border="0" class="default itemList table-hover table-light">
      
        <tbody><tr>
          <th style="width:20px;"></th>
          <th style="width:32px;"></th>
          <th>Nombre</th>
          <th>Precio</th>
        </tr>
        
            @foreach($productos as $producto)
               <tr >
              <td><input class="sumPrice" type="checkbox" name="itens[]" data-price="{{$producto->precio}}" value="{{$producto->item_id}}"></td>
          @if($producto->imagen == "sin-foto.jpg")
            <td><img src="storage/combos/{{$producto->imagen}}" alt="" height="50" width="50" ></td>
          @elseif($producto->imagen != "sin-foto.jpg")
           <td><img src="{{$producto->ruta}}" alt="" height="50" width="50" ></td>
          @endif
              
              <td>{{$producto->nombre}} <b>(1)</b></td>
              <td><b>{{$producto->precio}}</b> Online Coin's</td>
            </tr>
          @endforeach
           
            
                  
      </tbody></table>
      
    </div></div>



<div class="shopItemList">
        <table id="example2" class="table table-hover table-dark donateBox">
  <thead>
    <th><i class="fa fa-user"></i> Personaje</th>
    <th style="text-align: center;"><i class="fa fa-dollar"></i> Valor total</th>
    <th><i class=""></i></th>
    
  </thead>
  <tbody>
  <!-- -->
    <td>
        <select name="destinatario"  class="form-control">
       @if(!empty($characters))
       @foreach($characters as $character)
          <option value="{{$character->obj_Id}}">{{$character->char_name}}</option>
        @endforeach
        @endif
       </select>    
    </td>

    <td style="text-align: center;">
        <h1><span style="color:#237200"><b><span id="valor_symbol">$</span> <span id="valor_total">0,00</span></b></span></h1>

        <input type="text" name="total" hidden class="valor_total"   value="">
        <input type="text" name="bonus" hidden class="bonuss"   value="">
    </td>

    <td> <button type="submit">comprar</button>
    </td>
    
    
  </tbody>
  </table>
</div>
{!!Form::close()!!}

            </div>
            <!-- END SAMPLE TABLE PORTLET-->
        </div>
    </div>



<script>

</script>

@endsection