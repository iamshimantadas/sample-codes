<?php

$conn = mysqli_connect('localhost','root','','mydb');
if ($conn) {
    echo "connection setup successfully!";
    echo "<br>";
}
else {
    echo "connection failed!";
    echo "<br>";
}
echo "auth.php page";
echo "<br>";
echo "<br>";

if (isset($_POST['submit'])) {
   

$uname =   $_POST['uname'];
$upass =    $_POST['upass'];


echo "username is ".$uname;
echo "<br>";
echo "userpassword is ".$upass;
echo "<br>";

$sql="SELECT * FROM table2 WHERE username='$uname' AND passd='$upass'";

$query = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($query);

if ($row['id']) {
    header("Location: admin.html");
} else {
   echo "sorry your credentials not matched!";
}


}
else {
   header("Location: index.html");
}

?>