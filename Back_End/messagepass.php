<?php
 include('../dbControl/db.php');
  
 if (isset($_POST['submit'])) {
    if (empty($_POST['username']) || empty($_POST['message'])) {
    
       ?>
        <script> alert("must fill all the text field ");</script>
      <?php  
    }
    else
    {
        $uname = $_GET['uname'];
        $tname=$_POST['username'];
        $tmes=$_POST['message'];
    
    $connection = new db();
    $conobj=$connection->OpenCon();
    
    $q ="INSERT INTO `message` (`id`, `From1`, `To1`, `message`) VALUES (NULL, '$uname', '$tname', '$tmes')";
    $res=mysqli_query($conobj,$q);
     ?>
      <script > 
       alert("Successful,Message is send");     
      </script>

       <?php

  

    }

}

?>