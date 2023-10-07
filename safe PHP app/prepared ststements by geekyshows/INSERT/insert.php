<?php
// creating connection with mysql-database.
$conn = mysqli_connect('localhost','root','','mydb');
if ($conn) {
    echo "connection successfully created!";
} else {
    echo "plz check your connection! :( ";
}

// ? = annonimos placeholder.
$sql="INSERT INTO table1(name,username,passd) VALUES(?,?,?)";
$query = mysqli_prepare($conn,$sql);
// if query failed then it will stoped here!
if ($query) {
    echo "your query executed!";
    mysqli_stmt_bind_param($query,'sss',$name,$username,$passd);
    
	// variable and values which will pass
    $name = "debo";
    $username="iamdebo";
    $passd="123dfr";

    /*
    you can insert multiple valuesat one time using prepared statement.
       $name = "nishant";
    $username="iamnishant";
    $passd="nishant$@#ED";

    */
    // executing prepared statement.
    mysqli_stmt_execute($query);
    
    $n= mysqli_stmt_affected_rows($query);
    echo "your affected rows ".$n;

} else {
    echo "query not executed!";
}
 

?>