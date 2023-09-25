<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require __DIR__ . "/vendor/autoload.php";

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();
// print_r($_ENV);

$mail = new PHPMailer(true);

// $mail->SMTPDebug = SMTP::DEBUG_SERVER;
// enables verbose debug output
// $mail->SMTPDebug = 2; 

$mail->isSMTP();
$mail->SMTPAuth = true;

$mail->SMTPSecure = 'ssl';
$mail->Host = $_ENV['MAIL_HOST'];
$mail->Port = $_ENV['MAIL_PORT'];
$mail->Username = $_ENV['MAIL_USERNAME'];
$mail->Password = $_ENV['MAIL_PASSWORD'];


$mail->isHtml(true);

return $mail;