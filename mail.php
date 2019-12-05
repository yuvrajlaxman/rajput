<?php
session_start();

if($_SESSION["uname"]==true)
{

}
else
{
header('location:stu.php');
}



use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


require_once 'vendor/autoload.php';
if(isset($_POST['email']))
{
if(!filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
	{
		//ERROR INVALID EMAIL
		echo "INVALID EMAIL";
	}
	else
	{
	
	$mail = new PHPMailer();
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'sbtssc@gmail.com';                 // SMTP username
    $mail->Password = '9610062820';                           // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, 'ssl` also accepted
    $mail->Port = 587; 
	
	
	
	$mail->setFrom("sbtssc@gmail.com","laxman singh");
	$mail->addAddress($_POST['email'],$_POST['name']);
	$mail->addCC($_POST['emailcc'],$_POST['emailcc']);
    $mail->addBCC($_POST['emailbcc'],$_POST['emailbcc']);
	
	$mail->isHTML(TRUE);
	$mail->Subject=($_POST['subject']);
	$mail->Body="<h3>".$_POST['message']."</h3>";
	
	
	
			if($mail->send())
			{
		
			echo " <script> alert('email send success')</script>";	
			}
			else
			{
			echo " <script> alert('error to send mail')</script>";	
			
			}
	}

}


?>


<!DOCTYPE html>
<html>
<head>



<title>Send Mail</title>
    <link rel="stylesheet" type="text/css" href="style.css" media="all" />
    <link rel="stylesheet" type="text/css" href="demo.css" media="all" />



</head>
<body>
<div class='container'>
			
            <div class='freshdesignweb-top'>
                <a href='admin.php'><font size='+2' ><strong>Home</strong></font></a>
                <span class='right'>
                    <a href='logout.php'>
                        <font size='+2' ><strong>Log-Out</strong></font>
                    </a>
            </span>
            </div>			

			<header>
				<h1>Any Request </h1>
            </header>        
      <div  class="form">
    		<form id="contactform" method="POST" onSubmit="return validate();" > 
    			<p class="contact"><label for="name">EMAIL</label></p> 
    			<input id="email" name="email" placeholder="enter the email address" required="" tabindex="1" type="email">
				 <p class="contact"><label for="username">NAME</label></p> 
    			<input id="name" name="name" placeholder="name" required="" tabindex="1" type="text">  
				
				<p class="contact"><label for="name">CC</label></p> 
    			<input id="emailcc" name="emailcc" placeholder="enter the cc address" tabindex="1" type="email"> 
				
				<p class="contact"><label for="name">BCC</label></p> 
    			<input id="emailbcc" name="emailbcc" placeholder="enter the bcc address" tabindex="1" type="email"> 
				
				
    			 
    			<p class="contact"><label for="email">SUBJECT</label></p> 
    			<input id="subject" name="subject" placeholder="subject" required="" type="text"> 
				
				
                
               
    			 
                <p class="contact"><label for="password">MESSAGE</label></p> 
    			 
                <textarea  id="message" name="message" rows="3" cols="55">
				</textarea>
				
				<br>
				<br>
			
			
            <input class="buttom" name="submit" id="submit" tabindex="5" value="SEND MAIL" type="submit" > 	
			
			<input class="buttom" name="RESET" id="reset" tabindex="5" value="reset" type="RESET" style="margin-left:200px;"> 	
			 
   </form> 
</div>      
</div>
</body>
</html>