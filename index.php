
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="image/png" sizes="96x96" href="images/favicon-96x96.png">
        <link rel="shortcut icon" href="images/favicon-96x96.png">
        <link rel="apple-touch-icon" sizes="180x180" href="images/favicon-96x96.png">
        <title>Waqtcal - Testing and Calibration, Supply of Instruments</title>
        <link rel="icon" type="image/png" sizes="96x96" href="images/favicon-96x962.png">
        <link href="css/font-awesome.min.css" rel="stylesheet">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <link href="css/responsive.css" rel="stylesheet">
        <link href="css/navigate.css" rel="stylesheet">
        <link rel="stylesheet" href="css/animate.css">
        <link href="css/preloader.css" rel="stylesheet">
        <link href="fonts/stylesheet.css" rel="stylesheet">
        
        <script src="js/jquery.min.js"></script>
        <script src="js/custom.js"></script>

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    
    </head>
    <body>
    <!--Preloader-->
        <div id="loading" align="center">
            <div id="loading-center" align="center">
                <div id="load-img" class="img-responsive" align="center">
                    <img src="images/logofade.png">
                </div>
                <div id="loading-center-absolute" align="center">
                    <div class="object" id="object_one"></div>
                    <div class="object" id="object_two"></div>
                    <div class="object" id="object_three"></div>
                </div>
            </div>
        </div>
    <!--Preloader ends-->

    <!--Header-->
    <div class="container">
        <nav id="header_nav" class="navbar ">
            <div class="container" id="menu-container">
                <div class="navbar-header">
                    <header>
                        <a class="navbar-brand "  id="logo" href="index.php"> <img src="images/logo.png"  alt=""></a>
                        <a style="float:left"  id="logo-mobile" href="index.php"> <img src="images/logo-mobile.png"  alt=""></a>
                        <div class="mainHeader">
                            <div class="open-menu">
                                <div class="burger-icon">
                                    <div class="burger-container"> <span class="burger-bun-top"></span> <span class="burger-filling"></span> <span class="burger-bun-bot"></span> </div>
                                </div>
                            </div>
                            <div class="menu f-rht">
                                <div class="close-menu"> <span class="bar"></span> <span class="bar"></span> </div>
                                <ul class="js-menu">
                                    <li><a href="aboutus.php">about us</a></li>
                                    <li class="fill-menu"><a href="#" onClick="menu_toggle('#sub-menu1')">Services <b class="caret"> </b></a>
                                        <ul class="sub-menu " id="sub-menu1">
                                            <li><a href="testing&calibration.php">Testing & Calibration</a></li>
                                            <li><a href="supplyofinstruments.php">Supply of Instruments</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a href="labs.php">Labs</a></li>
                                    <li><a href="certifications.php">certifications</a></li>
                                    <li><a href="enquiry.php">enquiry</a></li>
                                    <li><a href="careers.php">careers</a></li>
                                    <li><a href="contactus.php">contact us</a></li>
                                </ul>
                            </div>
                        </div>
                    </header>
                </div>
            </div>
        </nav>
    </div>
    <!--Header ends-->
    <!-- start  bootstrap-touch-slider Slider -->
    <div class="container-fluid" style="overflow-x: hidden">
	<div class="row">
            <div id="sg-carousel" class="carousel slide carousel-fade" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target=".carousel" data-slide-to="0" class="active"></li>
                    <li data-target=".carousel" data-slide-to="1" class=""></li>
                </ol>
                <!-- Carousel item1 -->
                <div class="carousel-inner carousel-zoom">
                    <div class="item active"><img class="img-responsive" src="images/slider2.jpg" alt="">
                        <div class="carousel-caption">
                            <h1 data-animation="animated zoomInRight" class="cap-txt">Ticking to calibration values</h1>
                                <p data-animation="animated bounceInUp">Deliver Quality Services</p>
                            <a href="aboutus.php" style="background:none" target="_blank"><button data-animation="animated bounceInUp" class="button button--tamaya button--border-thick" data-text="View"><span>View</span></button></a>
                        </div>
                    </div>
                    <!-- Carousel item1 -->
                    <!-- Carousel item2 -->
                    <div class="item"><img class="img-responsive" src="images/slider1N.png" alt="">
                        <div class="carousel-caption animated slideInLeft">
                            <h1 data-animation="animated zoomInLeft" class="cap-txt">Ticking to calibration values</h1>
                            <p data-animation="animated bounceInDown">Deliver Quality Services</p>
                            <a href="aboutus.php" style="background:none" target="_blank"><button data-animation="animated bounceInUp" class="button button--tamaya button--border-thick" data-text="Enquire"><span>Enquire</span></button></a>
                        </div>
                    </div>
                    <!-- Carousel item2 -->
                    <!-- Carousel nav -->
                    <a class="carousel-control left" href="#sg-carousel" data-slide="prev"></a>
                    <a class="carousel-control right" href="#sg-carousel" data-slide="next"></a>
                </div> 
            </div>
        </div>
    </div>
    <!-- End  bootstrap-touch-slider Slider -->
    <!--About us-->
    <div class="container" id="ab_container">
        <section class="whoweare-section" id="clickmove">
            <h3 class="text-center divideN zoomIn wow" data-wow-duration="0.5s" data-wow-delay=".5s">Who <span class="heading-bolder">We Are</span></h3>
            <div class="row">
                <section class="row1 zoomIn wow" data-wow-duration="0.5s" data-wow-delay=".5s">
                        <p>As our tagline suggests "<span id="ticking">Ticking To Calibration Values</span>" Waqtcal values the delivery of value for Money (VFM) for the services it rendered.</p>
                        <p>Al Waqt Calibration Weights & Metrology provides the complete calibration and professional solutions on onsite, at your premises or in our laboratory. Customer Service is high up on our list of priorities and our dedicated staffs strive to provide the most accurate, reliable and professional service which is backed up with fast turnaround & calibration of your important equipment.</P>
                        <p>A well organized state-of-the-art-laboratory equipped with most modern equipments, technically qualified technicians and quality Engineers satisfying the certification needs of the customer.</p>
                        <p>WAQTCAL is a Calibration company having ISO 9001-2008 Quality Management Systems certified by SGS and IEC/ISO 17025-2005 Lab Management Systems accredited by Dubai Accreditation Center (DAC).</p>
                </section>    
            </div>
        </section>
    </div>
    <!--About us ends-->
    <!--Our Vision and mission-->
    <div class="container-fluid" style="overflow-x:hidden">
        <div class="row">
            <div class="box1 zoomIn wow" data-wow-duration="0.5s" data-wow-delay=".5s">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="row">
                        <div class="whoweare-img">
                            <h5 class="text-center  wow zoomIn" data-wow-duration="0.5s" data-wow-delay=".5s">Our Mission</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="row">
                        <div class="whoweare zoomIn wow" data-wow-duration="0.5s" data-wow-delay=".5s">
                            <p>
                                Our Mission is to provide the highest quality service with outstanding values and thereby become a world class company in Calibration & Testing industry. This will be achieved through efficient & accurate tesing methods, ongoing developement, evaluation and implementation of quality control methods, continual evaluation of revision and testing procedures inline with national or international standards.
                            </p>
                            <div class="diamond1"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="box2 zoomIn wow" data-wow-duration="0.5s" data-wow-delay=".5s">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 float-disable box2-a">
                    <div class="row">
                        <div class="ourstrength zoomIn wow" data-wow-duration="0.5s" data-wow-delay=".5s">
                            <p id="vision_t">
                                Our Vision is to ensure customer satisfaction,by ensuring highest quality of service, being an employee friendly organization, being highly effective and fast moving organization and thereby mazimize the portability of share owners.
                            </p>
                            <div class="diamond2"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 float-disable box2-b">
                    <div class="">
                        <div class="row">
                            <div class="ourstrength-img">
                                <h5 class="text-center  wow zoomIn" data-wow-duration="0.5s" data-wow-delay=".5s">Our Vision</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Our vision and mission ends-->
    <!--Technical competence-->
     <div class="container" id="tc_container">
        <section class="competance-section" id="clickmove">
            <h3 class="text-center divideN zoomIn wow" data-wow-duration="0.5s" data-wow-delay=".5s">Technical <span class="heading-bolder">Competence</span></h3>
            <div class="row" style="margin-top:3%;">
                <div class="col-md-3 col-sm-6 zoomIn wow" data-wow-duration="0.5s" data-wow-delay=".5s" align="center">
                    <div class="ab_div">
                        <div class="tc_hi">
                            <img src="images/personnelN.png">
                        </div>
                        <h3 class="tc_h">Personnel</h3>
                        <div class="tc_t">
                            <p>WAQTCAL follows well defined policies and procedures for identifying its personnel which involves clear planning and its implementation.</p>
                        </div>
                        <div align="center"><a href="personnel.php" target="_blank"><button type="button" class="tc_button">Read More</button></a></div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 zoomIn wow" data-wow-duration="0.5s" data-wow-delay=".5s" align="center">
                    <div class="ab_div">
                        <div class="tc_hi">
                            <img src="images/accommodationN.png">
                        </div>
                        <h3 class="tc_h">Accommodation</h3>
                        <div class="tc_t">
                            <p>Technical requirements of accommodation and environmental conditions affecting testing/ calibration are well documented and controlled.</p>
                        </div>
                        <div align="center"><a href="accommodation.php" target="_blank"><button type="button" class="tc_button">Read More</button></a></div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 zoomIn wow" data-wow-duration="0.5s" data-wow-delay=".5s" align="center">
                    <div class="ab_div">
                        <div class="tc_hi">
                            <img src="images/equipmentsN.png">
                        </div>
                        <h3 class="tc_h">Equipments</h3>
                        <div class="tc_t">
                            <p>WAQTCAL makes sure the availability of necessary equipment. The equipment and software shall be suitable for achieving the required accuracy.</p>
                        </div>
                        <div align="center"><a href="equipments.php" target="_blank"><button type="button" class="tc_button">Read More</button></a></div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 zoomIn wow" data-wow-duration="0.5s" data-wow-delay=".5s" align="center">
                    <div class="ab_div">
                        <div class="tc_hi">
                            <img src="images/calibration-methodN.png">
                        </div>
                        <h3 class="tc_h">Calibration Methods</h3>
                        <div class="tc_t">
                            <p>Uses appropriate methods for tests/calibration including transport, storage, availability of up to date instructions etc..</p>
                        </div>
                        <div align="center"><a href="calibrationmethods.php" target="_blank"><button type="button" class="tc_button">Read More</button></a></div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!--Technical competence ends-->
    <!--Our services-->
    <div id="service_p" style="background-image: url(images/slidercovern1.jpg);" >
        <div id="service_sub" style="">
	<div class="container" id="s_container">
	<section class="service-section">
            <h3 class="text-center zoomIn wow" data-wow-duration="0.5s" data-wow-delay=".5s">Our <span class="heading-bolder">Services</span></h3>
            <p class="text-center divideN zoomIn wow" data-wow-duration="0.5s" data-wow-delay=".5s" id="services_sub_h">Testing & Calibration, Supply of Instruments</p>
		<div class="row _services_row">
			<div class="col-lg-3 col-md-3 zoomIn wow" data-wow-duration="0.5s" data-wow-delay=".5s" align="center">
                            <div class="_services" id="_services1" style="background-image: url('images/dimensional.jpg');">
                                <div class="middle" id="middle1">
                                    <div class="text">Dimensional</div>
                                </div>
                            </div>
			</div>
			<div class="col-lg-3 col-md-3 zoomIn wow" data-wow-duration="0.5s" data-wow-delay=".5s" align="center">
                            <div class="s_text">
				<p>Calibrates almost all equipments</p>
				<p>Supplies the Dimentional equipments</p>
                            </div>
			</div>
			<div class="col-lg-3 col-md-3 zoomIn wow" data-wow-duration="0.5s" data-wow-delay=".5s" align="center">
				<div class="_services" id="_services2" style="background-image: url('images/pressure.jpg');">
					<div class="middle">
						<div class="text">Pressure</div>
				    </div>
				</div>
			</div>
			<div class="col-lg-3 col-md-3 zoomIn wow" data-wow-duration="0.5s" data-wow-delay=".5s" align="center">
                            <div class="s_text">
				<p>Calibrates pressure upto 1000 bar</p>
                                <p>Supplies all types of pressure gauges related equipments</p>
                            </div>
                        </div>
		</div>
		<div class="row _services_row" >
			<div class="col-lg-3 col-md-3 zoomIn wow" data-wow-duration="0.5s" data-wow-delay=".5s" align="center">
				<div class="_services" id="_services3" style="background-image: url('images/temperature.jpg');">
					<div class="middle">
						<div class="text">Temperature</div>
				    </div>
				</div>
			</div>
			<div class="col-lg-3 col-md-3 zoomIn wow" data-wow-duration="0.5s" data-wow-delay=".5s" align="center">
                            <div class="s_text">
				<p>Calibrates from -20 to 1300 degree celsius</p>
				<p>Supplies all types of temperature gauges and related equipments</p>
                            </div>
			</div>
			<div class="col-lg-3 col-md-3 zoomIn wow" data-wow-duration="0.5s" data-wow-delay=".5s" align="center">
				<div class="_services" style="background-image: url('images/mass.jpg');">
					<div class="middle" id="middle">
                                            <div class="text" id="text_4">Mass & General</div>
				    </div>
				</div>
			</div>
			<div class="col-lg-3 col-md-3 zoomIn wow" data-wow-duration="0.5s" data-wow-delay=".5s" align="center">
                            <div class="s_text">
				<p>Calibration of analytical and mechanical weighting balances and test weights</p>
                            </div>
			</div>
		</div>
		</section>
            </div>
        </div>
    </div>
    <!--Our services ends-->
    <!--Contact us-->
    <div id="contact_outer" style="background-image: url(images/map2.png);width: 100%">
        <div class="container">
            <section class="contact-section wow zoomIn" data-wow-duration="0.5s" data-wow-delay=".5s">
                <h3 class="text-center divideN "> Contact <span class="heading-bolder">US</span> 
                </h3> 
                <p class="text-center address"><b>Al Waqt Calibration Weights & Metrology</b></p>
                <p class="text-center address">P.O Box: 78167, Sajja Industrial area</p>
                <p class="text-center address">Sharjah, UAE</p>
                <div class="other-contacts text-center">
                    <p><i class="fa fa-mobile" aria-hidden="true"></i>00971-6-5311532</p>
                    <p><i class="fa fa-fax" aria-hidden="true"></i>00971-6-5311518</p>
                    <p><i class="fa fa-envelope" aria-hidden="true"></i>calibration@waqtcal.com</p>
                </div>
            </section>
        </div>
    </div>
    <!--Contact us ends-->
    <!--Footer-->
    <section class="footer-section">
        <div id="footer2" style="background-image: url(images/footer.png)">
            <div class="container">
                <div class="footer-container">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 first zoomIn wow" data-wow-duration="0.5s" data-wow-delay=".5s" align="center">
                            <p class="fh">About us</p>
                            <p class="ft">Al WAQT Calibration Weights & Metrology is an ISO 9001-2008 & ISO/IEC 17025-2005 Certified testing & Calibration lab. A well organized state-of-the-art-laboratory confirming to international standards ( ISO 9001-2008 & ISO/IEC 17025-2005), equipped with most modern equipments, technically qualified technicians and quality engineers satisfying the certification needs of the customer.</p>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 second zoomIn wow" data-wow-duration="0.5s" data-wow-delay=".5s" align="center">
                            <p class="fh">Quick links</p>
                            <ul class="explore-quick">
                                <li><a href="aboutus.html">About us</a></li>
                                  <li><a href="labs.php">Labs</a></li>
                                  <li><a href="certifications.php">Certifications</a></li>
                                  <li><a href="enquiry.php">Enquiry</a></li>
                                  <li><a href="careers.php">Careers</a></li>
                                  <li><a href="contactus.php">Contact us</a></li>
                                  <li><a href="personnel.php">Personnel</a></li>
                                  <li><a href="accommodationn.php">Accommodation</a></li>
                                  <li><a href="equipments.php">Equipments</a></li>
                                  <li><a href="calibrationmethods.php">Calibration methods</a></li>
                            </ul>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 third zoomIn wow" data-wow-duration="0.5s" data-wow-delay=".5s" align="center">
                            <div align="center">
                                <img class="img-responsive" id="footer-emp" src="images/logofadelight.png">
                            </div>
                            <div class="social-icons text-center">
                                <a href=""><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                <a href=""><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                                <a href=""><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                <a href=""> <i class="fa fa-linkedin" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copy-right-section">
            <p class="text-center copyright footer-des zoomIn wow" data-wow-duration="0.5s" data-wow-delay=".3s">Copyright <?php echo date('Y'); ?>  &copy;<a href="http://waqtcal.com/" target="_blank"> www.waqtcal.com</a></p>
        </div>
    </section>
    <!--Footer ends-->
    
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/bootstrap.min.js"></script>
        <!--Disabling Bootstrap slide pause on hover-->
        <script>
            $('.carousel').carousel({
                pause: "false"
            });
        </script>
        <script src="js/sliderfile.js"></script>
        <script src="js/slider-home.js"></script>
        <script src="js/wow.min.js"></script>
        <script>
        new WOW().init();
        </script>
        <script>
            $(".fill-menu").hover(function() {
                $(".sub-menu").toggleClass("wow bounceIn animated");
            });
        </script>
        
</body>
</html>