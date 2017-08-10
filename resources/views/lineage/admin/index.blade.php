@php
$skin =  DB::table('web_skins')->first();
@endphp

@extends($skin->nombre == "newland" ? 'layouts.newland.index' : 'layouts.metronic');
@section('content')
@include('alerts.errors')
@include('alerts.request')
@include('alerts.success')
@include('flash::message')
{!! Toastr::message() !!}



<div class="row">
    <div class="col-md-6">
    <div class="portlet light ">
        <div class="portlet-title">
            <div class="caption">

<i class="fa fa-wrench font-red"></i>
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
    				<td>{{Auth::user()->login}}</td>
    				</tr>
					<tr>
    				<td>E-mail</td>
    				<td>{{Auth::user()->email}}</td>
					</tr>
					<tr>
    				<td>Creada en</td>
    				<td>{{Auth::user()->created_at}}</td>
					</tr>
					<tr>
    				<td>Último login</td>
    				<td></td>
					</tr>
					<tr>
    				<td>Último IP</td>
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

<i class="fa fa-user font-red"></i>
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










<div class="row">
    <div class="col-md-12">
    <div class="portlet light ">
        <div class="portlet-title">
            <div class="caption">
<i class="ra ra-player-pyromaniac font-red"></i>
<span class="caption-subject font-red sbold uppercase">Seleccione Un Personaje</span>
    <div><br>
    </div>
     </div><!--end caption-->
        </div><!--portlet-title-->

  <br />

    <div class="row">
          <form class=" " role="form">
    <div class="form-horizontal  col-md-2"></div>
    @if(!empty($characters))
  @foreach($characters as $character)
       <div class="form-horizontal col-xs-3 col-sm-2 col-md-1">
        @if($character->race == 0 and $character->sex == 0 and $character->classid == 0)
          <img src="skin/globales/img/avatar/human_male_fighter.jpg" height="150" width="170" class="img-responsive img-radio">
        @elseif($character->race == 0 and $character->sex == 0 and $character->classid == 10)
          <img src="skin/globales/img/avatar/human_male_mage.jpg" height="150" width="170" class="img-responsive img-radio">
        @elseif($character->race == 0 and $character->sex == 1)
          <img src="skin/globales/img/avatar/human_female_fighter.jpg" height="150" width="170" class="img-responsive img-radio">

        @elseif($character->race == 1 and $character->sex == 0)
          <img src="skin/globales/img/avatar/elf_male.jpg" height="150" width="170" class="img-responsive img-radio">
        @elseif($character->race == 1 and $character->sex == 1)
          <img src="skin/globales/img/avatar/elf_female.jpg" height="150" width="170" class="img-responsive img-radio">

        @elseif($character->race == 2 and $character->sex == 0)
          <img src="skin/globales/img/avatar/dark_male.jpg" height="150" width="170" class="img-responsive img-radio">
        @elseif($character->race == 2 and $character->sex == 1)
          <img src="skin/globales/img/avatar/dark_female.jpg" height="150" width="170" class="img-responsive img-radio">

        @elseif($character->race == 3 and $character->sex == 0 and $character->classid == 44)
        <img src="skin/globales/img/avatar/orc_male_fighter.jpg" height="150" width="170" class="img-responsive img-radio">
        @elseif($character->race == 3 and $character->sex == 0 and $character->classid == 49)
        <img src="skin/globales/img/avatar/orc_male_mage.jpg" height="150" width="170" class="img-responsive img-radio">
         @elseif($character->race == 3 and $character->sex == 1)
        <img src="skin/globales/img/avatar/orc_female_mage.jpg" height="150" width="170" class="img-responsive img-radio">

        @elseif($character->race == 4 and $character->sex == 0)
        <img src="skin/globales/img/avatar/dwarf_male.jpg" height="150" width="170" class="img-responsive img-radio">
         @elseif($character->race == 4 and $character->sex == 1)
        <img src="skin/globales/img/avatar/dwarf_female.jpg" height="150" width="170" class="img-responsive img-radio">
        @endif
  
      <button type="button"  class="btn btn-primary btn-radio character2" id="{{$character->char_name}}" >{{$character->char_name}}</button>
      <input type="checkbox" id="right-item" class="hidden">
      </div>
  @endforeach
  @endif
          </form>
    </div>

      <br>
    <div class="row">
            <div class="form-horizontal col-xs-12 col-sm-12 col-md-3"></div>

           <div class="form-group col-xs-12 col-sm-12 col-md-6">
            <div class="input-group input-icon right ">
            <span class="input-group-addon"><i class="fa fa-user font-blue"> Personaje Seleccionado : </i></span>
                 <input type="text" disabled=""  class="form-control char" >
            </div>
          </div>

          <div class="form-horizontal col-xs-12 col-sm-12 col-md-3"></div>

    </div>





    <div class="row">
      <div class="form-horizontal col-xs-12 col-sm-12 col-md-6">
        <div class="portlet-body">
        <div class="table-scrollable">
            <table class="table table-hover table-light">
        <tbody>
          <tr>
            <td>Nombre :</td>
            <td ><input type="text" disabled=""  class="form-control nombre"></td>
            </tr>
          <tr>
            <td>Titulo :</td>
            <td><input type="text" disabled=""  class="form-control titulo"></td>
          </tr>
          <tr>
            <td>Online :</td>
            <td><input type="text" disabled=""  class="form-control online"></td>
          </tr>
          <tr>
            <td>Bass Clase :</td>
            <td><input type="text" disabled=""  class="form-control baseclase"></td>
          </tr>
          <tr>
            <td>Sub-Class 1 :</td>
            <td><input type="text" disabled=""  class="form-control sub1"></td>
          </tr>
          <tr>
            <td>Sub-Class 2 :</td>
            <td><input type="text" disabled=""  class="form-control sub2"></td>
          </tr>
          <tr>
            <td>Sub-Class 3 :</td>
            <td><input type="text" disabled=""  class="form-control sub3"></td>
          </tr>
          <tr>
            <td>Level Base :</td>
            <td><input type="text" disabled=""  class="form-control levelbase"></td>
          </tr>
        </tbody>
        </table>
        </div>
    </div>
      </div>
     <div class="form-horizontal col-xs-12 col-sm-12 col-md-6">
         <div class="portlet-body">
        <div class="table-scrollable">
            <table class="table table-hover table-light">
        <tbody>
          <tr>
            <td>Género :</td>
            <td><input type="text" disabled=""  class="form-control genero"></td>
            </tr>
          <tr>
            <td>PvP :</td>
            <td><input type="text" disabled=""  class="form-control pvp"></td>
          </tr>
          <tr>
            <td>Pk :</td>
            <td><input type="text" disabled=""  class="form-control pk"></td>
          </tr>
          <tr>
            <td>Karma :</td>
            <td><input type="text" disabled=""  class="form-control karma"></td>
          </tr>
          <tr>
            <td>Clan :</td>
            <td><input type="text" disabled=""  class="form-control clan"></td>
          </tr>
          <tr>
            <td>Alianza :</td>
            <td><input type="text" disabled=""  class="form-control alianza"></td>
          </tr>
          <tr>
            <td>Nobless :</td>
            <td><input type="text" disabled=""  class="form-control nobless"></td>
          </tr>
          <tr>
            <td>Hero :</td>
            <td><input type="text" disabled=""  class="form-control herp"></td>
          </tr>
        </tbody>
        </table>
        </div>
    </div>
      </div>
    </div>
            </div>
            <!-- END SAMPLE TABLE PORTLET-->
        </div>
    </div>



@endsection