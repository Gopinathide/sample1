<?php
$to_email='gopinathk.19it@kongu.edu';
$subject='Simple Email Test via PHP';
$body="Hi , This is test email send by PHP Script in 2020 from youtube " ;
$headers="From: nathgopi110@gmail.com";
$mail_sent=mail($to_email,$subject,$body,$headers);
if($mail_sent==true)
{
echo " Email successfully sent to $to_email ... " ;
} else {
echo " Email sending failed/" ;
}

?>