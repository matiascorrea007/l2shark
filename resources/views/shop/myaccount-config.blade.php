@extends('layouts.shop')
@section('content')
@include('alerts.success')
@include('alerts.request')


<div class="body-content outer-top-xs" id="top-banner-and-menu">
	<div class="container">
	<div class="row">

	 <div class=" myaccount col-sm-12 col-md-12  ">
            
            <div class="user-info-block container">
                <ul class="navigation">
                    <li >
                         <a href="{{url('myaccount-perfil')}}" >
                          <span class=""><img height="50"  width="50" src="storage/iconos/perfil.svg"> PERFIL</span>
                         </a>
                    </li>
                    <li class="active">
                        <a href="{{url('myaccount-config')}}" >
                          <span class=" "><img height="50"  width="50" src="storage/iconos/facturacion.svg"> Facturacion</span>
                         </a>
                    </li>
                   
                    <li>
                        <a href="{{ url('myaccount-facturas') }}" >
                          <span class=" "><img height="50"  width="50" src="storage/iconos/mis facturas.svg"> Mis Facturas</span>
                         </a>
                    </li>

                   <li>

                         <a href="{{ url('myaccount-ticket') }}" >
                          <span class=" "><img height="50"  width="50" src="storage/iconos/ticket.svg">Ticket</span>
                         </a>
                    </li>

                    <li>
                         <a href="{{ url('myaccount-puntos') }}" >
                          <span class=" "><img height="50"  width="50"  src="storage/iconos/certificate.svg">Puntos</span>
                         </a>
                    </li>
                </ul>

 <div class="user-body">
    <div class="tab-content">


<!--=================== Datos de Facturacion ======================-->
<div id="settings" class="tab-pane active">                         
  <div class="panel panel-info">
            <div class="panel-heading">
              <h3 class="panel-title">Datos de Facturacion</h3>
            </div>
            <div class="panel-body">
              <div class="row">
 @if(!DB::table('user_facturacions')->where( 'user_id', '=',Auth::user()->id)->get())         
 <button type="button" class="center-block btn btn-azul" data-toggle="modal" data-target="#userFacturacion"><i class="fa fa-edit"> Datos Para La Facturacion 'A' o 'B'</i></button>
@endif
<div class=" col-md-12 col-lg-12 "> 
      <table class="table table-user-information">
        <tbody>
        @if(!empty(DB::table('user_facturacions')->where( 'user_id', '=',Auth::user()->id)->get()))
          <tr>
            <td><strong><h4>Razon Social:</h4></strong> {{ $datosfacturacions->razonsocial }}</td>
            <td><strong><h4>Fecha de Nacimiento:</h4></strong> {{ $datosfacturacions->nacimiento }}</td>
          </tr>

          <tr>
            <td><strong><h4>Cuit:</h4></strong> {{ $datosfacturacions->cuit }} </td>
            <td><strong><h4>Empresa :</h4></strong> @if( $datosfacturacions->empresa == "1") 
                                          SI
                                      @else
                                          NO
                                      @endif
              </td>         
          </tr>    
        
                     @endif
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
           @if(DB::table('user_facturacions')->where( 'user_id', '=',Auth::user()->id)->get())
                 <div class="panel-footer">
                        <button type="button" class="btn btn-azul" data-toggle="modal" data-target="#userFacturacionEdit"><i class="fa fa-edit"> Editar</i></button>
                    </div>
                    @endif
          </div>

 </div>

<!--=================== Datos de Facturacion ======================-->



                    </div>
                </div>
            </div>
        </div>

<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

		</div><!-- /.row -->
	</div><!-- /.container -->
</div><!-- /#top-banner-and-menu -->
 

@include('shop.modal.crear-datos-facturacion') 
@include('shop.modal.editar-datos-facturacion') 

@section('scriptdatepicker')
<!-- bootstrap datepicker -->
<script src="plugins/datepicker/bootstrap-datepicker.js"></script>
<script>
  $(function () {
    //Date picker
    $('#datepicker').datepicker({
      autoclose: true  
    });
  });
</script>
@stop

@endsection
