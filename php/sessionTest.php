<?php
session_start();
// Use $HTTP_SESSION_VARS with PHP 4.0.6 or less
if (!isset($_SESSION['count'])) {
  $_SESSION['count'] = 1;
} else {
  $_SESSION['count']++;
}
// show how many times visited
echo 'this is '.gethostname().' </br>\n';
echo 'you have been to this page '.$_SESSION['count'].' times\n';
?>