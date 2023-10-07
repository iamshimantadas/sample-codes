<?php
include 'connection.php';
error_reporting(0);

$imagefile = addslashes(file_get_contents($_FILES['imagefile']['tmp_name']));

if ($imagefile) {
    echo "we got";
} else {
    // code...
}


//$sql="INSERT INTO test(id,pics) VALUES('','$imagefile')";
$sql2 = "INSERT INTO `test` (`id`, `pics`) VALUES (NULL,'$imagefile')";
$query = mysqli_query($conn,$sql2);


if ($query) {
    echo "image uploaded";
}
else {
    echo "try again :( ";
}
?>

