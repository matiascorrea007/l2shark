<html class="no-js" lang="en"><!--<![endif]--><head>  	
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1"> 
	<meta name="description" content="fresh Gray Bootstrap 3.0 Responsive Theme ">
	<meta name="keywords" content="Template, Theme, web, html5, css3, Bootstrap,Bootstrap 3.0 Responsive Login">
	<meta name="author" content="Adsays">
    <link rel="shortcut icon" href="favicon.png"> 
    
	<title>SharkDesing Login Panel Lineage 2</title>



	<link href="{{ asset('layout/css/bootstrap.css') }}" rel="stylesheet" type="text/css" />
  	<link href="{{ asset('layout/css/l2login.css') }}" rel="stylesheet" type="text/css" />
   
   
  </head>
 <body>
    	
 
		@yield('content')
      
		
		<!-- End Login box -->
     	<footer class="">
     		<p id="footer-text"><small>Copyright © 2017 
     		<a href="http://sharkdesing.com">SharkDesing.com</a></small></p>
     	</footer>

		{!!Html::script('layout/js/jquery.min.js')!!}
		{!!Html::script('layout/js/bootstrap.js')!!} 
        {!!Html::script('layout/js/placeholder-shim.min.js')!!} 
        {!!Html::script('layout/js/l2login.js')!!} 
</body>
</html>