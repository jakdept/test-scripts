<?php

/* notes:

INSTALL Mail through PEAR

Make sure that /usr/local/lib/php/ is in the include path

change the username, password, and host - and uncomment those lines

*/

require_once "Mail.php";
 
$from = "LW TEST <from@sender.com>";
$to = "Jim Murphy <to@dest.com>";
$subject = "PHP TEST EMAIL!";
$body = "Hi,\n\nHow are you?\n\nGet FREE VIAGRA TODAY!";
 
//$host = "ssl://hostname";
$port = "465";
//$username = "smtp_username";
//$password = "smtp_password";

$headers = array ('From' => $from,
   'To' => $to,
   'Subject' => $subject);
 $smtp = Mail::factory('smtp',
   array ('host' => $host,
     'port' => $port,
     'auth' => true,
     'username' => $username,
     'password' => $password));
 
 $mail = $smtp->send($to, $headers, $body);
 
 if (PEAR::isError($mail)) {
   echo("<p>" . $mail->getMessage() . "</p>");
  } else {
   echo("<p>Message successfully sent!</p>");
  }
?>

