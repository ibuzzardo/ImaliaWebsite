<section class="black contact-form txt-ctr">
	<div class="container clearfix">
		<h2>Let's talk more</h2>
		<form id="contact-form" class="clearfix" method="post" action="/php/process_mail.php">
			<div class="col-2 alpha">
				<input id="firstName" name="FirstName" type="text" placeholder="First Name" required>
			</div>
			<!-- col 2 -->
			<div class="col-2 omega">
				<input id="lastName" name="LastName" type="text" placeholder="Last Name" required>
			</div>
			<!-- col 2 -->
			<div class="col-2 alpha">
				<input id="email" name="Email" type="email" placeholder="Email" required>
			</div>
			<!-- col 2 -->
			<div class="col-2 omega">
				<input id="phone" name="Phone" type="text" placeholder="Contact Number">
			</div>
			<!-- col 2 -->
			<div class="col-1">
				<textarea id="message" name="Message" placeholder="Message" required></textarea>
			</div>
			<!-- col 1 -->
			<div class="col-1"><input id="submit" name="Submit" class="submit btn blue" type="submit" value=""></div>
			<!-- col 1 -->
		</form>
        <div id="success" class="top-gap">
          <p>Thank you. Your form has been submitted.</p>
        </div>
		
		<div class="contact-info col-1">
			<h2>Get in touch</h2>
			<p>Imalia Pty Ltd, Suite 3, Level 21, Gold Fields House<br>
1 Alfred Street, Sydney NSW 2000<br class="mobile-show">
T: 1300 302 952</p>
		</div>
	</div>
	<!-- container -->
</section>
<!-- contact form -->