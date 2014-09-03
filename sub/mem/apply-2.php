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
				<h1>Passport d&amp;o</h1>
				<h2>Your Quote</h2>
				
				<table class="unstyled" border="0" cellspacing="0" cellpadding="0">
					<tr>
						<td class="left">Quote Number</td>
						<td><strong>LAUDO0000000820/Q110</strong></td>
					</tr>
					<tr>
						<td class="left">First Name</td>
						<td><strong>Jenna</strong></td>
					</tr>
					<tr>
						<td class="left">Last Name</td>
						<td><strong>Niven</strong></td>
					</tr>
					<tr>
						<td class="left">Address</td>
						<td><strong>Test test VIC 6020 Australia</strong></td>
					</tr>
					<tr>
						<td class="left">Phone Number</td>
						<td><strong>633333</strong></td>
					</tr>
				</table>
				<br>
				<table class="yellow" border="0" cellspacing="0" cellpadding="0">
					<tr>
						<th colspan="2" class="blue">Quote</th>
					</tr>
					<tr>
						<td>Premium</td>
						<td align="right">$162.50</td>
					</tr>
					<tr>
						<td>Stamp Duty</td>
						<td align="right">$11.50</td>
					</tr>
					<tr>
						<td>Total GST</td>
						<td align="right">$16.25</td>
					</tr>
					<tr>
						<th>Total</th>
						<th align="right">$190.25</th>
					</tr>
				</table>
				<!-- quote -->
				
				<br><br>
				<h2>Credit Card Payment</h2>
				<p>To purchase your Passport insurance coverage, please enter your credit card details here and click purchase.</p>
				<form id="payment-form" class="clearfix stack" method="post" action="#">
					<div class="form-row clearfix">
						<label for="pay_name">Name On Card</label>
						<input id="pay_name" name="Name On Card" type="text" required>
					</div>
					<!-- form-row -->
					<div class="form-row clearfix cc">
						<label for="pay_ccno">Credit Card Number</label>
						<input id="pay_ccno" name="Credit Card Number" type="text" required>
						<img src="img/cards.png" width="129" height="37" alt="Visa, Mastercard, American Express">
					</div>
					<!-- form-row -->
					<div class="form-row clearfix expiry">
						<label for="pay_expiry_m">Expiry Date</label>
						<div class="inner-row clearfix">
							<select id="pay_expiry_m" class="styled month" name="Month">
							  <option value="january">January</option>
							  <option value="february">February</option>
							  <option value="march">March</option>
							  <option value="april">April</option>
							  <option value="may">May</option>
							  <option value="june">June</option>
							  <option value="july">July</option>
							  <option value="august">August</option>
							  <option value="september">September</option>
							  <option value="october">October</option>
							  <option value="november">November</option>
							  <option value="december">December</option>
							</select>
							<span class="divider"> / </span>
						</div>
						
						<select id="pay_expiry_y" class="styled year" name="Year">
						  <option value="2014">2014</option>
						  <option value="2015">2015</option>
						  <option value="2016">2016</option>
						  <option value="2017">2017</option>
						  <option value="2018">2018</option>
						  <option value="2019">2019</option>
						</select>
					</div>
					<!-- form-row -->
					<div class="form-row clearfix">
						<label for="pay_ccv">CCV</label>
						<input id="pay_ccv" name="CCV" type="text" required>
					</div>
					<!-- form-row -->
					<br><br>
					<table border="0" cellspacing="0" cellpadding="0">
						<tr>
							<th>Total</th>
							<th align="right">$190.25</th>
						</tr>
					</table>
					<br>
					<input type="submit" class="btn blue apply" value="Purchase">
					<a href="" class="btn plain">Go Back.</a>
				</form>
				<!-- payment form -->
			</div>
			<!-- col-4-5 -->
		</div>
		<!-- container -->
	</section>
	<!-- content -->
	
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
