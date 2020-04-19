<?php
session_start();
$uname= $_SESSION["username"];

include('../dbControl/db.php');

if (isset($_POST['submit'])) {
if (empty($_POST['password']) || empty($_POST['newpass']) ||empty($_POST['conpass'])) {


 $o="no";
 $_SESSION["empt"] = $o;

header('location:../changepasstech.php');

}
else
{
$password=$_POST['password'];
$newpass=$_POST['newpass'];
$conpass=$_POST['conpass'];


if($newpass==$conpass){

$connection = new db();
$conobj=$connection->OpenCon();

$query=$connection->gettechbypass($conobj,$uname,$password);

if(mysqli_num_rows($query)>0)
{

while($result=mysqli_fetch_array($query) )
{
    $id= $result['id'];
    $_SESSION["id"] = $id;
        $r =$conobj->query ("UPDATE `technician` SET `password` ='$newpass' WHERE id=$id");

        header('location:../technicianProfile.php');

}

}
else{

    $n="no";
    $_SESSION["n"] = $n;
   
   header('location:../changepasstech.php');
  
  
}
}
else
{
    $o="no";
    $_SESSION["o"] = $o;
   
   header('location:../changepasstech.php');
   


}

}



}


?>