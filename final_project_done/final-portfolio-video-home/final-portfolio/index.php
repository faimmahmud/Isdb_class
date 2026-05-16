<?php
declare(strict_types=1);

require_once __DIR__ . '/includes/config.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
   
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
 
    <!-- Site Metas -->
    <title>faim mahmud - Professional Web Developer Portfolio</title>  
    <meta name="keywords" content="faim mahmud, web developer, PHP developer, Bootstrap developer, JavaScript developer, portfolio">
    <meta name="description" content="Professional portfolio of faim mahmud, a web developer building polished front-end interfaces and dependable PHP/MySQL contact systems.">
    <meta name="author" content="faim mahmud">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Site CSS -->
    <link rel="stylesheet" href="style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css?v=final-portfolio">
	<script src="js/modernizr.js"></script> <!-- Modernizr -->

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body id="page-top" class="politics_version">

    <!-- LOADER -->
    <div id="preloader">
        <div class="loader">
			<span></span>
			<span></span>
			<span></span>
			<span></span>
		</div>
    </div><!-- end loader -->
    <!-- END LOADER -->
	
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger brand-text" href="#page-top">faim mahmud</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav text-uppercase ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger active" href="#home">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#about">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#services">Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#portfolio">Portfolio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#testimonials">Skills</a>
            </li>
			<li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#blog">Process</a>
            </li>
			<li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#contact">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
	
	<div id="home" class="ct-header ct-header--slider ct-slick-custom-dots">
		<div class="ct-slick-homepage" data-arrows="true" data-autoplay="false">

			<div class="ct-header tablex item" data-background="uploads/login_home.mp4">
				<div class="ct-u-display-tablex">
					<div class="inner">
						<div class="container">
							<div class="row">
								<div class="col-md-8 col-lg-8 slider-inner">
									<h1 class="big animated">Hello I'm faim mahmud</h1>
									<p class="animated">A professional web developer crafting polished interfaces and dependable PHP/MySQL systems for serious digital presence.</p>
									<a class="btn-new from-middle animated js-scroll-trigger" href="#portfolio">View Work</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="ct-header tablex item" data-background="uploads/login_home.mp4">
				<div class="ct-u-display-tablex">
					<div class="inner">
						<div class="container">
							<div class="row">
								<div class="col-md-8 col-lg-8 slider-inner">
									<h1 class="big animated">I Build Premium Websites</h1>
									<p class="animated">HTML5, CSS3, Bootstrap, JavaScript, jQuery, PHP, and MySQL working together in clean responsive experiences.</p>
									<a class="btn-new from-middle animated js-scroll-trigger" href="#services">My Services</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="ct-header tablex item" data-background="uploads/login_home.mp4">
				<div class="ct-u-display-tablex">
					<div class="inner">
						<div class="container">
							<div class="row">
								<div class="col-md-8 col-lg-8 slider-inner">
									<h1 class="big animated">Lead-Ready Web Systems</h1>
									<p class="animated">I shape websites that create trust, guide action, and support real contact workflows behind the front-end polish.</p>
									<a class="btn-new from-middle animated js-scroll-trigger" href="#contact">Start a Brief</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			
		</div><!-- .ct-slick-homepage -->
	</div><!-- .ct-header --> 

    <div id="about" class="section wb">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="message-box">                        
                        <h2>About faim mahmud.</h2>
                        <p>I am a professional web developer focused on polished front-end interfaces and practical backend systems. My work sits where visual trust, responsive detail, and maintainable PHP/MySQL workflows meet.</p>
						<p>I build websites for portfolios, business brands, service providers, and digital projects that need a serious first impression and a contact path that actually works.</p>
						<p>My core stack includes HTML5, CSS3, Bootstrap, JavaScript, jQuery, PHP, and MySQL, with attention to performance, clean structure, and launch-ready presentation.</p>
						
						<ul>
							<li><b>Core Stack</b></li>
							<li><a href="#testimonials" class="js-scroll-trigger" title="HTML5"><i class="fa fa-html5" aria-hidden="true"></i></a></li>
							<li><a href="#testimonials" class="js-scroll-trigger" title="CSS3"><i class="fa fa-css3" aria-hidden="true"></i></a></li>
							<li><a href="#testimonials" class="js-scroll-trigger" title="JavaScript"><i class="fa fa-code" aria-hidden="true"></i></a></li>
							<li><a href="#testimonials" class="js-scroll-trigger" title="PHP"><i class="fa fa-cogs" aria-hidden="true"></i></a></li>
							<li><a href="#testimonials" class="js-scroll-trigger" title="MySQL"><i class="fa fa-database" aria-hidden="true"></i></a></li>
							<li><a href="mailto:<?= e(SITE_EMAIL); ?>" title="<?= e(SITE_EMAIL); ?>"><i class="fa fa-envelope" aria-hidden="true"></i></a></li>
						</ul>

						<a class="btn-new from-middle animated js-scroll-trigger" href="#contact">Contact Me</a>
                    </div><!-- end messagebox -->
                </div><!-- end col -->

                <div class="col-md-6">
                    <div class="right-box-pro wow fadeIn">
						<img src="images/about-1.png" alt="" class="img-fluid img-rounded fat-ab">
                    </div><!-- end media -->
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section -->
	
    <div id="services" class="section lb">
        <div class="container">
            <div class="section-title text-center">
                <h3>Services</h3>
                <p>Focused web development services for portfolios, business websites, and practical PHP/MySQL systems.</p>
            </div><!-- end title -->

            <div class="row">
				<div class="col-md-4">
                    <div class="services-inner-box">
						<div class="ser-icon">
							<i class="flaticon-idea-1"></i>
						</div>
						<h2>Personal Portfolio</h2>
						<p>One-page portfolio systems with sharp positioning, selected work, skills, and a clear path for serious contact.</p>
					</div>
                </div><!-- end col -->
				<div class="col-md-4">
                    <div class="services-inner-box">
						<div class="ser-icon">
							<i class="flaticon-discuss-issue"></i>
						</div>
						<h2>Business Website</h2>
						<p>Responsive websites for agencies, service brands, and local businesses that need credibility and fast action.</p>
					</div>
                </div><!-- end col -->
				<div class="col-md-4">
                    <div class="services-inner-box">
						<div class="ser-icon">
							<i class="flaticon-idea"></i>
						</div>
						<h2>Web Strategy</h2>
						<p>Page flow, content structure, and conversion sections shaped around the audience and the main business goal.</p>
					</div>
                </div><!-- end col -->
				<div class="col-md-4">
                    <div class="services-inner-box">
						<div class="ser-icon">
							<i class="flaticon-seo"></i>
						</div>
						<h2>PHP & MySQL</h2>
						<p>Contact forms, database storage, validation, and clean backend foundations for practical web workflows.</p>
					</div>
                </div><!-- end col -->
                <div class="col-md-4">
                    <div class="services-inner-box">
						<div class="ser-icon">
							<i class="flaticon-development"></i>
						</div>
						<h2>Responsive UI</h2>
						<p>Mobile, tablet, and desktop layouts refined with Bootstrap, CSS, spacing, hierarchy, and browser-friendly behavior.</p>
					</div>
                </div><!-- end col -->
				<div class="col-md-4">
                    <div class="services-inner-box">
						<div class="ser-icon">
							<i class="flaticon-process"></i>
						</div>
						<h2>Launch Readiness</h2>
						<p>SEO basics, performance checks, organized assets, form testing, and final polish before a website goes live.</p>
					</div>
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section -->
	
	<div id="portfolio" class="section lb">
		<div class="container">
			<div class="section-title text-center">
                <h3>Portfolio</h3>
                <p>Selected project directions from my portfolio content, fitted into the original ZIP 1 gallery layout.</p>
            </div><!-- end title -->
			
			<div class="gallery-menu text-center row">
				<div class="col-md-12">
					<div class="button-group filter-button-group">
						<button class="btn-new from-middle animated active" data-filter="*">All</button>
						<button class="btn-new from-middle animated" data-filter=".gal_a">Web Development</button>
						<button class="btn-new from-middle animated" data-filter=".gal_b">Front-End Polish</button>
						<button class="btn-new from-middle animated" data-filter=".gal_c">PHP/MySQL</button>
					</div>
				</div>
			</div>
			
			<div class="gallery-list row">
				<div class="col-md-4 col-sm-6 gallery-grid gal_a gal_b">
					<div class="gallery-single spi-hr fix hover">
						<img src="uploads/gallery_img-01.jpg" class="img-fluid" alt="Image">
						<div class="text-hover">
							<h3>Royal Atlas Experience</h3>
							<h4>Travel platform</h4>
						</div>
						<div class="img-overlay">
							<a href="uploads/gallery_img-01.jpg" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="fa fa-picture-o"></i></a>
						</div>
					</div>
				</div>
				
				<div class="col-md-4 col-sm-6 gallery-grid gal_c gal_b">
					<div class="gallery-single spi-hr fix">
						<img src="uploads/gallery_img-02.jpg" class="img-fluid" alt="Image">
						<div class="text-hover">
							<h3>Founder Presence System</h3>
							<h4>Private brand</h4>
						</div>
						<div class="img-overlay">
							<a href="uploads/gallery_img-02.jpg" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="fa fa-picture-o"></i></a>
						</div>
					</div>
				</div>
				
				<div class="col-md-4 col-sm-6 gallery-grid gal_a gal_c">
					<div class="gallery-single spi-hr fix">
						<img src="uploads/gallery_img-03.jpg" class="img-fluid" alt="Image">
						<div class="text-hover">
							<h3>Client Brief Pipeline</h3>
							<h4>Lead engine</h4>
						</div>
						<div class="img-overlay">
							<a href="uploads/gallery_img-03.jpg" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="fa fa-picture-o"></i></a>
						</div>
					</div>
				</div>
				
				<div class="col-md-4 col-sm-6 gallery-grid gal_b gal_a">
					<div class="gallery-single spi-hr fix">
						<img src="uploads/gallery_img-04.jpg" class="img-fluid" alt="Image">
						<div class="text-hover">
							<h3>Executive Brand Site</h3>
							<h4>Authority page</h4>
						</div>
						<div class="img-overlay">
							<a href="uploads/gallery_img-04.jpg" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="fa fa-picture-o"></i></a>
						</div>
					</div>
				</div>
				
				<div class="col-md-4 col-sm-6 gallery-grid gal_a gal_c">
					<div class="gallery-single spi-hr fix">
						<img src="uploads/gallery_img-05.jpg" class="img-fluid" alt="Image">
						<div class="text-hover">
							<h3>Luxury Service Website</h3>
							<h4>Business presence</h4>
						</div>
						<div class="img-overlay">
							<a href="uploads/gallery_img-05.jpg" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="fa fa-picture-o"></i></a>
						</div>
					</div>
				</div>
				
				<div class="col-md-4 col-sm-6 gallery-grid gal_c gal_a">
					<div class="gallery-single spi-hr fix">
						<img src="uploads/gallery_img-06.jpg" class="img-fluid" alt="Image">
						<div class="text-hover">
							<h3>Data-Enabled Product</h3>
							<h4>PHP/MySQL workflow</h4>
						</div>
						<div class="img-overlay">
							<a href="uploads/gallery_img-06.jpg" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="fa fa-picture-o"></i></a>
						</div>
					</div>
				</div>
			</div>
			</div>
		</div>
	</div>
	
	 <div id="testimonials" class="section wb">
        <div class="container">
            <div class="section-title text-center">
                <h3>Skills</h3>
                <p>A focused technical stack for polished, practical websites that are easy to maintain after launch.</p>
            </div><!-- end title -->

            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="testi-carousel owl-carousel owl-theme">
                        <div class="testimonial clearfix">
                            <div class="desc">
                                <h3> HTML5</h3>
                                <p class="lead">Semantic structure, clear sections, accessible forms, and SEO-ready markup for portfolio and business websites.</p>
								<i class="fa fa-quote-right"></i>
                            </div>
                            <div class="testi-meta">
                                <img src="uploads/testi_01.png" alt="" class="img-fluid">
                                <h4>Structure </h4>
                            </div>
                            <!-- end testi-meta -->
                        </div>
                        <!-- end testimonial -->

                        <div class="testimonial clearfix">
                            <div class="desc">
                                <h3> CSS3</h3>
                                <p class="lead">Responsive spacing, readable typography, hover states, visual polish, and refined details that make a site feel premium.</p>
								<i class="fa fa-quote-right"></i>
                            </div>
                            <div class="testi-meta">
                                <img src="uploads/testi_02.png" alt="" class="img-fluid">
                                <h4>Presentation </h4>
                            </div>
                            <!-- end testi-meta -->
                        </div>
                        <!-- end testimonial -->

                        <div class="testimonial clearfix">
                            <div class="desc">
                                <h3> Bootstrap</h3>
                                <p class="lead">Grid systems, responsive navigation, utility classes, and fast layout foundations for reliable delivery.</p>
								<i class="fa fa-quote-right"></i>
                            </div>
                            <div class="testi-meta">
                                <img src="uploads/testi_03.png" alt="" class="img-fluid">
                                <h4>Responsive UI </h4>
                            </div>
                            <!-- end testi-meta -->
                        </div>
                        <!-- end testimonial -->
                        <div class="testimonial clearfix">
                            <div class="desc">
                                <h3> JavaScript</h3>
                                <p class="lead">Interactive behavior, smooth navigation, dynamic feedback, and clean front-end enhancements for real users.</p>
								<i class="fa fa-quote-right"></i>
                            </div>
                            <div class="testi-meta">
                                <img src="uploads/testi_01.png" alt="" class="img-fluid">
                                <h4>Interaction </h4>
                            </div>
                            <!-- end testi-meta -->
                        </div>
                        <!-- end testimonial -->

                        <div class="testimonial clearfix">
                            <div class="desc">
                                <h3> jQuery</h3>
                                <p class="lead">Practical AJAX form handling, animation support, and classic PHP website enhancements without heavy tooling.</p>
								<i class="fa fa-quote-right"></i>
                            </div>
                            <div class="testi-meta">
                                <img src="uploads/testi_02.png" alt="" class="img-fluid">
                                <h4>Enhancement </h4>
                            </div>
                            <!-- end testi-meta -->
                        </div>
                        <!-- end testimonial -->

                        <div class="testimonial clearfix">
                            <div class="desc">
                                <h3> PHP + MySQL</h3>
                                <p class="lead">Validated contact flows, prepared statements, database storage, and backend foundations ready for future admin features.</p>
								<i class="fa fa-quote-right"></i>
                            </div>
                            <div class="testi-meta">
                                <img src="uploads/testi_03.png" alt="" class="img-fluid">
                                <h4>Backend </h4>
                            </div>
                            <!-- end testi-meta -->
                        </div><!-- end testimonial -->
                    </div><!-- end carousel -->
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section -->
	
	<div id="blog" class="section lb">
		<div class="container">
			<div class="section-title text-center">
                <h3>Process</h3>
                <p>How I turn a website idea into a polished, responsive, lead-ready digital presence.</p>
            </div><!-- end title -->
			
			<div class="row">
				<div class="col-md-4 col-sm-6 col-lg-4">
					<figure class="snip1401">
						<img src="uploads/blog-01.jpg" alt="" />
						<figcaption>
							<h3>Diagnose</h3>
							<p>Clarify the audience, offer, credibility gap, and the highest-value action the website must support.</p>
							<ul>
                                <li>01</li>
                                <li>Strategy</li>
                                <li>Scope</li>
                            </ul>
						</figcaption>
						<i class="ion-ios-home-outline"></i>
						<a href="#"></a>
					</figure>
				</div>
				<div class="col-md-4 col-sm-6 col-lg-4">
					<figure class="snip1401 hover">
						<img src="uploads/blog-02.jpg" alt="" />
						<figcaption>
							<h3>Design & Develop</h3>
							<p>Build the page rhythm, responsive layout, interaction layer, and PHP/MySQL functionality as one system.</p>
							<ul>
                                <li>02</li>
                                <li>Front End</li>
                                <li>Backend</li>
                            </ul>
						</figcaption>
						<i class="ion-ios-home-outline"></i>
						<a href="#"></a>
					</figure>
				</div>
				<div class="col-md-4 col-sm-6 col-lg-4">
					<figure class="snip1401">
						<img src="uploads/blog-03.jpg" alt="" />
						<figcaption>
							<h3>Refine & Launch</h3>
							<p>Test responsiveness, form behavior, performance, accessibility basics, and final presentation before delivery.</p>
							<ul>
                                <li>03</li>
                                <li>QA</li>
                                <li>Launch</li>
                            </ul>
						</figcaption>
						<i class="ion-ios-home-outline"></i>
						<a href="#"></a>
					</figure>
				</div>
			</div>
			
		</div>
	</div>

    <div id="contact" class="section db">
        <div class="container">
            <div class="section-title text-center">
                <h3>Contact Me</h3>
                <p>Tell me what you are building, or email me directly at <a href="mailto:<?= e(SITE_EMAIL); ?>"><?= e(SITE_EMAIL); ?></a>.</p>
            </div><!-- end title -->

            <div class="row">
                <div class="col-md-12">
                    <div class="contact_form">
                        <div id="form-message"></div>
                        <form id="contactForm" name="sentMessage" action="api/contact.php" method="post" novalidate="novalidate">
							<input type="hidden" name="csrf_token" value="<?= e(csrf_token()); ?>">
							<input type="hidden" name="service" value="Portfolio website">
							<input type="hidden" name="budget" value="Need guidance">
							<input type="hidden" name="source_page" value="final-portfolio-home">
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<input class="form-control" id="name" name="name" type="text" placeholder="Your Name" required="required" data-validation-required-message="Please enter your name.">
										<p class="help-block text-danger"></p>
									</div>
									<div class="form-group">
										<input class="form-control" id="email" name="email" type="email" placeholder="Your Email" required="required" data-validation-required-message="Please enter your email address.">
										<p class="help-block text-danger"></p>
									</div>
									<div class="form-group">
										<input class="form-control" id="phone" name="phone" type="tel" placeholder="Your Phone (Optional)">
										<p class="help-block text-danger"></p>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<textarea class="form-control" id="message" name="message" placeholder="Your Message" required="required" minlength="20" data-validation-required-message="Please enter a message." data-validation-minlength-message="Please write at least 20 characters."></textarea>
										<p class="help-block text-danger"></p>
									</div>
								</div>
								<div class="clearfix"></div>
								<div class="col-lg-12 text-center">
									<div id="success"></div>
									<button id="sendMessageButton" class="sim-btn btn-new from-middle animated" data-text="Send Message" type="submit">Send Message</button>
								</div>
							</div>
						</form>
                    </div>
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section -->

    <div class="copyrights">
        <div class="container">
            <div class="footer-distributed">
                <div class="footer-left">
                    <p class="footer-company-name">All Rights Reserved. &copy; <?= date('Y'); ?> <a href="#page-top">faim mahmud</a> | Professional Web Developer</p>
                </div>
            </div>
        </div><!-- end container -->
    </div><!-- end copyrights -->

    <a href="#" id="scroll-to-top" class="dmtop global-radius"><i class="fa fa-angle-up"></i></a>

    <!-- ALL JS FILES -->
    <script src="js/all.js?v=final-portfolio"></script>
	<!-- Camera Slider -->
	<script src="js/jquery.mobile.customized.min.js"></script>
	<script src="js/jquery.easing.1.3.js"></script> 
	<script src="js/parallaxie.js"></script>
	<script src="js/slick.min.js"></script>
	<script src="js/animated-slider.js"></script>
	<!-- Contact form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js?v=final-portfolio"></script>
    <!-- ALL PLUGINS -->
    <script src="js/custom.js"></script>
</body>
</html>
