<?php


$test_cookie = 'worked';
setcookie('test_cookie',$test_cookie,time() + (86400)); // 86400 = 1 day

echo 'your first visit on this page, you will likely get the error. refresh, second try counts.<br />';
if ($_COOKIE['test_cookie']!='')
echo 'test cookie '.$_COOKIE['test_cookie']; // Hello David!
else
echo 'cookies not working :/ ';
?>
