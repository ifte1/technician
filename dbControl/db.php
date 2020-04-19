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
    ?>
     <script> 
     alert('Successful,Now you are the member of our community');
      </script>
    <?php
     
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
     <script> 
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
function messag($conn,$uname,$tname,$tmes)
 {
$result=$conn->query("INSERT INTO `message` (`id`, `From1`, `To1`, `message`) VALUES (NULL, `$uname`, `$$tname`,`$tmes`)");
if ($conn->query($result) === TRUE) {
      
      
    ?>
     <script> 
     alert('Successful,Message is send');     
      </script>
    <?php
} 
else {
   
    echo "Error: " . $result . "<br>" . $conn->error;
}


 }



 function showuser($conn,$uname,$pass)

 {
     $q= $conn->query("SELECT * FROM `user` WHERE (username='$uname' AND password='$pass')");
    return $q;
 }

 function showtechnician($conn,$uname,$pass)

 {
     $q= $conn->query("SELECT * FROM `technician` WHERE (username='$uname' AND password='$pass')");
    return $q;
 }


 function getuserbyid($conn,$id)

 {
     $q= $conn->query("SELECT * FROM `user` WHERE  id='$id' ");
    return $q;
 }



 function userupdateinsert($conn,$fullname, $username, $mobile, $password, $email,$birth , $address,$id)
 {

$result="UPDATE `user` SET `name` = '$fullname', `username` = '$username', `mobile` = '$mobile', `password` = '$password', `email` = '$email', `birth-date` = '$birth', `address` = '$address' WHERE `user`.`id` = '$id';";
if ($conn->query($result) === TRUE) {

header('location:../userShowProfile.php');
} else {
   
    echo "Error: " . $result . "<br>" . $conn->error;
}
 }



 function gettechbyid($conn,$id)

 {
     $q= $conn->query("SELECT * FROM `technician` WHERE  id='$id' ");
    return $q;
 }


 function techupdateinsert($conn,$fullname, $username, $mobile, $password, $email,$birth , $address,$id)
 {

$result="UPDATE `technician` SET `Fullname` = '$fullname', `username` = '$username', `mobile` = ' $mobile', `password` = '$password', `email` = '$email', `birth` = '$birth', `address` = '$address' WHERE `technician`.`id` = $id;";
if ($conn->query($result) === TRUE) {

header('location:../technicianShowProfile.php');
} else {
   
    echo "Error: " . $result . "<br>" . $conn->error;
}
 }


 function gettech($conn,$username,$mobile)

 {
     $q= $conn->query("SELECT * FROM `technician` WHERE (`technician`.`username`='$username' AND `technician`.`mobile`=$mobile)");
    return $q;
 }
 function getuser($conn,$username,$mobile)

 {
     $q= $conn->query("SELECT * FROM `user` WHERE (`user`.`username`='$username' AND `user`.`mobile`=$mobile)");
    return $q;
 }

 function getuserbypass($conn,$username,$pass)

 {
     $q= $conn->query("SELECT * FROM `user` WHERE (`user`.`username`='$username' AND `user`.`password`='$pass')");
    return $q;
 }


 function gettechbypass($conn,$username,$pass)

 {
     $q= $conn->query("SELECT * FROM `technician` WHERE (`technician`.`username`='$username' AND `technician`.`password`='$pass')");
    return $q;
 }




 function CloseCon($conn)
 {
 $conn -> close();
 }





}
?>
