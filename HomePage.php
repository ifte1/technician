

<?php
session_start(); 

if(isset($_SESSION['ifte'])){
  
    ?>
     <script> 
     alert('Successful,Now you are the member of our community');
      </script>
    <?php

  unset($_SESSION['ifte']);
 }

 if(isset($_SESSION['khar'])){
  
    ?>
    <script> 
    alert('Successful,Your request is pending for approval');
     </script>
   <?php

  unset($_SESSION['khar']);
 }

 session_destroy();

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Home Page</title>
    <link rel="stylesheet" href="css/styleForHomePage.css">
</head>
<body>
    <header>
        <div class="main">
            <ul class="left">
                <li><a href="HomePage.php">Home</a></li>
                <li><a href="hometechnician.php">Technician</a></li>
                <li><a href="adminLogin.php">Admin</a></li>
        
                <li><a href="userRegistration.php">Ragistration</a></li>
                <li><a href="loginFileUser.php">Log in</a></li>
            </ul>
        </div>  
        <h1 class="t">Technician Finder</h1>
    </header>
    <div class="back">
        <h1>Our Service:</h1>
        <div class="services">
            <div class="a"><h5>Electrical Technician</h5></div>
            <div class="a"><h5>Car <br>Technician</h5></div>
            <div class="a"><h5>Computer Technician</h5></div>
            <div class="a"><h5>Industrial Technician</h5></div>
            <div class="a"><h5>Plumber Technician</h5></div>
            <div class="a"><h5>Rediological Technician</h5></div>
        </div>
    </div>
    
</body>
</html>