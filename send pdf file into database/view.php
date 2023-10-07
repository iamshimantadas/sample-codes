<?php

include 'dbcon.php';
error_reporting(0);


                              $selectQuery = "select * from pdf_data";
                              $squery = mysqli_query($con, $selectQuery);

                              $result = mysqli_fetch_assoc($squery);
                              
                           /*   while (($result = mysqli_fetch_assoc($squery))) {
                          ?>
                          <tr>
                            <td><?php echo $result['id']; ?></td>
                            <td><?php echo $result['username']; ?></td>
                            <td><?php echo $result['filename']; ?></td>
                          </tr>
                          <?php
                               }*/
                          ?> 


<html>
    <body>
        
    <br>
    <br>
    <br>

    <a href="<?php echo $result['filename']."pdf"; ?>">
        download
    </a>
    </body>
</html>