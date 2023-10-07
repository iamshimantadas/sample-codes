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


// filtering script during insertion, by using that anyone can't hack via cross-site scripting

$name = mysqli_real_escape_string($conn,$name);
$uname = mysqli_real_escape_string($conn,$uname);
$upass = mysqli_real_escape_string($conn,$upass);

$name = htmlspecialchars($name);
$uname = htmlspecialchars($uname);
$upass = htmlspecialchars($upass);


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