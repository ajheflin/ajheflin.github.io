<!DOCTYPE html>
<html>
<head>
	<title>Employment&sup2; - Contact Us</title>
	<!-- import files -->
  	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1, minimum-scale=1">
	<link rel="stylesheet" href="css/styles.css" />
	<link rel="stylesheet" href="css/navbar.css" />
	<link rel="stylesheet" href="css/hamburgers.css" />
	<link rel="stylesheet" href="css/ionicons.css">
	<script src="js/jquery.js"></script>
	<script src="js/modernizr.js" type="text/javascript"></script>
	<style media="screen">
	/*page only css*/
		div.content div.inner {
			margin: 0 auto;
			width: 50%;
		}
		input[type='text'], input[type='email'], textarea {
			width: 94%;
			font-size: 1em;
			font-family: "Lato";
			background: #BF6056;
			-webkit-appearance: none;
			-moz-appearance: none;
			appearance: none;
			outline: none;
			border: none;
			margin: 20px 0px;
			padding: 2%;
			padding-left: 4%;
			color: white;
			-webkit-transition: .3s all;
			-o-transition: .3s all;
			transition: .3s all;
			border-radius: 0;
		}
		input[type='text']::placeholder , input[type='email']::placeholder, textarea::placeholder {
			color: rgba(255,255,255,0.6);
			-webkit-transition: .3s all;
			-o-transition: .3s all;
			transition: .3s all;
		}
		input[type='text']:active, input[type='text']:focus, input[type='email']:active, input[type='email']:focus, textarea:focus, textarea:active {
			padding-left: 6%;
			width: 92%;
		}
		input[type='text']:hover::placeholder, input[type='text']:focus::placeholder, input[type='text']:active::placeholder, input[type='email']:hover::placeholder, input[type='email']:focus::placeholder, input[type='email']:active::placeholder, textarea:hover::placeholder, textarea:active::placeholder, textarea:focus::placeholder {
			color: rgba(255,255,255,1);
		}
		textarea {
			resize: none;
			-webkit-appearance: none;
			-moz-appearance: none;
			appearance: none;
		}
		input[type='submit'] {
			width: 15%;
			padding: 1.5%;
			font-family: "Lato";
			background: none;
			border: 2px solid #BF6056;
			-webkit-appearance: none;
			-moz-appearance: none;
			appearance: none;
			outline: none;
			border-radius: 0;
			color: #BF6056;
			font-size: 1em;
			cursor: pointer;
			-webkit-transition: .3s all;
			-o-transition: .3s all;
			transition: .3s all;
			text-align: left;
			font-weight: bold;
		}
		span.submit {
			position: relative;
		}
		span.submit i {
			color: #BF6056;
			font-size: 1em;
			position: absolute;
			right: 10%;
			top: 50%;
			-webkit-transform: translateY(-50%);
			-ms-transform: translateY(-50%);
			transform: translateY(-50%);
			-webkit-transition: .3s all;
			-o-transition: .3s all;
			transition: .3s all;
		}
		span.submit:hover i {
			right: 7.5%;
		}
		.disabled {
			cursor: default !important;
			background: grey !important;
			color: black !important;
			border: 2px solid grey !important;
		}
		span.submit input.disabled+i {
			color: black !important;
		}
		span.submit:hover input.disabled+i {
			right: 10%;
		}
		.submitted {
			text-align: center;
			color: #F4B39C;
			font-weight: bold;
			font-family: 'Lato';
		}
		@media(max-width: 1100px) {
			input[type='submit'] {
				width: 100%;
				text-align: center;
			}
			div.content div.inner {
				width: 75%;
			}
			span.submit i {
				display: none;
			}
		}
	</style>
</head>
<body>
	<!-- mobile nav -->
	<div class="navBar">
		<div class="navContent">
			<ul>
				<li><a href="index.php">Home</a></li>
				<li><a href="finding.php">Finding a Job</a></li>
				<li><a href="applications.php">Application</a></li>
				<li><a href="resume.php">Resume</a></li>
				<li><a href="interview.php">Interview</a></li>
				<li><a href="keeping.php">Keeping a Job</a></li>
				<li><a href="contact.php">Contact</a></li>
			</ul>
		</div>
	</div>
	<!-- top black bar -->
	<div class="top">
		<img src="img/logo-white.png" alt="">
		<ul>
			<li><a href="index.php">Home</a></li>
			<li><a href="finding.php">Finding a Job</a></li>
			<li><a href="applications.php">Application</a></li>
			<li><a href="resume.php">Resume</a></li>
			<li><a href="interview.php">Interview</a></li>
			<li><a href="keeping.php">Keeping a Job</a></li>
			<li><a href="contact.php">Contact</a></li>
		</ul>
		<button class="hamburger hamburger--elastic" type="button" onclick="$(this).toggleClass('is-active');">
			<span class="hamburger-box">
				<span class="hamburger-inner"></span>
			</span>
		</button>
	</div>
	<!-- container for contact -->
	<div class="containerWrapper">
		<div class="content">
			<div class="inner">
				<h1>Contact Us</h1>
				<!-- php code to check if submitted -->
				<?php if(isset($_GET['submitted'])) { echo "<p class='submitted'>Thank you for your comments. We'll get back to you as soon as we can.</p>"; } ?>
		        <form action="submit.php" name="contact" id="contact" method="POST">
		          <input type="text" placeholder="Name" name='name' id="name"><br>
		          <input type="email" placeholder="Email" name='email' id="email"><br>
		          <textarea name="comments" id="comments" form="contact" placeholder="Comments"></textarea><br>
		          <span class="submit"><input type="submit" class="disabled" id="submit" value="Submit"><i class="icon ion-ios-arrow-forward"></i></span>
		        </form>
			</div>
		</div>
	</div>
	<!-- footer that is automatically populated by JS in navbar.js file -->
	<div class="footer">
		<p>&copy;</p>
	</div>
  <script src="js/navbar.js" type="text/javascript"></script>
	<script>
		//Check the form data
		$("form").on("click keyup keypress change", function() {
			//check name field
			var nameGood = $("#name").val().length > 0;
			//check email field with regex
			var emailGood = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test($("#email").val());
			//check comments field isn't blank
			var commentsGood = $("textarea").val().length > 0;
			//conditional to check all fields
			if(nameGood && emailGood && commentsGood) {
				$("input[type='submit']").removeClass("disabled");
			} else {
				$("input[type='submit']").addClass("disabled");
			}
		})
		//disable submission without form being filled out
		$("input[type='submit']").click(function() {
			if($(this).hasClass('disabled')) {
				return false;
			}
		})
	</script>
</body>
</html>
