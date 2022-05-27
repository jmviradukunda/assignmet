<?php
session_start();
// get information from sessions

if (isset($_SESSION['password_reset'])) {
    $data = $_SESSION['password_reset'];
    //fix unauthorised redirection of thank u page
    $_SESSION['mailing']['email'] = $data['resetter'];
    $recipient = $data['resetter'];
    $names = ucfirst($data['names']);
    $subject = "Reset Password";

    $email_body = <<< "body"
    <body><div class="container"><div class="header"><h3>Hi $names?</h3></div><div class="body"><p>Welcome to PHP login system! Please click the button bellow to reset your password.</p><p class="btn-cont"><a href="http://localhost/php_assignment/auth/password_init.php?resetter=$recipient"><button class="activate-btn">Reset to 0000</button></a></p><p>After click this button your password will be initialised to <b>0000</b> you can change after login</p></div><div class="footer">@copy;20RP00932 - Leirbag Developer.</div></div></body>
    body;

    unset($_SESSION['password_reset']);
} else {
    $subject = "Email verification";
    $data       = $_SESSION['mailing'];
    $recipient  = $data['email'];
    $token      = $data['token'];
    $names      = $data['full_name'];

    $email_body = <<< "body"
    <body><div class="container"><div class="header"><h3>Hi $names?</h3></div><div class="body"><p>Welcome to PHP login system! Please click the button bellow to activate your account.</p><p class="btn-cont"><a href="http://localhost/php_assignment/auth/email_verify.php?token=$token"><button class="activate-btn">Activate Now</button></a></p><p>After activating your account, you can: <br><ul><li>Login with your email and password.</li><li>Manage your account profile picture and wallpaper.</li><li>Change your account headlines.</li><li>and also you can do more amazing things with your account</li></ul></p></div><div class="footer">@copy;20RP00932 - Leirbag Developer.</div></div></body>
    body;
}


//return header("location: ../auth/thank_you.php");
// global of phpmailer 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// include required files
require "modules/Exception.php";
require "modules/PHPMailer.php";
require "modules/SMTP.php";
// custom require
require "../includes/function.php";

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);


// email credentials
$me     = 'uwihoreyesalima20@gmail.com';
$my_pas = 'salima200';



try {
    //Server settings
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = "smtp.gmail.com";                        //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                    //Enable SMTP authentication
    $mail->Username   = $me;                                    //SMTP username
    $mail->Password   = $my_pas;                                //SMTP password
    $mail->SMTPSecure = 'tls';                                   //Enable implicit TLS encryption
    $mail->Port       = 587;                                     //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom($me, 'Leirbag - PHP');
    $mail->addAddress($recipient, $names);                                    //Add a recipient

    //Content
    $mail->isHTML(true);                                        //Set email format to HTML
    $mail->Subject = $subject;
    $mail->Body    = $email_body;

    $mail->send();

    header("location: ../auth/thank_you.php");
} catch (Exception $e) {
    redirect('../index', 'error', "Failed to send activation. Mailer Error: {$mail->ErrorInfo}");
}
