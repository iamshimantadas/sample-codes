<?php
include 'connection.php';
error_reporting(0);

$box = $_POST['textbox'];

echo "<br>";
echo "text is";
echo "<br>";
echo $box;



$sql="INSERT INTO `samle` (`id`, `para`) VALUES (NULL,'$box')";
$query = mysqli_query($conn,$sql);
if ($query) {
	echo "text inserted!!";
} else {
	echo "text not inserted!!";
}

?>