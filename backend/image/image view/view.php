<?php

include 'connection.php';

error_reporting(0);

$num=2; // num is the id(primary-key) number of image

$sql="SELECT * FROM test WHERE id='$num'";
$query = mysqli_query($conn,$sql);


while ($row = mysqli_fetch_assoc($query)) {
    echo '<img src="data:image/jpeg;base64,'.base64_encode($row['pics']).'" height="100" width="100"/>';
echo "<br>";

}


?>