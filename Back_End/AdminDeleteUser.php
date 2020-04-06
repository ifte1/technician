<?php
include('../dbControl/db.php');

extract($_POST);
if(isset($_POST['submit']))
{
    $connection = new db();
    $conobj=$connection->OpenCon();

    $idn=$_POST['idn'];
    $q= "DELETE FROM `user` WHERE `user`.`id` = '$idn'";
    $query= mysqli_query($conobj,$q);
    header('location:../userTable.php');

}

?>
