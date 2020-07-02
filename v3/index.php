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
	<?php include('../api.php') ?>
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
	
	<link href="assets/css/styles.css" rel="stylesheet" type="text/css" />
	<script src="script.js"></script>
	<script src="google-maps.js"></script>
	

</head>



<body>
<ul class="bar d-none d-md-flex">
  <li class="barItem barAbout"><a href="#about">About</a></li>
  <li class="barItem barPortfolio"><a href="#portfolio">Portfolio</a></li>
  <li class="barItem barExperience"><a href="#experience">Experience</a></li>
  <li class="barItem barContact"><a href="#contact">Contact</a></li>
</ul>
<div class="navbar-top d-md-none">
	<a  class="menu-toggle" href="" data-target="#offcanvas-menu" data-toggle="collapse"><i class="fa fa-bars"></i></a>
	<h3 class="name">Kierra Palmer</h3>
</div>
<div class="collapse pt-2 min-vh-100 d-md-none" id="offcanvas-menu">
	<ul class="offcanvas-items">
	  <li class="offcanvas-item"><a href="#about">About</a></li>
	  <li class="offcanvas-item"><a href="#portfolio">Portfolio</a></li>
	  <li class="offcanvas-item"><a href="#experience">Experience</a></li>
	  <li class="offcanvas-item"><a href="#contact">Contact</a></li>
	</ul>
</div>

