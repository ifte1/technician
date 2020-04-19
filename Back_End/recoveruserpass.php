<?php
include('../dbControl/db.php');
session_start();

// store session data
if (isset($_POST['submit'])) {
if (empty($_POST['username']) || empty($_POST['mobile']) ||empty($_POST['password'])) {

  $o="no";
  $_SESSION["empt"] = $o;
 
 header('location:../RecoverUserPass.php'); 
}
else
{
$username=$_POST['username'];
$password=$_POST['password'];
$mobile=$_POST['mobile'];

$connection = new db();
$conobj=$connection->OpenCon();

$query=$connection->getuser($conobj,$username,$mobile);

if(mysqli_num_rows($query)>0)
{

while($result=mysqli_fetch_array($query) )
{
    $uname= $result['username'] ;
    $m= $result['mobile'];
   
    if($username===$uname AND $m==$mobile)
{
      $_SESSION["mobi"] = $m;
    
        $r =$conobj->query ("UPDATE `user` SET `password` ='$password' WHERE (`user`.`username`='$username' AND `user`.`mobile`=$mobile)");
     
       

    header('location:../loginFileUser.php');
}



}
}

else{
 
   
  $n="no";
  $_SESSION["n"] = $n;

    header('location:../RecoverUserPass.php');

}

}


}
?>