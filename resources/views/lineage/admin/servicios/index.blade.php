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
<i class="icon-user font-red"></i>
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
  
      <button type="button"  class="btn btn-primary btn-radio character" id="{{$character->char_name}}" >{{$character->char_name}}</button>
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
                 <input type="text" disabled="" class="form-control char" placeholder="">
            </div>
          </div>

          <div class="form-horizontal col-xs-12 col-sm-12 col-md-3"></div>

    </div>
            </div>
            <!-- END SAMPLE TABLE PORTLET-->
        </div>
    </div>



<div class="row">
    <div class="col-md-6">
    <div class="portlet light ">
        <div class="portlet-title">
            <div class="caption">

<i class="fa fa-paint-brush font-red"></i>
<span class="caption-subject font-red sbold uppercase">Servicio: Nickname color</span>
  <span class="label color-gris " > COSTO : <b>{{$coin->nicknamecolor}} Online Coin's</b> </span>
    <div><br>
    </div>


     </div><!--end caption-->

    @if(Auth::user()->admin == 1)
    <div class="actions">
       <div class="btn-group btn-group-devided" >
              <a class="btn btn-success" data-toggle="modal" data-target="#nicknamecolor" >
              <i class="fa  fa-edit fa-lg"></i></a>
       </div>
   </div>
   @endif

    
        </div><!--portlet-title-->
    {!!Form::open(['url'=>['nicknamecolor-edit'],'method'=>'POST' , 'files'=>True])!!}

    @include('lineage.admin.servicios.forms.nicknamecolor')
    <br>
    {!!Form::submit('Ejecutar',['class'=>'btn btn-primary center-block'])!!}
    {!!Form::close()!!}
            </div>
            <!-- END SAMPLE TABLE PORTLET-->
        </div>









    <div class="col-md-6">
    <div class="portlet light ">
        <div class="portlet-title">
            <div class="caption">



<i class="fa fa-paint-brush font-red"></i>
<span class="caption-subject font-red sbold uppercase">Servicio: Title color</span>
<span class="label color-gris " > COSTO : <b>{{$coin->titlecolor}} Online Coin's</b> </span>
    <div><br>
    </div>
     </div><!--end caption-->

     @if(Auth::user()->admin == 1)
    <div class="actions">
       <div class="btn-group btn-group-devided" >
              <a class="btn btn-success" data-toggle="modal" data-target="#titlecolor" >
              <i class="fa  fa-edit fa-lg"></i></a>
       </div>
   </div>
   @endif

    
        </div><!--portlet-title-->
    {!!Form::open(['url'=>['titlecolor-edit'],'method'=>'POST' , 'files'=>True])!!}

    @include('lineage.admin.servicios.forms.titlecolor')
    <br>
    {!!Form::submit('Ejecutar',['class'=>'btn btn-primary center-block'])!!}
    {!!Form::close()!!}
            </div>
            <!-- END SAMPLE TABLE PORTLET-->
        </div>



  <div class="col-md-6">
    <div class="portlet light ">
        <div class="portlet-title">
            <div class="caption">
<i class="ra ra-monster-skull font-red"></i>
<span class="caption-subject font-red sbold uppercase">Servicio: Remove Karma</span>
<span class="label color-gris " > COSTO : <b>{{$coin->removekarma}} Online Coin's</b> </span>
    <div><br>
    </div>
     </div><!--end caption-->

     @if(Auth::user()->admin == 1)
    <div class="actions">
       <div class="btn-group btn-group-devided" >
              <a class="btn btn-success"data-toggle="modal" data-target="#removekarma" >
              <i class="fa  fa-edit fa-lg"></i></a>
       </div>
   </div>
   @endif

        </div><!--portlet-title-->
    {!!Form::open(['url'=>['removekarma-edit'],'method'=>'POST' , 'files'=>True])!!}

    @include('lineage.admin.servicios.forms.removerkarma')
    <br>
    {!!Form::submit('Ejecutar',['class'=>'btn btn-primary center-block'])!!}
    {!!Form::close()!!}
            </div>
            <!-- END SAMPLE TABLE PORTLET-->
        </div>




  <div class="col-md-6">
    <div class="portlet light ">
        <div class="portlet-title">
            <div class="caption">
<i class="ra ra-bone-bite font-red"></i>
<span class="caption-subject font-red sbold uppercase">Servicio: PK Counter Reset</span>
<span class="label color-gris " > COSTO : <b>{{$coin->pkreset}} Online Coin's</b> </span>
    <div><br>
    </div>
     </div><!--end caption-->
