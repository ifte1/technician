<?php
include('../dbControl/db.php');
session_start();

// store session data
if (isset($_POST['submit'])) {
if (empty($_POST['username']) || empty($_POST['mobile']) ||empty($_POST['password'])) {

   ?>
    <script> alert("Username or password or mobile number is invalid");</script>
  <?php  
}
else
{
$username=$_POST['username'];
$password=$_POST['password'];
$mobile=$_POST['mobile'];

$connection = new db();
$conobj=$connection->OpenCon();

$query=$connection->gettech($conobj,$username,$mobile);

if(mysqli_num_rows($query)>0)
{

while($result=mysqli_fetch_array($query) )
{
    $uname= $result['username'] ;
    $m= $result['mobile'];
   
    if($username===$uname AND $m==$mobile)
{
      $_SESSION["mobi"] = $m;
    
        $r =$conobj->query ("UPDATE `technician` SET `password` ='$password' WHERE (`technician`.`username`='$username' AND `technician`.`mobile`=$mobile)");
     
       

    header('location:../loginFile.php');
}



}
}

else{

    
   
  ?>
   <script> 
   alert('invalid username or mobile number');     
    </script>
  <?php
   header('location:../loginFile.php');

}

}


}
?>