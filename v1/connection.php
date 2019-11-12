<?php

define('HOST','localhost');
define('USER','root');
define('PASS','');
define('DB','mtest');
$conn = new mysqli(HOST,USER,PASS,DB) or die('Connetion error to the database');

date_default_timezone_set("ASIA/JAKARTA");
?>