<?php
include('../dbControl/db.php');

$connection = new db();
$conobj=$connection->OpenCon();
$q= "select * from user ";

$query=mysqli_query($conobj,$q);

if(mysqli_num_rows($query)>0)
{

while($result=mysqli_fetch_array($query) )
{
   ?>
      <tr>
      
        <td> <?php echo $result['id'] ?> </td>
        <td> <?php echo $result['name'] ?> </td>
        <td> <?php echo $result['username'] ?> </td>
        <td> <?php echo $result['mobile'] ?> </td>
        <td> <?php echo $result['sex'] ?> </td>
        <td> <?php echo $result['password'] ?> </td>
        <td> <?php echo $result['email'] ?> </td>
        <td> <?php echo $result['birth-date'] ?> </td>
        <td> <?php echo $result['address'] ?> </td>
      
      </tr>


   <?php

}

}
?>
