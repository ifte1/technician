
<?php /*
session_start(); 
if(empty($_SESSION["username"])) 
{
header("Location: loginFileUser.php"); // Redirecting To Home Page
}
else{
   $uname= $_SESSION["username"];
}*/
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/styleForUserProfile.css">
    <title>User</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
	  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	  <link href="https://fonts.googleapis.com/css?family=Abril+Fatface|Dancing+Script" rel="stylesheet">
</head>

<body>
    <div class="container">
        <div class="cover_profile">
            <div class="cover">
                <div class="menu_bar">
                   <ul class="options">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Catagories</a></li>
                    <li><a href="#">Technician</a></li>
                    <li><a href="messageTable.php">Inbox</a></li>
                       <li><a href="Back_End/logout.php">Log out</a></li>
                   </ul>              
            </div>
        </div>
    </div>
    <div class="row">

        <?PHP
          include'Back_End/userviewt.php';
        ?>
    </div>
</body>
</html>