@if(Auth::user()->admin == 1)
    <div class="actions">
       <div class="btn-group btn-group-devided" >
              <a class="btn btn-success" data-toggle="modal" data-target="#pkreset" >
              <i class="fa  fa-edit fa-lg"></i></a>
       </div>
   </div>
   @endif
        </div><!--portlet-title-->
    {!!Form::open(['url'=>['pkcounter-edit'],'method'=>'POST' , 'files'=>True])!!}

    @include('lineage.admin.servicios.forms.pkcounter')
    <br>
    {!!Form::submit('Ejecutar',['class'=>'btn btn-primary center-block'])!!}
    {!!Form::close()!!}
            </div>
            <!-- END SAMPLE TABLE PORTLET-->
        </div>

  



  <div class="col-md-6">
    <div class="portlet light ">
        <div class="portlet-title">
            <div class="caption">
<i class="ra ra-muscle-fat font-red"></i>
<span class="caption-subject font-red sbold uppercase">Servicio: Character Nickname</span>
<span class="label color-gris " > COSTO : <b>{{$coin->nickname}} Online Coin's</b> </span>
    <div><br>
    </div>
     </div><!--end caption-->
@if(Auth::user()->admin == 1)
    <div class="actions">
       <div class="btn-group btn-group-devided" >
              <a class="btn btn-success" data-toggle="modal" data-target="#nickname" >
              <i class="fa  fa-edit fa-lg"></i></a>
       </div>
   </div>
   @endif
        </div><!--portlet-title-->
    {!!Form::open(['url'=>['nickname-edit'],'method'=>'PUT' , 'files'=>True])!!}

    @include('lineage.admin.servicios.forms.nickname')
    <br>
    {!!Form::submit('Ejecutar',['class'=>'btn btn-primary center-block'])!!}
    {!!Form::close()!!}
            </div>
            <!-- END SAMPLE TABLE PORTLET-->
        </div>

  




   <div class="col-md-6">
    <div class="portlet light ">
        <div class="portlet-title">
            <div class="caption">
<i class="ra ra-dervish-swords font-red"></i>
<span class="caption-subject font-red sbold uppercase">Servicio: Clan Name</span>
<span class="label color-gris " > COSTO : <b>{{$coin->clanname}} Online Coin's</b> </span>
    <div><br>
    </div>
     </div><!--end caption-->
@if(Auth::user()->admin == 1)
    <div class="actions">
       <div class="btn-group btn-group-devided" >
              <a class="btn btn-success" data-toggle="modal" data-target="#clanname" >
              <i class="fa  fa-edit fa-lg"></i></a>
       </div>
   </div>
   @endif
        </div><!--portlet-title-->
    {!!Form::open(['url'=>['clanname-edit'],'method'=>'POST' , 'files'=>True])!!}

    @include('lineage.admin.servicios.forms.clanname')
    <br>
    {!!Form::submit('Ejecutar',['class'=>'btn btn-primary center-block'])!!}
    {!!Form::close()!!}
            </div>
            <!-- END SAMPLE TABLE PORTLET-->
        </div>





        <div class="col-md-6">
    <div class="portlet light ">
        <div class="portlet-title">
            <div class="caption">
<i class="fa fa-venus-mars font-red"></i>
<span class="caption-subject font-red sbold uppercase">Servicio: Sex/Gender Change</span>
<span class="label color-gris " > COSTO : <b>{{$coin->sex}} Online Coin's</b> </span>
    <div><br>
    </div>
     </div><!--end caption-->
    @if(Auth::user()->admin == 1)
    <div class="actions">
       <div class="btn-group btn-group-devided" >
              <a class="btn btn-success" data-toggle="modal" data-target="#sex" >
              <i class="fa  fa-edit fa-lg"></i></a>
       </div>
   </div>
   @endif
        </div><!--portlet-title-->
    {!!Form::open(['url'=>['sex-edit'],'method'=>'POST' , 'files'=>True])!!}

    @include('lineage.admin.servicios.forms.sex')
    <br>
    {!!Form::submit('Ejecutar',['class'=>'btn btn-primary center-block'])!!}
    {!!Form::close()!!}
            </div>
            <!-- END SAMPLE TABLE PORTLET-->
        </div>  






          <div class="col-md-6">
    <div class="portlet light ">
        <div class="portlet-title">
            <div class="caption">
