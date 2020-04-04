function validation()
  {
     
    var username = document.getElementById("username").value;
    var password = document.getElementById('password').value;
    var cpassword = document.getElementById('cpassword').value;
    var email = document.getElementById('email').value;
    var mobile = document.getElementById('mobile').value;





    var usercheck = /^[A-Za-z. 1-99]{3,85}$/ ;
    var passwordcheck = /^.{6,}$/;
    var emailcheck = /^[A-za-z0-9_]{3,}@[A-za-z]{3,}[.][A-Za-z.]{2,}$/;
    var mobilecheck = /^[0-9]{11}$/;


   if(usercheck.test(username)){
    document.getElementById("lc").style.visibility="hidden";
   }

    else{
        document.getElementById("lc").style.visibility="visible";
        return false;
    }

    if(mobilecheck.test(mobile)){

        document.getElementById("mlc").style.visibility="hidden";
      }

else{
    document.getElementById("mlc").style.visibility="visible";
    return false;
    }

    if(passwordcheck.test(password)){
       
        document.getElementById("plc").style.visibility=" hidden ";

    }

    else{
        document.getElementById("plc").style.visibility="visible";
        return false;
    }

   if(cpassword.match(password)){

    document.getElementById("clc").style.visibility="hidden";

   }

   else{
    document.getElementById("clc").style.visibility="visible";
        return false;
   }

    if(emailcheck.test(email)){
        document.getElementById("elc").style.visibility="hidden";
    }

    else{
        document.getElementById("elc").style.visibility="visible";
        return false;
    }

  }