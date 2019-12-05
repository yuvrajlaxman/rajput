<?php
session_start();

if($_SESSION["uname"]==true)
{

}
else
{
header('location:stu.php');
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
<div class="container">
			
            <div class="freshdesignweb-top">
                <a href="admin.php">Home</a>
                <span class="right">
                    <a href="logout.php">
                        <strong>logout</strong>
                    </a>
                </span>
                
            </div>
			<header>
				<h1>For Any Request </h1>
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
    			<input type="TEXTRA" id="message" name="message"> 
                
				<p class="contact"><label for="repassword">Add Attachment</label></p> 

    			<input type="file" name="file" id="file"/>
			
			
            <input class="buttom" name="submit" id="submit" tabindex="5" value="SEND MAIL" type="submit"> 	
			<span class="right">
			<input class="buttom" name="RESET" id="reset" tabindex="5" value="reset" type="RESET"> 	
			</span> 
   </form> 
</div>      
</div>
</body>
</html>