
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="image/png" sizes="96x96" href="images/favicon-96x96.png">
        <link rel="shortcut icon" href="images/favicon-96x96.png">
        <link rel="apple-touch-icon" sizes="180x180" href="images/favicon-96x96.png">
        <title>Careers | Waqtcal</title>
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
                                            <ul class="sub-menu " id="sub-menu1">
                                                <li><a href="testing&calibration.php">Testing & Calibration</a></li>
                                                <li><a href="supplyofinstruments.php">Supply of Instruments</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a href="labs.php">Labs</a></li>
                                        <li><a href="certifications.php">certifications</a></li>
                                        <li><a href="enquiry.php">enquiry</a></li>
                                        <li><a class="active_page" href="careers.php">careers</a></li>
                                        <li><a href="contactus.php">contact us</a></li>
                                    </ul>
                                </div>
                            </div>
                        </header>
                    </div>
                </div>
            </nav>
        </div>
        
        <div class="title-banner zoomIn wow" data-wow-duration="0.5s" data-wow-delay=".3s" id="banner-labs" style="background-image: url(images/careersbanner5.jpg)">
            <div class="zoomIn wow" data-wow-duration="0.5s" data-wow-delay=".5s">
                <h1 class="banner-h">Careers</h1>
                <p class="brudscrump">HOME / <span>CAREERS</span></p>
            </div>
        </div>
        
        <div class="page_t zoomIn wow" data-wow-duration="0.5s" data-wow-delay=".4s" id="page-t-wb" align="center">
<!--            <h1>Labs</h1>-->
            <p class="initial-text"><span class="quot">"</span>Waqtcal hires a mix of talented young and experienced personnel time to time. Interested candidates can fill the below form and attach the CV.</p>
        </div>
        
        <div class="container zoomIn wow" data-wow-duration="0.5s" data-wow-delay=".5s" id="careers-cont">
            <div class="row" >
                <div class="col-lg-12">
<!--                    <form class="col s12" method="post" id="data" accept-charset="utf-8" action="mail.php" enctype="multipart/form-data">-->
                        <form class="col s12" method="post" id="data" enctype="multipart/form-data">
                        <div class="row">
                            <div class="input-field col s6">
                                <input  id="name" name="name" type="text" class="validate" required="required">
                                <label for="first_name">Name</label>
                            </div>
                            <div class="input-field col s6">
                                <input id="cno" name="cno" type="text" class="validate" required="required">
                                <label for="cno">Contact number</label>
                            </div>
                            <div class="input-field col s6">
                                <input id="email" type="email" name="email" class="validate" required="required">
                                <label for="email">Email</label>
                            </div>
                            <div class="input-field col s6">
                                <input  id="id" name="id" type="text" class="validate">
                                <label for="id">ID</label>
                            </div>
                            <div class="input-field col s6">
                                <input  id="cname" name="cname" type="text" class="validate">
                                <label for="cname">Company name</label>
                            </div>
                            <div class="input-field col s6">
                                <input  id="pos" name="pos" type="text" class="validate">
                                <label for="pos">Position held</label>
                            </div>
                            <div class="input-field col s12">
                                <textarea id="resp" name="resp" class="materialize-textarea"></textarea>
                                <label for="resp">Responsibilities</label>
                            </div>
                            <div class="input-field col s12">
                                <textarea id="address" name="address" class="materialize-textarea"></textarea>
                                <label for="address">Personal address</label>
                            </div>
                        </div>
                        <div class="file-field input-field">
                            <div class="btn" id="resume-btn">
                              <span>Resume</span>
                              <input type="file" name="resume" id="resume" required>
                            </div>
                            <div class="file-path-wrapper">
                              <input id="res-text" class="file-path validate" type="text" placeholder="Attach Resume..." required>
                            </div>
                        </div>
                        <div>
                            <button id="submit-btn" class="btn waves-effect waves-light" type="submit" name="sub-careers">Submit</button>
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
                        <p id="loading-text">Sending application...</p>
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
                    url: 'careers-mail.php',
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
    </body>
</html>