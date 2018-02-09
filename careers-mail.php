<?php
    
    if(!isset($_SERVER['HTTP_X_REQUESTED_WITH']) AND strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) != 'xmlhttprequest') {
        die('Sorry Request must be Ajax POST'); //exit script
    }
    
    if(isset($_POST)){
        $name=$_POST['name'];
        $cno=$_POST['cno'];
        $email=$_POST['email'];
        $id=$_POST['id'];
        $cname=$_POST['cname'];
        $pos=$_POST['pos'];
        $resp=$_POST['resp'];
        $address=$_POST['address'];
    
        $file_tmp  = $_FILES['resume']['tmp_name'];
        $file_name = $_FILES['resume']['name'];

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
        $mail->Subject = 'Resume';
        $mail->AddAttachment($file_tmp, $file_name);

        // $time=200;
        
        if($id==''){
            $id='-';
        }
        if($cname==''){
            $cname='-';
        }
        if($pos==''){
            $pos='-';
        }
        if($resp==''){
            $resp='-';
        }
        if($address==''){
            $address='-';
        }
        $body="<div class='container' id='mail-body'>
                <div class='row'>
                    <div>
                        <p>Name: $name</p>
                        <p>Contact number: $cno</p>
                        <p>Email: $email</p>
                        <p>ID: $id</p>
                        <p>Company name: $cname</p>
                        <p>Position held: $pos</p>
                        <p>Responsibilities: $resp</p>
                        <p>Address: $address</p>
                    </div>
                </div>
            </div>";
        set_time_limit(200);
        $mail->Body    = $body;
        if($mail->Send())
        {
            $mail->clearAttachments();
            $mail->ClearReplyTos();
            echo 'true';
            $mail->AddReplyTo('comm@waqtcal.com', 'Commercial Manager');
            $mail->From = 'noreplywaqtcal@gmail.com';
            $mail->FromName = 'Waqtcal';
            $mail->addAddress('abdusamadps@gmail.com');    
            $mail->WordWrap = 50;                               
            $mail->isHTML(true);
            $mail->AddEmbeddedImage('images/logo-mail.png', 'logo_2u');
            $mail->AddEmbeddedImage('images/logo-mail.png', 'logo_2u');
            $mail->AddEmbeddedImage('images/phone2.png', 'phone-icon');
            $mail->AddEmbeddedImage('images/mobile2.png', 'mobile-icon');
            $mail->AddEmbeddedImage('images/email2.png', 'email-icon');
            $mail->AddEmbeddedImage('images/globe2.png', 'globe-icon');
            $mail->AddEmbeddedImage('images/location2.png', 'location-icon');
            $mail->AddEmbeddedImage('images/fax2.png', 'fax-icon');
            
            $mail->Subject = 'Acknowledgement';
            
            $body="<div class='container'>
                <div class='row'>
                    <div class='col-xl-12'>
                        <p>We've recieved your application, thank you.</p>
                        <p style='padding-top:30px;color: #1f497d;'><b>Abdul Latheef Pallippurath</b></p>
                        <p style='padding-bottom:15px;color: #1f497d;'>Commercial Manager</p>
                        <img id='mail-logo' src='cid:logo_2u' style='max-width:100%'>;
                        <p style='color: #1f497d;width:100%;'><img src='cid:location-icon'> Near Emirates Industrial City, P.O. Box No. 78167, Sharjah, UAE</p>
                        <p style='color: #1f497d;'><img src='cid:phone-icon'> +971 6 5311532   <img class='img-responsive' src='cid:fax-icon'> +971 6 5311518   <img class='img-responsive' src='cid:mobile-icon'> +971 55 716 3500</p>
                        <p style='color: #1f497d;'><img src='cid:email-icon'> comm@waqtcal.com | waqtcal@gmail.com    <img class='img-responsive' src='cid:globe-icon'> www.waqtcal.com</p>
                        <p style='color:red;max-width:100%;'><b>An ISO/IEC 17025:2005 Laboratary managment system I ISO 9001:2008 Quality Management System</b></p>
                    </div>
                </div>
            </div>";
            
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
