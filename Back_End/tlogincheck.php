<?php
include('dbControl/db.php');
session_start(); 


// store session data
if (isset($_POST['submit'])) {
if (empty($_POST['username']) || empty($_POST['password'])) {

   ?>
    <script> alert("Username or password is invalid");</script>
  <?php  
}
else
{
$username=$_POST['username'];
$password=$_POST['password'];

$connection = new db();
$conobj=$connection->OpenCon();

$userQuery=$connection->CheckUser($conobj,"technician",$username,$password);

if ($userQuery->num_rows > 0) {
$_SESSION["username"] = $username;
$_SESSION["password"] = $password;
   }
 else {
  ?>
  <script> alert("Username or password is wrong");</script>
<?php  
}
$connection->CloseCon($conobj);
}
}
?>
