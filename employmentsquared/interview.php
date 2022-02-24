<!DOCTYPE html>
<html>
<head>
	<title>Employment&sup2; - Interviews</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1, minimum-scale=1">
	<link rel="stylesheet" href="css/styles.css" />
	<link rel="stylesheet" href="css/navbar.css" />
	<link rel="stylesheet" href="css/hamburgers.css" />
	<script src="js/jquery.js"></script>
	<script src="js/modernizr.js" type="text/javascript"></script>
	<style>
		/*page only css*/
		.research {
			background: linear-gradient(rgba(0,0,0,0.4), rgba(0,0,0,0.4)), url('img/research.jpeg');
			background-position: center;
			background-size: cover;
		}
		.stress {
			background: linear-gradient(rgba(0,0,0,0.4), rgba(0,0,0,0.4)), url('img/stress.jpeg');
			background-position: center;
			background-size: cover;
		}
		.content {
			padding: 2% 0%;
		}
		.content:not(:first-child) .inner h1 {
			font-size: 3em !important;
		}
		.inner h1 {
			margin: 20px 0;
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
	<div class="containerWrapper">
		<div class="content">
			<div class="inner">
				<h1>Your Interview</h1>
				<p>The interview is the most important part of the job search process. It shows the employer your personality, work ethic, and gives them an idea of who you are and how you will function within their team, as well as how you can be an asset to their company.</p><br>
			</div>
		</div>
		<div class="wide bigBanner">
			<h1>Use the interview to show<br>things that can’t be seen on paper.</h1>
		</div>
		<div class="content">
			<div class="inner">
				<h1>Prepare, Prepare, Prepare</h1>
				<p>Not everybody thinks that you should prepare for an interview because it's just questions about you, but <em>this is not true.</em></p><br>
				<p>Go into the interview knowing what you want to communicate about yourself to the employer. Make a list of key points and make sure to practice how you're going to convey those points to the interviewer.</p>
				<h1>Treat it like a conversation</h1>
				<p>Ask the interviewer questions back, talk to them about their company, ask them what they like about the company, what their favorite things are, and what they like about the people they work with. Ask them about their hobbies, and if they name something that you're interested in as well, talk to them more about that.</p>
				<h1>Sample Questions:</h1>
				<p>Here are a few questions you might be asked during your interview:</p>
				<ul>
					<li>What's your greatest strength?</li>
					<li>Why do you think you're a good fit for our company?</li>
					<li>How do you work with others?</li>
					<li>What do you do for fun?</li>
				</ul>
			</div>
		</div>
		<div class="bigBanner wide research">
			<h1>Do Your Homework.</h1>
		</div>
		<div class="content">
			<div class="inner">
				<h1>Do Some Research Beforehand</h1>
				<p>Research the company ahead of time. Make sure to figure out what their company values are, including what they value in an employee to what their end goal as a company is. Make sure to tell them what makes you a good fit for them. Try to tailor your responses to their company.</p>
			</div>
		</div>
		<div class="wide bigBanner stress">
			<h1>The "What's Your Biggest Weakness?" Question</h1>
		</div>
		<div class="content">
			<div class="inner">
				<h1>This one is hard.</h1>
				<p>First off, there is no perfect answer to this question. You can't just give them some softball answer like <em>"I'm a perfectionist,"</em> but you also shouldn't give them an actual problem that you have; such as <em>"I don't work well with others."</em> The best answer to this question lies somewhere in the middle. A good middleground would be, <em>"When I work with others, I tend to do most of the work because of my perfectionistic qualities."</em></p>
			</div>
		</div>
	</div>
	<!-- end content -->
	<!--footer will be populated-->
	<div class="footer">
		<p>&copy;</p>
	</div>
  <script src="js/navbar.js" type="text/javascript"></script>
</body>
</html>
