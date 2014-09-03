<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> 
<html class="no-js"> <!--<![endif]-->
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>My Professional Life</title>
<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
<link rel="stylesheet" href="css/normalize.css">
<link type="text/css" rel="stylesheet" href="http://fast.fonts.net/cssapi/92dcff11-af42-4656-baa3-917a4318f8ed.css"/>
<link href="http://netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
<link rel="stylesheet" href="css/main.css">
<script src="js/vendor/modernizr-2.6.2.min.js"></script>
</head>
<body>
<!--[if lt IE 7]>
<p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->

<div id="wrapper" class="overview">
	<header>
		<div class="container clearfix">
			<a href="index.php"><img id="main-logo" src="img/logo-imalia.png" width="118" height="15" alt="Imalia"></a>
		</div>
	</header>
	<!-- header -->
	<section class="bg">
		<div class="container clearfix full-w banner sml">
			<div class="headline table">
				<div class="inner table-cell">
					<h1>In Australia, women<br> outnumber men <strong>in professional<br> positions</strong></h1>
				</div>
				<!-- headline inner -->
			</div>
			<!-- headline -->
		</div>
		<!-- container -->
	</section>
	<!-- banner -->
	
	<section>
		<div class="container clearfix">
			<div class="col-1">
				<h2>My Professional Life</h2>
				<p>Imalia understands your career and your professional reputation are an important part of<br> who you are. To help support and protect your professional life we offer a suite of products<br> designed especially for women, from Directors and Officers’ Insurance to Cyber Insurance<br> and Professional Indemnity cover.</p>
			</div>
			<!-- col-1 -->
		</div>
		<!-- container -->
	</section>
	<!-- section -->
	
	<section class="blue">
		<div class="container clearfix">
			<div class="col-1">
				<h2 class="stack">Insurance</h2>
				<h3>passport d&amp;o</h3>
				<p>Keeping your professional life covered.</p>
				
				<ul class="item-links">
					<li class="view"><a href="how-it-works.php"><span>view</span></a></li>
					<li class="apply"><a href="apply.php"><span>apply</span></a></li>
					<li class="share"><a href="#share" class="open-popup-link"><span>share</span></a></li>
				</ul>
				<!-- item links -->
			</div>
			<!-- col-1 -->
		</div>
		<!-- container -->
	</section>
	<!-- section -->
	
	<div id="share" class="mfp-hide white-popup popup txt-ctr">
	</div>
	
	<?php
		include "_contact_form.php";
	?>
	
	<?php
		include "_footer.php";
	?>
</div>
<!-- wrapper -->

<?php
	include "_main_menu.php";
?>

<script>
	bnr = ["img/bg-1.jpg", 1600, 636, "center top"]
</script>

<?php
	include "_core_js.php";
?>

</body>
</html>
