<?php
$to      = 'noreply@email.com';
$subject = 'the test subject';
$message = 'hello';
$headers = 'From: noreply@email.com' . "\r\n" .
    'Reply-To: noreply@email.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);
?>