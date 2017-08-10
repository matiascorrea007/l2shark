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
                    <a href="#" class="dropdown-toggle active" data-toggle="dropdown"><img src="skin/newland/img/user/avatar.jpg" alt=""> <span>PANEL DE USUARIO</span></a>
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
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span>ESTADISTICAS</span></a>
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
    

     <section class="hero hero-panel" style="background-image: url(skin/newland/img/cover/cover-register.jpg);">
            <div class="hero-bg"></div>
            <div class="container relative">
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 pull-none margin-auto">
                        <div class="panel panel-default panel-login">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-users"></i> Registrarte</h3>
                            </div>
                            <div class="panel-body">
                                                                
                                <form action="{{ url('/register') }}"  method="post" >
                                 <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <div class="form-group input-icon-left">
                                        <i class="fa fa-user"></i>
                                        <input type="text" class="form-control" name="login" placeholder="Username">
                                    </div>
                                    <div class="form-group input-icon-left">
                                        <i class="fa fa-envelope"></i>
                                        <input type="email" class="form-control" name="email" placeholder="Email">
                                    </div>
                                    <div class="form-group input-icon-left">
                                        <i class="fa fa-lock"></i>
                                        <input type="password" class="form-control" name="password" placeholder="Password">
                                    </div>
                                    <div class="form-group input-icon-left">
                                        <i class="fa fa-check"></i>
                                        <input type="password" class="form-control" name="password_confirmation" placeholder="Repeat Password">
                                    </div>
                                    
                                    <div class="controls form-group">
                                        <div class="row">
                                            <div class="col-lg-2 no-padding-right">
                                                <span class="helper-left">Recatcha</span>
                                                 {!! Recaptcha::render() !!}
                                            </div>

                                            <div class="col-lg-10">
                                                   
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <button type="submit" class="btn btn-primary btn-block">Register</button>
                                    
                                  <!-- <div class="form-actions">
                                        <div class="checkbox checkbox-primary">
                                            <input type="checkbox" id="checkbox"> 
                                            <label for="checkbox">Accept terms and service.</label>
                                        </div>
                                    </div>--> 
                                </form>
                            </div>
                            <div class="panel-footer">
                                Ya estas registrado? <a href="login.html">Iniciar Sesión</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>












@endsection