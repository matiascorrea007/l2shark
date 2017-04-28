@extends('layouts.metronic')
@include('alerts.errors')
@section('content')

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
<div class="">
    <div class="row">
        <div class="form-horizontal col-xs-12 col-sm-12 col-md-2"></div>
        <div class="">
          <form class=" " role="form">
           
  
  @foreach($characters as $character)
       <div class="form-horizontal col-xs-2 col-sm-2 col-md-1">
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
  
      <button type="button"  class="btn btn-primary btn-radio">{{$character->char_name}}</button>
          <input type="checkbox" id="1" class="hidden" >
      </div>
  @endforeach
              
            
           


          </form>
        </div>

       


    </div>
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

<i class="icon-user font-red"></i>
<span class="caption-subject font-red sbold uppercase">Servicio: Nickname color</span>

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

<i class="icon-user font-red"></i>
<span class="caption-subject font-red sbold uppercase">Servicio: Title color</span>

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
<i class="icon-user font-red"></i>
<span class="caption-subject font-red sbold uppercase">Servicio: Remove Karma</span>
    <div><br>
    </div>
     </div><!--end caption-->
    <div class="actions">
       <div class="btn-group btn-group-devided" >
           <!--boton derecha superior-->
       </div>
   </div>
        </div><!--portlet-title-->
    {!!Form::open(['url'=>['titlecolor-edit'],'method'=>'POST' , 'files'=>True])!!}

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
<i class="icon-user font-red"></i>
<span class="caption-subject font-red sbold uppercase">Servicio: PK Counter Reset</span>
    <div><br>
    </div>
     </div><!--end caption-->
    <div class="actions">
       <div class="btn-group btn-group-devided" >
           <!--boton derecha superior-->
       </div>
   </div>
        </div><!--portlet-title-->
    {!!Form::open(['url'=>['titlecolor-edit'],'method'=>'POST' , 'files'=>True])!!}

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
<i class="icon-user font-red"></i>
<span class="caption-subject font-red sbold uppercase">Servicio: Character Nickname</span>
    <div><br>
    </div>
     </div><!--end caption-->
    <div class="actions">
       <div class="btn-group btn-group-devided" >
           <!--boton derecha superior-->
       </div>
   </div>
        </div><!--portlet-title-->
    {!!Form::open(['url'=>['titlecolor-edit'],'method'=>'POST' , 'files'=>True])!!}

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
<i class="icon-user font-red"></i>
<span class="caption-subject font-red sbold uppercase">Servicio: Clan Name</span>
    <div><br>
    </div>
     </div><!--end caption-->
    <div class="actions">
       <div class="btn-group btn-group-devided" >
           <!--boton derecha superior-->
       </div>
   </div>
        </div><!--portlet-title-->
    {!!Form::open(['url'=>['titlecolor-edit'],'method'=>'POST' , 'files'=>True])!!}

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
<i class="icon-user font-red"></i>
<span class="caption-subject font-red sbold uppercase">Servicio: Sex/Gender Change</span>
    <div><br>
    </div>
     </div><!--end caption-->
    <div class="actions">
       <div class="btn-group btn-group-devided" >
           <!--boton derecha superior-->
       </div>
   </div>
        </div><!--portlet-title-->
    {!!Form::open(['url'=>['titlecolor-edit'],'method'=>'POST' , 'files'=>True])!!}

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
<i class="icon-user font-red"></i>
<span class="caption-subject font-red sbold uppercase">Servicio: Unstuck</span>
    <div><br>
    </div>
     </div><!--end caption-->
    <div class="actions">
       <div class="btn-group btn-group-devided" >
           <!--boton derecha superior-->
       </div>
   </div>
        </div><!--portlet-title-->
    {!!Form::open(['url'=>['titlecolor-edit'],'method'=>'POST' , 'files'=>True])!!}

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
<i class="icon-user font-red"></i>
<span class="caption-subject font-red sbold uppercase">Servicio: Set Noblesse</span>
    <div><br>
    </div>
     </div><!--end caption-->
    <div class="actions">
       <div class="btn-group btn-group-devided" >
           <!--boton derecha superior-->
       </div>
   </div>
        </div><!--portlet-title-->
    {!!Form::open(['url'=>['titlecolor-edit'],'method'=>'POST' , 'files'=>True])!!}

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
<i class="icon-user font-red"></i>
<span class="caption-subject font-red sbold uppercase">Servicio: Set Hero</span>
    <div><br>
    </div>
     </div><!--end caption-->
    <div class="actions">
       <div class="btn-group btn-group-devided" >
           <!--boton derecha superior-->
       </div>
   </div>
        </div><!--portlet-title-->
    {!!Form::open(['url'=>['titlecolor-edit'],'method'=>'POST' , 'files'=>True])!!}

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
<i class="icon-user font-red"></i>
<span class="caption-subject font-red sbold uppercase">Servicio: Set Vip</span>
    <div><br>
    </div>
     </div><!--end caption-->
    <div class="actions">
       <div class="btn-group btn-group-devided" >
           <!--boton derecha superior-->
       </div>
   </div>
        </div><!--portlet-title-->
    {!!Form::open(['url'=>['titlecolor-edit'],'method'=>'POST' , 'files'=>True])!!}

    @include('lineage.admin.servicios.forms.vip')
    <br>
    {!!Form::submit('Ejecutar',['class'=>'btn btn-primary center-block'])!!}
    {!!Form::close()!!}
            </div>
            <!-- END SAMPLE TABLE PORTLET-->
        </div>


    </div><!-- END ROW-->



@endsection