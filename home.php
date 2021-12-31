<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
    <title>Bike Shop</title>
  </head>
  <body style="background-color:#80ced6;width: 80%;margin-left: 175px;">
    <h2 id="header">Welcome To Our Bike Shop</h2>
    <br>
    <br>

    <?php require_once'Links.php'?>
  
      
  
        <br>
        <br>

    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="images/b2.jpg" class="d-block w-100" alt="..." width="500px"height="500px">
          <div class="carousel-caption d-none d-md-block">
          </div>
        </div>
        <div class="carousel-item">
          <img src="images/b4.jpg" class="d-block w-100" alt="..."width="100%"height="500px">
          <div class="carousel-caption d-none d-md-block">

          </div>
        </div>
        <div class="carousel-item">
          <img src="images/b7.jpg" class="d-block w-100" alt="..."width="100%"height="500px">
          <div class="carousel-caption d-none d-md-block">
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
    <br>
    <br>
    <br>
    <div id="section1">
        <img  src="images/bicycle1.jpg" class="read1" height="260px"width="300px">

    <p class="para1">"Veloce slayer has 6061 lightweight Alloy frame, 21-speed transmission, shimano tourney TZ-21 front and TY-21B rear derailleur, shimano EF 500 shifter, HJ-CS003 steel crank, 60mm zoom suspension, HP-02 headset, peak brake set, Meghna pedal and grip"</p>
    <br>
    <br>
   <h4> <p class="model-1" align="right">Veloce Slayer 1.0 Mountain Bicycle</p></h4>

      </div>
      <br>
      <br>
      <br>
      <br>

      <div id="section2">

        <p style="width: 900px;"><img  src="images/bicycle2.jpg" class="read2" height="360px"width="300px"></p>

        <p id="para2">"Core FX 2 bicycle has an aluminum smooth welding frame, 127-speed transmission, shimeng TZ brake set, 3 front gear and 7 back gear, 160mm rotor double disk brake, meghna pedal and grip."</p>
        <br>
       <h4><p class="model-2">Core FX 2 Bicycle</p></h4>
        
      </div>

      <div id="section3">

        <div class="address">
            <p>Our Shop Location:</p>
            <p>123/123, abc block, ......, ....., dhaka</p>

        </div>
        <div class="social">
            <p style="margin-bottom: 20px;margin-left:103px;">Follow us on Social Medias:</p>
            <a href=""><img src="social/facebook.png" height="50px"width="60px" style="margin-right: 40px;margin-left: 100px;"></a>
            <a href=""> <img src="social/insta.svg"height="50px"width="60px"></a>
            
        </div>
        <div class="contact">

            <p>You Can reach us through the following methods:</p>
            <p>Gmail:abc@gmail.com</p>
            <p>Phone Number:0001232845845</p>

        </div>

      </div>
      
  
   
   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

    

    <?php require_once'ty.php'?><br><br>
  </body>
</html>