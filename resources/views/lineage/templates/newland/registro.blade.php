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