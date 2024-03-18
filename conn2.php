<?php
#phpinfo();
if (!defined('DB_HOST')) define('DB_HOST','localhost');
if (!defined('DB_USER')) define('DB_USER','root');
if (!defined('DB_PASS')) define('DB_PASS','');
if (!defined('DB_NAME')) define('DB_NAME','sp');
$link = mysql_connect('localhost', 'root', '');
if (!$link) {
    die('Could not connect: ' . mysql_error());
}
#<?php
#$link = mysql_connect('localhost', 'root', '');
#if (!$link) {
 #   die('Could not connect: ' . mysql_error());
#}
#echo 'Connected successfully';
#mysql_close($link);
#