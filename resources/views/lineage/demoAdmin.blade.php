@extends('layouts.l2login')
@section('content')
@include('alerts.errors')
@include('alerts.request')
@include('alerts.success')
@include('flash::message')



<body class="fade-in">


    	<!-- start Login box -->
    	<div class="container" id="login-block">
    		<div class="row">
			    <div class="col-sm-6 col-md-4 col-sm-offset-3 col-md-offset-4">
			    	 
			       <div class="login-box clearfix animated flipInY">
			       		<div class="page-icon animated ">
			       			<img src="layout/img/lineage2.png" height="200" width="200" alt="Key icon">
			       		</div>
			        	
			        	<hr>
			        	<div class="login-form">
			        		<!-- Start Error box -->
			        		<div class="alert alert-danger hide">
								  <button type="button" class="close" data-dismiss="alert"> ×</button>
								  <h4>Error!</h4>
								   Your Error Message goes here
							</div> <!-- End Error box -->


			        	<form id='form' action="{{ url('/login') }}" method="post">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">
						   		 <input type="text" placeholder="Email" class="input-field" required="" name="email"> 
						   		 <input type="password" name="password" placeholder="Password" class="input-field" required=""> 
						   		 <button type="submit" class="btn btn-login">Login</button> 
							</form>	


							<div class="login-links"> 
					           
					            <br><br><br>

					            <p><strong>Email: </strong>Admin@sharkdesing.com</p>
					            <p><strong>password: </strong>123456</p>
							</div>      		
			        	</div> 			        	
			       </div>

			        
			    </div>
			</div>
    	</div>
</body>




@endsection