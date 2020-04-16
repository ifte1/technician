
<?php

session_start(); 
$uname=$_SESSION["username"];
$pass=$_SESSION["password"];

?>

<h2> Welcome <?php  echo $uname ?> to your Profile</h2>

<?php
include('dbControl/db.php');

$connection = new db();
$conobj=$connection->OpenCon();

$query=$connection->showuser($conobj,$uname,$pass);

if(mysqli_num_rows($query)>0)
{

while($result=mysqli_fetch_array($query) )
{
   ?>
   <table>
      
      
       <tr><td> Id: </td> <td> <?php echo $result['id'] ?> </td></tr> 
       <tr><td> Name: </td> <td> <?php echo $result['name'] ?> </td></tr> 
       <tr><td> UserName: </td> <td> <?php echo $result['username'] ?> </td></tr> 
       <tr><td> Mobile: </td> <td> <?php echo $result['mobile'] ?> </td></tr> 
       <tr><td> Sex: </td> <td> <?php echo $result['sex'] ?> </td></tr> 
       <tr><td> Password: </td> <td><?php echo $result['password'] ?> </td></tr> 
       <tr><td> Email: </td> <td> <?php echo $result['email'] ?> </td></tr> 
       <tr><td> Birth_Date: </td> <td><?php echo $result['birth-date'] ?> </td></tr> 
       <tr><td> Address: </td> <td> <?php echo $result['address'] ?> </td></tr> 
       <tr><td> <button class=""> <a href="Updateuserprofile.php?id=<?php echo $result['id']; ?>"
       > Update </a>  </button></td></tr> 
      </table>

   <?php

}

}
?>
