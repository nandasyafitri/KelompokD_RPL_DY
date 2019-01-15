<?php
// Include and initialize phpmailer class
require 'mailer/PHPMailerAutoload.php';
function sending($message,$email,$msg){
	$mail = new PHPMailer;
	// SMTP configuration
	$mail->isSMTP();
	$mail->Host = 'smtp.gmail.com';
	$mail->SMTPAuth = true;
	$mail->Username = 'dcaffeinc@gmail.com';
	$mail->Password = 'jusmangga1234';
	$mail->SMTPSecure = 'tls';
	$mail->Port = 587;
	$mail->setFrom('dcaffeinc@gmail.com', 'DCAFFE-IN');
	//$mail->addReplyTo('info@example.com', 'CodexWorld');
	// Add a recipient
	$mail->addAddress($email);
	// Email subject
	$mail->Subject = 'Send Email Confirmation';
	// Set email format to HTML
	$mail->isHTML(true);
	// Email body content
	$mailContent = $message;
	$mail->Body = $mailContent;
	// Send email
	if(!$mail->send()){
    	$msg="Message could not be sent";
    	echo 'Mailer Error: ' . $mail->ErrorInfo;
	}
}
?>
