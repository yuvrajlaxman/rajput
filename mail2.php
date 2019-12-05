<?php 


require 'C:\xampp\htdocs\PHPMailer_5.2.4\class.phpmailer.php';

//Create a new PHPMailer instance
$mail = new PHPMailer;
// Set PHPMailer to use the sendmail transport
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';              // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'sbtssc@gmail.com';                 // SMTP username
$mail->Password = '9610062820';                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                    // TCP port to connect to

//Set who the message is to be sent from
$mail->setFrom('sbtbsf@gmail.com', 'First Last');
//Set an alternative reply-to address

//Set who the message is to be sent to
$mail->addAddress('sbtssc@gmail.com', 'Shehan');
//Set the subject line
$mail->Subject = 'Test Mail';

$mail->Body = 'This is Test Mail';


//send the message, check for errors
if (!$mail->send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
} else {
    echo "Message sent!";
} 

?>