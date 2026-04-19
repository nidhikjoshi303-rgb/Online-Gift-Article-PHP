<?php
require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->isSMTP();
    $mail->Host       = 'smtp.gmail.com';
    $mail->SMTPAuth   = true;
    $mail->Username   = 'giftartical12@gmail.com';
    $mail->Password   = 'okrd ghuj uqic wnzy';
    $mail->SMTPSecure = 'tls';
    $mail->Port       = 587;

    //Recipients
    $mail->setFrom('giftartical12@gmail.com', 'Nidhi');
    $mail->addAddress('nidhikjoshi303@gmail.com');

    //Content
    $mail->isHTML(true);
    $mail->Subject = 'Test Email';
    $mail->Body    = '<h1>Hello</h1>This is a test email.';

    $mail->send();
    echo 'Email sent successfully';

} catch (Exception $e) {
    echo "Mailer Error: {$mail->ErrorInfo}";
}
?>