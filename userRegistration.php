<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>User Registration</title>
    <link rel="stylesheet" href="css/styleForUser.css">
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
            <from id="user" class="input-group">
                <input type="text" class="input-field" placeholder="Full Name" required>
                <input type="text" class="input-field" placeholder="User Name" required>
                <input type="phone" class="input-field" placeholder="Mobile Number" required>
                
                Sex:                  
                <input type="radio" class="radio-field" name="gender" value="Female" required>Female
                <input type="radio" name="gender" class="radio-field" value="Male" required>Male
                <input type="radio" name="gender" class="radio-field" value="Other" required>Other
                
                <input type="password" class="input-field" placeholder="Password" required>
                <input type="password" class="input-field" placeholder="Confirm Password" required>
                
                <input type="email" class="input-field" placeholder="Email" required>
                
                <input type="date" class="input-field" placeholder="Date of birth" required>
                
                <input type="text" class="input-field" placeholder="Address" required>
                
                <button type="submit" class="submit-btn">Home</button>
                <button type="submit" class="submit-btn">Register</button>
            </from>
            
        </div>
    </div>
</body>
</html>