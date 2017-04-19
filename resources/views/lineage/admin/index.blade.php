@extends('layouts.metronic')
@include('alerts.errors')
@section('content')


<div class="row">
    <div class="col-md-6">
    <div class="portlet light ">
        <div class="portlet-title">
            <div class="caption">

<i class="icon-user font-red"></i>
<span class="caption-subject font-red sbold uppercase">Información de la cuenta</span>

    <div><br>
    </div>


     </div><!--end caption-->



    <div class="actions">
       <div class="btn-group btn-group-devided" >
               
      
           @if(empty(DB::table('web_facebooks')->get()))
              <a class="btn btn-success" data-toggle="modal" data-target="#crear-facebook" >
              <i class="fa  fa-plus fa-lg"></i></a>
            @endif
      
       </div>
   </div>


        </div><!--portlet-title-->



    <div class="portlet-body">
        <div class="table-scrollable">
            <table class="table table-hover table-light">
 				<tbody>
 					<tr>
    				<td>Account</td>
    				<td></td>
    				</tr>
					<tr>
    				<td>E-mail</td>
    				<td></td>
					</tr>
					<tr>
    				<td>Creada en</td>
    				<td></td>
					</tr>
					<tr>
    				<td>Último login</td>
    				<td></td>
					</tr>
					<tr>
    				<td>Último IP</td>
    				<td></td>
					</tr>
					<tr>
    				<td>Personajes</td>
    				<td></td>
    				</tr>
				</tbody>
  			</table>
        </div>
    </div>


            </div>
            <!-- END SAMPLE TABLE PORTLET-->
        </div>







        <div class="col-md-6">
    <div class="portlet light ">
        <div class="portlet-title">
            <div class="caption">

<i class="icon-user font-red"></i>
<span class="caption-subject font-red sbold uppercase">Último acceso al panel</span>

    <div><br>
    </div>


     </div><!--end caption-->



    <div class="actions">
       <div class="btn-group btn-group-devided" >
               
      
           @if(empty(DB::table('web_facebooks')->get()))
              <a class="btn btn-success" data-toggle="modal" data-target="#crear-facebook" >
              <i class="fa  fa-plus fa-lg"></i></a>
            @endif
      
       </div>
   </div>
        </div><!--portlet-title-->

        
    <div class="portlet-body">
        <div class="table-scrollable">
            <table class="table table-hover table-light">
 				<thead>
   					<tr>
    					<th>IP</th>
    					<th>Fecha</th>
   					</tr>
 				</thead>
        		<tbody>
  					<td>aa</td>
  					<td>aa</td>
  				</tbody>
  			</table>
        </div>
    </div>

            </div>
            <!-- END SAMPLE TABLE PORTLET-->
        </div>
    </div>





@endsection