<?php

/* Namespace alias. */
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;




require 'C:\MAMP\htdocs\PHPMailer\PHPMailer\src\Exception.php';
require 'C:\MAMP\htdocs\PHPMailer\PHPMailer\src\PHPMailer.php';
require 'C:\MAMP\htdocs\PHPMailer\PHPMailer\src\SMTP.php';


/* Create a new PHPMailer object. Passing TRUE to the constructor enables exceptions. */
$mail = new PHPMailer(TRUE);

/* Open the try/catch block. */
try {
    $mail->SMTPDebug=2;
	$mail->isSMTP();
	$mail->Host = 'smtp.gmail.com';
	$mail->SMTPAuth = true;
	$mail->Username = 'siva010928@gmail.com';
	$mail->Password = 'taqwunzgjzzdrnpl';
	$mail->SMTPSecure = 'tls';
	$mail->Port = 587;
   $mail->setFrom('pranav.rk02@gmail.com', 'Pranav');

   /* Add a recipient. */
   $mail->addAddress('pranav.19cs@kct.ac.in');

   /* Set the subject. */
   $mail->Subject = 'Mail SEnt';
   
   $mail->isHTML(True);

   /* Set the mail message body. */
   $mail->Body = '<html>Congrats!!The mail has been <strong>sent successfully</strong>.</html>';

   $mail->Altbody = 'Congrats!!The mail has been <strong>sent successfully.';
   
    $mail->addAttachment('C:\Users\Pranav\Downloads\RRP_LAB8.docx');
	
   /* Finally send the mail. */
   $mail->send();
}
catch (Exception $e)
{
   /* PHPMailer exception. */
   echo $e->errorMessage();
}
catch (\Exception $e)
{
   /* PHP exception (note the backslash to select the global namespace Exception class). */
   echo $e->getMessage();
}