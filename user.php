<?php 
include("connection.php");

if($con)
echo("Connected");
else
echo("not ");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Information</title>
    <link rel="stylesheet" href="style.css">
    <style>
    
    table,th,td{
      border:1px solid black;
      width: 960px;
      background-color: lightgrey;

    }
    </style>
</head>
<body style="background-image: url(images/bg.jpg);background-size: cover;">
<div id="user" style="background:black;">
    <div id="welcome">
           <h2 style="text-align: center;color:white;">Available Products</h2><!-- <h2 class="name" style="text-align: center;color: white;">hello</h2> -->
           <!--form method="POST" action=""></form>
           <button style="float: right;margin-right: 25px;padding: 10px;">Log Out</button>-->
    </div>
     <br>
  <div class ="searchDiv">
     <form method="POST" action="">
    
       <input type="text" class="searchinput" name="Category" value="" placeholder="Category" style="width:16%;height: 20px;padding: 20px;"> 
        <input type="text" name="Model_Name" value="" placeholder="Enter Model Name" style="width:17%;height: 20px; margin-left: 20px;padding: 20px;">
        <button type= "submit" name="Search" style="margin-left: 362px;padding: 10px;margin-top: 20px;">Search</button>
     </form>
     <table >
     <tr>
     <th scope = "col">Model ID </th>
     <th scope = "col">Company Name </th>
     <th scope = "col">Category </th>
     <th scope = "col">Model Name </th>
     <th scope = "col">Quantity </th>
     <th scope = "col">Price </th>
     </tr> <br>
   
   <h2 style="margin-left:350px;margin-top:20px;margin-bottom:10px;"><a href="order.php"style="color:white">Order Now</a></h2>
     
    <?php
    /*$Book_Name=$Writer_Name="";
    $servername = 'localhost';
    $username = 'root';
    $password = '';
    $database = 'library';

      $con = mysqli_connect($servername,$username,$password,$database);*/

      if(isset($_POST['Search']))
      {
        $Category= $_POST['Category'];
      $Model_Name = $_POST['Model_Name'];

      $query = "SELECT * FROM `bookinformation` WHERE Category = '$Category' OR Model_Name = '$Model_Name' ";
      $query_run = mysqli_query($con,$query);

      while($row = mysqli_fetch_array($query_run))
      {
        ?>
         <tr>
            <th><?php echo $row['Model_Id'] ?> </th>
            <th><?php echo $row['Company_Name'] ?></th>
            <th><?php echo $row['Category'] ?></th>
            <th><?php echo $row['Model_Name'] ?></th>
            <th><?php echo $row['Quantity'] ?></th>
            <th><?php echo $row['Price'] ?></th>
    </tr>
        <?php
      }

      }

      ?>


     </table>
    </div>

</div>

<h3 align="right"><a href="logout.php"> Logout</a></h3>

</body>
</html>











      
     
      
    
    
