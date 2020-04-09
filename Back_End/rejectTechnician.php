<?php
include('../dbControl/db.php');

$connection = new db();
$conobj=$connection->OpenCon();

$id = $_GET['id'];
$q = "DELETE FROM `tTechnician` WHERE tTechnician.`id` = '$id' ";

mysqli_query($conobj,$q);

header('location:tTechnicianTable.php');

?>