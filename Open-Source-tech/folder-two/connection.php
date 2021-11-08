<?php

$host = "localhost";
$user = "root";
$pass = "";
$db = "dummy";

$con = mysqli_connect($host,$user,$pass);
$db_con = mysqli_select_db($con,$db);
if(!$db_con) echo "Database Error";

?>