
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
    return a;
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