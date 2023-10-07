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

$sql="SELECT * FROM table1 WHERE username='hacker'";
$query = mysqli_query($conn,$sql);

$row=mysqli_fetch_assoc($query);
echo $row['name'];

?>