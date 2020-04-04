<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>User Registration</title>
    <link rel="stylesheet" href="css/styleForUser.css">
    <!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script> 


</head>
<body>

    <div class="hero">
       <h1>Registration Form</h1>
        <div class="form-box">
            <div class="button-box">
               <div id="btn"></div>
                <button type="button" class="toggle-btn">User</button>
                <button type="button" class="toggle-btn">Technician</button>
            </div>
            <form id="user" class="input-group"action="#" onsubmit="return validation();">
                <input type="text" class="input-field" placeholder="Full Name" required>
                
                <input type="text" id ="username" class="input-field" placeholder="User Name" >
                <label id="lc" style=" color:red; visibility:hidden;">* Minimum 3 letters </label>

                <input type="phone" class="input-field" placeholder="Mobile Number" id = "mobile" >
                <label id="mlc" style=" color:red; visibility:hidden;">* Enter a valid mobile number</label></br>
                Sex:                  
                <input type="radio" class="radio-field" name="gender" value="Female" required>Female
                <input type="radio" name="gender" class="radio-field" value="Male" required>Male
                <input type="radio" name="gender" class="radio-field" value="Other" required>Other
                
                <input type="password" class="input-field" placeholder="Password" id="password" >
                <label id="plc" style=" color:red; visibility:hidden;">* password length at least 6</label>
              
                <input type="password" class="input-field" placeholder="Confirm Password" id="cpassword">
                <label id="clc" style=" color:red; visibility:hidden;"> * Password and confirm password must be same</label>
               
                
                <input type="email" class="input-field" placeholder="abc@gmail.com"id="email" >
                <label id="elc" style=" color:red; visibility:hidden;">* Enter a valid email </label>
                
                <input type="date" class="input-field" placeholder="Date of birth" required>
                
                <input type="text" class="input-field" placeholder="Address" required >
                
                <button type="button" class="submit-btn">Home</button>
                <button type="submit" name="submit" class="submit-btn">Register</button>
            </form>
            
        </div>
    </div>
 
    <script src="js/userValid.js">


    </script>

</body>
</html>