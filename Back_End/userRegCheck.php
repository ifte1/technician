<?php
include('../dbControl/db.php');

$fullname=$_POST['fullname'];
$username=$_POST['username'];
$password=$_POST['password'];
$email=$_POST['email'];
$gender=$_POST['gender'];
$mobile=$_POST['mobile'];
$birth=$_POST['birth'];
$address=$_POST['address'];

$connection = new db();
$conobj=$connection->OpenCon();

$userQuery=$connection->userupdate($conobj,$fullname, $username, $mobile,$gender, $password, $email,$birth , $address);


$connection->CloseCon($conobj);



?>
