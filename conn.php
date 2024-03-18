<?php
defined('DB_HOST')or define('DB_HOST','localhost');
defined('DB_USER')or define('DB_USER','root');
defined('DB_PASS')or define('DB_PASS','');
defined('DB_NAME')or define('DB_NAME','sp');
$link = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);
echo $link;
if(!$link)
{
    #die ("Could not connect".mysqli_connect_error());
    die ("Could not connect".mysqli_connect_error());
          
          }
#echo "Connected successfully";
#echo $link


#$link = mysql_connect("localhost", "mysql_user", "mysql_password")
 #       or die("Could not connect: " . mysql_error());
  #  echo "Connected successfully";
   # mysql_close($link);