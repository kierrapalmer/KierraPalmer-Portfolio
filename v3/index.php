<!DOCTYPE html>

<html lang= "en">
<head>
	<title>Kierra Palmer - Web Developer</title>

	<!-- 
	Author: Kierra Palmer
	File: /index.html
	Version: 3
	Created May 1, 2018
	-->
	<?php include('../api_key.php') ?>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="description" content="Kierra Palmer personal portfolio" />
	<meta name="keywords" content="Weber, State, Kierra, Palmer, Design, Web, Developer, Portfolio" />
	<meta name="author" content="Kierra Palmer" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<link rel="icon" href="assets/images/logo.png" type="image/x-icon" />
	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script> 
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script> 
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Lato:400,700&display=swap" rel="stylesheet">
	<script src="https://maps.googleapis.com/maps/api/js?key=<?php echo GOOGLE_API; ?>&callback=init_map"></script>
	
	<link href="assets/css/styles.css" rel="stylesheet" type="text/css" />
	<script src="script.js"></script>
	<script src="google-maps.js"></script>
	
</head>



<body>
<ul class="bar">
  <li class="barItem barAbout"><a href="#about">About</a></li>
  <li class="barItem barPortfolio"><a href="#portfolio">Portfolio</a></li>
  <li class="barItem barExperience"><a href="#experience">Experience</a></li>
  <li class="barItem barContact"><a href="#contact">Contact</a></li>
