@extends('layouts.shop')
@include('alerts.errors')
@section('content')


<div class="body-content outer-top-xs" id="top-banner-and-menu">
	<div class="container">
	<div class="row">

	   
    <h1>Responsive Checkout Progress Bar</h1>
  <! -- To test add 'active' class and 'visited' class to different li elements -->
  
<div class="checkout-wrap center-block">
  <ul class="checkout-bar">

    <li class="active">Iniciar Sesion</li>
    
    <li class="active">Direccion</li>
    
    <li class="active">Transporte</li>
    
    <li class="active">Confirmar</li>
    
    <li class="">Pagar</li>
       
  </ul>
</div>
    
    <br><br><br><br> <br><br><br><br> <br><br><br><br>


<div class="container outer-section">
        <div id="print-area">

            
            <hr />
            <div class="row text-center">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    Este es un recibo electrónico, para cualquier problema por favor, póngase en contacto con &nbsp;<strong>
                    @foreach($informacions as $informacion) {!! $informacion->correo1 !!}
                    @endforeach
                    </strong>

                </div>
            </div>
            <hr />


<div class="panel panel-primary ">
        <div class="panel-heading ">
            <h3 class="panel-title">Descripcion y Codigo</h3>
        </div>  
  <div class="panel-body">
<div class="row">

<div class="col-lg-4 col-md-4 col-sm-4">
                    <h2>Detalles de Facturacion:</h2>
                    <h4><strong>Fecha de Facturacion : </strong> </h4>
                    
        @if(!empty(DB::table('user_facturacions')->where( 'user_id', '=',Auth::user()->id)->get()))
        <h4><strong>Razon Social :</strong>
        {{ $facturacion->razonsocial }}</h4>
        @else
        <h4><strong>Nombre :</strong>{{ $user->nombre }} {{$user->apellido }}</h4>
        @endif
                    <h4><strong>Cuit:</strong> {{ $user->cuit }}</h4>
                    <h4><strong>Direccion: </strong> {{ $user->direccion }}</h4>
                    <h4><strong>CP: </strong> {{ $user->cp }}</h4>
                    <h4><strong>Provincia: </strong> {{ $user->provincia }}</h4>
                    <h4><strong>Ciudad: </strong> {{ $user->ciudad }}</h4>
                    <h4><strong>Telefono :</strong> {{ $user->telefono }}</h4>
                    <h4><strong>Email: </strong>{{ $user->email }}</h4>
                    
</div>


 <div class="col-lg-4 col-md-4 col-sm-4">
                    <h2>Detalles Del Pago :</h2>
                    <h4><strong>Factura Numero: </strong>#10009</h4>
                    <h4><strong>Tipo de Pago: </strong>{{ $TipoPago }}</h4>
                    @if($TipoPago == "Desposito bancario")
                    <h4><strong>N De Cuenta Corriente : </strong>472 USD</h4>
                    <h4><strong>Titular : </strong>Completed</h4>
                    <h4><strong>Cuit : </strong>Completed</h4>
                    <h4><strong>CBU : </strong>Completed</h4>
                    @endif
</div>

 <div class="col-lg-4 col-md-4 col-sm-4">
                    <h2>Detalles Del Transporte :</h2>
                    <h4><strong>Envio :</strong> {{ $transporte }}</h4>
                   
                    
</div>

</div>
</div>
</div>




            
            <hr />
            <br />
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>Imagen</th>
                                    <th>Descripcion</th>
                                    <th>Cantidad</th>
                                    <th>Precio Unitario</th>
                                    <th>Sub Total</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($carts as $cart)                
                                <tr>
                <td><img src="{{$cart->imagen1}}"  class="user-image center-block" alt="" height="100" width="100"></td>
                        <td>{{ $cart->descripcion }}</td>
                        <td>{{ $cart->quantity }}</td>
                        <td>${{ number_format($cart->precioventa,2) }}</td>
                        <td>${{ number_format($cart->precioventa * $cart->quantity,2) }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <hr />
            <div class="row">
                <h1><div class="green col-lg-9 col-md-9 col-sm-9" style="text-align: right; padding-right: 30px;">
                    Importe total + IVA (PAGO DE CONTADO):
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3">
                    <strong><i class="fa fa-money" style="color:green" aria-hidden="true"></i> $ {{ $total }}</strong>
                </div></h1>
                <hr />
            </div>
            <div class="row">
                <h1><div class="col-lg-9 col-md-9 col-sm-9" style="text-align: right; padding-right: 30px;">
                    Importe total + IVA (PAGO CON TARJETA):
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3">
                    <strong><i class="fa fa-cc-visa" style="color:blue" aria-hidden="true"></i> $ {{ $total + ($total * ($mercadopago->porcentaje/100))}}</strong>
                </div></h1>
                <hr />
            </div>

            <hr />
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <strong>INSTRUCCIONES IMPORTANTES:
                    </strong>
                <h5># Este es un recibo electrónico por lo que no requiere ninguna firma.</h5>
                <h5># Todos los particulares se enumeran con el 21 % de impuestos , así que si tiene cualquier problema, por favor póngase en contacto con nosotros inmediatamente.</h5>
                <h5># Se puede ponerse en contacto con nosotros entre las 8:00-12:00 am a 16:00-20:00 pm todos los días laborables .</h5>
                </div>
            </div>

        </div>
        <hr />

        {!!Form::open(['url'=>'checkout-step-6', 'method'=>'MATCH', 'files'=>True])!!}

        <input type="hidden" name="transporte" value="{{ $transporte }}">
        <input type="hidden" name="TipoPago" value="{{ $TipoPago }}">

            <div class="panel-footer">
                      <a href="{{ url('/') }}" class="btn btn-danger"><i class=""> Cancelar</i></a>              
                      {!!Form::submit('Confirmar',['class'=>'btn btn-success pull-right'])!!}
             </div>

        {!!Form::close()!!}


    </div>



        <br><br><br><br><br><br>
		</div><!-- /.row -->
	</div><!-- /.container -->
</div><!-- /#top-banner-and-menu -->
@endsection
