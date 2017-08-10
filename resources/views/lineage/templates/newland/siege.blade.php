@section('menu')
<div class="container">
            <span class="bar hide"></span>
            <a href="index.html" class="logo"><img src="skin/newland/img/logo.png" alt=""></a>
                <nav>
                <div class="nav-control">
                    <ul>
                        <li><a  href="{{ url('/') }}">INICIO</a></li>
                        <li><a href="{{ url('/descargas') }}">DESCARGAS</a></li>
                        <li><a href="{{ url('/como-jugar') }}">COMO JUGAR</a></li>
                        <li><a href="{{ url('/informacion') }}">INFORMACIÓN</a></li>
                        <li><a href="{{ url('/noticias') }}">NOTICIAS</a></li>

                        <li><a href="{{ url('/galeria-imagen') }}">GALERIA</a></li>
                    </ul>
                </div>
            </nav>
            <div class="nav-right">
                <div class="nav-profile dropdown">
                    <a href="#" class="dropdown-toggle " data-toggle="dropdown"><img src="skin/newland/img/user/avatar.jpg" alt=""> <span>PANEL DE USUARIO</span></a>
                    <ul class="dropdown-menu">
                    @if(Auth::check())
                    <li><a href="{{ url('/panel') }}"><i class="fa fa-universal-access"></i>Panel</a></li>
                    <li><a href="{{ url('/logout') }}"><i class="fa fa-sign-out "></i>Salir</a></li>
                    @else
                        <li><a href="{{ url('/registrarse') }}"><i class="fa fa-user-plus"></i>Registrarte</a></li>
                        <li class="divider"></li>
                        <li><a href="{{ url('/ingresar') }}"><i class="fa fa-user"></i>Iniciar Sesión</a></li>
                        <li class="divider"></li>
                        <li><a href="{{ url('/soporte') }}"><i class="fa fa-support"></i>Soporte</a></li>
                        @endif
                    </ul>
                </div>
            </div>
            <div class="nav-right">
                <div class="nav-profile dropdown">
                    <a href="#" class="dropdown-toggle active" data-toggle="dropdown"><span>ESTADISTICAS</span></a>
                    <ul class="dropdown-menu">
                        <li><a href="{{ url('/top-pvp') }}"><i class="ra ra-bat-sword"></i>TOP</a></li>
                        <li class="divider"></li>
                        <li><a href="{{ url('/siege') }}"><i class="ra ra-castle-emblem"></i>SIEGUE</a></li>
                        <li class="divider"></li>
                        <li><a href="{{ url('/boss') }}"><i class="ra ra-monster-skull"></i>BOSS</a></li>
                    </ul>
                </div>
            </div>
        </div>
@endsection


@extends('layouts.newland')
@section('content')
@include('alerts.errors')
@include('alerts.request')
@include('alerts.success')
@include('flash::message')


<section class="padding-top-40 padding-bottom-40" style="background-image: url(skin/newland/img/siege.jpg); background-repeat: no-repeat; background-attachment: fixed;">  
            <div class="container">
                <div class="row sidebar">
                    <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 leftside">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="headline">
                                <div class="thumbnail-header">
            <h3><a href="#" class="hvr-underline-from-center">Castillos</a></h3>
            
        </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    </div>



<div class="">
        
            <div class="">

                    <div class="ct">Dion Castle</div>
                    <div class="table-scrollable">
            <table class="table table-bordered ">
                <tbody>
                    <tr >
                    <td ><img src="skin/globales/img/castles/dion.jpg" alt=""></td>
                    <td ></td>
                    </tr>
                    <tr >
                    <td >Clan Propietario:</td>
                    <td class="green">@if(!empty($DionClan))
                                        {{$DionClan->clan_name}}
                                      @else
                                         <p class="red">Libre</p>   
                                      @endif</td>
                    </tr>
                    <tr>
                    <td>Clan Líder:</td>
                    <td colspan="2" class="green">@if(!empty($DionClan))
                                        {{$DionClan->char_name}}
                                      @endif</td>
                    </tr>
                    <tr>
                    <td>Alianza:</td>
                    <td class="green">@if(!empty($DionClan))
                                        {{$DionClan->ally_name}}
                                      @endif</td>
                    </tr>
                    <tr>
                    <td>Guerra Siguiente:</td>
                    <td class="green">
                    @if(!empty($Dion))
                    {{date('D\, j M Y H\:i',$Dion->siegeDate/1000)}} Horas
                    @endif
                    </td>
                    </tr>
                    <tr>
                    <td>Tasa:</td>
                    <td class="green">
                    @if(!empty($Dion))
                    {{$Dion->taxPercent}}%
                    @endif
                    </td>
                    </tr>
                    <tr>
                    <td>Atacantes:</td>
                    <td></td>
                    </tr>
                    <tr>
                    <td>Defensores:</td>
                    <td></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
