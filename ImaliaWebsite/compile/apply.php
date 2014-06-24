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
						<li><a href="how-it-works.php">How it works</a></li>
						<li><a href="what-it-covers.php">What it covers</a></li>
						<li class="active"><a href="./apply.php">Apply</a></li>
						<li><a href="how-to-make-a-claim.php">How to make a claim</a></li>
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
				<h2>To receive a quote, complete the form below.</h2>
				
				<form id="apply-form" class="clearfix stack" method="post" action="#">
					<div class="form-row clearfix">
						<label for="apply_firstName">First Name</label>
						<input id="apply_firstName" name="First Name" type="text" required>
					</div>
					<!-- form-row -->
					<div class="form-row clearfix">
						<label for="apply_lastName">Last Name</label>
						<input id="apply_lastName" name="Last Name" type="text" required>
					</div>
					<!-- form-row -->
					<div class="form-row clearfix">
						<label for="apply_street">Street</label>
						<input id="apply_street" name="Street" type="text" required>
					</div>
					<!-- form-row -->
					<div class="form-row clearfix">
						<label for="apply_suburb">Suburb</label>
						<input id="apply_suburb" name="Suburb" type="text" required>
					</div>
					<!-- form-row -->
					<div class="form-row clearfix">
						<label for="apply_state">State/Region</label>
						<select id="apply_state" class="styled" name="State/Region">
						  <option value="nsw">NSW</option>
						  <option value="vic">VIC</option>
						  <option value="qld">QLD</option>
						  <option value="sa">SA</option>
						</select>
					</div>
					<!-- form-row -->
					<div class="form-row clearfix">
						<label for="apply_country">Country</label>
						<select id="apply_country" class="styled" name="Country">
						  <option value="aus">Australia</option>
						  <option value="nz">New Zealand</option>
						</select>
					</div>
					<!-- form-row -->
					<div class="form-row clearfix">
						<label for="apply_postcode">Post Code</label>
						<input id="apply_postcode" name="Post Code" type="text" required>
					</div>
					<!-- form-row -->
					<div class="form-row clearfix">
						<label for="apply_phone">Phone Number</label>
						<input id="apply_phone" name="Phone Number" type="text" required>
					</div>
					<!-- form-row -->
					<div class="form-row clearfix">
						<label for="apply_email">Email</label>
						<input id="apply_email" name="Email" type="email" required>
					</div>
					<!-- form-row -->
					<br>
					<div class="form-row clearfix radioBtn">
						<p>
							Do you require coverage for any positions held on any Exchange Traded Entity? <a class="open-popup-link" href="#help">Help</a>
						</p>
						<div id="help" class="popup mfp-hide white-popup txt-ctr"><p>An Exchange Traded Entity is any entity whose securities are publicly traded (wholly or in part) on a stock exchange in any jurisdiction.</p></div>
						<label for="q1_yes">
							<input class="styled" type="radio" name="q1" id="q1_yes" value="yes" required>
							Yes
						</label>
						<label for="q1_no">
							<input class="styled" type="radio" name="q1" id="q1_no" value="no">
							No
						</label>
					</div>
					<div class="form-row clearfix">
						<p>You can add Exchange Traded Entities here. <button type="button" class="add black open-popup-link" data-mfp-src="#entities_add"></button></p>
					</div>
					<div class="form-row clearfix radioBtn">
						<p>If a similar insurance to that now proposed had been or were now in effect, would any claim which has been made or which is now pending against you for insurance have fallen within the scope of such insurance?</p>
						<label for="q2_yes">
							<input class="styled" type="radio" name="q2" id="q2_yes" value="yes" required>
							Yes
						</label>
						<label for="q2_no">
							<input class="styled" type="radio" name="q2" id="q2_no" value="no">
							No
						</label>
					</div>
					<div class="form-row clearfix radioBtn">
						<p>Have you ever been the subject of an investigation by a regulatory body?</p>
						<label for="q3_yes">
							<input class="styled" type="radio" name="q3" id="q3_yes" value="yes" required>
							Yes
						</label>
						<label for="q3_no">
							<input class="styled" type="radio" name="q3" id="q3_no" value="no">
							No
						</label>
					</div>
					<div class="form-row clearfix radioBtn">
						<p>Have you ever been subject to disciplinary action or been fined or penalised?</p>
						<label for="q4_yes">
							<input class="styled" type="radio" name="q4" id="q4_yes" value="yes" required>
							Yes
						</label>
						<label for="q4_no">
							<input class="styled" type="radio" name="q4" id="q4_no" value="no">
							No
						</label>
					</div>
					<div class="form-row clearfix radioBtn">
						<p>Have you ever been banned or prohibited from holding Company Directorships?</p>
						<label for="q5_yes">
							<input class="styled" type="radio" name="q5" id="q5_yes" value="yes" required>
							Yes
						</label>
						<label for="q5_no">
							<input class="styled" type="radio" name="q5" id="q5_no" value="no">
							No
						</label>
					</div>
					<div class="form-row clearfix radioBtn">
						<p>Are you aware, AFTER ENQUIRY, of any circumstances or incident which you have reason to suppose might afford grounds for any future claim such as would fall within the scope of the proposed insurance?</p>
						<label for="q6_yes">
							<input class="styled" type="radio" name="q6" id="q6_yes" value="yes" required>
							Yes
						</label>
						<label for="q6_no">
							<input class="styled" type="radio" name="q6" id="q6_no" value="no">
							No
						</label>
					</div>
					<div class="form-row clearfix">
						<input type="submit" class="blue btn apply" value="Get A Quote">
					</div>
					<div class="form-row clearfix checkBox">
						<br>
						<label for="terms" class="fine">
							<input class="styled" type="checkbox" name="terms" id="terms" value="agree" required>
							I declare that the above answers, statements, particulars and additional information are true to the very best of my knowledge and belief. After full enquiry, I also confirm that I have disclosed all information and material facts that may alter the Underwriters’ view of the risk, or affect their assessment of the exposures they are covering under the Policy. I understand that all answers, statements, particulars and additional information supplied with this declaration will become part of and form the basis of the Policy.
						</label>
					</div>
				</form>
				
				<div id="entities_add" class="popup mfp-hide white-popup">
					<h3>Exchange Traded Entities</h3>
					<h2>Please complete this form so the details of the Exchange Traded Entities on whose board(s) you serve, can be submitted to our Underwriters for consideration. 
