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
        alert('invalid password');     
         </script>
       <?php
        unset($_SESSION['n']); 
      
        }



    if(isset($_SESSION['o'])){
        ?>
    <script> 
     alert('New Password and Confirm password must be same');     
    </script>
     <?php
        unset($_SESSION['o']); 
      
        }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title>Change password</title>
    <link rel="stylesheet" href="css/styleForLogin.css">
</head>
<body>
   <div class="form-box">
      <h1>Change Password </h1>

      <form id="user" class="input-group" action="Back_End/changetechpass.php" method="post">
        <input type="password" class="input-field" placeholder="Password" name=password >
                               
        <input type="password" class="input-field" placeholder="New Password" name=newpass >

        <input type="password" class="input-field" placeholder="confirm Password" name=conpass >
                
        <button type="button" class="submit-btn"><a href="loginFileUser.php">Cancel</a></button>
        <button type="submit" name="submit" class="submit-btn">Update</button>

      </form>
       
   </div>
    
</body>
</html>