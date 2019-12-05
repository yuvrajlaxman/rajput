<?php
require 'C:\xampp\php\pear\PEAR\PHPMailer-FE_v4.11\_lib\class.phpmailer.php';
$mail = new PHPMailer;

$mail->IsSMTP();
$mail->SMTPAuth = true;
$mail->Host = "smtp.gmail.com";
$mail->Port = 587;
$mail->Username = "sbtssc@gmail.com";
$mail->Password = "9610062820";

$mail->From         = 'sbtssc@gmail.com';
$mail->FromName     = 'Admin';
$mail->AddAddress('sbtbsf@gmail.com', 'Receiver');  // Add a recipient
$mail->IsHTML(true);

$mail->Subject = 'Here is the Subject';
$mail->WordWrap = 50;  
$mail->Body = "This is in <b>Blod Text</b>";
$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

if(!$mail->Send()) {
   echo 'Message could not be sent.';
   echo 'Mailer Error: ' . $mail->ErrorInfo;
   exit;
}

echo 'Message has been sent';
?>