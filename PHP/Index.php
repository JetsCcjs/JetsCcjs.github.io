<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>


<?php


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = 0;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'johnmoretorres@gmail.com';                     //SMTP username
    // Usa una contraseña de aplicación generada en lugar de la contraseña normal
    $mail->Password   = 'iizh tryz ubzj fsqo';                              
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;            //Enable TLS encryption
    $mail->Port       = 587;                                    //TCP port to connect to

    //Recipients
    $mail->setFrom('johnmoretorres@gmail.com', 'Mailer');
    $mail->addAddress('johnmoretorres@gmail.com', 'Joe User');     //Add a recipient              //Name is optional

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Here is the subject';
    $mail->Body    = '

Te felicito, al fin lo lograste


    ';
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}















?>

























</body>
</html>