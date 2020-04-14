<?php
 include('../dbControl/db.php');
 if (isset($_POST['submit'])) {
    if (empty($_POST['message'])) {
    
       ?>
        <script> alert("Message field must be field");</script>
      <?php  
    }
    else
    {
    
       $id=$_GET['id'];
      $tmes=$_POST['message'];

    
    $connection = new db();
    $conobj=$connection->OpenCon();
     $q1="SELECT * FROM `message` WHERE (From1='admin' AND To1='$id')";
     $res1=$conobj->query($q1);
     if ($res1->num_rows > 0)
     {
        $q ="UPDATE `message` SET `message` = '$tmes' WHERE (From1 = 'admin' AND To1='$id')";
        $res=mysqli_query($conobj,$q);
        ?>
        <script > 
         alert("Successful,reply is Send");     
        </script>
    
         <?php

     }
     else 
        {
           $q2="INSERT INTO `message` (`id`, `From1`, `To1`, `message`) VALUES (NULL, 'admin', '$id', '$tmes');";
           $res2=mysqli_query($conobj,$q2);
          
           ?>
        <script > 
         alert("Successful,reply is Send");     
        </script>
    
         <?php



        }

    
   
    
  
  

    }

}

?>