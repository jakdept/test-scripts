<?php

error_reporting(E_ALL);
ini_set('display_errors', true);
// trigger_error('Error');

// U on end makes greedy, no U will match full word
$count = preg_match('/fo\w*/', 'Good food for you', $matches);
echo $count;
foreach ($matches as $voodoo)
{
echo $voodoo;
}

?>