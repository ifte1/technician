<?php
session_start(); 
if(empty($_SESSION["username"])) 
{
header("Location: loginFileUser.php"); // Redirecting To Home Page
}
else{
   $uname= $_SESSION["username"];
   $password=$_SESSION["password"];

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
                    <li><a href="technicianShowProfile.php">Profile</a></li>
                    <li><a href="#">About</a></li>
                   </ul>
                   <ul id="left-option">
                       <li><a href="Back_End/logout.php">Log out</a></li>
                   </ul>
        </div>
    </div>
    
</body>
</html>