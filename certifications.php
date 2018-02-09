
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="image/png" sizes="96x96" href="images/favicon-96x96.png">
        <link rel="shortcut icon" href="images/favicon-96x96.png">
        <link rel="apple-touch-icon" sizes="180x180" href="images/favicon-96x96.png">
        <title>Certifications | Waqtcal</title>
        <link href="css/font-awesome.min.css" rel="stylesheet">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/responsive.css" rel="stylesheet">
        <link rel="stylesheet" href="css/animate.css">
        <link href="fonts/stylesheet.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <link href="css/innerpages.css" rel="stylesheet">
        <link href="css/modal.css" rel="stylesheet" media="all">
        
        <script src="js/jquery.min.js"></script>
        <script src="js/custom.js"></script>

        <!------For IE------>
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <div class="container">
            <nav id="header_nav" class="navbar zoomInRight wow" data-wow-duration="0.5s" data-wow-delay=".5s">
                <div class="container" id="menu-container">
                    <div class="navbar-header">
                        <header>
                            <a class="navbar-brand "  id="logo" href="index.php"> <img src="images/logo.png"  alt="Alwaqt Calibration weighs and Metrology"></a>
                            <a class=""  id="logo-mobile" href="index.php"> <img src="images/logo-mobile.png"  alt="Alwaqt Calibration weighs and Metrology"></a>
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
                                        <li><a class="active_page" href="certifications.php">certifications</a></li>
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
        
        <p class="breadcrumb-sp zoomInDown wow" data-wow-duration="0.5s" data-wow-delay=".5s">HOME/<span class="breadcrumb-sp-span"> CERTIFICATIONS</span></p>
        
        <div class="page_t zoomIn wow" data-wow-duration="0.5s" data-wow-delay=".5s" align="center">
            <h1 class="divide">Certifications</h1>
        </div>
        <div class="container zoomIn wow" data-wow-duration="0.5s" data-wow-delay=".5s" id="page_container">
            <div class="row" id="cert_row">
                <div class="col-xl-3 col-lg-3 col-sm-6 col-xs-12" align="center">
                    <div class="column">
                      <img src="images/SGS.jpg" style="" onclick="openModal();currentSlide(1)" class="hover-shadow cursor">
                      <div class="cert_t">
                          <p>ISO 9001-2008</p>
                      </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-sm-6 col-xs-12" align="center">
                    <div class="column">
                      <img src="images/Temperature-DAC.jpg" style="" onclick="openModal();currentSlide(2)" class="hover-shadow cursor">
                      <div class="cert_t">
                          <p>SCOPE-TEMP. PARAMETER</p>
                      </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-sm-6 col-xs-12" align="center">
                    <div class="column">
                      <img src="images/Pressure- DAC.jpg" style="" onclick="openModal();currentSlide(3)" class="hover-shadow cursor">
                      <div class="cert_t">
                          <p>SCOPE-PRESSURE PARAMETER</p>
                      </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-sm-6 col-xs-12" align="center">
                    <div class="column">
                      <img src="images/DAC.jpg" style="" onclick="openModal();currentSlide(4)" class="hover-shadow cursor">
                      <div class="cert_t">
                          <p>ISO/IEC 17025:2005</p>
                      </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="myModal" class="modal">
          <span class="close cursor" onclick="closeModal()">&times;</span>
          <div class="modal-content">
            <div class="mySlides" align="center">
              <div class="numbertext">1 / 4</div>
              <img src="images/SGS.jpg">
            </div>
            <div class="mySlides" align="center">
              <div class="numbertext">2 / 4</div>
              <img src="images/Temperature-DAC.jpg" style="width:80%">
            </div>
            <div class="mySlides" align="center">
              <div class="numbertext">3 / 4</div>
              <img src="images/Pressure- DAC.jpg" style="width:80%">
            </div>
            <div class="mySlides" align="center">
              <div class="numbertext">4 / 4</div>
              <img src="images/DAC.jpg" style="width:80%">
            </div>
            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>
            <div class="caption-container">
              <p id="caption"></p>
            </div>
          </div>
        </div>
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
        <script src="js/bootstrap.min.js"></script>
<!--        <script src="js/slider.js"></script>-->
        <script src="js/wow.min.js"></script>
        <script>
            new WOW().init();
        </script>
        <script>
            function openModal() {
              document.getElementById('myModal').style.display = "block";
            }

            function closeModal() {
              document.getElementById('myModal').style.display = "none";
            }

            var slideIndex = 1;
            showSlides(slideIndex);

            function plusSlides(n) {
              showSlides(slideIndex += n);
            }

            function currentSlide(n) {
              showSlides(slideIndex = n);
            }

            function showSlides(n) {
              var i;
              var slides = document.getElementsByClassName("mySlides");
              var dots = document.getElementsByClassName("demo");
              var captionText = document.getElementById("caption");
              if (n > slides.length) {slideIndex = 1}
              if (n < 1) {slideIndex = slides.length}
              for (i = 0; i < slides.length; i++) {
                  slides[i].style.display = "none";
              }
              for (i = 0; i < dots.length; i++) {
                  dots[i].className = dots[i].className.replace(" active", "");
              }
              slides[slideIndex-1].style.display = "block";
              dots[slideIndex-1].className += " active";
              captionText.innerHTML = dots[slideIndex-1].alt;
            }
        </script>
    </body>
</html>