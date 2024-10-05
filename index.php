<?php
// Database connection
$connect = mysqli_connect("localhost", "root", "", "team_web");

// Check connection
if (!$connect) {
    die("Connection failed: " . mysqli_connect_error());
}

// Fetch all members from the `member_details` table
$sql = "SELECT * FROM member_details";
$result = $connect->query($sql);
?>

<!doctype html>
<!--
	Template:	 Unika - Responsive One Page HTML5 Template
	Author:		 imransdesign.com
	URL:		 http://imransdesign.com/
    Designed By: https://www.behance.net/poljakova
	Version:	1.0	
-->
<html lang="en-US">
	<head>

		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Abhiraksak - WE HELP IN SHADOWS</title>
		<meta name="description" content="Abhirakshak - We Work in Shadows">
		<meta name="keywords" content="HTML5, Bootsrtrap, One Page, Responsive, Template, Portfolio" />
		<meta name="author" content="imransdesign.com">

		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://cdn.jsdelivr.net/npm/emailjs-com@2.6.4/dist/email.min.js"></script>
        <!-- Google Fonts  -->
		<link href='http://fonts.googleapis.com/css?family=Roboto:400,700,500' rel='stylesheet' type='text/css'> <!-- Body font -->
		<link href='http://fonts.googleapis.com/css?family=Lato:300,400' rel='stylesheet' type='text/css'> <!-- Navbar font -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Sixtyfour+Convergence&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Shadows+Into+Light&display=swap" rel="stylesheet">

		<!-- Libs and Plugins CSS -->
		<link rel="stylesheet" href="inc/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="inc/animations/css/animate.min.css">
		<link rel="stylesheet" href="inc/font-awesome/css/font-awesome.min.css"> <!-- Font Icons -->
		<link rel="stylesheet" href="inc/owl-carousel/css/owl.carousel.css">
		<link rel="stylesheet" href="inc/owl-carousel/css/owl.theme.css">

		<!-- Theme CSS -->
        <link rel="stylesheet" href="css/reset.css">
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="css/mobile.css">
        <link rel="stylesheet" href="css/team.css">

		<!-- Skin CSS -->
		<link rel="stylesheet" href="css/skin/cool-gray.css">
        <!-- <link rel="stylesheet" href="css/skin/ice-blue.css"> -->
        <!-- <link rel="stylesheet" href="css/skin/summer-orange.css"> -->
        <!-- <link rel="stylesheet" href="css/skin/fresh-lime.css"> -->
        <!-- <link rel="stylesheet" href="css/skin/night-purple.css"> -->

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->

		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
        <script type="text/javascript"
        src="https://cdn.jsdelivr.net/npm/@emailjs/browser@4/dist/email.min.js">
        </script>
        <script type="text/javascript">
        (function(){
            emailjs.init({
                publicKey: "kWj7BnTl_1CbGf8AH",
            });
        })();
        </script>
	</head>

    <body data-spy="scroll" data-target="#main-navbar">
        <div class="page-loader"></div>  <!-- Display loading image while page loads -->
    	<div class="body">
        
            <!--========== BEGIN HEADER ==========-->
            <header id="header" class="header-main">

                <!-- Begin Navbar -->
                <nav id="main-navbar" class="navbar navbar-default navbar-fixed-top" role="navigation"> <!-- Classes: navbar-default, navbar-inverse, navbar-fixed-top, navbar-fixed-bottom, navbar-transparent. Note: If you use non-transparent navbar, set "height: 98px;" to #header -->

                  <div class="container">

                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                      </button>
                      <!--
                      <a class="navbar-brand page-scroll" href="index.php">Abhirakshak</a> -->
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav navbar-right">
                            <li><a class="page-scroll" href="body">Home</a></li>
                            <li><a class="page-scroll" href="#about-section">About</a></li>
                            <li><a class="page-scroll" href="#services-section">Services</a></li>
                            
                            <li><a class="page-scroll" href="#team-section">Team</a></li>                            
                         
                            <li><a class="page-scroll" href="#contact-section">Contact</a></li>
                        </ul>
                    </div><!-- /.navbar-collapse -->
                  </div><!-- /.container -->
                </nav>
                <!-- End Navbar -->

            </header>
            <!-- ========= END HEADER =========-->
            
            
            
            
        	<!-- Begin text carousel intro section -->
			<section id="text-carousel-intro-section" class="parallax" data-stellar-background-ratio="0.5" style="background-image: url(img/partners/bg.jpg); ">
				
				<div class="container">
					<div class="caption text-center text-white" data-stellar-ratio="0.7">

						<div id="owl-intro-text" class="owl-carousel">
							
							
							<div class="item">
								<h1 style="font-family:Shadows Into Light; color:red; font-size:100px">Abhiraksak</h1>
								<p style=" font-family:Playfair Display; font-size:large">We Work in Shadows</p>
								<div class="extra-space-l"></div>
								<a class="btn btn-blank" href="https://discord.gg/yJYbjBFx" target="_blank" role="button">View More!</a>
							</div>
                            <div class="item">
								<h1 style="font-family:Shadows Into Light; color:red; font-size:100px">Abhiraksak</h1>
								<p style=" font-family:Playfair Display; font-size:large">We Work in Shadows</p>
								<div class="extra-space-l"></div>
								<a class="btn btn-blank" href="https://discord.gg/yJYbjBFx" target="_blank" role="button">View More!</a>
							</div>
                            
						</div>

					</div> <!-- /.caption -->
				</div> <!-- /.container -->

			</section>
			<!-- End text carousel intro section -->
                
                
                
                
            <!-- Begin about section -->
			<section id="about-section" class="page bg-style1">
                <!-- Begin page header-->
                <div class="page-header-wrapper">
                    <div class="container">
                        <div class="page-header text-center wow fadeInUp" data-wow-delay="0.3s">
                            <h2>About</h2>
                            <div class="devider"></div>
                            <p class="subtitle" style="font-size: 25px; font-family:Playfair Display">Abhiraksak is a pioneering and dynamic team excelling in Hackathons, particularly in the domains of Ethical Hacking, Cybersecurity, and Web Development. We bring together passionate individuals with diverse skills in Programming, Cybersecurity, and Innovative Problem-Solving. Our mission is to create innovative solutions while adhering to the principles of Ethical Hacking, ensuring that our work promotes Security and Integrity in Digital Environments. By blending cutting-edge technology with a commitment to safeguarding Digital Realms, we empower a Safer Digital World for all.</p>
                        </div>
                    </div>
                </div>
                <!-- End page header-->

                <!-- Begin rotate box-1 -->
                <div class="rotate-box-1-wrapper">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-3 col-sm-6">
                                <a href="#" class="rotate-box-1 square-icon wow zoomIn" data-wow-delay="0">
                                    <span class="rotate-box-icon"><i class="fa fa-users"></i></span>
                                    <div class="rotate-box-info">
                                        <h4 style="font-family:Bebas Neue">Who We Are?</h4>
                                        <p style="font-size: 20px;font-family:Playfair Display"">We are Abhiraksak, a dynamic team excelling in hackathons with expertise in programming, cybersecurity, and innovative problem-solving.</p>
                                    </div>
                                </a>
                            </div>

                            <div class="col-md-3 col-sm-6">
                                <a href="#" class="rotate-box-1 square-icon wow zoomIn" data-wow-delay="0.2s">
                                    <span class="rotate-box-icon"><i class="fa fa-diamond"></i></span>
                                    <div class="rotate-box-info">
                                        <h4 style=" font-family:Bebas Neue">What We Do?</h4>
                                        <p style="font-size: 20px; font-family:Playfair Display">We excel in web, app, and cybersecurity work, while stealthily competing in hackathons. All while staying under the radar.</p>
                                        <!-- We do all kinds of web and app work -->
                                    </div>
                                </a>
                            </div>

                            <div class="col-md-3 col-sm-6">
                                <a href="#" class="rotate-box-1 square-icon wow zoomIn" data-wow-delay="0.4s">
                                    <span class="rotate-box-icon"><i class="fa fa-heart"></i></span>
                                    <div class="rotate-box-info">
                                        <h4 style=" font-family:Bebas Neue">Why We Do It?</h4>
                                        <p style="font-size: 20px; font-family:Playfair Display">Because we love the thrill of web, app, and cybersecurity challenges. We stay anonymous, but our impact is unmistakable.</p>
                                    </div>
                                </a>
                            </div>
                            
                            
                            
                        </div> <!-- /.row -->
                    </div> <!-- /.container -->
                </div>
                <!-- End rotate box-1 -->
                
                <div class="extra-space-l"></div>
                
                <!-- Begin page header--> 
                <div class="page-header-wrapper">
                    <div class="container">
                        <div class="page-header text-center wow fadeInUp" data-wow-delay="0.3s">
                            <h4 style="font-size: 40px; font-family:Bebas Neue">OUR SKILLS</h4>
                        </div>
                    </div>
                </div>
                <!-- End page header-->
                
                <!-- Begin Our Skills -->
                <div class="our-skills">
                	<div class="container">
                    	<div class="row">
                        
                        	<div class="col-sm-6">
                                <div class="skill-bar wow slideInLeft" data-wow-delay="0.2s">
                                    <div class="progress-lebel">
                                        <h6 style="font-size: 20px;font-family:Bebas Neue">Cyber Security</h6>
                                    </div>
                                    <div class="progress">
                                      <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%;">
                                      </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-sm-6">
                                <div class="skill-bar wow slideInRight" data-wow-delay="0.2s">
                                    <div class="progress-lebel">
                                        <h6 style="font-size: 20px;font-family:Bebas Neue">Mobile Development</h6>
                                    </div>
                                    <div class="progress">
                                      <div class="progress-bar" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 85%;">
                                      </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-sm-6">
                                <div class="skill-bar wow slideInLeft" data-wow-delay="0.4s">
                                    <div class="progress-lebel">
                                        <h6 style="font-size: 20px;font-family:Bebas Neue">Web Development</h6>
                                    </div>
                                    <div class="progress">
                                      <div class="progress-bar" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100" style="width: 95%;">
                                      </div>
                                    </div>
                                </div>
                            </div>
                           <!-- 
                            <div class="col-sm-6">
                                <div class="skill-bar wow slideInRight" data-wow-delay="0.4s">
                                    <div class="progress-lebel">
                                        <h6>Javascript</h6>
                                    </div>
                                    <div class="progress">
                                      <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%;">
                                      </div>
                                    </div>
                                </div>
                            </div>
        -->
                        </div> <!-- /.row -->
                    </div> <!-- /.container -->
                </div>
                <!-- End Our Skill -->
          </section>
          <!-- End about section -->

              
              
              
          <!-- Begin cta -->
         
          <!-- End cta -->

              
              
              
            <!-- Begin Services -->
            <section id="services-section" class="page text-center">
                <!-- Begin page header-->
                <div class="page-header-wrapper">
                    <div class="container">
                        <div class="page-header text-center wow fadeInDown" data-wow-delay="0.4s">
                            <h2 style="font-family:Bebas Neue; font-size:40px">Services</h2>
                            <div class="devider"></div>
                            <p class="subtitle" style="font-size: large;font-weight: bold; ">What we really know how</p>
                        </div>
                    </div>
                </div>
                <!-- End page header-->
            
                <!-- Begin roatet box-2 -->
                <div class="rotate-box-2-wrapper">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-3 col-sm-6">
                                <a href="#" class="rotate-box-2 square-icon text-center wow zoomIn" data-wow-delay="0">
                                    <span class="rotate-box-icon"><i class="fa fa-mobile"></i></span>
                                    <div class="rotate-box-info">
                                        <h4 style="font-size: 25px;font-family:Bebas Neue; ">App Development</h4>
                                        <p style="font-size: 17px;font-family:Playfair Display">Our app development is all about creating seamless and innovative applications. We harness the latest technologies to deliver apps that stand out in terms of functionality and user experience. We thrive on pushing the boundaries and continuously refining our processes to ensure that each app is user-friendly and high-performing. We build applications for all platforms, including Windows, Android, and iOS.</p>
                                    </div>
                                </a>
                            </div>
            
                            
            
                            <div class="col-md-3 col-sm-6">
                                <a href="#" class="rotate-box-2 square-icon text-center wow zoomIn" data-wow-delay="0.4s">
                                    <span class="rotate-box-icon"><i class="fa fa-cloud"></i></span>
                                    <div class="rotate-box-info">
                                        <h4 style="font-size: 25px;font-family:Bebas Neue;">Cloud Hosting</h4>
                                        <p style="font-size: 17px;font-family:Playfair Display">Our cloud hosting solutions are designed to provide unparalleled flexibility, scalability, and reliability. We utilize a network of virtual servers to ensure that your digital resources are always optimized and available when you need them. Our cloud hosting services offer faster load times, reduced downtime, and the convenience of accessing your data and applications from anywhere at any time. Whether you’re a business looking to scale or a developer seeking robust performance, our cloud hosting is tailored to meet your needs and ensure a seamless digital experience.</p>
                                    </div>
                                </a>
                            </div>
                            
                            <div class="col-md-3 col-sm-6">
                                <a href="#" class="rotate-box-2 square-icon text-center wow zoomIn" data-wow-delay="0.6s">
                                    <span class="rotate-box-icon"><i class="fa fa-pencil"></i></span>
                                    <div class="rotate-box-info">
                                        <h4 style="font-size: 25px;font-family:Bebas Neue;">Web Development</h4>
                                        <p style="font-size: 17px;font-family:Playfair Display">Our web development is all about creating sleek, efficient, and innovative websites. We blend cutting-edge technology with our expertise to deliver sites that are both user-friendly and high-performing. Our passion lies in pushing the boundaries and continuously refining our processes to ensure our websites stand out in terms of functionality and design.</p>
                                    </div>
                                </a>
                            </div>

                            <div class="col-md-3 col-sm-6">
                                <a href="#" class="rotate-box-2 square-icon text-center wow zoomIn" data-wow-delay="0.2s">
                                    <span class="rotate-box-icon"><i class="fa fa-pie-chart"></i></span>
                                    <div class="rotate-box-info">
                                        <h4 style="font-size: 25px;font-family:Bebas Neue;">Cyber Security</h4>
                                        <p style="font-size: 17px;font-family:Playfair Display">Coming Soon</p>
                                    </div>
                                </a>
                            </div>
                            
                        </div> <!-- /.row -->
                    </div> <!-- /.container -->
                    
                    <div class="container">
                        <!-- Cta Button -->
                        <div class="extra-space-l"></div>
                        <div class="text-center">

                        </div>
                    </div> <!-- /.container -->                       
                </div>
                <!-- End rotate-box-2 -->
            </section>
            <!-- End Services -->
              
              
              
              
            <!-- Begin testimonials -->
            <section id="testimonial-section">
                <div id="testimonial-trigger" class="testimonial text-white parallax" data-stellar-background-ratio="0.5" style="background-image: url(img/testimonial-bg.jpg);">
                    <div class="cover"></div>
                    <!-- Begin page header-->
                    <div class="page-header-wrapper">
                        <div class="container">
                            <div class="page-header text-center wow fadeInDown" data-wow-delay="0.4s">
                                <h2>Reviews</h2>
                                <div class="devider"></div>
                                <p class="subtitle">What people say about us</p>
                            </div>
                        </div>
                    </div>
                    <!-- End page header-->
                    <div class="container">
                        <div class="testimonial-inner center-block text-center">
                            <div id="owl-testimonial" class="owl-carousel">
                                <div class="item">
                                    <blockquote>
                                        <p>"This was my first experience with that team and outperformed my expectation! They know there stuff and I highly recommend them! A+++".</p>
                                        <footer><cite title="Source Title">Daryl Hodgeman</cite></footer>
                                    </blockquote>
                                </div>
                                <div class="item">
                                    <blockquote>
                                        <p>"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua."</p>
                                        <footer><cite title="Source Title">John Doe</cite></footer>
                                    </blockquote>
                                </div>
                                <div class="item">
                                    <blockquote>
                                        <p>"Quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                        proident, sunt in culpa qui officia deserunt mollit".</p>
                                        <footer><cite title="Source Title">John Doe</cite></footer>
                                    </blockquote>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End testimonials -->
                

                
                
            <!-- Begin Portfolio -->
            
            <!-- End portfolio -->
            
                
                
                
            <!-- Begin counter up -->
            
			<!-- End counter up -->
                
                
                
                
            <!-- Begin team-->
            <section id="team-section" class="page">
                <!-- Begin page header-->
                <div class="page-header-wrapper">
                    <div class="container">
                        <div class="page-header text-center wow fadeInDown" data-wow-delay="0.4s">
                            <h2>Our Team</h2>
                            <div class="devider"></div>
                            <p class="subtitle">Meet Our Team Members</p>
                        </div>
                    </div>
                </div>
                <!-- End page header-->
                <div class="container">
                <div class="row">
    <?php while ($row = $result->fetch_assoc()) { ?>
        <div class="col-md-3">
            <div class="card team-container wow bounceIn" data-wow-delay="0.2s" 
                 style="border: 15px solid #ffcccc; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);"> <!-- Added light red border -->
                <!-- Card Body -->
                <div class="card-body text-center">
                    <!-- Circular Profile Image Container -->
                    <div class="team-circle mb-3">
                        <!-- Fixed size for the image -->
                      <a href="solo_team.php?id=<?php echo $row['id']; ?>"><img src="img/team/<?php echo $row['photo']; ?>" alt="<?php echo $row['first_name']; ?>" 
                             class="team-photo rounded-circle" 
                             style="object-fit: cover; " /></a>  
                        
                        <!-- Member Name and Role in Single Card -->
                        <h5 class="card-title mt-2">
                            <a href="solo_team.php?id=<?php echo $row['id']; ?>" style="color: #333; text-decoration: none;">
                                <?php echo $row['first_name'] . " " . $row['last_name']; ?>
                            </a>
                        </h5>
                        <p class="card-text" style="color: #777; font-weight: bold;">
                            <?php echo $row['role']; ?>
                        </p>

                    </div>
                </div>
            </div>
        </div>
    <?php } ?>
