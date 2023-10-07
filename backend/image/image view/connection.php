<?php

$host="localhost";
$user="root";
$pass="12345";
$db="db1";

$conn = mysqli_connect($host,$user,$pass,$db);
if ($conn) {
   echo "database connected ";
}

?>