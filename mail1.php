<?php
 
require_once('phpmailer/PHPMailerAutoload.php');
 
$mail = new PHPMailer();
$mail->CharSet =  "utf-8";
$mail->IsSMTP(); // Set mailer to use SMTP
$mail->SMTPDebug = 1;  // Enable verbose debug output
$mail->SMTPAuth = true; // Enable SMTP authentication
$mail->Username = "sbtssc@gmail.com"; //Your Auth Email ID
$mail->Password = "9610062820"; //Your Password
$mail->SMTPSecure = 'tls'; // Enable TLS encryption, `ssl` also accepted
$mail->Host = "smtp.gmail.com"; // SMTP 
$mail->Port = "587"; // TCP port to connect to
 
$mail->setFrom('sbtssc@gmail.com', 'From Name');
$mail->AddAddress("sbtssc@gmail.com" , "Recipient name"); // Add a recipient
 
$mail->addAttachment('C:\xampp\htdocs\pr\4.jpg');         // Add attachments
 
$mail->Subject = "testing";
$mail->Body = "<div style='font-weight: bold;'>Your Message or Contentnnnnnnnnnnnnnnnnnnnnnnnnnnnnn</div>";
$mail->ContentType = "text/html";
 
if($mail->Send()){
 $str = "OK"; 
}else{
 $str = "ERR"; 
}
 
//End PHPMailer Code Here
?>
