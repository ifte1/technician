
   
<?php
include('../dbControl/db.php');
if (isset($_POST['submit']))
{
$fullname=$_POST['fullname'];
$username=$_POST['username'];
$password=$_POST['password'];
$email=$_POST['email'];
$gender=$_POST['gender'];
$mobile=$_POST['mobile'];
$birth=$_POST['birth'];
$address=$_POST['address'];
$catagory=$_POST['catagory'];
$experience=$_POST['experience'];
$file=$_FILES['file'];
$filename= $file['name'];


$connection = new db();
$conobj=$connection->OpenCon();

$userQuery=$connection->technicianupdate($conobj,$fullname, $username, $mobile,$gender, $password, $email,$birth,$experience,$catagory,$address,$filename);


$connection->CloseCon($conobj);

}

?>
