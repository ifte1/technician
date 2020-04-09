<?php
class db{
 
function OpenCon()
 {
 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "";
 $db = "Technician";
 $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
 
 return $conn;
 }
 function CheckUser($conn,$table,$username,$password)
 {
$result = $conn->query("SELECT * FROM ". $table." WHERE username='". $username."' AND password='". $password."'");
 return $result;
 }

 function userupdate($conn,$fullname, $username, $mobile,$gender, $password, $email,$birth , $address)
 {
$result =  "INSERT INTO `user` (`id`, `name`, `username`, `mobile`, `sex`, `password`, `email`, `birth-date`, `address`) VALUES (NULL, '$fullname', '$username','$mobile','$gender','$password','$email','$birth','$address');";
if ($conn->query($result) === TRUE) {
    print "<h2> Congratulation, Registration successfull</h2>";
    print" Now you are the member of our community ";
} else {
   
    echo "Error: " . $result . "<br>" . $conn->error;
}
 }

function show ($conn)
{
    $q=$conn->query ("select * from user ");
    return $q;

}
function deleteuser($conn,$idn)

{
    $q= $conn->query("DELETE FROM `user` WHERE `user`.`id` = '$idn'");
   return $q;

}
function tTechnicianupdate($conn,$fullname, $username, $mobile,$gender, $password, $email,$birth,$experience,$catagory,$address,$file)
 {
$result =  "INSERT INTO `tTechnician` (`id`, `Fullname`, `username`, `mobile`, `gender`, `password`, `email`, `birth`, `experience`, `catagory`, `address`, `file`) VALUES (NULL, '$fullname', '$username', '$mobile', '$gender', '$password', '$email', '$birth', '$experience', '$catagory', '$address', '$file');";
if ($conn->query($result) === TRUE) {
    print "<h2> Congratulation.</h2>";
    print" Please Wait for Admin approval";
    ?>

     <script> 
     alert('Successful,Your request is pending for approval');
     
      </script>
    <?php
} else {
   
    echo "Error: " . $result . "<br>" . $conn->error;
}
 }
function Technicianupdate($conn,$fullname, $username, $mobile,$gender, $password, $email,$birth,$experience,$catagory,$address,$file)
 {
$result =  "INSERT INTO `technician` (`id`, `Fullname`, `username`, `mobile`, `gender`, `password`, `email`, `birth`, `experience`, `category`, `address`, `file`) VALUES (NULL, '$fullname', '$username', '$mobile', '$gender', '$password', '$email', '$birth', '$experience', '$catagory', '$address', '$file');";
if ($conn->query($result) === TRUE) {
      
      
    ?>
     <script type=text/script> 
     alert('Successful,you approved the technician');     
      </script>
    <?php
} else {
   
    echo "Error: " . $result . "<br>" . $conn->error;
}

 }
 function deletetTechnician($conn,$idn)

{
    $q= $conn->query("DELETE FROM `tTechnician` WHERE tTechnician.`id` = '$idn'");
   return $q;

}

function CloseCon($conn)
 {
 $conn -> close();
 }

}
?>
