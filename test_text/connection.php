<?php
$host="localhost";
$user="root";
$pass="";
$db="texttest";

$conn = mysqli_connect($host,$user,$pass,$db);
if ($conn) {
	//echo "database connected!!";
	echo "<br>";
} else {
	//echo "database error!!";
	echo "<br>";
}

?>