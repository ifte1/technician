<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Technician Registration</title>
    <link rel="stylesheet" href="css/styleForTechnician.css">

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
                <button type="button" class="toggle-btn">User</button>
                <div id="btn"></div>
                <button type="button" class="toggle-btn">Technician</button>
            </div>
            <form id="technician" class="input-group"action="#" onsubmit="return validation();">
                <input type="text" class="input-field" placeholder="Full Name" required>

                <input type="text" class="input-field" placeholder="User Name" id="username" >
                <label id="lc" style=" color:red; visibility:hidden;">* Minimum 3 letters </label>

                <input type="phone" class="input-field" placeholder="Mobile Number" id="mobile" >
                <label id="mlc" style=" color:red; visibility:hidden;">* Enter a valid mobile number</label></br>
                
                Sex:                  
                <input type="radio" class="radio-field" name="gender" value="Female" required>Female
                <input type="radio" name="gender" class="radio-field" value="Male" required>Male
                <input type="radio" name="gender" class="radio-field" value="Other" required>Other
                
                <input type="password" class="input-field" placeholder="Password" id="password" >
                <label id="plc" style=" color:red; visibility:hidden;">* password length at least 6</label>

                <input type="password" class="input-field" placeholder="Confirm Password" id="cpassword">
                <label id="clc" style=" color:red; visibility:hidden;"> * Password and confirm password must be same</label>
                
                <input type="email" class="input-field" placeholder="Email" id=email>
                <label id="elc" style=" color:red; visibility:hidden;">* Enter a valid email </label>
                <input type="date" class="input-field" placeholder="Date of birth" required>
                <br><br>
                </select>
                <span>Experience:</span>
                <select class="cat" id="technicians" name="catagory" form="technician"required>
                      <option value="low" >1-5 years</option>
                      <option value="medium" >5-10 years</option>
                      <option value="high" >10-15 years</option>
                      <option value="very high">>15</option>
                  
                  
                </select>
                <br><br>
                <span>Catagory:</span>
                <select class="cat" id="technicians" name="catagory" form="technician" required>
                      <option value="Ethical Technician">Ethical Technician</option>
                      <option value="Car Technician">Car Technician</option>
                      <option value="Computer Technician">Computer Technician</option>
                      <option value="Industrial Technician">Industrial Technician</option>
                      <option value="Radiological Technician">Radiological Technician</option>
                      <option value="Plumber">Plumber</option>
                  
                
                
                <input type="text" class="input-field" placeholder="Address" required>
                
                <button type="button" class="submit-btn">Home</button>
                <button type="submit" class="submit-btn">Register</button>
            </form>
            
        </div>
    </div> 

    <script src="js/technicianValid.js">
  

</script>


</body>
</html>