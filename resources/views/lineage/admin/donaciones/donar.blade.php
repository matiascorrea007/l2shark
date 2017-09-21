<?php 
$skin =  DB::table('web_skins')->first();
 ?>

@extends($skin->nombre == "newland" ? 'layouts.newland.index' : 'layouts.metronic');
@section('content')
@include('alerts.request')
@include('alerts.success')
@include('alerts.errors')
@include('flash::message')


<div class="row">
    <div class="col-md-12">
    <div class="portlet light ">
        <div class="portlet-title">
            <div class="caption">

<i class="font-red"><img src="storage/icono admin/coins.svg" alt="" width="20"  height="20"></i>
<span class="caption-subject font-red sbold uppercase">Realizar Una Donacion</span>

    <div><br>
    </div>


     </div><!--end caption-->



    <div class="actions">
       <div class="btn-group btn-group-devided" >
       </div>
   </div>


        </div><!--portlet-title-->
    <div class="portlet-body">
        
        <h1>Adquirir Coin's</h1>
<p>
El Servidor  <strong> @if(!empty($infoServer)) {{$infoServer->nombre}} @else (nombre del server) @endif</strong>  es un servidor gratuito, para que todos puedan disfrutar del mundo de Lineage II de forma gratuita, pero el servidor tiene algunos gastos. En la compra de coin's usted estará ayudando a crecer y mantener todos los servicios disponibles en todo momento.</p>

<p>
Usted puede comprar muchos artículos en el juego y disfrutar de unos servicios alternativos en nuestro sitio web utilizando Online Coin's.</p>

<!--<p>
Cada Online Coin cuesta un cierto valor, se describe a continuación, con bonificación automática del 10% para pedidos superiores a 100 Online Coin's, 15% para compras superiores a 400 Online Coin's y 20% para compras superiores a 1000 Online Coin's. Por ejemplo: Usted paga 100 y recibe 110; paga 450 y recibe 517; paga 1200 y recibe 1440.</p>-->

     
          
            <div class="rulesbox" style="width:auto !important;">
        <h1>Condiciones para comprar Coin's</h1>
        Al comprar, tenga en cuenta que usted no tiene ningún privilegio antes que los otros jugadores. Todos están sujetos a las mismas reglas y castigos.<br><br>
No somos responsables de la seguridad y el destino de lo item después de que se entrega a su personaje. No devolveremos nada si pierde en el juego o algún descuido con la seguridad de su cuenta.<br><br>
No vamos, en ningún caso, efectuar la devolución del dinero de la compra. Te garantizamos la entrega de que fue comprado a su personaje seleccionado dentro de los términos y condiciones establecidos a continuación.<br><br>
<b>Plazos y Entrega</b><br><br>
El plazo de entrega varía dependiendo del modo elegido del pago y puede ser un par de minutos para las compras realizadas a través de transferencia online o en la tarjeta de crédito, o hasta 72 horas para las compras realizadas a través de un banco.<br><br>
Vamos a recibir automáticamente de sites intermediarios notificaciones sobre la operación. No hay necesidad de la confirmación del pago por e-mail o envío de comprobantes, nuestro sistema es totalmente automático.<br><br>
Por razones de seguridad de nuestro sistema sólo entregar si tu personaje está offline en el momento del pago es aprobado. Pero no te preocupes, si tu personaje se encuentra online en el momento, un nuevo intento de entrega se realizará automáticamente cada hora, hasta que su personaje no está online.<br><br><br>
Controversias en sites de pago, los intentos de cargo o actitudes fraudulentas no se tolerarán. En tales casos, vamos a bloquear sus cuentas y computadoras hasta que se evalúe y resuelva la condición, la cerradura puede ser permanente dependiendo del evento.<br><br>
Si surgen problemas en la entrega automática, todo lo que tienes que hacer es ponerse en contacto con nosotros. No contacte antes de un período de 24 horas después de la confirmación de su pago.<br>
    </div>

