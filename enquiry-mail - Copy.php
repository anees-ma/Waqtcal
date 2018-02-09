<?php
    
//    if(!isset($_SERVER['HTTP_X_REQUESTED_WITH']) AND strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) != 'xmlhttprequest') {
//        die('Sorry Request must be Ajax POST'); //exit script
//    }
    
    if(isset($_POST)){
        $cp=$_POST['cp'];
        $cn=$_POST['cn'];
        $email=$_POST['email'];
        $services=$_POST['services'];
        $cname=$_POST['cname'];
        $ca=$_POST['ca'];
        $location=$_POST['location'];
        $bsw=$_POST['bsw'];
    
        require 'phpmailer/class.phpmailer.php';

        $mail = new PHPMailer();
//        $mail->SMTPDebug = 2;                               
        $mail->isSMTP();                                      
        $mail->Host = 'smtp.gmail.com';                       
        $mail->SMTPAuth = false;                               
        $mail->Username = 'yasirameenfk3@gmail.com';          
        $mail->Password = 'fakeyasir';                        
        $mail->SMTPSecure = 'ssl';                            
        $mail->Port = 465;                                    
        $mail->From = 'aneeskader209@gmail.com';
        $mail->FromName = $cp;
        $mail->addAddress('aneeskader209@gmail.com');     
        $mail->WordWrap = 50;                               
        $mail->isHTML(true);    
        $mail->AddEmbeddedImage('images/logo.png', 'logo_2u');
        $mail->Subject = 'Enquiry';

        // $time=200;
        $body="<div class='container' id='mail-body'>
                <div class='row'>
                    <div class='img-responsive' id='mail-logo' align='left'>
                        <img src='cid:logo_2u' width='70%'>
                    </div>
                    <div>
                        <p>Contact person: $cp</p>
                        <p>Company name: $cname</p>
                        <p>Company address: $ca</p>
                        <p>Email: $email</p>
                        <p>Contact number:$cn</p>
                        <p>Service: $services</p>
                        <p>Location: $location</p>
                        <p>Brief scope of work: $bsw</p>
                    </div>
                </div>
            </div>";
        set_time_limit(200);
        $mail->Body    = $body;
        if($mail->Send())
        {
            echo 'true';
        }
        else
        {

            echo 'false';

        }
    
    
    }
    
    
    $msg_body ="<div class='container' id='mail-body'>
                <div class='row'>
                
                    <p>Thank you for choosing Waqtcal.</p>
                    <div>
                        <p style='color: #1f497d;'><b>Abdul Latheef Pallippurath</b></p>
                        <p style='color: #1f497d;'>Commercial Manager</p>
                    
                        
                        <p style='color: #1f497d;'>Near Emirates Industrial City, P.O. Box No. 78167, Sharjah, UAE</p>
                        <p style='color: #1f497d;'><b>Tel : +971 6 5311532 | | Fax: +971 6 5311518  |  Mob: +971 55 716 3500</b></p>
                        <p style='color: #1f497d;'><b>Email: comm@waqtcal.com ; waqtcal@gmail.com</b></p>
                        <p style='color: red;'><b>An ISO/IEC 17025:2005 Laboratary managment system I ISO 9001:2008 Quality Management System</b></p>
                    </div>
                </div>
            </div>";