<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> 
<html class="no-js"> <!--<![endif]-->
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>How To Make a Claim</title>
<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
<link rel="stylesheet" href="css/normalize.css">
<link type="text/css" rel="stylesheet" href="http://fast.fonts.net/cssapi/92dcff11-af42-4656-baa3-917a4318f8ed.css"/>
<link href="http://netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
<link rel="stylesheet" href="css/main.css">
<script src="js/vendor/modernizr-2.6.2.min.js"></script>
</head>
<body class="brand">
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
						<li><a href="how-it-works.php">How it works</a></li>
						<li><a href="what-it-covers.php">What it covers</a></li>
						<li><a href="apply.php">Apply</a></li>
						<li class="active"><a href="how-to-make-a-claim.php">How to make a claim</a></li>
						<li><a href="faqs-and-support.php">FAQs and support</a></li>
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
			<div class="col-4-5">
				<h1>Passport d&amp;o</h1>
				<h2>HOW TO MAKE A CLAIM</h2>
				<p>At Imalia we believe that making an insurance claim should be quick, easy and hassle-free. Making a claim on your Passport D&amp;O cover is no exception.</p>
				<p>When you become aware of a circumstance that may give rise to a claim, or you receive notification of a claim, you must immediately advise Imalia, who will then advise the Underwriter.</p>
				<h2>ALL IT TAKES IS A PHONE OR AN EMAIL TO LODGE YOUR CLAIM AND WE’LL TAKE IT FROM THERE.</h2>
				<button class="btn yellow call">CaLl IMALIA 1300 302 952</button><br>
				<a href="" class="btn yellow plane">Email Imalia</a>
				
			</div>
			<!-- col-4-5 -->
			<div class="col-1-5 support">
				<figure>
					<img src="img/support-img-1.jpg" width="656" height="329" alt="My professional life">
				</figure>
			</div>
		</div>
		<!-- container -->
	</section>
	<!-- section -->
	
	<section class="black txt-ctr">
		<div class="container">
			<h2>Let's talk more</h2>
			<form id="contact-form" class="clearfix" method="post" action="#">
				<div class="col-2 alpha">
					<input id="firstName" name="First Name" type="text" placeholder="First Name">
				</div>
				<!-- col 2 -->
				<div class="col-2 omega">
					<input id="lastName" name="Last Name" type="text" placeholder="Last Name">
				</div>
				<!-- col 2 -->
				<div class="col-2 alpha">
					<input id="email" name="Email" type="email" placeholder="Email">
				</div>
				<!-- col 2 -->
				<div class="col-2 omega">
					<input id="phone" name="Phone" type="text" placeholder="Contact Number">
				</div>
				<!-- col 2 -->
				<div class="col-1">
					<textarea id="message" name="Message" placeholder="Message"></textarea>
				</div>
				<!-- col 1 -->
				<div class="col-1"><input id="submit" name="Submit" class="submit btn blue" type="submit" value=""></div>
				<!-- col 1 -->
			</form>
		</div>
		<!-- container -->
	</section>
	<!-- section -->
	
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
