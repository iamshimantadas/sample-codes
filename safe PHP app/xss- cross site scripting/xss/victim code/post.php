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
echo "post.php page";
echo "<br>";
if (isset($_POST['submit'])) {
   
$name =    $_POST['name'];
$uname =   $_POST['uname'];
$upass =    $_POST['upass'];

/*
// filtering script
$name = mysqli_real_escape_string($conn,$name);
$user = mysqli_real_escape_string($conn,$username);
$pass = mysqli_real_escape_string($conn,$userpassd);

$name = htmlspecialchars($name);
$user = htmlspecialchars($user);
$pass = htmlspecialchars($pass);
*/

echo "name is  ".$name;
echo "<br>";
echo "username is ".$uname;
echo "<br>";
echo "userpassword is ".$upass;
echo "<br>";

$sql="INSERT INTO `table1` (`id`, `name`, `username`, `passd`) VALUES (NULL, '$name', '$uname', '$upass')";
$query = mysqli_query($conn,$sql);

if ($query) {
    echo "record inserted!";
} else {
   echo "sorry plz try again!";
}


}
else {
   header("Location: index.html");
}

?>