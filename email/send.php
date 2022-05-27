<?php
session_start();
require "../config.php";
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require "Exception.php";
require "SMTP.php";
require "PHPMailer.php";

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);
//recipient
$recipient = $_SESSION['receiver'];
//retrieve verification
$sql = "SELECT `verificationemail` FROM `account` WHERE `email` = '$recipient'";
$res = mysqli_query($con,$sql);
$link = mysqli_fetch_array($res);
$link = $link['verificationemail'];
$subject = "verify  your email";
// credential
$mine = "uwihoreyesalima20@gmail.com";
$key = "salima200";
// message
$message = <<< "doc"
    <h1>Activate your account</h1>
    <p>Click link below to activate your account</p>
    <a href="http://localhost/salima/PHP_Assignment/login.php?v=$link">Verify now</a>
doc;

try {
   //Server settings
   $mail->isSMTP();                                            //Send using SMTP
   $mail->Host       = "smtp.gmail.com";                        //Set the SMTP server to send through
   $mail->SMTPAuth   = true;                                    //Enable SMTP authentication
   $mail->Username   = $mine;                                    //SMTP username
   $mail->Password   = $key;                                //SMTP password
   $mail->SMTPSecure = 'tls';                                   //Enable implicit TLS encryption
   $mail->Port       = 587;                                     //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

   //Recipients
   $mail->setFrom($mine, 'SALIMA - PHP');
   $mail->addAddress($recipient);                                    //Add a recipient

   //Content
   $mail->isHTML(true);                                        //Set email format to HTML
   $mail->Subject = $subject;
   $mail->Body    = $message;

   $mail->send();
   $_SESSION['receiver'] = $recipient;
    header('location: ../notifier.php');
} catch (Exception $e) {
    echo "{$mail->ErrorInfo}";
}