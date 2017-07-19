
<!DOCTYPE html>
<html lang="en">

<head>
	<!-- 1.0 meta -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
	<meta name="description" content="Animated 404 Error Page">
	<meta name="author" content="lifeinsys">
	<meta name="keywords" content="404, css3, html5, animated, animated bubble, template">
	<!-- 2.0 title -->
	<title>Error 404 - SharkEstudio.com</title>
	<!-- 3.0 CSS IMPORT -->
	<!-- CSS IMPORT FOR PLUGIN -->
	<link href="404\bootstrap\css\bootstrap.min.css" rel="stylesheet">
	<link href="404\js\wow\css\libs\animate.css" rel="stylesheet">
	<link href="404\js\wordsrotator\jquery.wordrotator.min.css" rel="stylesheet">
	<!-- CSS IMPORT FOR FONT -->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700|Oswald:400,300" rel="stylesheet">
	<link href='404\fonts\font-awesome\css\font-awesome.min.css' rel='stylesheet' type='text/css'>
	<!-- CSS IMPORT FOR MAIN STYLE -->
	<link href="404\css\style.css" rel="stylesheet">
	<!-- support HTML5 elements and media queries for IE9 -->
	<!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
	<!-- 4.0 FAVICON -->
	<link rel="shortcut icon" href="404\img\favicon.png">
</head>

<body>

	<!-- 6.0 wrapper -->
	<div class="wrapper" id="wrapper-large">
                
		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-12 text-center">
					<!-- 6.1 SPIRIT BUBBLES CANVAS -->
					<canvas class="spirit-bubbles" id="canvas"></canvas>
					<!-- end SPIRIT BUBBLES CANVAS -->

					<!-- 6.2 HOME & RETURN BUTTONS -->
					<ul class="return-btn center-block">
						<li>
							<a href="{!! URL::to('/') !!}" class="wow slideInLeft">Home <span class="icons-container"><span class="home-icon"></span></span></a>
						</li>
						
					</ul>
					<!-- end HOME & RETURN BUTTONS -->

					<!-- 6.3 ERROR CODE -->
					<h1 class="wow flipInY" data-wow-delay="1s">404</h1>
					<!-- ERROR TEXT, Change error text according to your requirement -->
					<h2 id="sub-title"></h2>
					<!-- ROTATING TEXT -->
					<!-- END ERROR CODE -->

				

					<!-- 6.5 social-icons -->
					<ul class="social-icons center-block">
						<li>
							<a class="hvr-icon-wobble-vertical wow slideInLeft" data-wow-delay="3.5s" href="#"><i class="fa fa-fw fa-google-plus"></i></a>
						</li>
						<li>
							<a class="hvr-icon-wobble-vertical wow slideInLeft" data-wow-delay="2.5s" href="https://www.facebook.com/SharkEstudio-1995441010742071/?ref=br_rs"><i class="fa fa-fw fa-facebook"></i></a>
						</li>
						<li>
							<a class="hvr-icon-wobble-vertical wow fadeIn" data-wow-delay="2s" href="#"><i class="fa fa-fw fa-youtube"></i></a>
						</li>
						<li>
							<a class="hvr-icon-wobble-vertical wow slideInRight" data-wow-delay="2.5s" href="#"><i class="fa fa-fw fa-twitter"></i></a>
						</li>
						<li>
							<a class="hvr-icon-wobble-vertical wow slideInRight" data-wow-delay="3.5s" href="#"><i class="fa fa-fw fa-instagram"></i></a>
						</li>
					</ul>
					<!-- end social-icons -->

				</div>
			</div>
		</div>
	</div>
	<!-- end wrapper -->

	<!-- 7.0 javascript import -->
	<!-- jquery -->
	<script src="404\js\jquery-1.12.4.min.js"></script>
	<!-- bootstrap -->
	<script src="404\bootstrap\js\bootstrap.min.js"></script>
	<!-- wow -->
	<script src="404\js\wow\dist\wow.min.js"></script>
	<!-- wordsrotator -->
	<script src="404\js\wordsrotator\jquery.wordrotator.min.js"></script>
	<!-- main js -->
	<script src="404\js\main.js"></script>
</body>

</html>

