
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="image/png" sizes="96x96" href="images/favicon-96x96.png">
        <link rel="shortcut icon" href="images/favicon-96x96.png">
        <link rel="apple-touch-icon" sizes="180x180" href="images/favicon-96x96.png">
        <title>Contact us | Waqtcal</title>
<!--        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">-->
      <!--Import materialize.css-->
        <link type="text/css" rel="stylesheet" href="css/materialize.min.css"/>
        <link href="css/font-awesome.min.css" rel="stylesheet">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/responsive.css" rel="stylesheet">
        <link rel="stylesheet" href="css/animate.css">
        <link href="fonts/stylesheet.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <link href="css/innerpages.css" rel="stylesheet">
        
        <script src="js/jquery.min.js"></script>
        <script type="text/javascript" src="js/materialize.min.js"></script>
        <script src="js/custom.js"></script>

        <!------For IE------>
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        <style>
            #loading-text{
                text-align: center !important;
                z-index: 99999999;
                font-size:18px;
                color:white;
                background-color:#414146;
                padding:2%;
                position:fixed;
                top:45%;
                border:1px solid #90c744;
                border-radius:5px;
                display:none;
            }
            #loading-box{
                width:100%;
                text-align: center !important;
            }
            @media screen and (max-width:767px) {
                #loading-text{
                    margin-left:15%;
                }
            }
            @media screen and (max-width:316px) {
                #loading-text{
                    margin-left:5%;
                }
            }
            .container{
                max-width:1305px;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <nav id="header_nav" class="navbar zoomInRight wow" data-wow-duration="0.5s" data-wow-delay=".2s">
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
                                            <ul class="sub-menu zoomIn wow" data-wow-duration="0.5s" data-wow-delay=".2s" id="sub-menu1">
                                                <li><a href="testing&calibration.php">Testing & Calibration</a></li>
                                                <li><a href="supplyofinstruments.php">Supply of Instruments</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a href="labs.php">Labs</a></li>
                                        <li><a href="certifications.php">certifications</a></li>
                                        <li><a href="enquiry.php">enquiry</a></li>
                                        <li><a href="careers.php">careers</a></li>
                                        <li><a class="active_page" href="contactus.php">contact us</a></li>
                                    </ul>
                                </div>
                            </div>
                        </header>
                    </div>
                </div>
            </nav>
        </div>
        
        <div class="title-banner zoomIn wow" data-wow-duration="0.5s" data-wow-delay=".3s" id="banner-labs" style="background-image: url(images/contactusbanner4.jpg)">
            <div class="zoomIn wow" data-wow-duration="0.5s" data-wow-delay=".5s">
                <h1 class="banner-h">Contact us</h1>
                <p class="brudscrump" style="color:#B9B5B5"><span></span>HOME / <span>CONTACT US</span></p>
            </div>
        </div>
        
        <div id="sec-title" class="zoomIn wow" data-wow-duration="0.5s" data-wow-delay=".2s" align="center"><h3 class="divide">Reach us</h3></div>
        <div class="container zoomIn wow" data-wow-duration="0.5s" data-wow-delay=".5s" id="careers-cont">
            <div class="row" >
                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                    <div id="gmap">
                        <iframe frameborder="0" style="border:0"
src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJVRao5uXy9T4R9y8ZteAiq0o&key=AIzaSyBcRMaMUNNYf-bYQb4ccqC842iHl5DXaMk" allowfullscreen></iframe>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" id="address-box">
                    <div id="mapmarker" align="center"><i class="fa fa-map-marker"></i></div>
                    <h4>Al Waqt Calibration Weights & Metrology</h4>
                    <p>P.O Box: 78167, Sajja Industrial area</p>
                    <p>Sharjah, UAE</p>
                    <p><i class="fa fa-phone"></i>00971-6-5311532</p>
                    <p><i class="fa fa-fax"></i>00971-6-5311518</p>
                    <p><i class="fa fa-envelope"></i>calibration@waqtcal.com</p>
                </div>
            </div>
        </div>
        
        <div id="sec-title" class="zoomIn wow" data-wow-duration="0.5s" data-wow-delay=".2s" align="center"><h3 class="divide">Send message</h3></div>
        <div class="container zoomIn wow" data-wow-duration="0.5s" data-wow-delay=".5s" id="careers-cont">
            <div class="row" >
                <div class="col-lg-12">
                    <form class="col s12" id="data" accept-charset="utf-8" method="post">
                        <div class="row">
                            <div class="input-field col s12">
                                <input  id="name" name="name" type="text" class="validate" required="required">
                                <label for="name">Name</label>
                            </div>
                            <div class="input-field col s12">
                                <input id="cno" name="cno" type="text" class="validate">
                                <label for="cno">Contact number</label>
                            </div>
                            <div class="input-field col s12">
                                <input id="email" type="email" name="email" class="validate" required="required">
                                <label for="email">Email</label>
                            </div>
                            <div class="input-field col s12">
                                <textarea id="msg" name="msg" class="materialize-textarea"></textarea>
                                <label for="resp">Message</label>
                            </div>
                        </div>
                        <div>
                            <button id="submit-btn" class="btn waves-effect waves-light" type="submit" name="sub-contact">Send</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        
        <div id="ack-modal"></div>
        <div id="ack-box" align="center">
            <p id="ack_s">Your message sent successfully!</p>
            <p id="ack_f">Message sending failed!</p>
        </div>
        
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-xs-12"></div>
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div id="loading-box" align="center">
                        <p id="loading-text">Sending message...</p>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-xs-12"></div>
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
                                      <li><a href="aboutus.php">About us</a></li>
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
            $("form#data").submit(function(e) {
                e.preventDefault();    
                var formData = new FormData(this);
                $('#loading-text').fadeIn('slow');
                $.ajax({
                    url: 'contactus-mail.php',
                    type: 'POST',
                    data: formData,
                    success: function (data) {
                        $('#loading-text').fadeOut('fast');
                        $('#ack-modal').fadeIn('fast').delay(2000).fadeOut('fast');
                        $('#ack-box').fadeIn('slow').delay(2000).fadeOut('slow');
                        if(data=='true'){
                            $('#ack_f').hide();
                            $( 'form#data' ).each(function(){
                                this.reset();
                            });
                        }else{
                            $('#ack_s').hide();
                        }
                    },
                    cache: false,
                    contentType: false,
                    processData: false
                });
            });
        </script>
        <div style='width:100% !important;display:inline-block !important;overflow:visible !important'>
                        <p>Thankyou for visiting.</p>
                        <p style='padding-top:30px;color: #1f497d;'><b>Abdul Latheef Pallippurath</b></p>
                        <p style='padding-bottom:15px;color: #1f497d;'>Commercial Manager</p>
                        <img id='mail-logo' src='images/logo-mail.png' style='min-width:100%';>
                        <p style='color: #1f497d;width:100%;'><img src='cid:location-icon'> Near Emirates Industrial City, P.O. Box No. 78167, Sharjah, UAE</p>
                        <p style='color: #1f497d;'><img src='cid:phone-icon'> +971 6 5311532   <img class='img-responsive' src='cid:fax-icon'> +971 6 5311518   <img class='img-responsive' src='cid:mobile-icon'> +971 55 716 3500</p>
                        <p style='color: #1f497d;'><img src='cid:email-icon'> comm@waqtcal.com | waqtcal@gmail.com    <img class='img-responsive' src='cid:globe-icon'> www.waqtcal.com</p>
                        <p style='color:red;min-width:100% !important;display:inline-block !important;overflow:visible !important'><b>An ISO/IEC 17025:2005 Laboratary managment system I ISO 9001:2008 Quality Management System</b></p>
                    </div>
    </body>
</html>