#!/usr/bin/php
<?php
require("class.phpmailer.php");
require("class.smtp.php");
//include "mail/class.phpmailer.php";
//include "mail/class.smtp.php";
error_reporting (E_ALL);

$username = $argv[1];
$subject = $argv[2];
$body = $argv[3];

$mail = new PHPMailer();
//$mail->SMTPDebug = 2;
$mail->IsSMTP();                  // set mailer to use SMTP
$mail->Host = "smtp.gmail.com";  // specify main and backup server
$mail->SMTPSecure = 'tls';
$mail->Port = 587;
$mail->SMTPAuth = true;         //turn on SMTP authentication
$mail->Username = "issabel_Gmail_account@gmail.com";     // SMTP username
$mail->Password = "issabel_Gmail_password";   // SMTP password

$mail->From = "issabel_Gmail_account@gmail.com";
$mail->FromName = "issabel";
$mail->AddAddress("$username");

$mail->WordWrap = 50;                                 // set word wrap to 50 characters
//$mail->AddAttachment("/var/tmp/file.tar.gz");         // add attachments
//$mail->AddAttachment("/tmp/image.jpg", "new.jpg");    // optional name
$mail->IsHTML(true);                                  // set email format to HTML

$mail->Subject = "$subject";
$mail->Body    = "$body";
$mail->AltBody = "$body";

if(!$mail->Send())
{
   echo "Message could not be sent. <p>";
   echo "Mailer Error: " . $mail->ErrorInfo;
   exit;
}

echo "Message has been sent";
?>
