<?php
error_reporting(0);
 $box1 =    $_POST['box1'];
 $box5 =    $_POST['box5'];
  $box11 =   $_POST['box11'];
  $box16 =   $_POST['box16'];
  $box18 =   $_POST['box18'];

  $cnt = 0;
if ($box1) {
   // echo "box 1";
   // echo "<br>";
    $cnt = $cnt+1;
}
if ($box5) {
  //  echo "box 5";
  //  echo "<br>";
  $cnt = $cnt+1;
}
if ($box11) {
  //  echo "box 11";
  //  echo "<br>";
  $cnt = $cnt+1;
}
if ($box16) {
   // echo "box 16";
  //  echo "<br>";
  $cnt = $cnt+1;
}
if ($box18) {
  //  echo "box 18";
  //  echo "<br>";
  $cnt = $cnt+1;
}


?>

<html>
    <body>
        <br>
<font style="font-size:20px;">

</font>
        <br>
        
    <font style="font-size:20px;">
                plz wait while we processing , don't reresh your page or leave from here ....
                <br> <br>
                <b>
          <?php  
if ($cnt==5) {
  echo "bravo";
  echo "<br>";
}
if ($cnt==4) {
  echo "keep it up !! ";
  echo "<br>";
}


if ($cnt<=3) {
echo "need to do better ... ";
echo "<br>";
}

echo "your full marks is : ".$cnt."/5";
echo "<br>";


          ?>
        </b> 
        </font>
        <br>
        <br>
       

    <script>
         setTimeout(function(){
            window.location.href = '2_java_simple_Helloworld.html';
         }, 4000);
      </script>
  
  
    </body>
</html>
