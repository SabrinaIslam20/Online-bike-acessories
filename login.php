<?php 

include 'connection.php';

//session_start();
error_reporting(0);

//if (isset($_SESSION['Email'])) {
    //header("Location: home.php");
//}
if (isset($_POST['logIn'])) {
	$User_Name = $_POST['User_Name'];
	$password = ($_POST['Password']);

	$sql = "SELECT * FROM user_info WHERE User_Name='$User_Name' AND Password='$password'";
	$result = mysqli_query($con, $sql);
	if ($result->num_rows > 0) {
		$row = mysqli_fetch_assoc($result);
		$_SESSION['User_Name'] = $row['User_Name'];
		header("Location: user.php");
	} else {
		echo "<script>alert('Woops! User Name or Password is Wrong.')</script>";
	}
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In </title>
   <link rel="stylesheet" href="style.css">

</head>
<body style="background-image: url(images/bg.jpg);background-size: cover; width: 80%;margin-left: 175px;">

    <script type="text/javascript" src="validL.js"></script>

    <br><br><br><?php require_once'Links.php'?>


    <div id="login">
        <img src="images/login.png" alt="A log in picture" class="logpic" height="50px";width="60px">

         <h1 class="headlog">Log In Here</h1>

        <form method="POST" action="" onsubmit="validateform()">
             <p style="color:white; font-size: 30px;margin-left: 10px;">User Name</p>
             <input type="text" name="User_Name" value="" id="username" placeholder="Please Enter Your User Name" onkeyup="checkUsername()" onblur="checkUsername()" style="width:90%;height: 20px;padding: 15px;"> <span id="usernameError" style="color: #FF0000;"> </span>

             <p style="color:white;font-size: 30px;margin-left: 10px;margin-top: 20px;">Password</p>
             <input type="password" name="Password" value="" placeholder="Please Enter Your Password" id="password" onkeyup="checkPassword()" onblur="checkPassword()" style="width: 90%;height: 20px;padding: 15px;"> <span id="passwordErr" style="color: #FF0000;"> </span></td>
             <br>
             <button type="submit" name="logIn" class="logIn" style="margin-top:20px;margin-left:125px; padding:10px;">LogIn</button>     
        </form>
    </div>
</body>
</html>