<br><br>
    <div class="">
                    <div class="ct">Schuttgart Castle</div>
                    <div class="table-scrollable">
            <table class="table table-bordered ">
                <tbody>
                    <tr>
                    <td><img src="skin/globales/img/castles/schuttgart.jpg" alt=""></td>
                    <td></td>
                    </tr>
                    <tr>
                    <td>Clan Propietario:</td>
                    <td class="green">@if(!empty($SchuttgartClan))
                                        {{$SchuttgartClan->clan_name}}
                                      @else
                                         <p class="red">Libre</p>   
                                      @endif</td>
                    </tr>
                    <tr>
                    <td>Clan Líder:</td>
                    <td class="green">@if(!empty($SchuttgartClan))
                                        {{$SchuttgartClan->char_name}}
                                      @endif</td>
                    </tr>
                    <tr>
                    <td>Alianza:</td>
                    <td class="green">@if(!empty($SchuttgartClan))
                                        {{$SchuttgartClan->ally_name}}
                                      @endif</td>
                    </tr>
                    <tr>
                    <td>Guerra Siguiente:</td>
                    <td class="green">
                    @if(!empty($Schuttgart))
                    {{date('D\, j M Y H\:i',$Schuttgart->siegeDate/1000)}} Horas
                    @endif
                    </td>
                    </tr>
                    <tr>
                    <td>Tasa:</td>
                    <td class="green">
                    @if(!empty($Schuttgart))
                    {{$Schuttgart->taxPercent}}%
                    @endif
                    </td>
                    </tr>
                    <tr>
                    <td>Atacantes:</td>
                    <td></td>
                    </tr>
                    <tr>
                    <td>Defensores:</td>
                    <td></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
<br><br>
    <div class="">
                    <div class="ct">Oren Castle</div>
                    <div class="table-scrollable">
            <table class="table table-bordered ">
                <tbody>
                    <tr>
                    <td><img src="skin/globales/img/castles/oren.jpg" alt=""></td>
                    <td></td>
                    </tr>
                    <tr>
                    <td>Clan Propietario:</td>
                    <td class="green">@if(!empty($OrenClan))
                                        {{$OrenClan->clan_name}}
                                      @else
                                         <p class="red">Libre</p>   
                                      @endif</td>
                    </tr>
                    <tr>
                    <td>Clan Líder:</td>
                    <td class="green">@if(!empty($OrenClan))
                                        {{$OrenClan->char_name}}
                                      @endif</td>
                    </tr>
                    <tr>
                    <td>Alianza:</td>
                    <td class="green">@if(!empty($OrenClan))
                                        {{$OrenClan->ally_name}}
                                      @endif</td>
                    </tr>
                    <tr>
                    <td>Guerra Siguiente:</td>
                    <td class="green">
                    @if(!empty($Oren))
                    {{date('D\, j M Y H\:i',$Oren->siegeDate/1000)}} Horas
                    @endif
                    </td>
                    </tr>
                    <tr>
                    <td>Tasa:</td>
                    <td class="green">
                    @if(!empty($Oren))
                    {{$Oren->taxPercent}}%
                    @endif
                    </td>
                    </tr>
                    <tr>
                    <td>Atacantes:</td>
                    <td></td>
                    </tr>
                    <tr>
                    <td>Defensores:</td>
                    <td></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
<br><br>
    <div class="">
                    <div class="ct">Gludio Castle</div>
                    <div class="table-scrollable">
            <table class="table table-bordered ">
                <tbody>
                    <tr>
                    <td><img src="skin/globales/img/castles/gludio.jpg" alt=""></td>
                    <td></td>
                    </tr>
                    <tr>
                    <td>Clan Propietario:</td>
                    <td class="green">@if(!empty($GludioClan))
                                        {{$GludioClan->clan_name}}
                                      @else
                                         <p class="red">Libre</p>   
                                      @endif</td>
                    </tr>
                    <tr>
                    <td>Clan Líder:</td>
                    <td class="green">@if(!empty($GludioClan))
                                        {{$GludioClan->char_name}}
                                      @endif</td>
                    </tr>
                    <tr>
                    <td>Alianza:</td>
                    <td class="green">@if(!empty($GludioClan))
                                        {{$GludioClan->ally_name}}
                                      @endif</td>
                    </tr>
                    <tr>
                    <td>Guerra Siguiente:</td>
                    <td class="green">
                    @if(!empty($Gludio))
                    {{date('D\, j M Y H\:i',$Gludio->siegeDate/1000)}} Horas
                    @endif
                    </td>
                    </tr>
                    <tr>
                    <td>Tasa:</td>
                    <td class="green">
                    @if(!empty($Gludio))
                    {{$Gludio->taxPercent}}%
                    @endif
                    </td>
                    </tr>
                    <tr>
                    <td>Atacantes:</td>
                    <td></td>
                    </tr>
                    <tr>
                    <td>Defensores:</td>
                    <td></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
