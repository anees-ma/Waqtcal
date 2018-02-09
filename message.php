<?php

if (isset($_POST['submit']))
{
	$name=$_POST['name'];
	$email=$_POST['email'];
	$contact=$_POST['contact'];
	$message=$_POST['message'];
	
	
	$msg_body = "<div class='mail_body_container' style='margin-top:65px;'></br></br>
   <div style='margin-left:5%;'>
 	<p style='font-family:century gothic'>Name: ".$name."</p>
	<p style='font-family:century gothic'>Name: ".$email."</p>
	<p style='font-family:century gothic'>Name: ".$contact."</p>
	<p style='font-family:century gothic;margin-top:3px;margin-left:5%'>".$message."</p>
    </div>
 </div>
    
";  

	$headers = "From: Website Visitor<".$email.">\r\n";
	$headers .= "MIME-Version: 1.0\r\n";
	$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
	
	if(mail("manager@waqtcal.com","Visitor",$msg_body,$headers)){
			
			echo 'success';
			
	}
	else{
		echo "failed";	
	}
	$msg_body = "
	<div class='mail-body-header' style='width:100%;'>
		<img src='http://waqtcal.com/images/logonew.png' alt='logo' style='float:left;'/></br></br>
		</div>
	
	 <div class='mail_body_container' style='margin-top:65px;border-top:16px solid #90c744;'></br></br>
	   <div style='margin-left:5%;'>
		<p style='font-family:century gothic'> Thank You for visiting our website..</p>
		</div>
	 </div>
		
	";  
	
	$headers = "From: Waqtcal<manager@waqtcal.com>\r\n";
	$headers .= "MIME-Version: 1.0\r\n";
	$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
	
	if(mail($email,"Acknowledgement",$msg_body,$headers)){
		header('location:contact.html');	
	}
	else{
		echo "reply failed";	
	}


/*------Reply------*/

}elseif(isset($_POST['career'])){
	$fname=$_POST['name'];
	$email=$_POST['email'];
	$contact=$_POST['contact'];
	$address=$_POST['address'];
	$id=$_POST['id'];
	$company_name=$_POST['c_name'];
	$position_held=$_POST['p_held'];
	$responsibilities=$_POST['responsibilities'];
	$cv=$_POST['cv'];
	
	$to="aneeskader209@gmail.com";
	echo 'data are sent'.$cv.'kkkkkkkkk';	 
	
	// if($id) 
	 //{  echo 'enterd in cv uploaded clause ';
	 	function mail_attachment ($email , $to, $subject, $message, $attachment)
	 	{ 
			 echo 'enterd in function mail_attachment ';
			 $fileatt = $attachment;
			 $fileatt_type = "application/octet-stream";
			 $start=	strrpos($attachment, '/') == -1 ? strrpos($attachment, '//') : strrpos($attachment, '/')+1; 
			 $fileatt_name = substr($attachment, $start, strlen($attachment));
			 $email_from = $email;
			 
			 $email_subject = "Resume"; 			     
			 $email_txt = $message;
			 $email_to = $to;
			 $headers = "From: ".$email_from;   
			 $file = fopen($fileatt,'rb'); 			     
			 $data = fread($file,filesize($fileatt));
			 fclose($file); 
			 $msg_txt="Dear Sir, Please find the attached resume."; 
			 
			 
			 
			 
			 $filename = $_FILES["cv"]["name"];
    $content = chunk_split(base64_encode(file_get_contents($_FILES["cv"]["tmp_name"])));

    $uid = md5(uniqid(time()));
    $name = basename($file);
    $header = "From: " . $fname . " <" . $email . ">\r\n";
    $header .= "Reply-To: " . $to . "\r\n";

    $header .= "MIME-Version: 1.0\r\n";
    $header .= "Content-Type: multipart/mixed; boundary=\"" . $uid . "\"\r\n\r\n";
    $header .= "This is a multi-part message in MIME format.\r\n";
    $header .= "--" . $uid . "\r\n";

// You add html "Content-type: text/html; charset=utf-8\n" or for Text "Content-type:text/plain; charset=iso-8859-1\r\n" by I.khan
    $header .= "Content-type:text/html; charset=utf-8\n";
    $header .= "Content-Transfer-Encoding: 7bit\r\n\r\n";

// User Message you can add HTML if You Selected HTML content
    $header .= "<div style='color: red'>helloo</div>\r\n\r\n";

    $header .= "--" . $uid . "\r\n";
    $header .= "Content-Type: application/octet-stream; name=\"" . $filename . "\"\r\n"; // use different content types here
    $header .= "Content-Transfer-Encoding: base64\r\n";
    $header .= "Content-Disposition: attachment; filename=\"" . $filename . "\"\r\n\r\n"; // For Attachment
    $header .= $content . "\r\n\r\n";
    $header .= "--" . $uid . "--";
			 
			 
			 
			 	     
			 /*$semi_rand = md5(time()); 
			 $mime_boundary = "==Multipart_Boundary_x{$semi_rand}x"; 
			 $headers .= "\nMIME-Version: 1.0\n" . 
			 "Content-Type: multipart/mixed;\n" . 
			 " boundary=\"{$mime_boundary}\""; 
			 $email_txt .= $msg_txt; 
			 $email_message .=$email_txt;
			$email_message .= "This is a multi-part message in MIME format.\n\n" . "--{$mime_boundary}\n" . 

"Content-Type:text/html; charset=\"iso-8859-1\"\n" . "Content-Transfer-Encoding: 7bit\n\n" . 

$email_txt . "\n\n";  
			 $data = chunk_split(base64_encode($data)); 
			 
			 $email_message .= "--{$mime_boundary}\n" . 
			 "Content-Type: {$fileatt_type};\n" . 
			 " name=\"{$fileatt_name}\"\n".
			  "Content-Transfer-Encoding: base64\n\n" . 
			  $data . "\n\n" .
			  "--{$mime_boundary}--\n";*/
			 $ok = mail($to, "resume", "hii", $header);   	     
			 if($ok) 
			 { 
				echo "File Sent Successfully."; 
				unlink($attachment);
				$msg_body = "
	<div class='mail-body-header' style='width:100%;'>
		<img src='http://waqtcal.com/images/logonew.png' alt='logo' style='float:left;'/></br></br>
		</div>
	
	 <div class='mail_body_container' style='margin-top:65px;border-top:16px solid #90c744;'></br></br>
	   <div style='margin-left:5%;'>
		<p style='font-family:century gothic'>  Thank you for choosing Waqtcal..We will contact you soon if our requirements match your qualification..</p>
		</div>
	 </div>
		
	";  
	
	$headers = "From: Waqtcal<manager@waqtcal.com>\r\n";
	$headers .= "MIME-Version: 1.0\r\n";
	$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
	
	if(mail($email,"Acknowledgement",$msg_body,$headers)){
		header('location:careers.html');	
	}
	else{
		echo "reply failed";	
	}
			 } else 
			 { 
			 die("Sorry but the email could not be sent. Please go back and try again!"); 
			 } 
   }   
   move_uploaded_file($_FILES["cv"]["tmp_name"],'temp/'.basename($_FILES['cv']['name'])); 
   mail_attachment($email, "aneeskader209@gmail.com", "subject", "message", ("temp/".$_FILES["cv"]["name"])); 
   }else{
		echo 'not entering in to the function..';   
   }
 //}
 	
 
?>