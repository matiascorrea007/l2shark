@extends('layouts.monster')
@section('content')
@include('alerts.errors')
@include('alerts.request')
@include('alerts.success')
@include('flash::message')





            

        
        


        <!--Star Registro-->
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="registrationform">

        <form action="{{ url('/register') }}" method="post" id="form" class="form-horizontal">
      <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <fieldset>
                    <legend>Registration Form <i class="fa fa-pencil pull-right"></i></legend>
                    
                    <div class="form-group">
                        <label for="inputEmail" class="col-lg-3 control-label">Login</label>
                        <div class="col-lg-9">
                            <input type="text" class="form-control" id="inputEmail" name="login" placeholder="Email">
                        </div>
                    </div>


                    <div class="form-group">
                        <label for="inputEmail" class="col-lg-3 control-label">Email</label>
                        <div class="col-lg-9">
                            <input type="text" class="form-control" id="inputEmail" name="email" placeholder="Email">
                        </div>
                    </div>


                    <div class="form-group">
                        <label for="inputPassword" class="col-lg-3 control-label">
                            Password</label>
                        <div class="col-lg-9">
                            <input type="password" class="form-control" id="inputPassword" name="password" placeholder="Password">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="inputPassword" class="col-lg-3 control-label">
                            Re-Password</label>
                        <div class="col-lg-9">
                            <input type="password" class="form-control" id="inputPassword" name="password_confirmation" placeholder="Reingrese el Password">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="inputPassword" class="col-lg-3 control-label">
                           Captcha</label>
                        <div class="col-lg-9">
                         {!! Captcha::img(); !!}
                         <br><br>
                            <input type="password" class="form-control" id="inputPassword" name="captcha" placeholder="Ingrese el Captcha">
                        </div>
                    </div>
                    
                    
                    
                    <div class="form-group ">
                        <div class="col-lg-10 col-lg-offset-6">
                            <button type="reset" class="btn btn-warning">
                                Cancel</button>
                            <button type="submit" class="btn btn-primary">
                                Submit</button>
                        </div>
                    </div>
                </fieldset>

                


            </form>
         </div>
         </div>
        </div>
     <!--END Registro-->











@endsection