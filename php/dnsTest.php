<?php

//created by jhayhurst
//this file tests a dns lookup to google (can be changed)
//and also verifies the validity of this test by doing a connection to that location
//in this case a fsockopen

$domain = 'google.com';

if(! checkdnsrr($domain,"A"))
{
  echo 'DNS records do not exist for the domain '.$domain;
}
else
{
  echo "I got you DNS records for that domain - '.$domain.' - they are:";
  echo"<br>\r\n";
  echo gethostbyname($domain);
  echo"<br>\r\n";
  echo "Ima open that socket nao";
  echo"<br>\r\n";

  //open the socket
  $fp = fsockopen("www.google.com", 80, $errno, $errstr, 5);

  //does the socket connection exist?
  if(!$fp)
  {
    echo 'sorry, I could not create a socket connection to the domain '.$domain;
    echo"<br>\r\n";
  }
  else
  {
    $out = "GET / HTTP/1.1\r\n";
    $out .= "Host: ".$domain."\r\n";
    $out .= "Connection: Close\r\n\r\n";
    fwrite($fp, $out);
    while (!feof($fp))
    {
      echo fgets($fp, 128);
    }
    fclose($fp);
  }
}
?>

