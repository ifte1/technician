    
  <?php
      include 'Back_End/updatetechinfo.php';

  ?>
       
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>User Profile Update</title>
    <link rel="stylesheet" href="css/styleForUser.css">


</head>
<body>

    <div class="hero">
       <h1>User Profile Update</h1>
        <div class="form-box">
        

  <form id="user" class="input-group"action="Back_End/UpdateTechInfoInsert.php?id=<?php echo $id ; ?>" onsubmit="return validation();" method="POST">
                <input type="text" class="input-field" name ="fullname" value="<?php echo htmlspecialchars($name); ?>">
                

                <input type="phone" class="input-field" id = "mobile" name = "mobile" value="<?php echo htmlspecialchars($mobile); ?>">
                <label id="mlc" style=" color:red; visibility:hidden;">* Enter a valid mobile number</label></br>
                
                <input type="password" class="input-field"  value="<?php echo htmlspecialchars($password); ?>" id="password" name="password">
                <label id="plc" style=" color:red; visibility:hidden;">* password length at least 6</label>
              
                <input type="password" class="input-field" value="<?php echo htmlspecialchars($cpassword); ?>" id="cpassword">
                <label id="clc" style=" color:red; visibility:hidden;"> * Password and confirm password must be same</label>             
                
                <input type="email" class="input-field" value="<?php echo htmlspecialchars($email); ?>"id="email" name="email">
                <label id="elc" style=" color:red; visibility:hidden;">* Enter a valid email </label>
                
                <input type="date" class="input-field" value="<?php echo htmlspecialchars($birth); ?>" name=birth >
                
                <input type="text" class="input-field" value="<?php echo htmlspecialchars($address); ?>" name=address >
                <button type="submit" name="submit" class="submit-btn">Update</button>
            </form>
            
        </div>
    </div>
 
    <script src="js/userValid.js">


    </script>

</body>
</html>