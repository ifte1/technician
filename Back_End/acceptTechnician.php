<?php
  
  include('../dbControl/db.php');
  
  $connection = new db();
  $conobj=$connection->OpenCon();
  
  $id = $_GET['id'];
  echo("$id");
  $q = "select * from tTechnician WHERE tTechnician.`id` = '$id' ";
  $res=mysqli_query($conobj,$q);
   while($result= mysqli_fetch_assoc($res))
             {
                
               $fullname =$result['Fullname'];
               $username =$result['username'];
               $mobile=$result['mobile'];
              $gender=$result['gender'];
              $password=$result['password'];
              $email=$result['email']; 
              $birth= $result['birth']; 
              $experience= $result['experience'];
              $catagory=$result['catagory'];
              $address=$result['address'];
               $file= $result['file'];

               $userQuery=$connection->technicianupdate($conobj,$fullname, $username, $mobile,$gender, $password, $email,$birth,$experience,$catagory,$address,$file);

             }
             $que = "DELETE FROM `tTechnician` WHERE tTechnician.`id` = '$id' ";
             mysqli_query($conobj,$que);
             
             header('location:tTechnicianTable.php');
             $connection->CloseCon($conobj);
?>