<?php
require 'connection.php';
echo "<br>";
?>

<?php
$sql="UPDATE table1 SET name=?,username=?,passd=? WHERE id=?";
$query=mysqli_prepare($conn,$sql);

if ($query) {
    mysqli_stmt_bind_param($query,'sssi',$name,$username,$passd,$id);

    $uid=$_POST['uid'];
    $name=$_POST['name'];
    $uname=$_POST['uname'];
    $upass=$_POST['upass'];
    // filter user-inputs
   
    $id = mysqli_real_escape_string($conn,$uid);
  $name = mysqli_real_escape_string($conn,$name);
  $username = mysqli_real_escape_string($conn,$uname);
  $passd = mysqli_real_escape_string($conn,$upass);
   

    mysqli_stmt_execute($query);
    
    echo "query executed!";
    
}
?>