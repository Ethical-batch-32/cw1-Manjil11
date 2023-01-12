<?php
include('config.php');
if(!isset($_SESSION['is_login'])){
  $_SESSION['is_login'] = true;
  header('location:  index.php');
  die();
}
?>
<a href="logout.php">logout</a>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Furniture Future</title>
  <!-- magnific popup css link  -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css">

  <!-- font awesome file link  -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">

  <!-- bootstrap file link  -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.3/css/bootstrap.min.css">

  <!-- custom css file link  -->
  <link rel="stylesheet" href="css/style.css"> 
  <!-- bootstrap -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"> 
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

</head>
<body>
    <!-- header section starts  -->
    <header class="header fixed-top">

        <!-- <a href="#" class="logo"><img src="images/logo.png" alt=""></a> -->
        <a class="navbar-brand font-color-black" href="#"><h2>Furniture For Future</h2></a>
        <nav>
          <ul>
            <li><a href="index.php">home</a></li>
            <li><a href="#about">about</a></li>
            <li><a href="#service">services</a></li>
            <li><a href="#project">projects</a></li>
            <li><a href="#contact">contact us</a></li>
            <li><a href="login.php">Login</a></li>
          </ul>
        </nav>  
        
        <div class="fas fa-bars"></div>
        
        </header>
        
        <!-- header section ends -->
        
        <!-- home section starts  -->
        
        
        
        <div id="demo" class="carousel slide" data-ride="carousel">
          <!-- Indicators  -->
          <ul class="carousel-indicators">
            <li data-target="#demo" data-slide-to="0" class="active"></li>
            <li data-target="#demo" data-slide-to="1"></li>
            <li data-target="#demo" data-slide-to="2"></li>
            <section id="home" class="home container-fluid p-0">
          </ul>
          
          <!-- The slideshow  -->
       <div class="carousel-inner">
      <div class="carousel-item active">
      <img src="images/house.jpeg"  width="1440" height="650">
      </div>
      <div class="carousel-item">
        <img src="images/kk.jpeg" width="1440" height="650">
      </div>
      <div class="carousel-item">
        <img src="images/ok.jpg"  width="1440" height="650">
      </div>
    </div>
    
    <!-- Left and right controls -->
    <a class="carousel-control-prev" href="#demo" data-slide="prev">
      <span class="carousel-control-prev-icon"></span>
    </a>
    <a class="carousel-control-next" href="#demo" data-slide="next">
      <span class="carousel-control-next-icon"></span>
    </a>
  </div> 
        
        <!-- home section ends -->
        
        
        <!-- about section starts  -->
        
        <section id="about" class="about container">
        
        <h1 class="heading">About us</h1>
        
        <div class="row align-items-center">
        
          <div class="col-md-6 image">
            <img src="images/inte.png" width="90%" alt="">
          </div>
        
          <div class="col-md-6 info">
            <h2>the best Interior Design in the city</h2>
            <p>
                The most daring journalists are rewarded with rapid promotions and higher pay.<br>
                 He attributed his many promotions to his adaptability and to his energy.<br>
                  They could have been passed over for promotions occasionally.</p>
            
            <div class="icons">
              <a href="https://www.facebook.com" class="fab fa-facebook-f"></a>
              <a href="https://twitter.com" class="fab fa-twitter"></a>
              <a href="https://www.instagram.com" class="fab fa-instagram"></a>
              <a href="https://www.linkedin.com/home" class="fab fa-linkedin "></a>
            </div>
          </div>
        
        </div>
        
        </section>
        
        <!-- about section ends -->
        
        <!-- service section starts  -->
        
        <section id="service" class="service">
        
        <h1 class="heading">our services</h1>
        
        <div class="box-container mx-auto">
        
          <div class="box">
            <div class="fas fa-palette"></div>
        <p>service for furniture helps you choose the best colors for your furniture, providing color swatches and advice on color combinations and schemes. They can assist in creating a cohesive look for your home.</p>
          </div>
        
          <div class="box">
            <div class="fas fa-tools"></div>
            <p>It provides services in furniture provide equipment and instruction for repairing, restoring, and maintaining furniture. These services may include refinishing, reupholstering, and furniture maintenance.</p>
          </div>
        
          <div class="box">
            <div class="fas fa-house-user"></div>
            <p>It provides service in furniture helps people select and purchase furniture for their homes, providing design advice and assistance with ordering and delivery. Some services may also offer installation and maintenance.</p>
          </div>
        
          <div class="box">
            <div class="fas fa-couch"></div>
            <p>It provides service in furniture helps people select and purchase couches, providing design advice and assistance with ordering and delivery. Some services may also offer installation and maintenance.</p>
          </div>
        
          <div class="box">
            <div class="fas fa-bed"></div>
            <p>It provides services in furniture help people select and purchase beds, providing design advice and assistance with ordering and delivery. Some services may also offer installation and maintenance.</p>
          </div>
        
          <div class="box">
            <div class="fas fa-bath"></div>
            <p>It provides services related to baths and bathing, including spa treatments, bathroom design and installation, cleaning and maintenance, and plumbing and repair services.</p>
          </div>
        
        </div>
        
        </section>
        
        <!-- service section ends -->
        
        <!-- project section starts   -->
        
        <section id="project" class="project">
        
          <div class="heading">our projects</div>
          
          <div class="box-container mx-auto">
          
          <div class="box">
            <a href="images/img1.jpg" title="house">
              <img src="images/img1.jpg" alt="">
            </a>
          </div>
          
          <div class="box">
            <a href="images/img2.jpg" title="hall">
              <img src="images/img2.jpg" alt="">
            </a>
          </div>
          
          <div class="box">
            <a href="images/img3.jpg" title="pole">
              <img src="images/img3.jpg" alt="">
            </a>
          </div>
          
          <div class="box">
            <a href="images/img4.jpg" title="kitchen">
              <img src="images/img4.jpg" alt="">
            </a>
          </div>
          
          <div class="box">
            <a href="images/img5.jpg" title="bath">
              <img src="images/img5.jpg" alt="">
            </a>
          </div>
          
          <div class="box">
            <a href="images/img6.jpg" title="toilet">
              <img src="images/img6.jpg" alt="">
            </a>
          </div>
          
          </div>
          
          </section>
        
        <!-- project section ends -->
        
        <!-- contact section starts  -->
        
        <section id="contact" class="contact">
        
        <h1 class="heading">contact us</h1>
        
        <div class="contact-box-container mx-auto">
        
        <div class="contact-box">
          <i class="fas fa-map-marker-alt"></i>
          <h3>Kathmandu, Nepal - 44600</h3>
        </div>
        
        <div class="contact-box">
          <i class="fas fa-envelope"></i>
          <h3>abc@gmail.com</h3>
        </div>
        
        <div class="contact-box">
          <i class="fas fa-phone"></i>
          <h3>+977 9876543210</h3>
        </div>
        
        </div>
        
        <div class="form-container mx-auto">
        
          <form action="userdata.php" method="POST">
        
              <div class="inputBox">
                <input type="text" name="firstname" placeholder="first name">
                <input type="text" name="lastname" placeholder="last name">
              </div>
              <input type="email" name="email" placeholder="e-mail">
              <textarea name="comment" id="" cols="30" rows="10" placeholder="message"></textarea>
              <input type="submit" name="submit" value="send">
        </form>
    </div>
        
        
        </section>
        
        <!-- contact section ends -->
        


        <!-- footer section starts  -->
        
        <section class="container-fluid footer">
        
        <div class="row">
        
        <div class="col-md-3">
          <!-- <h2><img src  ="images/logo.png" alt=""></h2> -->
          <p class="head" >Experience the comfort of home with our stylish and functional furniture😉</p>
        </div>
        
        <div class="col-md-3">
          <h2>our location</h2>
          <div class="list">
            <a href="https://www.google.com/maps/place/Kathmandu+44600/@27.6941054,85.3185963,17.1z/data=!4m5!3m4!1s0x39eb198a307baabf:0xb5137c1bf18db1ea!8m2!3d27.7172453!4d85.3239605">Nepal</a>
            <a href="https://www.google.com/maps/place/New+Delhi,+Delhi,+India/@28.5272803,77.0689006,11z/data=!4m13!1m7!3m6!1s0x390cfd5b347eb62d:0x52c2b7494e204dce!2sNew+Delhi,+Delhi,+India!3b1!8m2!3d28.6139391!4d77.2090212!3m4!1s0x390cfd5b347eb62d:0x52c2b7494e204dce!8m2!3d28.6139391!4d77.2090212">India</a>
            <a href="https://www.google.com/maps/place/Eiffel+Tower/@48.8588336,2.2769955,12z/data=!4m13!1m7!3m6!1s0x47e66e1f06e2b70f:0x40b82c3688c9460!2sParis,+France!3b1!8m2!3d48.856614!4d2.3522219!3m4!1s0x47e66e2964e34e2d:0x8ddca9ee380ef7e0!8m2!3d48.8583701!4d2.2944813">France</a>
            <a href="https://www.google.com/maps/place/One+World+Trade+Center/@40.713284,-74.0301482,12.78z/data=!3m1!5s0x1282aaa9d5f7d7e3:0x87b1b3e1408bcf6b!4m13!1m7!3m6!1s0x89c24fa5d33f083b:0xc80b8f06e177fe62!2sNew+York,+NY,+USA!3b1!8m2!3d40.7127753!4d-74.0059728!3m4!1s0x89c25a197c06b7cb:0x40a06c78f79e5de6!8m2!3d40.7127431!4d-74.0133795">Usa</a>
            <a href="https://www.google.com/maps/place/Manchester,+UK/@53.4916393,-2.3231298,13z/data=!4m5!3m4!1s0x487a4d4c5226f5db:0xd9be143804fe6baa!8m2!3d53.4807593!4d-2.2426305">England</a>   
          </div>
        </div>
        
        <div class="col-md-3">
          <h2>follow us</h2>
          <div class="list">
            <a href="https://www.facebook.com">Facebook</a>
            <a href="https://twitter.com">Twitter</a>
            <a href="https://www.instagram.com">Instagram</a>
            <a href="https://www.linkedin.com/home">Linkedin</a>
          </div>
        </div>
        
        <div class="col-md-3 text-center text-md-left letter">
          <h2>newsletter</h2>
          <p>subscribe for latest updates</p>
          <input type="email" name="email" placeholder="enter your email">
          <input type="submit" placeholder="subscribe">
        </div>
        
        </div>
        
        <h1 class="credit">created by <span>Manjil Khatri</span> | All Rights Reserved. </h1>
        
        </section>
        <!-- footer section ends -->
        
    
        <!-- jquery file link  -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        
        <!-- magnific popup link  -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
        
        <!-- main/custom javascript file link  -->
        <script src="main.js"></script>
        
</body>
</html>