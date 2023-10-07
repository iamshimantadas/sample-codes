<?php
$conn=mysqli_connect('localhost','root','','mydb');
if ($conn) {
   echo "connection established!";
} else {
    echo "connection failed!";
}

?>