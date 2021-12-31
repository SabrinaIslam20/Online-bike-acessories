function validatesignup()
    {  
      var inputName=document.myform.inputName.value;  
      var password=document.myform.password.value;  
      var email=document.myform.email.value;
      var phone=document.myform.phone.value;
      
        
      if (inputName==null || inputName==""){  
        alert("Name can't be blank");  
        return false;  
      }else if(password.length<5){  
        alert("Password must be at least 5 characters long.");  
        return false;  
      }
      else if (email==null || email=="") {
        alert("Email can not be blank");
        return false;
      }
      else if (phone==null || phone=="") {
        alert("User PhoneNumber can not be blank");
        return false;
      }

    }
    
    function cName() {
  if (document.getElementById("inputName").value == "") {
          document.getElementById("inputNameErr").innerHTML = "Username can't be blank";
          document.getElementById("inputNameErr").style.color = "red";
          document.getElementById("inputName").style.borderColor = "red";
    }else{
          document.getElementById("inputNameErr").innerHTML = "";
          document.getElementById("inputName").style.borderColor = "green";
    }
  
}

function cEmail() {
   
    if (document.getElementById("email").value == "") 
    {
          document.getElementById("emailErr").innerHTML = "Email can't be blank";
          document.getElementById("emailErr").style.color = "red";
          document.getElementById("email").style.borderColor = "red";
    }
   
    else
    {
        document.getElementById("emailErr").innerHTML = "";
        document.getElementById("email").style.borderColor = "green";
    }
    
  }

  function cPhone() {
    if (document.getElementById("phone").value == "") {
          document.getElementById("NumberErr").innerHTML = "PhoneNumber can't be blank";
          document.getElementById("NumberErr").style.color = "red";
          document.getElementById("phone").style.borderColor = "red";
    }else{
          document.getElementById("NumberErr").innerHTML = "";
          document.getElementById("phone").style.borderColor = "green";
    }
    
  }

    function cPassword(){
            if (document.getElementById("password").value == "") {
                document.getElementById("passwordErr").innerHTML = "Password can't be blank";
                document.getElementById("passwordErr").style.color = "red";
                document.getElementById("password").style.borderColor = "red";
            }else if(document.getElementById("password").value.length<5){
                document.getElementById("password").style.borderColor = "red";
                document.getElementById("passwordErr").style.color = "red";
                document.getElementById("passwordErr").innerHTML = "Password must be at least 5 characters long.";
            }
            else{
                document.getElementById("passwordErr").innerHTML = "";
                document.getElementById("passwordErr").style.color = "red";
                document.getElementById("password").style.borderColor = "black";
            }
        }