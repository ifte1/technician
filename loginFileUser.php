<?php
include('Back_End/logincheck.php');

if(isset($_SESSION['username'])){
header("location: pageone.php");
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title>Log In</title>
    <link rel="stylesheet" href="css/styleForLoginUser.css">
</head>
<body>
   <div class="form-box">
      <h1>Log In</h1>
      <div class="button-box">
                <div id="btn"></div>
                <button type="button" class="toggle-btn">User</button>
                <a style="text-decoration:none" href="loginFile.php">
                    <button type="button" class="toggle-btn">Technician</button>
                </a>
        </div>
      <form id="user" class="input-group" action="" method="post">
        <input type="text" class="input-field" placeholder="User Name" name=username required>
                               
        <input type="password" class="input-field" placeholder="Password" name=password required>
                
        <button type="button" class="submit-btn">Cancel</button>
        <button type="submit" name="submit" class="submit-btn">Login</button>

        <h5>Don't have an account? <a href="userRegistration.php">Sign Up here</a></h5>
      </form>
       
   </div>
    
</body>
</html>