<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Blue Marble Brands | Contact Us</title>
    <link rel="stylesheet" href="css/foundation.min.css" />
		<link rel="stylesheet" href="css/override.css" />
    <script src="js/vendor/modernizr.js"></script>
		<!--[if lt IE 9]>
		  <script src="//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.6.2/html5shiv.js"></script>
		  <script src="//s3.amazonaws.com/nwapi/nwmatcher/nwmatcher-1.2.5-min.js"></script>
		  <script src="//html5base.googlecode.com/svn-history/r38/trunk/js/selectivizr-1.0.3b.js"></script>
		  <script src="//cdnjs.cloudflare.com/ajax/libs/respond.js/1.1.0/respond.min.js"></script>
		<![endif]-->
  </head>
  <body>
    
	<!-- Navigation -->
	<div class="fixed topbar">
		<nav class="top-bar row" data-topbar>
		  <ul class="title-area">
		    <!-- Title Area -->
		    <li class="name">
		    	<h1>
		    		<a href="/">
						Blue Marble Brands
					</a>
				</h1>
			</li>
		    <li class="toggle-topbar menu-icon"><a href="#"><span>menu</span></a></li>
		  </ul>

		  <section class="nav">
				<ul>
					<li class="divider"></li>
				</ul>
		    <ul class="slideshow-nav">
					<li class="company"><a href="our-company.html" title="Our Company">company</a></li>
					<li class="difference"><a href="our-difference.html" title="Our Difference">difference</a></li>
					<li class="products"><a href="our-products.html" title="Our Products">products</a></li>
					<li class="heart"><a href="our-heart.html" title="Our Heart">heart</a></li>
					<li class="brand"><a href="our-brands.html" title="Our Brands">brand</a></li>
		    </ul>
		    <ul class="extra">
					<li class="divider"></li>
					<li class="arrow-top"><a href="#top" title="To Top">back to top</a></li>
		      <li class="divider"></li>
					<li class="clients"><a href="our-brands.html" title="Our Brands">brands</a></li>
		      <li class="divider"></li>
		      <li class="contact"><a class="active" href="contact-us.php" title="Contact Us">contact</a></li>
		      <li class="divider"></li>
					<!--<li class="search"><a href="#">search</a></li>
					<li class="divider"></li>-->
		    </ul>
		  </section>
		</nav>
	</div>
	<!-- End Top Bar -->
	<a class="anchor-top" name="top"></a>
	<div class="contain-to-grid contact-us">
		<img class="small-centered" src="img/banner_contact.jpg">
	</div>
	<div class="row">
		<div class="large-12 columns">
			<h3>Contact Us</h3>
			<form id="emailForm" method="POST" data-abide>
				<?php
				if(isset($_POST["emailForm"])) {
					include_once('contact_bmb.php');
					echo email_action("contact@bluemarblebrands.com", "Blue Marble Brands - web request", "address,address-2,city,state,product-name,upc,lot-date,oldenough,sign-up");
				}
				?>
			  <div class="row">
	        <div class="large-3 columns">
	          <label for="inquiry" class="left inline">I&rsquo;m a</label>
	        </div>
	        <div class="large-9 columns">
	          <select name="inquiry" id="inquiry" placeholder="Choose which best describes you" class="textbox">
							<option selected="selected" value="C">Consumer</option>
							<option value="R">Retailer</option>
							<option value="D">Distributor</option>
							<option value="O">Other</option>
						</select>
	        </div>
			  </div>
			  <div class="row">
	        <div class="large-3 columns">
	          <label for="regarding" class="left inline">Question/Comment regarding <span class="emphasize">*</span></label>
	        </div>
	        <div class="large-9 columns">
						<select name="regarding" id="regarding" required placeholder="Choose a subject that best describes what this is regarding">
							<option selected="selected" value="">Please choose one</option>
							<option value="Allergen Info (specify below)">Allergen Info (specify below)</option>
							<option value="BPA">BPA</option>
							<option value="Certification Info (specify below)">Certification Info (specify below)</option>
							<option value="Company Information">Company Information</option>
							<option value="Country of Origin">Country of Origin</option>
							<option value="Coupons">Coupons</option>
							<option value="Donations">Donation</option>
							<option value="Expiration Date">Expiration Date</option>
							<option value="Product or Store Locator">Find a Product or Store</option>
							<option value="International">International (Outside U.S.)</option>
							<option value="Marketing">Marketing</option>
							<option value="Nutritional">Nutritional Information</option>
							<option value="Online Ordering">On-line Ordering</option>
							<option value="Positive Feedback">Positive Feedback</option>
							<option value="Product Information">Product Information</option>
							<option value="Quality">Quality</option>
							<option value="Recycling">Recycling</option>
							<option value="Sales">Sales</option>
							<option value="Recipes">Share a recipe</option>
							<option value="Suggestions">Suggestions</option>
							<option value="Taste/Flavor">Taste/Flavor</option>
							<option value="Website">Website</option>
							<option value="Other (specify below)">Other (specify below)</option>
						</select>
	        </div>
			  </div>
			  <div class="row">
	        <div class="large-3 columns">
	          <label for="first" class="left inline">First Name <span class="emphasize">*</span></label>
	        </div>
	        <div class="large-9 columns">
						<input name="first" type="text" required id="first" placeholder="First Name">
						<small class="error">Please enter this required field.</small>
	        </div>
			  </div>
				<div class="row">
	        <div class="large-3 columns">
	          <label for="last" class="left inline">Last Name <span class="emphasize">*</span></label>
	        </div>
	        <div class="large-9 columns">
						<input name="last" type="text" required id="last" placeholder="Last Name">
						<small class="error">Please enter this required field.</small>
	        </div>
			  </div>
				<div class="row">
	        <div class="large-3 columns">
	          <label for="email" class="left inline">Email Address <span class="emphasize">*</span></label>
	        </div>
	        <div class="large-9 columns">
						<input name="email" type="email" required id="email" placeholder="email@domain.com">
						<small class="error">Please enter a properly formatted email address example email@domain.com.</small>
	        </div>
			  </div>
				<div class="row">
	        <div class="large-3 columns">
	          <label for="phone" class="left inline">Phone <span class="emphasize">*</span></label>
	        </div>
	        <div class="large-9 columns">
						<input name="phone" type="text" required id="phone" placeholder="234-567-8910" pattern="^\d{3}-\d{3}-\d{4}$">
						<small class="error">Please enter a properly formatted telephone number XXX-XXX-XXXX.</small>
	        </div>
			  </div>
				<div class="row">
	        <div class="large-3 columns">
	          <label for="address" class="left inline">Address 1</label>
	        </div>
	        <div class="large-9 columns">
						<input name="address" type="text" id="address" placeholder="Enter your Address">
	        </div>
			  </div>
				<div class="row">
	        <div class="large-3 columns">
	          <label for="address-2" class="left inline">Address 2</label>
	        </div>
	        <div class="large-9 columns">
						<input name="address-2" type="text" id="address-2" placeholder="Enter any Extra Address Information">
	        </div>
			  </div>
				<div class="row">
	        <div class="large-3 columns">
	          <label for="city" class="left inline">City</label>
	        </div>
	        <div class="large-9 columns">
						<input name="city" type="text" id="city" placeholder="Enter your City">
	        </div>
			  </div>
				<div class="row">
	        <div class="large-3 columns">
	          <label for="state" class="left inline">State</label>
	        </div>
	        <div class="large-9 columns">
						<input name="state" type="text" id="state" placeholder="Enter your State">
	        </div>
			  </div>
				<div class="row">
	        <div class="large-3 columns">
	          <label for="zip" class="left inline">Zip <span class="emphasize">*</span></label>
	        </div>
	        <div class="large-9 columns">
						<input name="zip" type="text" id="zip" required placeholder="Enter your Zip Code" pattern="alpha_numeric">
						<small class="error">Please enter a properly formatted zip code.</small>
	        </div>
			  </div>
				<div class="row">
	        <div class="large-3 columns">
	          <label for="product" class="left inline">Product Name</label>
	        </div>
	        <div class="large-9 columns">
						<input name="product" type="text" id="product" placeholder="Enter your Product Name">
	        </div>
			  </div>
				<div class="row">
	        <div class="large-3 columns">
	          <label for="upc" class="left inline">UPC</label>
	        </div>
	        <div class="large-9 columns">
						<input name="upc" type="text" id="upc" placeholder="Enter your UPC">
	        </div>
			  </div>
				<div class="row">
	        <div class="large-3 columns">
	          <label for="lot-date" class="left inline">Best By Date/Lot</label>
	        </div>
	        <div class="large-9 columns">
						<input name="lot-date" type="text" id="lot-date" placeholder="Best By Date/Lot">
	        </div>
			  </div>
				<div class="row">
					<div class="large-12 columns">
						<img id="upc-image" src="img/UPC.jpg" alt="Best By Date/Lot example">
					</div>
				</div>
				<div class="row">
	        <div class="large-3 columns">
	          <label for="message" class="left inline">Message <span class="emphasize">*</span></label>
	        </div>
	        <div class="large-9 columns">
						<textarea name="message" rows="6" cols="20" required id="message" placeholder="Message"></textarea>
						<small class="error">Please enter this required field.</small>
	        </div>
			  </div>
				<div class="row">
	        <div class="large-12 columns">
						<input id="sign-up" type="checkbox" name="sign-up">
	          <label for="sign-up">I would like to receive periodic updates and promotions, such as coupons, newsletters, etc.</label>
	        </div>
			  </div>
				<div class="row">
	        <div class="large-12 columns">
						<input id="oldenough" type="checkbox" name="oldenough">
	          <label for="oldenough">By checking this box I certify I am at least 13 years of age and accept the terms and conditions for this site.</label>
	        </div>
			  </div>
				<input type="submit" class="button" name="emailForm" value="Submit">
			</form>
		</div>
	</div>

	<!-- Messages -->
	<div class="contain-to-grid message">
		<div class="row">
			<div class="large-12 columns small-centered">
		  	<p></p>
			</div>
		</div>
	</div>

	<!-- Footer -->
	<div class="contain-to-grid footer">
		<footer class="row">

	    <div class="large-5 columns">
	        <p>© Copyright 2014.</p>
	    </div>
		
	    <div class="large-2 columns">
	       <a class="totop" href="#top">TOP</a>
	    </div>

	    <div class="large-5 columns">
	        <ul class="inline-list right">
	          <li><a href="privacy-terms.html">Terms &amp; Privacy</a></li>
	        </ul>
	    </div>

		</footer>
	</div>
    <script src="js/vendor/jquery.js"></script>
    <script src="js/foundation.min.js"></script>
    <script>
		$(document).foundation();
		$(document).ready(function() {
		});
    </script>
		<?php
		if(isset($_POST["emailForm"])) {
		?>
		<script type="text/javascript">
		$(document).ready(function(){
			$('#contact').modal('show');
		});
		</script>
		<?php
		}
		?>
		<script src="js/vendor/rem.min.js" type="text/javascript"></script>
		<script type="text/javascript">
		var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
		document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
		</script>
		<script type="text/javascript">
		var pageTracker = _gat._getTracker("UA-3584553-8");
		pageTracker._initData();
		pageTracker._trackPageview();
		</script>
  </body>
</html>
