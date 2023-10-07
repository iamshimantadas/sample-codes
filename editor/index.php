<?php
$conn = mysqli_connect('localhost','root','','mydb1');
if(isset($_POST['submit'])){

    $reply_code = $_POST['editor'];
    $sql="INSERT INTO `reply` (`id`, `reply`) VALUES (NULL, '$reply_code')";
    $query=mysqli_query($conn,$sql);
    if($query){
        echo "data inserted!";
    }else{
        echo "data not inserted!";
    }
    
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>editor</title>
</head>

<script src="ckeditor\ckeditor.js"></script>

<body>
    
<form action="" method="post">
  <textarea name="editor" id="editor" cols="30" rows="10">

  </textarea>
  
  <input type="submit" name="submit" value="submit">
</form>

<script>
CKEDITOR.replace('editor');
</script>

</body>
</html>