</ul>
<div class="topPic fadeIn"></div>
<main>
	<div class="container">
		 <div class="row">
			<div class="col-12 col-lg-10 offset-1">
				<section id="about" class="about">
				  <p> Hi, I'm Kierra! I am a current work as a <span class="text-accent">Full Stack Web Developer</span> 
				  	at <a href="marketingepic.com" target="_blank"> Weber State University</a>. 
				  	In 2019 I graduated with my Bachelors Degree from <a href="www.weber.edu" target="_blank"> Weber State University</a> 
					with a major in <span class="text-accent">Computer Science</span> and minor in <span class="text-accent">Web Technologies</span>. 
					 <br />
					<br />
					Throughout my college expierence I have built up various major skills. My strongest suits are in <span class="text-accent">HTML, CSS, Javascript, SQL Server, ASP.NET, and Android</span> and the most difficult of all, <span class="text-accent"> Cooking. </span> I also have a good base knowledge in <span class="text-accent"> Java, C++, Python, PHP, MySQL, </span> and the art of buying groceries with only $20 in your pocket. <br />
					<br />
					In my work, I strive to design and code engaging, powerful applications that will show the world the <span class="text-accent"> true beauty </span> that technology can pull from human nature. I am a <span class="text-accent">naturally curious</span> person who is on the constant look out for new revenues on how to improve both myself and the work that I produce. </p>
				</section>
			</div>
		</div>
	</div>

   	<div class="hr"></div>
	
	
	<!-- Portfolio -->
	<section class="portfolio">
		<div class="container">
			<div class="row">
				<!--		Epic		-->
				<div class="col-lg-7 col-md-12"> 
					<img src="assets/images/mockups/epic-mockup.png" alt="epic mockups"> 
				</div>

				<div class="col-lg-5 col-md-12 portItem pr-3">
				  <div class="portItemDetails">
					<h2 class="workTitleRight">Epic Marketing - An Internal Site Creation</h2>
					<p> Creating a sleek, modern webfront to compete within a bustling marketing agency industry. </p>
					<div class="btn-wrap">
						<a href="https://marketingepic.com" class="btn-white" target="_blank">View Demo</a> </div>
					</div>
				</div>
				
				<!--	CrowdStorage			-->
				<div class="col-lg-5 col-md-12 portItem">
				  <div class="portItemDetails">
					<h2 class="workTitleRight">CrowdStorage - A SAS Company</h2>
					<p>Building a new site ground up to support and market a developing technology</p>
					<div class="btn-wrap">
						<a href="https://github.com/kierrapalmer/City-Deli" class="btn-accent" target="_blank">View Source</a> <a href="https://eager-easley-0038b6.netlify.com/index.html" class="btn-white" target="_blank">View Site</a> </div>
					</div>
				</div>

				<div class="col-lg-7 col-md-12"> 
					<img src="assets/images/mockups/deli-mockups.png" alt="Deli mockups"> 
				</div>
				
				<!--	Sundridge HOA			-->
				<div class="col-lg-7 col-md-12"> 
					<img src="assets/images/mockups/SunridgeHOA.png" alt="sundridge mockups"> 
				</div>

				<div class="col-lg-5 col-md-12 portItem pr-3">
				  <div class="portItemDetails">
					<h2 class="workTitleRight">Sundridge HOA- Property Management</h2>
					<p>A property management web application created for a local Homeowner Association to track things such as lots, keys, billing etc.</p>
					<div class="btn-wrap">
						<a href="https://youtu.be/6nEoXTh1zGQ" class="btn-white" target="_blank">View Demo</a> </div>
					</div>
				</div>

				<div class="col-lg-5 col-md-12 portItem">
				  <div class="portItemDetails">
					<h2 class="workTitleRight">City Deli - Restaurant Redesign</h2>
					<p>A webpage redesign created for an advanced css course to expand knowledge on customizable Bootstrap.</p>
					<div class="btn-wrap">
						<a href="https://github.com/kierrapalmer/City-Deli" class="btn-accent" target="_blank">View Source</a> <a href="https://eager-easley-0038b6.netlify.com/index.html" class="btn-white" target="_blank">View Site</a> </div>
					</div>
				</div>

				<div class="col-lg-7 col-md-12"> 
					<img src="assets/images/mockups/deli-mockups.png" alt="Deli mockups"> 
				</div>

				<div class="col-lg-7 col-md-12"> 
					<img src="assets/images/mockups/GEM-mockup.png" alt="Gem mockups"> 
				</div>

				<div class="col-lg-5 col-md-12 portItem pr-3">
					<div class="portItemDetails">
						<h2 class="workTitleRight">Gem - Community Selling</h2>
						<p>Gem is an app focused on creating an effectiate way for community members to post and buy new and used items</p>
						<div class="btn-wrap">
							<a href="https://github.com/kierrapalmer/gem" class="btn-accent" target="_blank">View Source</a> <a href="https://youtu.be/6DN4TyhIZBg" class="btn-white" target="_blank">View Demo</a> 
						</div>
					</div>
				</div>
				<div class="col-lg-5 col-md-12 portItem">
					<div class="portItemDetails">
						<h2 class="workTitleRight">WSU Timesheet - Student Timetracker</h2>
						<p>A timetracker created for WSU CS professors to help grade student's time and particapation with group projects.</p>
						<div class="btn-wrap">
							<a href="https://github.com/lizruttenbur/CodeGirls/tree/master/StudentTimeSheet" class="btn-accent" target="_blank">View Source</a> 
						</div>
					</div>
				</div>

				<div class="col-lg-7 col-md-12"> 
					<img src="assets/images/mockups/Timesheet-Mockup.png" alt="timesheet mockups"> 
				</div>
			</div>
		</div>
	</section>
   
   	<div class="hr"></div>
		
	
	<!-- Work Experience	-->
	<div class="container">
		<div class="row">
			<div class="col-lg-7 col-md-12"> 
				<h2>Work Experience</h2>
			</div>
		</div>

		<div class="row exp-row">
			<div class="col-md-4 left">
			  <h4>Epic Marketing</h4>
			  <p class="text-secondary">May 2019-Present</p>
			</div>
			<div class="col-md-8 right">
			  <h3>Web Developer</h3>
			  <p> - Develop custom Wordpress sites from the ground up using HTML, SASS, JQuery, and PHP. <br />
				- Maintain and troubleshoot existing clients sites.</p>
			</div>
		</div>

		<div class="row exp-row">
			<div class="col-md-4 left">
			  <h4>Weber State University</h4>
			  <p class="text-secondary">Aug 2017-Apr 2019</p>
			</div>
			<div class="col-md-8 right">
			  <h3>Web Content Manager</h3>
			  <p> - Developed skills in HTML, CSS, content writing, marketing, and time management <br />
				- Integrated previous website with JavaScript functionality</p>
			</div>
		</div>

		<div class="row exp-row pt-3">
			<div class="col-md-4 left">
			  <h4>HH2 Cloud Services</h4>
			  <p class="text-secondary">Apr 2018 - Aug 2018</p>
			</div>
			<div class="col-md-8 right">
			  <h3>Backend Software Developer Intern</h3>
			  <p> - Developed skills in C#, JSON, SQL Server, WCF<br />
				- Work in small teams to update existing software to provide users with best experience possible.<br />
				- Compiled entire metadata retrieval system to expediate system management </p>
			</div>
		</div>

		<div class="row exp-row pt-3">
			<div class="col-md-4 left">
			  <h4>Weber State University</h4>
			  <p class="text-secondary">Aug 2016- June 2017</p>
			</div>
			<div class="col-md-8  right">
			  <h3>Office Assistant</h3>
			  <p>- Developed skills in copying, filing, Microsoft Office, and graphic design <br />
				- Established a digital signage system </p>
			</div>
		</div>

		<div class="row exp-row pt-3">
			<div class="col-md-4 left">
			  <h4>Taffy Treasures</h4>
			  <p class="text-secondary">Feb 2015- May 2016</p>
			</div>
			<div class="col-md-8 right">
			  <h3>Marketing Specialist</h3>
			  <p>- Developed a social media strategy to increase sales <br />
				- Oversaw creation of all promotional flyers and store advertisement </p>
			</div>
		</div>

		<div class="row pt-3">
			<div class="col-md-12">
				<div class="btn-wrap">
					<a class="btn-accent" href="assets/files/resume.pdf">Download My Resume</a>
				</div>
			</div>
		</div>
	</div>
	

   	<div class="hr"></div>

    
    <!--Contact Me -->  
	<div class="container contact">
		<div class="row">
			<div class="contInfo col-lg-3 col-md-4 col-sm-5" >
			  <h3>Online Footprint</h3>
			  <span class="imgSocial"> <a href="https://www.facebook.com/kierranpalmer"> <img src="assets/images/social/Facebook-white.png" alt="facebook"> <img src="assets/images/social/Facebook-orange.png" class="hoverFace hoverSocial" alt=""> </a> </span> 
			  <span class="imgSocial"> <a href="https://www.linkedin.com/in/kierranpalmer/"> <img src="assets/images/social/LinkedIn-white.png" alt=""> <img src="assets/images/social/LinkedIn-orange.png" class="hoverLinked hoverSocial" alt=""> </a> </span> 
			  <span class="imgSocial"> <a href="https://github.com/kierrapalmer"> <img src="assets/images/social/github-white.png" alt=""> <img src="assets/images/social/github-orange.png" class="hoverGit hoverSocial" alt=""> </a> </span> 
			  <span class="imgSocial"> <a href="https://codepen.io/kierrapalmer/"> <img src="assets/images/social/codepen-white.png" alt=""> <img src="assets/images/social/codepen-orange.png" class="hoverCode hoverSocial" alt=""> </a> </span> <br />
			  <br />
			  <h3>Contact Info</h3>
			  <i class="fas fa-map-marker-alt"></i> Sandy, UT <br />
			  <i class="fas fa-envelope"></i> <a href="mailto:kierrapalmer.com">kierrapalmer@aol.com </a><br />
			  <i class="fas fa-globe"></i> <a href="http://kierrapalmer.com">kierrapalmer.com</a> 
			</div>
			<div class="col-lg-9 col-md-8 col-sm-7"> 
				<!-- <img src="assets/images/map-image.png" alt="US map">  -->
				<div id="google-map"></div>
				<div class="map-data d-none">                                                                    
	                <div class="marker" data-latt="40.569710" data-lngg="-111.897278"
	                    data-icon-color="https://i5p7r4n8.stackpathcdn.com/wp-content/themes/vasa/dist/assets/images/locations/Marker.png">
	                    <div id="iw-container" >
	                        <div class="iw-content">
	                            <div class="iw-subTitle">Check me out</div>
	                            <!-- <p class="iw-map-text"><?php echo $details['street_address']; ?></p> -->
	                        </div>
	                        <div class="iw-content-underlay"></div>	                       
	                    </div>
	                </div>
	            </div>

	        </div>
	     
	   
		</div> <!-- end row-->
	</div>
	
</main>

<!-- Latest compiled and minified JavaScript --> 
<!--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" 
integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script> -->

</body>
</html>
