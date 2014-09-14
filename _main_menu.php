<div id="main-nav-con" class="black">
	<div class="inner">
		<button id="menuBtn" class="black" type="button"></button>
		<div class="panel right blue">
			<div class="container">
				<h2>Subscribe to our news</h2>
				<form id="news-form" class="clearfix stack" method="post" action="/php/process_subscribe.php">
					<div class="form-row clearfix">
						<input id="news_fullName" name="FullName" placeholder="Full Name" type="text" required>
					</div>
					<!-- form-row -->
					<div class="form-row clearfix">
						<input id="news_email" name="Email" placeholder="Email" type="email" required>
					</div>
					<!-- form-row -->
					<div class="form-row clearfix">
						<input type="submit" value="">
					</div>
				</form>
				<!-- news form -->
                <div id="success" class="top-gap">
                  <p>Thank you for subscribing to our newsletter.</p>
                </div>
			</div>
			<!-- container -->
		</div>
		<div class="panel left">
			<div class="container">
				<nav id="main-nav" class="clearfix">
					<div class="col-2 alpha">
						<ul>
							<li class="parent"><a href="./our-story.php">Our Story</a></li>
							<li class="parent">
								<a href="./my-professional-life.php">My life</a>
								<ul>
									<li><a href="./my-professional-life.php">My professional life</a></li>
								</ul>
							</li>
							<li class="parent">
								<a href="./how-it-works.php">Products</a>
								<ul>
									<li><a href="./how-it-works.php">Passport D&amp;O</a></li>
								</ul>
							</li>
							<li class="parent social-links">
								Connect with us
								<ul>
									<li><a href="https://twitter.com/myimalia" target="_blank"><i class="fa fa-twitter"></i></a></li>
									<li><a href="https://www.facebook.com/pages/Imalia/251329788372378" target="_blank"><i class="fa fa-facebook-square"></i></a></li>
									<li><a href="https://www.linkedin.com/company/imalia?trk=company_logo&_mSplash=1" target="_blank"><i class="fa fa-linkedin-square"></i></a></li>
								</ul>
							</li>
						</ul>
						<!-- ul -->
					</div>
					<div class="col-2 omega">
						<ul>
							<li class="parent">
								<a href="./faqs.php">Support</a>
								<ul>
									<li><a href="./faqs.php">FAQS</a></li>
								</ul>
							</li>
							<li class="parent no-kids"><a href="index.php">Home</a></li>
							<li class="parent no-kids"><a href="./contact.php">Contact</a></li>
						</ul>
						<!-- ul -->
					</div>
				</nav>
			</div>
			<!-- container -->
		</div>
		<!-- panel left -->
	</div>
</div>
<!-- main navigation menu -->