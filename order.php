<?php 
include("connection.php");
error_reporting(0);
$servername = 'localhost';
$username = 'root';
$password = '';
$database = 'shop'; 

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
    <title></title>
    <link rel="stylesheet" href="style.css">
</head>

<br><br><br><?php require_once'Links.php'?>

<body style="background-image: url(images/bg.jpg);background-size: cover;">
<div id="user" style="background:black;">

   
  

  <div class ="searchDiv">
  
     <form method="POST" action="">
    
        <input type="text" class="input" name="Company_Name" value="" placeholder="Enter Company_Name" style="width:16%;height: 20px;padding: 20px;margin-left:200px;margin-top:100px;margin-right:50px;">
        <input type="text" class="input" name="Model_Name" value="" placeholder="Enter Model_Name" style="width:16%;height: 20px;padding: 20px;"><br>
        <input type="text" name="Customer_name" value="" placeholder="Enter Customer_name" style="width:17%;height: 20px; margin-left: 20px;padding: 20px;margin-left:280px;"><br>
        <input type="text" class="searchinput" name="Contact" value="" placeholder="Enter Contact" style="width:16%;height: 20px;padding: 20px;"><br>
        <input type="text" class="searchinput" name="District" value="" placeholder="Enter District" style="width:16%;height: 20px;padding: 20px;"><br>
        <input type="text" class="searchinput" name="Address" value="" placeholder="Enter Address" style="width:30%;height: 20px;padding: 20px;"><br>
        <button type= "submit" name="ordernow" style="margin-left: 362px;padding: 10px;margin-top: 20px;background-color:skyblue;">order now</button>
     </form>

     <br><br><br><br><h3 align="right"><a href="logout.php"> Logout</a></h3>

     <?php

$company_Name = $_POST['Company_Name'];
$model_Name = $_POST['Model_Name'];
$customer_name = $_POST['Customer_name'];
$contact = $_POST['Contact'];
$district = $_POST['District'];
$address = $_POST['Address'];



if(isset($_POST['ordernow']))
{
   if(empty($company_Name)||empty($model_Name)||empty($customer_name)||empty($contact)||empty($district)||empty($address))
   {
      echo "<script>
      
      alert('Please fill up all the boxes');
      
      </script>";
   }

   else{


      $query= "SELECT * FROM `bookinformation` WHERE Company_Name='$company_Name' AND Model_Name='$model_Name'";

      $query_run= mysqli_query($con,$query);

      if($query_run->num_rows > 0){


         while($row = $query_run->fetch_assoc()) {

            echo "Quantity: " .$row["Quantity"]."<br>";
            $a=(int)$row["Quantity"]; 
            $price=(int)$row["Price"];         

    }
              if($a==0){

              echo"<script>
              
              alert('Stock Out');
              
              </script>";

              }
          
       else{

         $Total=100+$price;
                  

       
         $query2="INSERT INTO `order_now` (Company_Name,Model_Name,Customer_name,Contact,District,Address,Total_Price) VALUES ('$company_Name','$model_Name','$customer_name','$contact','$district','$address',$Total)";
         $query_run2=  mysqli_query($con,$query2);
         

         echo"<script>
         
         alert('Your order was successfully placed');
         
         </script>";

         $a--;

         $update="UPDATE `bookinformation` SET Quantity=$a WHERE Company_Name='$company_Name' AND Model_Name='$model_Name'";

         $query_run3= mysqli_query($con,$update);
      


}



      }



      else if($query_run->num_rows >= 0)
      {
         echo"<script>
         
         alert('The Product you ordered is not in our list');
         
         </script>";
      }



           
   }


}

?>
    
     </div>

</div>



</body>
</html>