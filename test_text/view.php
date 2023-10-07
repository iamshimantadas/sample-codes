<?php
include 'connection.php';
error_reporting(0);

$sql="SELECT * FROM `samle` WHERE `id`='11'";
$query = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($query);

echo "<br>";
echo $row['para'];
echo "<br>";
?>