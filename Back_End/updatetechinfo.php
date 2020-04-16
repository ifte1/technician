<?Php

include 'dbControl/db.php';

$id=$_GET['id'];

$connection = new db();
$conobj=$connection->OpenCon();
$query=$connection->gettechbyid($conobj,$id);

if(mysqli_num_rows($query)>0)
{

while($result=mysqli_fetch_array($query) )
{

    $id= $result['id'];
    $name= $result['Fullname'] ;
    $username= $result['username'] ;
    $mobile= $result['mobile'];
    $password= $result['password'];
    $cpassword= $result['password'];
    $email=$result['email'] ;
    $birth= $result['birth'];
    $address=$result['address'];

}

}
?>
