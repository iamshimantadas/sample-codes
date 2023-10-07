<?php
$dsn="mysql:host=localhost;dbname=mydb";
$user="root";
$passd="3df";

try{
    $conn = new PDO($dsn,$user,$passd);
   echo "daabase connected";
}
catch(PDOException $e){
    echo "connection failed!";
    echo $e;
}


?>