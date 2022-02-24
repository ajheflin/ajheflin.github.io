<!DOCTYPE html>
<html>
<head>
	<title>Employment&sup2; - Finding a Job</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1, minimum-scale=1">
	<link rel="stylesheet" href="css/styles.css" />
	<link rel="stylesheet" href="css/navbar.css" />
	<link rel="stylesheet" href="css/hamburgers.css" />
	<script src="js/jquery.js"></script>
	<script src="js/modernizr.js" type="text/javascript"></script>
	<style>
	/*page only css*/
		div.jobfairs {
			color: white;
			background: linear-gradient(rgba(0,0,0,0.4), rgba(0,0,0,0.4)), url('../img/jobfairs.jpeg');
			background-position: 0% 10%;
			background-size: cover;
		}
		.inner h1, .inner h1:first-child {
			font-size: 2em;
		}
		.content ul {
			list-style-type: none;
			width: 100%;
			margin: 20px 0;
		}
		.content ul a li {
			display: inline-block;
			width: 33%;
			text-align: center;
			padding: 2% 0%;
			-webkit-transition: .3s all;
			-o-transition: .3s all;
			transition: .3s all;
			position: relative;
		}
		.content ul a {
			text-decoration: none;
			color: white;
		}
		.content ul a:first-child li {
		  background: #e0aa96;
		}
		.content ul a li {
		  background: #e89476;
		}
		.content ul a:last-child li {
		  background: #BF6056;
		}
		.content ul a:hover  li {
			background: black;
			color: white;
		}
		.content ul a i {
			position: absolute;
			right: 6%;
		}
		.whiteText p, .whiteText h1 {
		  color: white !important;
		}
		.blackText p, .blackText h1 {
		  color: black !important;
		}
		.thing p {
			font-size: 1.15em;
		}
	</style>
</head>
<body>
	<!--mobile nav-->
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
	<!--top bar-->
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
	<!--content of page-->
	<div class="content">
		<div class="inner">
			<h1 style="font-size: 4em;">Finding a Job</h1>
			<p style="text-align: left;">There are plenty of ways to find a job, ranging from going on a website to going to a local job fair. There are also other options for finding a job, such as local job boards and temporary employment agencies in your area.</p>
			<h1 style='margin-top: 20px;'>Online</h1>
			<p>There are plenty of outlets that you can use to find a job, many of which are websites. Here are a few websites you can check to get started on your job hunt:</p>
			<ul><!--
			--><a href="http://monster.com" target="_blank"><li>Monster <i class="icon ion-ios-arrow-right"></i></li></a><!--
			--><a href="http://indeed.com" target="_blank"><li>Indeed <i class="icon ion-ios-arrow-right"></i></li></a><!--
			--><a href="http://snagajob.com" target="_blank"><li>Snagajob <i class="icon ion-ios-arrow-right"></i></li></a><!--
			--></ul><br>
			<h1>Job Boards</h1>
			<p>Go to Starbucks. While this might seem like an odd suggestion for finding a job, it's a good place to start. Patrons will often pin up a job offering on a board along with their contact information. Don't hesitate to peruse the job board while you sip your mocha latte.</p>
			<p></p>
		</div>
		<div class="content">
			<div class="inner">
				<h1>"Help Wanted" Signs</h1>
				<p>This may be old-fashioned, but it's tried and true. If a restaurant or business has a "help wanted" sign, don't be afraid to go inside and inquire; it may just get you a job. Even if it's just an entry level position, there's always room to be promoted, and you could even find yourself in a managerial position if you work hard enough.</p>
			</div>
		</div>
		<!--banner that spans whole page-->
		<div class="jobfairs wide bigBanner">
			<h1>Don't Be Afraid of Job Fairs</h1>
		</div>
		<div class="content">
			<div class="inner">
				<h1>Job Fairs</h1>
				<p>Don't be afraid to go to job fairs. They're a great way to put yourself out there and network. You can land multiple interviews in one day, without filling out a single application.</p>
			</div>
		</div>
		<div class="threething" style="background: none;">
			<div class="wide things blackText">
				<div class="thing thing1">
					<h1>Dress for Success</h1>
					<p>Male or female, you should wear a suit. It will make a good first impression, showing potential employers that you're serious about getting a job and you also know how to dress well.</p>
				</div>
				<div class="thing thing2">
					<h1>Have a Resume Ready</h1>
					<p>Have multiple copies of your resume on hand. This will not only show the employers that you came prepared, but also expedite the application process.</p>
				</div>
				<div class="thing thing3">
					<h1>Have a Proper Handshake</h1>
					<p>First, wait for the employer to extend their hand. Then, have a good grip and make sure to look them in the eyes. Finally, make sure that your handshake isn't a crushing firmness, but instead just enough to show that you’re confident.</p>
				</div>
			</div>
		</div>
	</div>
	<!--footer to be populated-->
	<div class="footer">
		<p>&copy;</p>
	</div>
	<!--import js-->
  <script src="js/navbar.js" type="text/javascript"></script>
</body>
</html>
