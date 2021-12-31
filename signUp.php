<?php 
include("connection.php");
$servername = 'localhost';
$username = 'root';
$password = '';
$database = 'shop'; 

error_reporting(0);

$con = mysqli_connect($servername,$username,$password,$database);

/*if($con)
echo("Connected");
else
echo("not ");*/

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="style.css">

    <script type="text/javascript">
        function validatesignup()
    {  
      var username=document.myform.username.value;  
      var password=document.myform.password.value;  
      var email=document.myform.email.value;
      var phone=document.myform.phone.value;
      
        
      if (username==null || username==""){  
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
  if (document.getElementById("username").value == "") {
          document.getElementById("usernameErr").innerHTML = "Username can't be blank";
          document.getElementById("usernameErr").style.color = "red";
          document.getElementById("username").style.borderColor = "red";
    }else{
          document.getElementById("usernameErr").innerHTML = "";
          document.getElementById("username").style.borderColor = "green";
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

        function RcPassword(){
            if (document.getElementById("rcpassword").value == "") {
                document.getElementById("rcpasswordErr").innerHTML = "Password can't be blank";
                document.getElementById("rcpasswordErr").style.color = "red";
                document.getElementById("rcpassword").style.borderColor = "red";
            }else if(document.getElementById("rcpassword").value.length<5){
                document.getElementById("rcpassword").style.borderColor = "red";
                document.getElementById("rcpasswordErr").style.color = "red";
                document.getElementById("rcpasswordErr").innerHTML = "Password must be at least 5 characters long.";
            }
            else{
                document.getElementById("rcpasswordErr").innerHTML = "";
                document.getElementById("rcpasswordErr").style.color = "red";
                document.getElementById("rcpassword").style.borderColor = "black";
            }
        }


    </script>
    
</head>
<body style="background-image: url(images/bg.jpg);background-size: cover; width: 80%;margin-left: 175px;">

    <!-- <link rel="stylesheet" href="sstyle.css"> -->

    <br><br><br><?php require_once'Links.php'?>

 <form align="center" method = "post" action = "" onsubmit="validatesignup()">


   <div id="signUp">

    <img src="images/signup.png" height="80px;"width="100px" style="margin-left: 5%;margin-bottom: 50px;margin-top: 30px;">


  <p class="signInfo">Name</p>
  <input type="text" name="User_Name" value="" placeholder="Please Enter Your Name" id="username" onkeyup="cName()" onblur="cName()" style="width:95%;height: 20px;padding: 10px;">
  <span class="error" id="usernameErr" style="color: #FF0000;"> <?php echo $name_error;?></span>

  <p class="signInfo">Email</p>
  <input type="text" name="Email" value="" placeholder="Please Enter Your Email ID" id="email" onkeyup="cEmail()" onblur="cEmail()" style="width:95%;height: 20px;padding: 10px">
  <span class="error" id="emailErr" style="color: #FF0000;"> <?php echo $email_error;?></span>

  <p class="signInfo">Password</p>
  <input type="password" name="Password" value="" placeholder="Please Enter Your Password" id="password" onkeyup="cPassword()" onblur="cPassword()" style="width:95%;height: 20px;padding: 10px">
  <span class="error" id="passwordErr" style="color: #FF0000;"> <?php echo $password_error;?></span>


  <p class="signInfo">Retype Password</p>
  <input type="password" name="Confirm_password" value="" placeholder="Please Re-Enter Your Password" id="rcpassword" onkeyup="RcPassword()" onblur="RcPassword()" style="width:95%;height: 20px;padding: 10px">
  <span class="error" id="rcpasswordErr" style="color: #FF0000;"> <?php echo $repassword_error;?></span>

  <p class="signInfo">Contact Number</p>
  <input type="tel" name="Contact" value="" placeholder="Please Enter Your contact Number" id="phone" onkeyup="cPhone()" onblur="cPhone()" style="width:95%;height: 20px;padding: 10px">
  <span class="error" id="NumberErr" style="color: #FF0000;"> <?php echo $contact_error;?></span>

  <br>
  <br>
  <button type="submit" name="signUp" class="SignUp" >Sign Up</button>

</form>
</div>


<?php
   $User_Name = $Email = $Password = $Confirm_password = $Contact = "";
   $Namex= '/[a-z A-Z]{4,20}/';
   $Emailx='/^([a-z A-Z 0-9\.-]+)@([a-z A-Z]+).([a-z A-Z]{2,10})$/';
   $Numberx='/^[0][1][5-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9]$/';


     $User_Name = $_POST['User_Name'];
     $Email = $_POST['Email'];
     $Password = $_POST['Password'];
     $Confirm_password = $_POST['Confirm_password'];
     $Contact = $_POST['Contact'];


     if(isset($_POST['signUp'])){
        if(empty($User_Name) || empty($Email) || empty($Password) || empty($Confirm_password) || empty($Contact) ){

            echo"<script>
            
            alert('Please fill all the information');
            
            </script>";
        }


        else{
               if(preg_match($Namex,$User_Name)){

                    if(preg_match($Emailx,$Email)){
                        if(strlen($Password) >=5){
                            if($Password==$Confirm_password){
                                if(preg_match($Numberx,$Contact)){
                                      $sign= "INSERT INTO user_info (User_Name,Email,Password,Confirm_Password,Contact) VALUES ('$User_Name','$Email','$Password','$Confirm_password','$Contact')";
                                      $sqlrun= mysqli_query($con,$sign);

                                      echo"<script>
            
                                      alert('Your account was successfully created');
            
                                      </script>";


                                }
                                else{
                                    
                                    echo"<script>
            
                                    alert('Please give a valid phone number');
            
                                      </script>";
                                }
                            

                            }
                            else{
                                
            echo"<script>
            
            alert('Password does not match');
            
            </script>";
                            }

                        }
                        else{
                            
            echo"<script>
            
            alert('Password must be 5 characters long');
            
            </script>";
                        }

                    }
                    else{
                        
            echo"<script>
            
            alert('Wrong Email Format');
            
            </script>";
                    }

               }

               else{
                   
            echo"<script>
            
            alert('Wrong Name Format');
            
            </script>";

               }


        }

    }


  


    

?>







<!--<script type="text/javascript">
/*

var username= document.getElementById("inputName");
 var email= document.getElementById("inputEmail");
 var password= document.getElementById("inputPassword");
 var contact= document.getElementById("inputContact");
 var repassword=document.getElementById("retype-inputPassword");



function validate(){
   

   if(username.value.trim()=="" || email.value.trim()=="" || password.value.trim()=="" || contact.value.trim()==""){

    alert("Please fill all the required information!");
    return false;
   }

   else{

    var a = check();
    if(a){
     
   alert("Your database is created");
       return a;
    }

    else{
      return false;
    }
   }
}

function check(){
    var name= /[a-z A-Z]{4,20}/;
    var Email= /^([a-z A-Z 0-9\.-]+)@([a-z A-Z]+).([a-z A-Z]{2,10})$/;
    var number= /[0][1][5-9][0-9]{8}/;

    if(name.test(username.value)){
        
        document.getElementById("lbName").style.visibility="hidden";

    }
    else{
        document.getElementById("lbName").style.visibility="visible";
        return false;
    }
   if(Email.test(email.value)){
          
    document.getElementById("lbEmail").style.visibility="hidden"; 

    }
    else{
        document.getElementById("lbEmail").style.visibility="visible";
        return false;
    }

    if(password.value.trim().length<8){
        document.getElementById("lbPassword").style.visibility="visible";
        return false;
    }
    else{

        document.getElementById("lbPassword").style.visibility="hidden";

    }

    if(password.value==repassword.value){

        document.getElementById("lbRePassword").style.visibility="hidden";

    }
    else{
        document.getElementById("lbRePassword").style.visibility="visible";
        return false;
    }

    if(number.test(contact.value)){

        document.getElementById("lbContact").style.visibility="hidden";

        return true;

    }
    else{
        document.getElementById("lbContact").style.visibility="visible";
        return false;
    }

}
*/

</script>-->
</body>
</html>

