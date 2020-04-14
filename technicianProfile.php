<?php
session_start(); 
if(empty($_SESSION["username"])) 
{
header("Location: loginFileUser.php"); // Redirecting To Home Page
}
else{
   $uname= $_SESSION["username"];
   $password=$_SESSION["password"];
   echo" $uname";
   echo"$password";
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
    <title>technician</title>
    <link rel="stylesheet" href="css/styleForTechnicianProfile.css">
</head>
<body>
    <div class="container">
        <div class="cover_profile">
            <div class="cover">
                <div class="menu_bar">
                   <ul class="options">
                    <li><a href="#">Home</a></li>
                    <li><a href="Back_End/tinbox.php">Inbox</a></li>
                    <li><a href="#">Technician</a></li>
                    <li><a href="#">About</a></li>
                   </ul>
                   <ul id="left-option">
                       <li><a href="Back_End/logout.php">Log out</a></li>
                   </ul>
               </div>
               <div class="profile">
                
               </div>
               
            </div>
        </div>
    </div>
    <div class="box">
        <div class="spa">

        <?php
        include 'Back_End/tOwnProfile.php';
        ?>
        <span>Id: 17-0000-2</span><br><br>
        <span>Name: Soyod ul Amin</span><br><br>
        <span>Mobile: +8801254698</span><br><br>
        <span>Address: bashabo, Dhaka</span><br><br>
        <span>Feedback: ****</span><br><br>
        </div>
    </div>
</body>
</html>