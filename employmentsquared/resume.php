<!DOCTYPE html>
<html>
<head>
	<title>Employment&sup2; - Resumes</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1, minimum-scale=1">
	<link rel="stylesheet" href="css/styles.css" />
	<link rel="stylesheet" href="css/navbar.css" />
	<link rel="stylesheet" href="css/hamburgers.css" />
	<script src="js/jquery.js"></script>
	<script src="js/modernizr.js" type="text/javascript"></script>
	<style>
		/*page only css*/
		p.download {
			text-align: center;
			font-weight: bold;
			margin-top: 5px;
		}
		.whiteText p, .whiteText h1 {
		  color: white !important;
		}
		.blackText p, .blackText h1 {
		  color: black !important;
		}
		.inner > p {
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
	<!--top black bar-->
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
				<h1>Your Resume</h1>
				<p>The resume. It's arguably the most important part of your application, and it gives the employer and idea of who you are, including everything from your previous work experience to your special skills and abilities.</p><br>
				<h1>Three Things to Note:</h1>
			</div>
		</div>
		<div class="wide threethings blackText" style="background: none;">
			<div class="things">
				<div class="thing thing1" style="color: black;">
					<h1>Don't Undersell Yourself.</h1>
					<p>A resume is no place for modesty. You need to make sure that your resume shows the best parts of you.</p>
				</div>
				<div class="thing thing2" style="color: black;">
					<h1>Don't Leave Out Anything.</h1>
					<p>This goes hand in hand with underselling yourself. Do not omit important parts of your work experience or skills; they're all equally important in your application.</p>
				</div>
				<div class="thing thing3" style="color: black;">
					<h1>It Doesn't Need to Be Fancy.</h1>
					<p>One of the biggest myths is that your resume needs to be a designer resume that looks beautiful and is super appealing. In reality, for most jobs, a word document will suffice and get you the job as long as you have desirable skills.</p>
				</div>
			</div>
		</div>
		<div class="content">
			<div class="inner">
				<h1>The Three Types of Resumes</h1>
			</div>
		</div>
		<div class="wide threethings whiteText">
			<div class="things">
				<div class="thing thing1">
					<h1>Chronological</h1>
					<p>Employers typically prefer a chronological resume as it is a comprehensive list of your previous jobs. This type of resume allows an employer to quickly view your work history and experiences. However, if you've had a large number of jobs, try to limit the number of jobs to your most recent.</p>
					<p class="download"><a href="documents/chronological_resume.pdf" target="_blank">Sample Chronological Resume</a></p>
				</div>
				<div class="thing thing2">
					<h1>Functional</h1>
					<p>Functional resumes focus on your skills and experience before anything else. Here, your work history will not be prominent, but instead it is  listed towards the end of the resume.</p>
					<p class="download"><a href="documents/functional_resume.pdf" target="_blank">Sample Functional Resume</a></p>
				</div>
				<div class="thing thing3">
					<h1>Targeted</h1>
					<p>Targeted resumes are resumes tailored to the exact job you want. For example, if you're looking for a design job, you would want to include that you attended art school. If you’ve worked previously in design, you would want to highlight those jobs, as well as list some of your design skills.</p>
					<p class="download"><a href="documents/targeted_resume.pdf" target="_blank">Sample Targeted Resume</a></p>
				</div>
			</div>
		</div>
		<div class="content">
			<div class="inner">
				<p style='text-align: left;'>Each of these resumes serve a very specific purpose. It will be up to you to decide which resume is best fitted for the job you want, as well as which type of resume will showcase you in the best light to the employer.</p>
			</div>
		</div>
		<div class="wide bigBanner">
			<h1>Create a Resume for the Job You Want.</h1>
		</div>
		<div class="content">
			<div class="inner">
				<p>If you're going to fill out a job application, take the extra time to make a resume specifically for the job you're applying for. This way, you can tailor the skills on the resume to the job. The employer will appreciate your initiative because they'll see that you made a resume for them instead of submitting something more general.</p>
				<h1>Writing a Good Objective</h1>
				<p>An objective is a one or two sentence statement that basically states what type of career you're seeking, and it's usually tailored to the job that you're trying to get. While objectives aren't ever required from employers, some employers prefer them. However, this can go both ways, as some employers find them to be outdated and obsolete, and thus having an objective might subtract from your resume rather than add to it.</p>
				<p>A resume objective should be a well-rounded blend of what you want in the career, what you can offer to the company, and why you think you’re perfect for them.</p>
				<p>A good example of an objective: <br><em>"Seeking a job as a software engineer where I can apply my 10 years of programming experience and expertise to increase efficiency and customer satisfaction."</em></p>
			</div>
		</div>
	</div>
	<!--end content-->
	<div class="footer">
		<p>&copy;</p><!--footer to be populated-->
	</div>
  <script src="js/navbar.js" type="text/javascript"></script>
</body>
</html>
