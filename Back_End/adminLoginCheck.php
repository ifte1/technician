<?php 

$user=$pass="";
$usererr=$passerr="";

if($_SERVER["REQUEST_METHOD"]=="POST")
{
  // if(isset($_POST["Login"]))
      if(empty($_POST["username"]))
      {
       
        ?>
       
        <script type="text/javascript">
             alert('Required User name');
           </script>
         <?php
      }
      elseif(empty($_POST["password"])&&!empty($_POST["username"]))
      {
        ?>
       
       <script type="text/javascript">
            alert('Required Password');
          </script>
        <?php
      }
      else
      {
        $user=$_POST["username"];
        $pass=$_POST["password"];
        if($user=="ifte")
        {
          if($pass=="ifte123")
          {
            header("Location:HomePage.php");
          }
          else{
            ?>
       
            <script type="text/javascript">
                 alert('Invalid Password');
               </script>
             <?php
          }

        }
        else{
            ?>
       
            <script type="text/javascript">
                 alert('Invalid User name');
               </script>
             <?php
        }
      }
    }



?>
