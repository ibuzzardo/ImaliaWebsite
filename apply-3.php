<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> 
<html class="no-js"> <!--<![endif]-->
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Apply</title>
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

<div id="wrapper">
	<header class="blue mast">
		<div class="container clearfix">
			<a href="index.php"><img id="main-logo" src="img/logo-imalia.png" width="118" height="15" alt="Imalia"></a>
		</div>
	</header>
	<!-- header -->
	<section id="masthead" class="black">
		<div class="container clearfix">
			<div class="col-1">
				<button id="subBtn"></button>
				<nav id="sub-nav">
					<ul>
						<li><a href="./how-it-works.php">How it works</a></li>
						<li><a href="./what-it-covers.php">What it covers</a></li>
						<li class="active"><a href="./apply.php">Apply</a></li>
						<li><a href="./how-to-make-a-claim.php">How to make a claim</a></li>
						<li><a href="./faqs-and-support.php">FAQs and support</a></li>
					</ul>
				</nav>
			</div>
			<!-- col-1 -->
		</div>
		<!-- container -->
	</section>
	<!-- masthead -->
	
	<section class="content">
		<div class="container clearfix">
			<div class="col-3-5">
				<h1>Thank you!</h1>
				<h2>Your credit card has been processed successfully. </h2>
				<br>
				<table class="unstyled" border="0" cellspacing="0" cellpadding="0">
					<tr>
						<td class="left">Schedule Number</td>
						<td><strong>LAUDO0000000820/Q110</strong></td>
					</tr>
				</table>
				<br>
				<h2>Download your schedule here</h2>
				<a href="" class="btn blue dl">Download</a>
				<br><br><br>
				<h2>Download your invoice here</h2>
				<a href="" class="btn blue invoice">Download</a>
				
			</div>
			<!-- col-4-5 -->
		</div>
		<!-- container -->
	</section>
	<!-- content -->
	
	<section class="yellow txt-ctr">
		<div class="container">
			<h2>Want to keep looking?</h2>
			<p>Imalia offers a range of financial products and<br> services to help make your life easier.</p>
			<a href="./index.php" class="txt-link">Find Out More</a>
		</div>
	</section>
	
		</div>
		<!-- helen -->
	</section>
	<!-- section -->
	
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