<br><br>
    <div class="">
                    <div class="ct">Goddard Castle</div>
                    <div class="table-scrollable">
            <table class="table table-bordered ">
                <tbody>
                    <tr>
                    <td><img src="skin/globales/img/castles/goddard.jpg" alt=""></td>
                    <td></td>
                    </tr>
                    <tr>
                    <td>Clan Propietario:</td>
                    <td class="green">@if(!empty($GoddardClan))
                                        {{$GoddardClan->clan_name}}
                                      @else
                                         <p class="red">Libre</p>   
                                      @endif</td>
                    </tr>
                    <tr>
                    <td>Clan Líder:</td>
                    <td class="green">@if(!empty($GoddardClan))
                                        {{$GoddardClan->char_name}}
                                      @endif</td>
                    </tr>
                    <tr>
                    <td>Alianza:</td>
                    <td class="green">@if(!empty($GoddardClan))
                                        {{$GoddardClan->ally_name}}
                                      @endif</td>
                    </tr>
                    <tr>
                    <td>Guerra Siguiente:</td>
                    <td class="green">
                    @if(!empty($Goddard))
                    {{date('D\, j M Y H\:i',$Goddard->siegeDate/1000)}} Horas
                    @endif
                    </td>
                    </tr>
                    <tr>
                    <td>Tasa:</td>
                    <td class="green">
                    @if(!empty($Goddard))
                    {{$Goddard->taxPercent}}%
                    @endif
                    </td>
                    </tr>
                    <tr>
                    <td>Atacantes:</td>
                    <td></td>
                    </tr>
                    <tr>
                    <td>Defensores:</td>
                    <td></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
<br><br>
    <div class="">
                    <div class="ct">Innadril Castle</div>
                    <div class="table-scrollable">
            <table class="table table-bordered ">
                <tbody>
                    <tr>
                    <td><img src="skin/globales/img/castles/schuttgart.jpg" alt=""></td>
                    <td></td>
                    </tr>
                    <tr>
                    <td>Clan Propietario:</td>
                    <td class="green">@if(!empty($InnadrilClan))
                                        {{$InnadrilClan->clan_name}}
                                      @else
                                         <p class="red">Libre</p>   
                                      @endif</td>
                    </tr>
                    <tr>
                    <td>Clan Líder:</td>
                    <td class="green">@if(!empty($InnadrilClan))
                                        {{$InnadrilClan->char_name}}
                                      @endif</td>
                    </tr>
                    <tr>
                    <td>Alianza:</td>
                    <td class="green">@if(!empty($InnadrilClan))
                                        {{$InnadrilClan->ally_name}}
                                      @endif</td>
                    </tr>
                    <tr>
                    <td>Guerra Siguiente:</td>
                    <td class="green">
                    @if(!empty($Innadril))
                    {{date('D\, j M Y H\:i',$Innadril->siegeDate/1000)}} Horas
                    @endif
                    </td>
                    </tr>
                    <tr>
                    <td>Tasa:</td>
                    <td class="green">
                    @if(!empty($Innadril))
                    {{$Innadril->taxPercent}}%
                    @endif
                    </td>
                    </tr>
                    <tr>
                    <td>Atacantes:</td>
                    <td></td>
                    </tr>
                    <tr>
                    <td>Defensores:</td>
                    <td></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
