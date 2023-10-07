<?php
require 'dbconfig.php';

if(isset($_POST['submit'])){
    $sql="INSERT INTO students(enrollno,name,loc,phone) VALUES(NULL,?,?,?)";
    $query=mysqli_prepare($conn,$sql);

    if($query){
        echo "<br><font size='25px' color='green'>record inserted successfully!</font>";
        
        mysqli_stmt_bind_param($query,'sss',$uname,$uloc,$uphone);

        $uname=$_POST['stuname'];
        $uloc=$_POST['stuloc'];
        $uphone=$_POST['stuphone'];

        $uname=mysqli_real_escape_string($conn,$uname);
        $uloc=mysqli_real_escape_string($conn,$uloc);
        $uphone=mysqli_real_escape_string($conn,$uphone);
        
        mysqli_stmt_execute($query);

    }
    else{
        echo "<br><font size='25px' color='red'>record not inserted successfully! plz try again!! </font>";
       
    }
}
else{
    echo "<br>Plz!! press 'submit' button!! ";
}
?>