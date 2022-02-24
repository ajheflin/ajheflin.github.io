<!DOCTYPE html>
<html>
<head>
	<title>Employment&sup2; - Keeping a Job</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1, minimum-scale=1">
	<link rel="stylesheet" href="css/styles.css" />
	<link rel="stylesheet" href="css/navbar.css" />
	<link rel="stylesheet" href="css/hamburgers.css" />
	<script src="js/jquery.js"></script>
	<script src="js/modernizr.js" type="text/javascript"></script>
	<style>
		/*page only css*/
		.content .inner:not(:first-child) h1 {
			font-size: 3em !important;
		}
		.thing p {
			font-size: 1.15em;
		}
		.threethings a {
			color: white;
		}
		/*copy this rule to other page with dl*/
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
			<h1>Keeping the Job</h1>
		</div>
		<div class="threethings">
			<div class="things">
				<div class="thing">
					<h1>Is This Your Dream Job?</h1>
				</div>
				<div class="thing">
					<h1>Is This Where You Want to Be?</h1>
				</div>
				<div class="thing">
					<h1>Are You Happy?</h1>
				</div>
			</div>
		</div>
		<div class="inner">
			<h1>Did You Answer 'No' To Any Of These?</h1>
			<p style="text-align: center;">If you did, why? Take some time, think about that.</p><br>
			<h1>Reasons Why You Might Have Answered No:</h1>
			<h1>( As well as some possible solutions )</h1>
		</div>
		<div class="threethings wide">
			<div class="things">
				<div class="thing thing1">
					<h1>It's Not Your Dream Job</h1>
					<p>You want a promotion or you want another job. If it is your dream job, but it's not what you thought it was, think about what else you might be interested in, and then <a href="finding.php">seek out jobs</a> in this field If you want a promotion, check out our tips for <a href="#promotion">getting a promotion.</a></p>
				</div>
				<div class="thing thing2">
					<h1>It's Not Where You Want to Be</h1>
					<p>Is it the company? Is it the people? Either way, it's time to get out. However, don't jump the gun on quitting. If you're going to resign, make sure you have another job lined up so you're not left jobless. If you need help with any steps of the application process, check out the applications, resumes, and interview tabs at the top of the page.</p>
				</div>
				<div class="thing thing3">
					<h1>You're Not Happy</h1>
					<p>This goes hand in hand with not being where you want to be. Is it because you have too much work? If you do have too much work, is it because you procrastinate with getting your work done? Try doing your work as soon as it's assigned to you —your stress levels will drastically drop.</p>
				</div>
			</div>
		</div>
		<div class="inner">
			<h1>"What if I answered yes to all of those questions?"</h1>
			<p style="text-align: center;">If you answered yes to all of those, keep reading for some more tips to better manage your time and remain happy with your job.</p><br>
			<p style="text-align: center; font-style: italic;">How to keep (and like) your job:</p>
			<dl>
				<dt>Make some friends</dt>
				<dd>Make friends with your coworkers. Maybe go out for drinks with them, have dinner, or invite them over to your house to watch a game. <br><em>*It’s important to know your company’s rules regarding fraternization ahead of time.</em></dd>
				<dt>Work Ahead</dt>
				<dd>You might be asking yourself <em>"How do I work ahead?"</em> Truthfully, there's no single way to "work ahead" in your job, but the best way is to go above and beyond by doing more than you were asked to do. For example, if your boss asks you on Thursday to have a report in by Tuesday, turn the report in Friday. On Monday, ask for your next task. If they don't have anything for you to do, ask if there are other teams or departments you can assist. </dd>
				<dt id="promotion">Get Promoted</dt>
				<dd>Obviously, you have no direct control over your promotion, and you can't just promote yourself. However, you can do the next best thing, which is earning yourself a promotion (or two). You can earn a promotion by working extremely hard, whether this is by turning your work in on time, turning in more work than you were expected to do, or going above and beyond in the company; you're sure to earn a promotion if you keep at it and show how hard of a worker you are.</dd>
			</dl>
		</div>
	</div>
	<!--end of content-->
	<!--footer to be populated-->
	<div class="footer">
		<p>&copy;</p>
	</div>
  <script src="js/navbar.js" type="text/javascript"></script>
</body>
</html>