<br><br>
    <div class="">
                    <div class="ct">Giran Castle</div>
                    <div class="table-scrollable">
            <table class="table table-bordered ">
                <tbody>
                    <tr>
                    <td ><img src="skin/globales/img/castles/giran.jpg" alt=""></td>
                    <td></td>
                    </tr>
                    <tr>
                    <td>Clan Propietario:</td>
                    <td class="green">@if(!empty($GiranClan))
                                        {{$GiranClan->clan_name}}
                                      @else
                                         <p class="red">Libre</p>   
                                      @endif</td>
                    </tr>
                    <tr>
                    <td>Clan Líder:</td>
                    <td class="green">@if(!empty($GiranClan))
                                        {{$GiranClan->char_name}}
                                      @endif</td>
                    </tr>
                    <tr>
                    <td>Alianza:</td>
                    <td class="green">@if(!empty($GiranClan))
                                        {{$GiranClan->ally_name}}
                                      @endif</td>
                    </tr>
                    <tr>
                    <td>Guerra Siguiente:</td>
                    <td class="green">
                    @if(!empty($Giran))
                    {{date('D\, j M Y H\:i',$Giran->siegeDate/1000)}} Horas
                    @endif
                    </td>
                    </tr>
                    <tr>
                    <td>Tasa:</td>
                    <td class="green">
                    @if(!empty($Giran))
                    {{$Giran->taxPercent}}%
                    @endif
                    </td>
                    </tr>
                    <tr>
                    <td>Atacantes:</td>
                    <td></td>
                    </tr>
                    <tr>
                    <td>Defensores:</td>
                    <td></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
<br><br>
    <div class="">
                    <div class="ct">Aden Castle</div>
                    <div class="table-scrollable">
            <table class="table table-bordered ">
                <tbody>
                    <tr>
                    <td ><img src="skin/globales/img/castles/aden.jpg" alt=""></td>
                    <td></td>
                    </tr>
                    <tr>
                    <td>Clan Propietario:</td>
                    <td class="green">@if(!empty($AdenClan))
                                        {{$AdenClan->clan_name}}
                                      @else
                                         <p class="red">Libre</p>   
                                      @endif</td>
                    </tr>
                    <tr>
                    <td>Clan Líder:</td>
                    <td class="green">@if(!empty($AdenClan))
                                        {{$AdenClan->char_name}}
                                      @endif</td>
                    </tr>
                    <tr>
                    <td>Alianza:</td>
                    <td class="green">@if(!empty($AdenClan))
                                        {{$AdenClan->ally_name}}
                                      @endif</td>
                    </tr>
                    <tr>
                    <td>Guerra Siguiente:</td>
                    <td class="green">
                    @if(!empty($Aden))
                    {{date('D\, j M Y H\:i',$Aden->siegeDate/1000)}} Horas
                    @endif
                    </td>
                    </tr>
                    <tr>
                    <td>Tasa:</td>
                    <td class="green">
                    @if(!empty($Aden))
                    {{$Aden->taxPercent}}%
                    @endif
                    </td>
                    </tr>
                    <tr>
                    <td>Atacantes:</td>
                    <td></td>
                    </tr>
                    <tr>
                    <td>Defensores:</td>
                    <td></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
<br><br>
    <div class="">
                    <div class="ct">Rune Castle</div>
                    <div class="table-scrollable">
            <table class="table table-bordered ">
                <tbody>
                    <tr>
                    <td ><img src="skin/globales/img/castles/rune.jpg" alt=""></td>
                    <td></td>
                    </tr>
                    <tr>
                    <td>Clan Propietario:</td>
                    <td class="green">@if(!empty($RuneClan))
                                        {{$RuneClan->clan_name}}
                                      @else
                                         <p class="red">Libre</p>   
                                      @endif</td>
                    </tr>
                    <tr>
                    <td>Clan Líder:</td>
                    <td class="green">@if(!empty($RuneClan))
                                        {{$RuneClan->char_name}}
                                      @endif</td>
                    </tr>
                    <tr>
                    <td>Alianza:</td>
                    <td class="green">@if(!empty($RuneClan))
                                        {{$RuneClan->ally_name}}
                                      @endif</td>
                    </tr>
                    <tr>
                    <td>Guerra Siguiente:</td>
                    <td class="green">
                    @if(!empty($Rune))
                    {{date('D\, j M Y H\:i',$Rune->siegeDate/1000)}} Horas
                     @endif
                     </td>
                    </tr>
                    <tr>
                    <td>Tasa:</td>
                    <td class="green">
                    @if(!empty($Rune))
                    {{$Rune->taxPercent}}%
                     @endif
                     </td>
                    </tr>
                    <tr>
                    <td>Atacantes:</td>
                    <td></td>
                    </tr>
                    <tr>
                    <td>Defensores:</td>
                    <td></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    

        </div>


                </div>
            </div>
        </section>






@endsection