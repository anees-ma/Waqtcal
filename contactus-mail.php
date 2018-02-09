<?php

        if(!isset($_SERVER['HTTP_X_REQUESTED_WITH']) AND strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) != 'xmlhttprequest') {
            die('Sorry Request must be Ajax POST'); //exit script
        }
    
        if(isset($_POST)){

        $name=$_POST['name'];
        $cno=$_POST['cno'];
        $email=$_POST['email'];
        $msg=$_POST['msg'];

        require 'phpmailer/class.phpmailer.php';

        $mail = new PHPMailer();
//        $mail->SMTPDebug = 2;                               
//        $mail->isSMTP();                                      
        $mail->Host = 'smtp.gmail.com';                       
        $mail->SMTPAuth = true;                               
        $mail->Username = 'noreplywaqtcal@gmail.com';          
        $mail->Password = 'noreplywaqtcal123';                        
        $mail->SMTPSecure = 'ssl';                            
        $mail->Port = 465;
        $mail->AddReplyTo($email, $name);
        $mail->From = 'noreplywaqtcal@gmail.com';
        $mail->FromName = $name;
        $mail->addAddress('abdusamadps@gmail.com');      
        $mail->WordWrap = 50;                               
        $mail->isHTML(true);    
        $mail->Subject = 'Website visitor';
        

        // $time=200;
        
        if($cno==''){
            $cno='-';
        }
        if($msg==''){
            $msg='-';
        }
        $body="<div class='container' id='mail-body'>
                <div class='row'>
                    <div>
                        <p>Name: $name</p>
                        <p>Contact number: $cno</p>
                        <p>Email: $email</p>
                        <p>Message: $msg</p>
                        
                    </div>
                </div>
            </div>";
        set_time_limit(200);
        $mail->Body    = $body;
        if($mail->Send())
        {
            echo 'true';
            $mail->ClearReplyTos();
            $mail->AddReplyTo('comm@waqtcal.com', 'Commercial Manager');
            $mail->From = 'noreplywaqtcal@gmail.com';
            $mail->FromName = 'Waqtcal';
            $mail->addAddress('abdusamadps@gmail.com');     
            $mail->WordWrap = 50;                               
            $mail->isHTML(true);
            $mail->AddEmbeddedImage('images/logo-mail.png', 'logo_2u');
            $mail->AddEmbeddedImage('images/phone2.png', 'phone-icon');
            $mail->AddEmbeddedImage('images/mobile2.png', 'mobile-icon');
            $mail->AddEmbeddedImage('images/email2.png', 'email-icon');
            $mail->AddEmbeddedImage('images/globe2.png', 'globe-icon');
            $mail->AddEmbeddedImage('images/location2.png', 'location-icon');
            $mail->AddEmbeddedImage('images/fax2.png', 'fax-icon');
            
            $mail->Subject = 'Acknowledgement';
            
            $body="<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
                <html xmlns='http://www.w3.org/1999/xhtml'>
                 <head>
                  <meta http-equiv='Content-Type content='text/html; charset=UTF-8' />
                  <title>Demystifying Email Design</title>
                  <meta name='viewport' content='width=device-width, initial-scale=1.0'/>
                </head>
                </html>
                <body style='margin: 0; padding: 0;'>
                 <table border='1' cellpadding='0' cellspacing='0' width='100%'>
                  <tr>
                   <td>
                    <div style='width:100% !important;display:inline-block !important;overflow:visible !important'>
                        <p>Thankyou for visiting.</p>
                        <p style='padding-top:30px;color: #1f497d;'><b>Abdul Latheef Pallippurath</b></p>
                        <p style='padding-bottom:15px;color: #1f497d;'>Commercial Manager</p>
                        <img id='mail-logo' src='cid:logo_2u' style='min-width:100% !important; height: auto !important; display:inline-block !important;>
                        <p style='color: #1f497d;width:100%;'><img src='cid:location-icon'> Near Emirates Industrial City, P.O. Box No. 78167, Sharjah, UAE</p>
                        <p style='color: #1f497d;'><img src='cid:phone-icon'> +971 6 5311532   <img class='img-responsive' src='cid:fax-icon'> +971 6 5311518   <img class='img-responsive' src='cid:mobile-icon'> +971 55 716 3500</p>
                        <p style='color: #1f497d;'><img src='cid:email-icon'> comm@waqtcal.com | waqtcal@gmail.com    <img class='img-responsive' src='cid:globe-icon'> www.waqtcal.com</p>
                        <p style='color:red;min-width:100% !important;display:inline-block !important;overflow:visible !important'><b>An ISO/IEC 17025:2005 Laboratary managment system I ISO 9001:2008 Quality Management System</b></p>
                    </div>
                   </td>
                  </tr>
                 </table>
                </body>";
            
            set_time_limit(200);
            $mail->Body    = $body;
            if($mail->Send())
            {
                
            }
        }
        else
        {

            echo 'false';

        }
    }