{!!Form::open(['url'=>['donaciones-create'],'method'=>'POST' , 'files'=>True , 'onsubmit'=>'return checkCheckBox(this)'])!!}

    <label><input type="checkbox" name="checkbox" id="acceptrules" value="0"> <b>He leído y acepto las condiciones de compra de coin's expresado anteriormente</b></label>
        
    <label for="">Introduzca los datos requeridos a continuación y haga clic en "Hacer Pedido". Un nuevo pedido se llevará a cabo y se abrirá una ventana con la factura para el pago. Lo mismo pedido se puede acceder más tarde en la página Mis Pedidos.</label>    




<div class="table-scrollable">
 <table id="example2" class="table table-hover table-dark donateBox">
  <thead>
    <th><i class="fa fa-credit-card"></i> Forma de Pago</th>
    <th><i class="fa fa-cubes"></i> Cantidad deseada</th>
    <th style="text-align: center;"><i class="fa fa-dollar"></i> Valor total</th>
  </thead>
  <tbody>
  <!-- -->
    <td>
        <select style="min-width: 160px;" name="metodo_pgto" >
        <option data-symbol="$" value="mercadopago">Mercado Pago</option>
                      
        </select>    
    <!--<select style="min-width: 160px;" name="metodo_pgto" id="metodo_pgto">
        <option data-symbol="€" value="G2APay">G2APay</option>
        <option data-symbol="R$" value="PagSeguro">PagSeguro</option>
        <option data-symbol="$" value="PayPal_USD">PayPal (USD)</option>
        <option data-symbol="R$" value="PayPal_BRL">PayPal (BRL)</option>
        <option data-symbol="€" value="PayPal_EUR">PayPal (EUR)</option>
        <option data-symbol="R$" value="MercadoPago">MercadoPago</option>
        <option data-symbol="$" value="PayGol_USD">PayGol (USD)</option>
        <option data-symbol="R$" value="PayGol_BRL">PayGol (BRL)</option>
        <option data-symbol="€" value="PayGol_EUR">PayGol (EUR)</option>
        <option data-symbol="$" value="WebMoney">WebMoney</option>
        <option data-symbol="$" value="Payza">Payza</option>
        <option data-symbol="$" value="Skrill">Skrill</option>
        <option data-symbol="R$" value="Banking">Transacción bancaria</option>                  
        </select>-->
    </td>
    
    <td>{{ Form::select('type',config('options.coins'),'',['class'=>'form-control','name'=>'qtdCoins','id'=>'qtdCoins']) }}
       <!--  <div class="bonus">+<span id="bonus"></span> (bonos)</div>-->
    </td>
    
    <td style="text-align: center;">
        <h1><span style="color:#237200"><b><span id="valor_symbol">$</span> <span id="valor_total">0,00</span></b></span></h1>

        <input type="text" name="total" hidden class="valor_total"   value="">
      <!--  <input type="text" name="bonus" hidden class="bonuss"   value="">-->
    </td>
  </tbody>
  </table>
</div>


        
       <div class="usarJquery">
        <input type="submit" class="btn btn-primary usarJquery" value="Hacer Pedido" style="margin: 20px auto 0; display:table;">
        </div>
        
    {!!Form::close()!!}  




        
                </div>
            </div>
            <!-- END SAMPLE TABLE PORTLET-->
        </div>
    </div>









<!-- Important Terms to JS Scripts -->
<input type="hidden" id="l11015" value="Comprueba tu conexión a Internet. La página está tomando demasiado tiempo para responder.">
<input type="hidden" id="l11016" value="Lo sentimos, ha ocurrido un error! Por favor, vuelva a intentarlo.">
<input type="hidden" id="l20001" value="Espera...">
<input type="hidden" id="l12004" value="Para continuar, debe aceptar los términos!">
<input type="hidden" id="l40044" value="Su clave de seguridad ha caducado! Vamos a cargar la página y vuelve a intentarlo.">
@endsection
