<?php
include('Back_End/adminLoginCheck.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Log In</title>
    <link rel="stylesheet" href="css/styleForLogin.css">
</head>
<body>
   <div class="form-box">
      <h1>Log In</h1>
      <form id="user" class="input-group" action="" method="post">
        <input type="text" class="input-field" placeholder="User Name" name=username >
                               
        <input type="password" class="input-field" placeholder="Password" name=password >
                
        <button type="button" class="submit-btn" <li> <a href="HomePage.php">Cancel</a></li></button>
        <button type="submit" name="submit" class="submit-btn">Login</button>
        
      </form>
       
   </div>
    
</body>
</html>