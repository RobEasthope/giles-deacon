<!DOCTYPE html>
<html>

<head>
	<!-- Meta data -->
	<meta charset="utf-8" />

	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- Page title -->
	<title>Giles Deacon</title>

	<!-- Favicon call -->
	<link rel="shortcut icon" href="assets/img/site-assets/giles-favicon.png" />

	<!-- CSS call -->
	<link rel="stylesheet" href="assets/css/app.min.css" />

	<!-- Modernizr call -->
	<!-- <script src="assets/_lib/bower_components/modernizr/modernizr.js"></script> -->

</head>

<body>
	<!-- Holding page proper -->
	<div class="holding-page">
		<div class="holding-page-box">
			<div class="holding-page-content">
				<!-- Branding -->
				<header class="small-12 columns branding">
					<img class="giles-brand" src="assets/img/site-assets/giles-logo-white.svg">
					<p class="giles-holding-description">New site launching soon.</p> 
					<p class="giles-holding-description">Find out more about news, previews and exclusive content from the world of Giles by entering your details below.</p>
				</header>

				<!-- Sign up form -->
				<form
					id="holding-signup"
					name="holding_signup"
					data-validate="parsley"
					novalidate
					class="holding-signup"
				>
					<!-- Name input -->
					<div class="row">
						<div class="small-12 columns">
							<input
								id="name"
								name="name"
									type="text"
									placeholder="Name"
									data-required="true"
									data-required-message="Can we get a name?"
									data-trigger="change"
									data-maxlength="88"
									data-maxlength-message="Thats a very, very long name! Can we get a shorter version?"
								/>
					  </div>
				  </div>
				  <!-- Email input -->
				  <div class="row">
						<div class="small-12 columns">
							<input
								id="email"
								name="email"
								type="text"
								placeholder="Email address"
								data-required="true"
								data-required-message="Can we get an email address?"
								data-trigger="change"
								data-type="email"
								data-type-email-message="Your email address doesn't look quite right. Can you check it again?"
								data-maxlength="88"
								data-maxlength-message="Your email address seems a little long? Want to try a different one"
							/>
					  </div>
				  </div>
				  <!-- Submit button -->
  			  <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">

				  <div class="row">
						<div class="small-12 columns">
						  <button type="submit" class="submit-holding-form">Sign up</button>
						</div>
				  </div>
				</form>

				<!-- Social networks link section -->
				<div class="row">
					<div class="small-12 columns social-links">
						<ul>
						  <li><a href="https://twitter.com/GilesStudio" target="_blank"><i class="icon-twitter-circle" title="Giles Studio on Twitter"></i></a></li>
						  <li><a href="https://www.facebook.com/pages/Giles-Deacon/261787757281205" target="_blank"><i class="icon-facebook-circle" title="Giles on Facebook"></i></a></li>
						  <li><a href="http://instagram.com/guineapiggiles" target="_blank"><i class="icon-instagram-circle" title="Giles on Instagram"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>  
	<footer>
		<!-- JS call -->
		<script src="assets/js/app.min.js"></script>

		<!-- Google analytics tracking code -->
		<script type="text/javascript">
		  var _gaq = _gaq || [];
		  _gaq.push(['_setAccount', 'UA-11098815-13']);
		  _gaq.push(['_trackPageview']);
		  (function() {
		    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		  })();
		</script>
		
		<!-- Foundation JS init -->
		<script>$(document).foundation();</script>

		<!-- Google analytics tracking code -->
		<script type="text/javascript">
		  var _gaq = _gaq || [];
		  _gaq.push(['_setAccount', 'UA-11098815-13']);
		  _gaq.push(['_trackPageview']);
		  (function() {
		    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		  })();
		</script>
		
	</footer>
</body>
</html>