Don’t forget to press save.</h2>
					<form id="entities-form" class="clearfix stack" method="post" action="#">
						<div class="form-row clearfix">
							<label for="ent_company">Company</label>
							<input id="ent_company" name="Company" type="text" required>
						</div>
						<!-- form-row -->
						<div class="form-row clearfix">
							<label for="ent_country">Country Of Incorporation</label>
							<input id="ent_country" name="Country Of Incorporation" type="text" required>
						</div>
						<!-- form-row -->
						<div class="form-row clearfix">
							<label for="ent_date" class="date-pick">Date Established</label>
							<input id="ent_date" name="Date Established" type="text" required>
						</div>
						<!-- form-row -->
						<div class="form-row clearfix">
							<label for="ent_sector">Business Sector</label>
							<input id="ent_sector" name="Business Sector" type="text" required>
						</div>
						<!-- form-row -->
						<div class="form-row clearfix radioBtn">
							<br>
							<p>Does the Company currently buy D&O Insurance?</p>
							<label for="q_ins_yes">
								<input class="styled" type="radio" name="q_ins" id="q_ins_yes" value="yes" required>
								Yes
							</label>
							<label for="q_ins_no">
								<input class="styled" type="radio" name="q_ins" id="q_ins_no" value="no">
								No
							</label>
						</div>
						<!-- form-row -->
						<div class="form-row clearfix">
							<label for="ent_insurer">Who is the insurer?</label>
							<input id="ent_insurer" name="Insurer" type="text" required>
						</div>
						<!-- form-row -->
						<div class="form-row clearfix">
							<label for="ent_limit">What is the limit of indemnity?</label>
							<input id="ent_limit" name="Limit" type="text" required>
						</div>
						<!-- form-row -->
						<div class="form-row clearfix">
							<label for="ent_polnum">What is the relevant policy number?</label>
							<input id="ent_polnum" name="Policy Number" type="text" required>
						</div>
						<!-- form-row -->
						<div class="form-row">
							<input type="submit" class="btn blue apply" value="Save">
						</div>
						<!-- form-row -->
					</form>
					<!-- entities form -->
				</div>
				<!-- popup -->
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
