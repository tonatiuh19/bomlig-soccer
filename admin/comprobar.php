<?php
$fromname = "Peke";
$fromaddress = "tonatiuh.gom@gmail.com";
$toname = "Mr. Peke";
$toaddress = "tgomezz@icloud.com";
$subject = "Hola";
$message = "Ya se pudo";


function MAIL_NVLP($fromname, $fromaddress, $toname, $toaddress, $subject, $message)
{
   // Copyright ? 2005 ECRIA LLC, http://www.ECRIA.com
   // Please use or modify for any purpose but leave this notice unchanged.
   $headers  = "MIME-Version: 1.0\n";
   $headers .= "Content-type: text/plain; charset=iso-8859-1\n";
   $headers .= "X-Priority: 3\n";
   $headers .= "X-MSMail-Priority: Normal\n";
   $headers .= "X-Mailer: php\n";
   $headers .= "From: \"".$fromname."\" <".$fromaddress.">\n";
   return mail($toaddress, $subject, $message, $headers);
}
?>