<div class="topPic fadeIn"></div>
<main>
	<section id="about" class="about">
		<div class="container">
			 <div class="row">
				<div class="col-12 col-lg-10 offset-md-1">
				  <p> Hi, I'm Kierra! I currently work as a <span class="text-accent">Wordpress Developer</span> 
				  	at <a href="https://marketingepic.com" target="_blank"> Epic Marketing</a>. 
				  	In 2019, I graduated with my Bachelors Degree from <a href="https://weber.edu" target="_blank"> Weber State University</a> 
					with a major in <span class="text-accent">Computer Science</span> and minor in <span class="text-accent">Web Technologies</span>. 
					 <br />
					<br />
					Throughout my years programming I have built up various major skills. My strongest suits are in <span class="text-accent">HTML, Sass, Javascript, PHP, PhpMyAdmin </span> and the most difficult of all, <span class="text-accent"> Cooking. </span> I also have a good base knowledge in <span class="text-accent">Laravel, ASP.NET Core, C#, SQL Server, </span> as well as the art teaching my dog to dance with me. <br />
					<br />
					In my work, I strive to design and code engaging, powerful applications that will show the world the <span class="text-accent"> true beauty </span> that technology can pull from human nature. I am a <span class="text-accent">naturally curious</span> person who is on the constant look out for new revenues on how to improve both myself and the work that I produce. </p>
				</div>
			</div>
		</div>
	</section>

	
	<!-- Portfolio -->
	<section class="portfolio" id="portfolio">	
		<div class="hr"></div>	

		<?php $portfolio_items = [
			[ //epic
				"img" => "assets/images/mockups/epic-mockup.png",
				"title" => "Epic Marketing - An Internal Site Creation",
				"description" =>"Creating a sleek, modern webfront to compete within a bustling marketing agency industry.",
				"btn1" => ["link"=>"https://marketingepic.com", 'text'=>"View Site", "color"=>"white"],
				"btn2"=> null
			],
			// [	//Crowdstorage
			// 	"img" => "assets/images/mockups/deli-mockups.png",
			// 	"title" => "CrowdStorage - A SaS Company",
			// 	"description" =>"Building a new site ground up to support and market a developing technology.",
			// 	"btn1" => ["link"=>"http://crowdstorage.com/", 'text'=>"View Site", "color"=>"white"],
			// 	"btn2"=> null
			// ],
			[	//Sundridge HOA
				"img" => "assets/images/mockups/SunridgeHOA.png",
				"title" => "Sundridge HOA - Property Management",
				"description" =>"A property management web application created for a local Homeowner Association to track things such as lots, keys, billing etc.",
				"btn1" => ["link"=>"https://github.com/kierrapalmer/HOA-Sundridge", 'text'=>"View Source", "color"=>"accent"],
				"btn2" => ["link"=>"https://youtu.be/6nEoXTh1zGQ", 'text'=>"View Demo", "color"=>"white"],
			],
			[	//City Deli
				"img" => "assets/images/mockups/deli-mockups.png",
				"title" => "City Deli - Restaurant Redesign",
				"description" =>"A webpage redesign created for an advanced css course to expand knowledge on customizable Bootstrap.",
				"btn1" => ["link"=>"https://github.com/kierrapalmer/City-Deli", 'text'=>"View Source", "color"=>"accent"],
				"btn2" => ["link"=>"https://eager-easley-0038b6.netlify.com/index.html", 'text'=>"View Site", "color"=>"white"],
			],
			[	//GEM
				"img" => "assets/images/mockups/GEM-mockup.png",
				"title" => "Gem - A Community Selling App",
				"description" =>"Gem is an app focused on creating an effectiate way for community members to post and buy new and used items.",
				"btn1" => ["link"=>"https://github.com/kierrapalmer/gem", 'text'=>"View Source", "color"=>"accent"],
				"btn2" => ["link"=>"https://youtu.be/6DN4TyhIZBg", 'text'=>"View Demo", "color"=>"white"],
			],
			
		]?>	
		<div class="container">
			<?php //echo "<pre>".print_r($portfolioItems,1)."</pre>"; ?>
			<?php $portfolio_count = count($portfolio_items) ?>
			<?php foreach($portfolio_items as $key=>$portfolio): ?>
				<?php $img_order = $key % 2 == 0 ? 'order-md-1' : 'order-md-2';
				$details_order = $key % 2 == 0 ? 'order-md-2' : 'order-md-1' ?>
				<div class="row">
					<!-- City Deli -->
					<div class="col-12 col-lg-5 order-2 <?php echo $details_order ?> d-flex justify-center align-items-center">
						  <div class="port-item-details">
							<h2 class="work-title"><?php echo $portfolio['title'] ?></h2>
							<p class="work-description"><?php echo $portfolio['description'] ?></p>
							<div class="btn-wrap">
								<?php if(!empty($portfolio['btn1'])): ?>
									<a href="<?php echo $portfolio['btn1']['link'] ?>" class="btn-<?php echo $portfolio['btn1']['color'] ?>" target="_blank">
										<?php echo $portfolio['btn1']['text'] ?>
									</a>
								<?php endif; ?>
							</div>
							<div class="btn-wrap">
								<?php if(!empty($portfolio['btn2'])): ?>
									<a href="<?php echo $portfolio['btn2']['link'] ?>" class="btn-<?php echo $portfolio['btn2']['color'] ?>" target="_blank">
										<?php echo $portfolio['btn2']['text'] ?>
									</a>
								<?php endif; ?>
								
							</div>
						</div>
					</div>

					<div class="col-12 col-lg-7 order-1 <?php echo $img_order ?>"> 
						<img class="mockup" src="<?php echo $portfolio['img'] ?>" alt="Deli mockups"> 
					</div>
				</div>
			<?php endforeach; ?>
		</div>
	</section>
   
		
	
	<!-- Work Experience	-->
	<section class="experience" id="experience">
		<div class="hr"></div>

		<div class="container">
			<div class="row">
				<div class="col-lg-7 col-md-12"> 
					<h2 class="section-title">Work Experience</h2>
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
				<div class="col-md-8 right last">
				  <h3>Marketing Specialist</h3>
				  <p>- Developed a social media strategy to increase sales <br />
					- Oversaw creation of all promotional flyers and store advertisement </p>
				</div>
			</div>

			<div class="row pt-3">
				<div class="col-md-12">
					<div class="btn-wrap">
						<a class="btn-accent" href="assets/files/resume.pdf" target="_blank">Download My Resume</a>
					</div>
				</div>
			</div>
		</div>
	</section>


    
    <!--Contact Me -->  
	<section class="contact" id="contact">
		<div class="hr"></div>

		<div class="container">
			<div class="row">
				<div class="contInfo col-lg-3 col-md-4 col-sm-5" >
					<div class="footprint">
					  <h2>Online Footprint</h2>
					  <span class="imgSocial"> <a href="https://www.facebook.com/kierranpalmer"> <img src="assets/images/social/Facebook-white.png" alt="facebook"> <img src="assets/images/social/Facebook-orange.png" class="hoverFace hoverSocial" alt=""> </a> </span> 
					  <span class="imgSocial"> <a href="https://www.linkedin.com/in/kierranpalmer/"> <img src="assets/images/social/LinkedIn-white.png" alt=""> <img src="assets/images/social/LinkedIn-orange.png" class="hoverLinked hoverSocial" alt=""> </a> </span> 
					  <span class="imgSocial"> <a href="https://github.com/kierrapalmer"> <img src="assets/images/social/github-white.png" alt=""> <img src="assets/images/social/github-orange.png" class="hoverGit hoverSocial" alt=""> </a> </span> 
					  <span class="imgSocial"> <a href="https://codepen.io/kierrapalmer/"> <img src="assets/images/social/codepen-white.png" alt=""> <img src="assets/images/social/codepen-orange.png" class="hoverCode hoverSocial" alt=""> </a> </span> 
					</div>
					<div class="contact-info">
					  <h2>Contact Info</h2>
					  <i class="fas fa-map-marker-alt"></i> <a href="#" class="address">Sandy, UT </a><br />
					  <i class="fas fa-envelope"></i> <a href="mailto:kierrapalmer.com">kierrapalmer@aol.com </a><br />
					  <i class="fas fa-globe"></i> <a href="http://kierrapalmer.com">kierrapalmer.com</a> 
					</div>
				</div>
				<div class="col-lg-9 col-md-8 col-sm-7"> 
					<img class="hide free-map" src="assets/images/map-image.png" alt="US map"> 
					<div id="google-map" class="custom-map"></div>
					<div class="map-data d-none">                                                                    
		                <div class="marker" data-latt="40.569710" data-lngg="-111.897278"
		                    data-icon-color="assets/images/pin-scaled.png">
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
	</section>
	
</main>

<script src="https://maps.googleapis.com/maps/api/js?key=<?php echo GOOGLE_API; ?>&callback=init_map"></script>

<!-- Latest compiled and minified JavaScript --> 
<!--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" 
integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script> -->

</body>
</html>
