<?php
include('../dbControl/db.php');

$fullname=$_POST['fullname'];
$username=$_POST['username'];
$password=$_POST['password'];
$email=$_POST['email'];
$mobile=$_POST['mobile'];
$birth=$_POST['birth'];
$address=$_POST['address'];
$id=$_GET['id'];

$connection = new db();
$conobj=$connection->OpenCon();
$userQuery=$connection->techupdateinsert($conobj,$fullname, $username, $mobile, $password, $email,$birth , $address,$id);


?>