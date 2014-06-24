<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> 
<html class="no-js"> <!--<![endif]-->
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Imalia</title>
<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
<link rel="stylesheet" href="css/normalize.css">
<link type="text/css" rel="stylesheet" href="http://fast.fonts.net/cssapi/92dcff11-af42-4656-baa3-917a4318f8ed.css"/>
<link href="http://netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
<link rel="stylesheet" href="css/main.css">
<script src="js/vendor/modernizr-2.6.2.min.js"></script>
</head>
<body class="fullscreen bg rich">
<!--[if lt IE 7]>
<p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->

<div id="wrapper" class="home">
	<header>
		<div class="container clearfix">
			<a href="index.php"><img id="main-logo" src="img/logo-imalia.png" width="118" height="15" alt="Imalia"></a>
		</div>
	</header>
	<!-- header -->
	<section id="home">
		<div class="container clearfix full-w banner fullscreen txt-ctr">
			<div class="headline">
				<h1>Take A <strong>Deep Breath</strong></h1>
				<h2>We've got everything covered.</h2>
			</div>
		</div>
		<!-- container -->
	</section>
	<!-- home -->
	<?php
		include "_footer.php";
	?>
</div>
<!-- wrapper -->

<?php
	include "_main_menu.php";
?>

<script>
	bnr = ["img/bg-home.jpg", 1600, 1067, "center bottom"]
</script>
<script src="js/vendor/jquery-1.10.2.min.js"></script>
<script src="js/plugins.js"></script>
<script src="js/vendor/jquery-bgstretcher-3.1.2.min.js"></script>
<script src="js/vendor/respond.min.js"></script>
<script src="js/vendor/jquery.magnific-popup.min.js"></script>
<script src="js/main.js"></script>

<!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
<script>
/*(function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
e=o.createElement(i);r=o.getElementsByTagName(i)[0];
e.src='//www.google-analytics.com/analytics.js';
r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
ga('create','UA-XXXXX-X');ga('send','pageview');*/
</script>
</body>
</html>