<i class="ra ra-player-teleport font-red"></i>
<span class="caption-subject font-red sbold uppercase">Servicio: Unstuck</span>
<span class="label color-gris " > COSTO : <b>{{$coin->unstuck}} Online Coin's</b> </span>
    <div><br>
    </div>
     </div><!--end caption-->
    @if(Auth::user()->admin == 1)
    <div class="actions">
       <div class="btn-group btn-group-devided" >
              <a class="btn btn-success" data-toggle="modal" data-target="#unstuck" >
              <i class="fa  fa-edit fa-lg"></i></a>
       </div>
   </div>
   @endif
        </div><!--portlet-title-->
    {!!Form::open(['url'=>['unstuck-edit'],'method'=>'POST' , 'files'=>True])!!}

    @include('lineage.admin.servicios.forms.unstuck')
    <br>
    {!!Form::submit('Ejecutar',['class'=>'btn btn-primary center-block'])!!}
    {!!Form::close()!!}
            </div>
            <!-- END SAMPLE TABLE PORTLET-->
        </div>
  


     <div class="col-md-6">
    <div class="portlet light ">
        <div class="portlet-title">
            <div class="caption">
<i class="ra ra-angel-wings font-red"></i>
<span class="caption-subject font-red sbold uppercase">Servicio: Set Noblesse</span>
<span class="label color-gris " > COSTO : <b>{{$coin->noblesse}} Online Coin's</b> </span>
    <div><br>
    </div>
     </div><!--end caption-->
    @if(Auth::user()->admin == 1)
    <div class="actions">
       <div class="btn-group btn-group-devided" >
              <a class="btn btn-success" data-toggle="modal" data-target="#noblesse" >
              <i class="fa  fa-edit fa-lg"></i></a>
       </div>
   </div>
   @endif
        </div><!--portlet-title-->
    {!!Form::open(['url'=>['noblesse-edit'],'method'=>'POST' , 'files'=>True])!!}

    @include('lineage.admin.servicios.forms.noblesse')
    <br>
    {!!Form::submit('Ejecutar',['class'=>'btn btn-primary center-block'])!!}
    {!!Form::close()!!}
            </div>
            <!-- END SAMPLE TABLE PORTLET-->
        </div>
    




    <div class="col-md-6">
    <div class="portlet light ">
        <div class="portlet-title">
            <div class="caption">
<i class="ra ra-wyvern font-red"></i>
<span class="caption-subject font-red sbold uppercase">Servicio: Set Hero</span>
<span class="label color-gris " > COSTO : <b>{{$coin->hero}} Online Coin's</b> </span>
    <div><br>
    </div>
     </div><!--end caption-->
    @if(Auth::user()->admin == 1)
    <div class="actions">
       <div class="btn-group btn-group-devided" >
              <a class="btn btn-success" data-toggle="modal" data-target="#hero" >
              <i class="fa  fa-edit fa-lg"></i></a>
       </div>
   </div>
   @endif
        </div><!--portlet-title-->
    {!!Form::open(['url'=>['hero-edit'],'method'=>'POST' , 'files'=>True])!!}

    @include('lineage.admin.servicios.forms.hero')
    <br>
    {!!Form::submit('Ejecutar',['class'=>'btn btn-primary center-block'])!!}
    {!!Form::close()!!}
            </div>
            <!-- END SAMPLE TABLE PORTLET-->
        </div>
    






    <div class="col-md-6">
    <div class="portlet light ">
        <div class="portlet-title">
            <div class="caption">
<i class="ra ra-helmet font-red"></i>
<span class="caption-subject font-red sbold uppercase">Servicio: Set Vip</span>
<span class="label color-gris " > COSTO : <b>{{$coin->vip}} Online Coin's</b> </span>
    <div><br>
    </div>
     </div><!--end caption-->
    @if(Auth::user()->admin == 1)
    <div class="actions">
       <div class="btn-group btn-group-devided" >
              <a class="btn btn-success" data-toggle="modal" data-target="#vip" >
              <i class="fa  fa-edit fa-lg"></i></a>
       </div>
   </div>
   @endif
        </div><!--portlet-title-->
    {!!Form::open(['url'=>['vip-edit'],'method'=>'POST' , 'files'=>True])!!}

    @include('lineage.admin.servicios.forms.vip')
    <br>
    {!!Form::submit('Ejecutar',['class'=>'btn btn-primary center-block'])!!}
    {!!Form::close()!!}
            </div>
            <!-- END SAMPLE TABLE PORTLET-->
        </div>


    </div><!-- END ROW-->


@include('lineage.admin.servicios.modal.modal-coin')
@endsection