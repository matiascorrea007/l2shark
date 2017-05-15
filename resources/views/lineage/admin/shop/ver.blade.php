@extends('layouts.metronic')
@section('content')
@include('alerts.errors')
@include('alerts.request')
@include('alerts.success')
@include('flash::message')
  

  <h1 class="page-title"> <br>
                        <small></small>
                    </h1>
                    <div class="page-bar">
                        <ul class="page-breadcrumb">
                            <li>
                                <i class="icon-home"></i>
                                <a href="{{ url('combo') }}" >Shop</a>
                                <i class="fa fa-angle-right"></i>
                            </li>
                            <li>
                                <a href="{{ url('combo') }}" >Lista de paquetes</a>
                                <i class="fa fa-angle-right"></i>
                            </li>
                            <li>
                                <a href="" >{{$combo->nombre}}</a>
                                <i class="fa fa-angle-right"></i>
                            </li>
                        </ul>
                    </div>



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
<form id="buyItemForm">
      
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
              <td><input class="sumPrice" type="checkbox" name="itens[]" data-price="1" value="16"></td>
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
      
    </form></div></div>



        



            </div>
            <!-- END SAMPLE TABLE PORTLET-->
        </div>
    </div>


@endsection