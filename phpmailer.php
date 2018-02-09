<?php
	session_start();
	mysql_connect("localhost","root","") or die("connection error");
    mysql_select_db("mydb")  or die("db error");
 //   $username=$_SESSION['mail'];
    //echo $username;
    
     $customer_name=$_GET['name'];
     $mail=$_GET['mail'];
       
    
      if(isset($_GET['id']))
    {
        //  $customer_name=$_GET['name'];
          //  $mail=$_GET['mail'];
            
            
        if(isset($_GET['accept']))
        {
            $pid=$_GET['accept'];
          
       
           // $query="DELETE FROM `order` WHERE `user-name`='$customer_name' AND `product-id`=$pid";
            $_SESSION['accepted']=$pid;
            //ysql_query($query) or die('Q error');
            //unset($_SESSION['accepted']);
          //  header("location:phpmailer.php");
            
        
       
        }
       
        else if(isset($_GET['reject']))
        {
            $pid=$_GET['reject'];
         
            
            
            
            $_SESSION['rejected']=$pid;
            
            //$query="DELETE FROM `order` WHERE `user-name`='$customer_name' AND `product-id`=$pid";
            //mysql_query($query) or die('Q error');
           // unset($_SESSION['rejected']);
        //    header("location:phpmailer.php");
    
        }
         $_SESSION['normal_buy']=$pid;
    }
    else
    {
        //$customer_name=$_GET['name'];
          //  $mail=$_GET['mail'];
            
            //$_SESSION['mail']=$customer_name;
        if(isset($_GET['accept']))
        {
            $pid=$_GET['accept'];
            
            
            $_SESSION['accepted']=$pid;
       
            //$query="DELETE FROM `offer-order` WHERE `user-name`='$customer_name' AND `product-id`=$pid";
            //mysql_query($query) or die('Q error');
            
      //      header("location:phpmailer.php");
        
       
        }
        else if(isset($_GET['reject']))
        {
            $pid=$_GET['reject'];
            
            $_SESSION['rejected']=$pid;
        
            //$query="DELETE FROM `offer-order` WHERE `user-name`='$customer_name' AND `product-id`=$pid";
            //mysql_query($query) or die('Q error');
    //        header("location:phpmailer.php");
    
        }
        $_SESSION['offer_buy']=$pid;
    }
    $_SESSION['mail']=$customer_name;
    $username=$_SESSION['mail'];
   // header("location:phpmailer.php");

        
        $query="SELECT * FROM `customer_registration` WHERE `User Name`='$username'";
        $result=mysql_query($query) or die('query error');
        $data=mysql_fetch_array($result);
        $email_id=$data[5];
        echo $email_id;
    
    require '../PHPMailer_5.2.4/class.phpmailer.php';

    $mail = new PHPMailer();

    //$mail->SMTPDebug = 2;                               

    $mail->isSMTP();                                      
    $mail->Host = 'smtp.gmail.com';                       
    $mail->SMTPAuth = true;                               
    $mail->Username = 'yasirameenfk3@gmail.com';          
    $mail->Password = 'fakeyasir';                        
    $mail->SMTPSecure = 'ssl';                            
    $mail->Port = 465;                                    

    $mail->From = 'yasirameenfk3@gmail.com';
    $mail->FromName = 'MobCart';
    $mail->addAddress("$email_id");     
   
    $mail->WordWrap = 50;                               
    
    $mail->isHTML(true);                                
    
    $mail->Subject = 'Product order';
    
    
   // $time=200;
    
    set_time_limit(200);
    if(isset($_SESSION['mail']))
    {
        if(isset($_SESSION['accepted']))
        {
            $mail->Body    = 'Your order has been registered succesfully.Our dealer will contact you soon..<b>Thanks!</b>';
           // echo "aaccepted";
          // $_SESSION['PID']=$_SESSION['accepted'];
            unset($_SESSION['accepted']);
            
        }
        elseif(isset($_SESSION['rejected']))
        {
            $mail->Body    = 'Your order has been rejected.<p style="color:red;">Sorry for the inconvenience.. </p><b>Thanks!</b>';
            //echo "rejected";
          //  $_SESSION['PID']=$_SESSION['rejected'];
            unset($_SESSION['rejected']);
        }
    
    if($mail->Send())
    {
        if(isset($_SESSION['normal_buy']))
        {
            $query1="DELETE FROM `order` WHERE `user-name`='$username' AND `product-id`=$pid";
            mysql_query($query1) or die('q error');
                
            unset($_SESSION['normal_buy']);
    
        }
         elseif(isset($_SESSION['offer_buy']))
        {
            $query1="DELETE FROM `offer-order` WHERE `user-name`='$username' AND `product-id`=$pid";
            mysql_query($query1) or die('q error');
                
            unset($_SESSION['offer_buy']);
    
        }
        
   
        $_SESSION['send']=1;
        header("location:buy_admin.php");
    }
    else
    {

    $_SESSION['not_send']=0;
    header("location:buy_admin.php");

    }
}    
     
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>MobCart</title>
<meta name="keywords" content="service box, theme, free templates, website templates, CSS, HTML" />
<meta name="description" content="Service Box Theme is a free website template provided by tooplate.com" />
<link href="tooplate_style.css" rel="stylesheet" type="text/css" />
<!--   Free Website Template by t o o p l a t e . c o m   -->
<!--	<style>
		marquee
		{
			margin: 50px 100px 0px 100px;
	width: 250px;
	height: 400px;
	background-color: green;
	font-family: "Comic Sans MS", cursive;
	font-size:small;
	font-weight:bolder;
	border-radius: 14px;
		}
	</style> -->
</head>
<body>
	

<div id="tooplate_wrapper">
	<div id="tooplate_header">
        <div id="site_title"><h1><a rel="nofollow" href="http://www.tooplate.com">Free Website Templates</a></h1></div>
        
        <div id="tooplate_menu">
            <ul>
                <li><a href="../index.php" class="current">Home</a></li>
                <li><a href="../about.php">About Us</a></li>
                <li><a href="../blog.php">Blog</a></li>
                <li><a href="../gallery.php">Gallery</a></li>
                <li><a href="../contact.php" class="last">Contact</a></li>
            </ul>    	
        </div> <!-- end of tooplate_menu -->
    
	</div> <!-- end of forever header -->
    
    <div id="tooplate_main">
		
        <div id="tooplate_middle">
          <div class="cleaner">
          	
          </div>
      </div>
        
        <div id="tooplate_content">
        	
            <div class="col_w900">
              <div class="cleaner h60"></div>
              <div class="cleaner">
              <div id="productview">
              	<div id="table">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                	<br /><br /><br /><br />
                     <table border="0">
                         <tbody>
                   
<?php
  
?> 	
                     	
                     	</tbody>
                     </table>
                </div>
              </div>
              </div>
            
			</div>
            
            <div class="col_w900 col_w900_last">
              <div class="cleaner"></div>
          </div>
            
        </div> <!-- end of content -->
        
    </div> <!-- end of main -->
    
    <div id="tooplate_footer">
    	Copyright © 2048 <a href="#">Company Name</a> - Designed by <a href="http://www.tooplate.com" target="_parent">Website Templates</a>
	</div> <!-- end of footer -->
    
</div>
	
     
        
        
        
    </div>    
       

    


</body>
</html>