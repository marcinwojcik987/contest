<?php
/**
 * Created by PhpStorm.
 * User: loki
 * Date: 06.11.17
 * Time: 10:19
 */
require "PHPMailerAutoload.php";
// cos nie dziala wysylanie
$subject = "Zostań Ambasadorem HTC";
$msg = "Witaj,\n           
                    dziękujemy za przesłane zgłoszenie do programu Zostań Ambasadorem HTC.\n
                    Uprzejmie informujemy, że skontaktujemy się z wybranymi osobami na podany adres e-mail.\n\n
                    
                    Pozdrawiamy,\n
                    Zespół HTC";


$mail = new PHPMailer;

$mail->isSMTP();
$mail->Host = 'localhost';
$mail->SMTPAuth = true;
$mail->Username = null;
$mail->Password = null;
$mail->SMTPSecure = null;
$mail->Port = 25;

$mail->setFrom('kontakt@htcu.pl');
$mail->addAddress("2@4oc.pl");
$mail->CharSet = 'UTF-8';

$mail->isHTML(false);

$mail->Subject = $subject;
$mail->Body = $msg;

if (!$mail->send()) {
    var_dump($mail->send());

    return false;
}
