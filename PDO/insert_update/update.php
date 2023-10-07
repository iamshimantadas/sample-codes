<?php
require 'dbconfig.php';

if(isset($_POST['submit'])){
    $sql="UPDATE students SET name=?,loc=?,phone=? WHERE enrollno=?";
    $query=mysqli_prepare($conn,$sql);

    if($query){
        echo "<br><font size='25px' color='green'>update record successfully!</font>";
        
        mysqli_stmt_bind_param($query,'ssii',$uname,$uloc,$uphone,$uenrollno);

        $uname=$_POST['stuname'];
        $uloc=$_POST['stuloc'];
        $uphone=$_POST['stuphone'];
        $uenrollno=$_POST['stuid'];

        $uname=mysqli_real_escape_string($conn,$uname);
        $uloc=mysqli_real_escape_string($conn,$uloc);
        $uphone=mysqli_real_escape_string($conn,$uphone);
        $uenrollno=mysqli_real_escape_string($conn,$uenrollno);
        
        mysqli_stmt_execute($query);

    }
    else{
        echo "<br><font size='25px' color='red'>record not update successfully! plz try again!! </font>";
       
    }
}
else{
    echo "<br>Plz!! press 'submit' button!! ";
}
?>