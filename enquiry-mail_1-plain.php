<?php

//if(!isset($_SERVER['HTTP_X_REQUESTED_WITH']) AND strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) != 'xmlhttprequest') {
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
	
	
	$msg_body ="<div class='container' id='mail-body'>
                <div class='row'>
                    
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

	$headers = "From: ".$cp."<".$email.">\r\n";
	$headers .= "MIME-Version: 1.0\r\n";
	$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
	
	if(mail("aneeskader209@gmail.com","Work Enquiry",$msg_body,$headers)){
			
			echo 'true';
                        
                        $msg_body ="<div class='container' id='mail-body'>
                <div class='row'>
                
                    <p>Thank you for choosing Waqtcal.</p>
                    <div>
                        <p style='color: #1f497d;'><b>Abdul Latheef Pallippurath</b></p>
                        <p style='color: #1f497d;'>Commercial Manager</p>
                    </div>
                </div>
            </div>";

	$headers = "From: Commercial Manager<aneeskader209@gmail.com>\r\n";
	$headers .= "MIME-Version: 1.0\r\n";
	$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
        
        if(mail("aneeskader209@gmail.com","Work Enquiry",$msg_body,$headers)){
            echo 'reply sent';
        }
			
	}
	else{
		echo "false";	
	}
    }
	