<!DOCTYPE html>
<html>
<head>
	<title>Employment&sup2; - Applications</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1, minimum-scale=1">
	<link rel="stylesheet" href="css/styles.css" />
	<link rel="stylesheet" href="css/navbar.css" />
	<link rel="stylesheet" href="css/hamburgers.css" />
	<script src="js/jquery.js"></script>
	<script src="js/modernizr.js" type="text/javascript"></script>
	<style>
	/* Page only CSS */
		.thing a:hover {
			color: #F4B39C;
		}
		.inner button {
			display: block;
			margin: 0 auto;
		}
		p.link {
			text-align: center;
			font-weight: bold;
		}
		dt {
			margin-top: 10px;
			font-size: 2em;
			font-style: italic;
			font-family: "Lato";
		}
		dd {
			font-size: 1.5em;
			font-family: "Lato";
			margin-left: 1vw;
			text-align: justify;
		}
		h1  {
			margin: 20px 0;
		}
	</style>
</head>
<body>
	<!-- begin mobile nav -->
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
	<!-- end mobile nav -->
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
	<!-- content of page -->
	<div class="containerWrapper">
		<div class="content">
			<div class="inner" style="padding-bottom: 2%;">
				<h1>Your Application</h1>
				<p>First off, answer everything. If there's a question about what your childhood pet's name was and it's optional, answer it. Employers love when they can get a complete view of their applicants, and the most effective way of doing that is by answering the questions they provide. This also includes when they ask if you'd like to submit any supporting documents.</p><br>
				<h1>Three Documents to Include With Your Application:</h1>
			</div>
		</div>
		<!-- three item spread -->
		<div class="wide threethings">
			<div class="things">
				<div class="thing thing1">
					<h1>Resume</h1>
					<p>This is probably going to be the most important part of your application. Your resume gives the employer a synopsis of your past employment, special skills and talents, and areas of expertise. Use your resume as an opportunity to show yourself off.</p>
					<p class='link'><a href="resume.php">Follow our guide to making a better resume.</a></p>
				</div>
				<div class="thing thing2">
					<h1>Recommendations</h1>
					<p>Get recommendations from reputable people such as past employers, mentors, and other people with credibility. While a recommendation from your grandma is sweet, it won't land you a job.</p>
				</div>
				<div class="thing thing3">
					<h1>Cover Letter</h1>
					<p>Cover letters are the first thing an employer sees when they open your application, so you should use it as an opportunity to make a good first impression.</p>
					<p class='link'><a href="documents/cover_letter.pdf" target="_blank">Check out our guide to writing a cover letter.</a></p>
				</div>
			</div>
		</div>
		<div class="content">
			<div class="inner">
				<h1 style="font-size: 2em;">How to Fill Out an Application:</h1>
				<p>Filling out the application is pretty self-explanatory, but sometimes they will throw weird things into the application. Typically, this isn't the case. They mostly ask questions about your work history, experience, availability, and other demographic information.</p>
				<h1>What Not To Put In Your Job Application:</h1>
				<dl>
					<dt>Information That Mismatches your Resume or Other Documents</dt>
					<dd>Make sure that your information is consistent across all of your documents. This includes your cover letter, resume, and supporting materials.</dd>
					<dt>Untruthful Information</dt>
					<dd>While this might be obvious, it's important. You shouldn't include anything in your application that is false or even just stretches the truth. Remember that they can ask you to prove anything you included on your application, so if you're not actually a genius who invented the next alternative to gasoline, don't say that you are.</dd>
					<dt>Lists of Tasks</dt>
					<dd>Don't just include a list of your duties in a previous job. Instead, focus on skills that you had to demonstrate in your previous job and expand on those in your applications. Make sure that they are beneficial to the position you're applying for.</dd>
					<dt>Negative Reasons for Leaving a Previous Job</dt>
					<dd>Don't include a negative reason for leaving a job that you had previously, especially if the reason for leaving will reflect negatively on you. Instead, try to spin your response to make it sound more positive. Don't lie, but make it sound better than "I hated my boss and I had to just leave."</dd>
				</dl>
				<h1>A Sample Application:</h1>
				<p style="text-align: center; font-size: 1em;">This is a McDonald's application form.</p>
				<form action="documents/application.pdf" method="get" target="_blank">
					<button type="submit" class="bigButton" href="documents/application.pdf">Download Application</button>
				</form>
				<p style="margin-top: 2vh; font-size: 1em; text-align: center;">Please note: Applications will vary from employer to employer.</p>
			</div>
		</div>
	</div>
	<!-- footer that is automatically populated with correct date from navbar.js file -->
	<div class="footer">
		<p>&copy;</p>
	</div>
  <script src="js/navbar.js" type="text/javascript"></script>
</body>
</html>