</div>





    </div>


            </section>
            <!-- End team-->
                
                
                
                
            <!-- Begin partners -->
           
            <!-- End partners -->
                
                
                
                
            <!-- Begin prices section -->
			
			<!-- End prices section -->
                
                
                
                
            <!-- Begin social section -->
			<section id="social-section">
            
                 <!-- Begin page header-->
                <div class="page-header-wrapper">
                    <div class="container">
                        <div class="page-header text-center wow fadeInDown" data-wow-delay="0.4s">
                            <h2>Join Us</h2>
                            <div class="devider"></div>
                            <p class="subtitle" style="font-weight: bold; font-size:large">Follow us on social networks</p>
                        </div>
                    </div>
                </div>
                <!-- End page header-->
                
                <div class="container">
                	<ul class="social-list">
                		<li> <a href="https://www.linkedin.com/in/abhiraksak-a11881330/" class="rotate-box-1 square-icon text-center wow zoomIn" data-wow-delay="0.3s"><span class="rotate-box-icon"><i class="fa fa-linkedin"></i></span></a></li>
                		<li> <a href="https://x.com/abhiraksak" class="rotate-box-1 square-icon text-center wow zoomIn" data-wow-delay="0.4s"><span class="rotate-box-icon"><i class="fa fa-twitter"></i></span></a></li>
                		<li> <a href="https://www.instagram.com/abhiraksak?igsh=azNsdjRvMXpkejZx" class="rotate-box-1 square-icon text-center wow zoomIn" data-wow-delay="0.5s"><span class="rotate-box-icon"><i class="fa fa-instagram"></i></span></a></li>
                		<li> <a href="#" class="rotate-box-1 square-icon text-center wow zoomIn" data-wow-delay="0.6s"><span class="rotate-box-icon"><i class="fa fa-facebook"></i></span></a></li>
                		<li> <a href="#" class="rotate-box-1 square-icon text-center wow zoomIn" data-wow-delay="0.7s"><span class="rotate-box-icon"><i class="fa fa-github"></i></span></a></li>
                		<li> <a href="https://discord.gg/KwjRDfxYZt" class="rotate-box-1 square-icon text-center wow zoomIn" data-wow-delay="0.8s"><span class="rotate-box-icon"><i class="fa fa-discord"></i></span></a></li>                      
                    </ul>
                </div>
                
            </section>
            <!-- End social section -->
                
                
                
                
            <!-- Begin contact section -->
			<section id="contact-section" class="page text-white parallax" data-stellar-background-ratio="0.5" style="background-image: url(img/map-bg.jpg);">
            <div class="cover"></div>
            
                 <!-- Begin page header-->
                <div class="page-header-wrapper">
                    <div class="container">
                        <div class="page-header text-center wow fadeInDown" data-wow-delay="0.4s">
                            <h2>Contacts</h2>
                            <div class="devider"></div>
                            <p class="subtitle">All to contact us</p>
                        </div>
                    </div>
                </div>
                <!-- End page header-->
                
                <div class="contact wow bounceInRight" data-wow-delay="0.4s">
                    <div class="container">
                    	<div class="row">
                        
                            <div class="col-sm-6">
                                <div class="contact-info">
                                    <h4>Our Address</h4>
                                    <ul class="contact-address">
			                            <li><i class="fa fa-map-marker fa-lg"></i>SR NO 4A HADAPSAR,<br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PUNE MAHARASHTRA,<br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 411028</li>
			                            <li><i class="fa fa-phone"></i>&nbsp;+91 8698169897</li>
			                            
			                            <li><i class="fa fa-envelope"></i> abhiraksaka@gmail.com</li>
			                            
			                        </ul>
                                </div>
                                
                            </div>
                        
                            <div class="col-sm-6">
        <div class="contact-form">
            <h4>Write to us</h4>
            <form id="contactForm">
                <div class="form-group">
                    <input type="text" class="form-control input-lg" id="name" name="from_name" placeholder="Your Name" required>
                </div>
                <div class="form-group">
                    <input type="email" class="form-control input-lg" id="email" name="from_email" placeholder="E-mail" required>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control input-lg" id="subject" name="subject" placeholder="Subject" required>
                </div>
                <div class="form-group">
                    <textarea class="form-control input-lg" id="message" name="message" rows="5" placeholder="Message" required></textarea>
                </div>
                <button type="button" class="btn wow bounceInRight" id="sendButton" data-wow-delay="0.8s">Send</button>
            </form>
            <div id="statusMessage"></div>
        </div>
    </div>


                                                                                
                        </div> <!-- /.row -->
                    </div> <!-- /.container -->
                </div>
            </section>
            <!-- End contact section -->
                
                

                
            <!-- Begin footer -->
            <footer class="text-off-white">
            
                
                
                <div class="footer">
                    <div class="container text-center wow fadeIn" data-wow-delay="0.4s">
                        <p class="copyright">Copyright &copy; 2024 - Designed By Abhiraksak </p>
                        <a href="login.html"><p>Admin</p></a>
                    </div>
                </div>

            </footer>
            <!-- End footer -->

            <a href="#" class="scrolltotop"><i class="fa fa-arrow-up"></i></a> <!-- Scroll to top button -->
                                              
        </div><!-- body ends -->
        
        
        
        
        <!-- Plugins JS -->
        
		<script src="inc/jquery/jquery-1.11.1.min.js"></script>
		<script src="inc/bootstrap/js/bootstrap.min.js"></script>
		<script src="inc/owl-carousel/js/owl.carousel.min.js"></script>
		<script src="inc/stellar/js/jquery.stellar.min.js"></script>
		<script src="inc/animations/js/wow.min.js"></script>
        <script src="inc/waypoints.min.js"></script>
		<script src="inc/isotope.pkgd.min.js"></script>
		<script src="inc/classie.js"></script>
		<script src="inc/jquery.easing.min.js"></script>
		<script src="inc/jquery.counterup.min.js"></script>
		<script src="inc/smoothscroll.js"></script>
        
		<!-- Theme JS -->
		<script src="js/theme.js"></script>
        <script src="js/popup.js"></script>
        <script src="js/contact.js"></script>
    </body> 
        
            
</html>
