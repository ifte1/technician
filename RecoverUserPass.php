
<?php
session_start();
if(isset($_SESSION['empt'])){
  
    ?>
    <script> alert("Please,Fill all the field");</script>
  <?php 
  unset($_SESSION['empt']); 
  
    }


    if(isset($_SESSION['n'])){
      ?>
      <script> 
      alert('invalid username or mobile number');     
       </script>
     <?php
        unset($_SESSION['n']); 
      
        }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Recover password</title>
    <link rel="stylesheet" href="css/styleForLogin.css">
</head>
<body>
   <div class="form-box">
      <h1>Recover Password </h1>

      <form id="user" class="input-group" action="Back_End/recoveruserpass.php" method="post">
        <input type="text" class="input-field" placeholder="User Name" name=username >
                               
        <input type="text" class="input-field" placeholder="Mobile Number" name=mobile >

        <input type="password" class="input-field" placeholder="New Password" name=password >
                
        <button type="button" class="submit-btn"><a href="loginFileUser.php">Cancel</a></button>
        <button type="submit" name="submit" class="submit-btn">Update</button>

      </form>
       
   </div>
    
</body>
</html>