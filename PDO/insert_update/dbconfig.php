<?php
$host="localhost";
$user="root";
$passd="";
$db="db1";

$conn = mysqli_connect($host,$user,$passd,$db);

if($conn){
    echo "<br> database connected!";
}
else{
    echo "<br> database not connected!";
}
?>