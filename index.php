<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!--Bootstrap css-->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!--fontawesome css-->
    <link rel="stylesheet" href="css/all.min.css">

    <!--google-->
    <link href="https://fonts.googleapis.com/css?family=Ubuntu&display=swap" rel="stylesheet">
    <!--custom css-->
    <link rel="stylesheet" href="css/custom.css">
    
    <title>OMS</title>
</head>
<body>
  <!--start navigation bar-->
  <nav class ="navbar navbar-expand-sm navbar-dark bg-danger pl-5
  fixed-top shadow">
  <a href="index.php" class="navbar-brand">OSMS</a>
  <span class="navbar-text">Customer happiness is our aim</span>
  <button type="button" class="navbar-toggler" data-toggler="collapse" 
  data-target="#mymenu">
  <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="myMenu">
    <ul class="navbar-nav pl-5 custom-nav">
     <li class="nav-item"> <a href="index.php" class="nav-link">Home</a></li>
     <li class="nav-item"> <a href="#services" class="nav-link">Sevices</a></li>
     <li class="nav-item"> <a href="#Registration" class="nav-link">Registration</a></li>
     <li class="nav-item"> <a href="Requester/Requesterlogin.php" class="nav-link">
      Login Us</a></li>
     <li class="nav-item"> <a href="#contact" class="nav-link">Contact</a></li>
    </ul>
  </div>

  </nav>
  <!--start navigation bar-->

  <!-- start header jumbotron-->
  <header  class="jumbotron back-image" class="jumbotron" 
  style="background-image:url(images/Banner.jpeg);">

  <div class="myclass mainheading">
    <h1 class="text-uppercase text-danger font-weight-bold">WELCOME TO OSMS</h1>
    <p class="font-italic ">Customer's Happiness is our aim</p>
    <a href="Requester/Requesterlogin.php" class="btn btn-success mr-4">Login</a>
    <a href="#Registration" class="btn btn-danger mr-4">Sign Up</a>
  </div>
</header> <!-- end header jumbotron-->

<!--start introduction section-->
<div class="container">
   <div class="jumbotron">
     <h3 class="text-center">OSMS Service</h3>
     <p >Lorem ipsum dolor sit amet consectetur adipisicing elit.
        Quas debitis expedita, aliquam voluptates sunt,
         eligendi quisquam hic numquam rem aspernatur optio 
       alias cupiditate culpa maiores nulla consectetur doloremque placeat possimus!
       Lorem ipsum dolor sit amet consectetur adipisicing elit.
        Quas debitis expedita, aliquam voluptates sunt,
         eligendi quisquam hic numquam rem aspernatur optio 
       alias cupiditate culpa maiores nulla consectetur doloremque placeat possimus!
       Lorem ipsum dolor sit amet consectetur adipisicing elit.
        Quas debitis expedita, aliquam voluptates sunt,
         eligendi quisquam hic numquam rem aspernatur optio 
       alias cupiditate culpa maiores nulla consectetur doloremque placeat possimus!
       
     </p>
   </div>
</div><!--end introduction section container-->

 <!--Start service center-->
 <div class="container text-center border-bottom" id="services">
   <h2 >Our services</h2>
   <div class="row mt-4"><!--4 rows and one row contain 12 column-->
     <div class="col-sm-4 mb-4">
         <a href=""><i class ="fas fa-tv fa-8x text-success"></i></a>
         <h4 class="mt-4">Preamptive Maintenance</h4>
     </div>
     <div class="col-sm-4 mb-4">
         <a href=""><i class ="fas fa-sliders-h fa-8x text-primary"></i></a>
         <h4 class="mt-4">Electonic Appliance</h4>
     </div>
     <div class="col-sm-4 mb-4">
         <a href=""><i class ="fas fa-cogs fa-8x text-info"></i></a>
         <h4 class="mt-4">Fault Repair</h4>
     </div>
   </div>
 </div><!--End service center container-->


<!--start registration form-->
<?php include('userResistration.php') ?>
<!--content is in userResistration.php-->
<!--end registration form container-->

<!--start Happy customer-->
<div class="jumbotron bg-danger">
 <div class="container">
   <h2 class="text-center text-white">Happy Customer</h2>
  <div class="row mt-5"><!--Only one row-->
   <div class="col-lg-3 col-sm-6"> <!--4 column of size 3--><!--Start first coloumn-->
     <div class="card shadow-lg mb-2">
       <div class="card-body text-center">
         <img src="images/avtar1.jpeg" class ="img-fluid"
          style="border-radius:100px;"alt="alt1">
          <h4 class="card-title">Yash Yadav</h4>
          <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
           Qui nam similique ea!</p>
       </div>
    </div> 
   </div><!--End first coloumn-->
   <div class="col-lg-3 col-sm-6"> <!--4 column of size 3--><!--Start 2nd coloumn-->
     <div class="card shadow-lg mb-2">
       <div class="card-body text-center">
         <img src="images/avtar2.jpeg" class ="img-fluid"
          style="border-radius:100px;"alt="alt1">
          <h4 class="card-title">Jaya Chauhan</h4>
          <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
           Qui nam similique ea!</p>
       </div>
    </div> 
   </div><!--End 2nd coloumn-->
   <div class="col-lg-3 col-sm-6"> <!--4 column of size 3--><!--Start 3rd coloumn-->
     <div class="card shadow-lg mb-2">
       <div class="card-body text-center">
         <img src="images/avtar3.jpeg" class ="img-fluid"
          style="border-radius:100px;"alt="alt1">
          <h4 class="card-title">Pankaj Chaudhary</h4>
          <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
           Qui nam similique ea!</p>
       </div>
    </div> 
   </div><!--End 3rd coloumn-->
   <div class="col-lg-3 col-sm-6"> <!--4 column of size 3--><!--Start 4th coloumn-->
     <div class="card shadow-lg mb-2">
       <div class="card-body text-center">
         <img src="images/avtar4.jpeg" class ="img-fluid"
          style="border-radius:100px;"alt="alt1">
          <h4 class="card-title">Vaishnavi Gupta</h4>
          <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
           Qui nam similique ea!</p>
       </div>
    </div> 
   </div><!--End 4th coloumn-->
  </div><!--row-->
  </div><!--Container-->
</div><!--end happy customer-->

<!--start contact us-->

<div class="container" id="contact">
  <h2 class="text-center mb-4" >Contact Us</h2>
    <div class="row">

       <!--start first col--> 
        <?php include('contactForm.php')?>
        <!--end first col-->

      <div class="col-md-4 text-center"><!--Using remaining 4 col that is second col-->
          <strong>Headquater:</strong>
          OSMS pvt Ltd,<br>
          Nehru nagar,vile parle(w)<br>
          Mumbai 400056<br>
          phone: +00000000000<br>
          <a href="#" target="_blank">www.osms.com</a>  <br>
          <br><br> 
          <strong>Branch:</strong>
          OSMS pvt Ltd,<br>
          Prem nagar,Gorakhpur<br>
          Kushinagar 30046<br>
          phone: +00000000000<br>
          <a href="#" target="_blank">www.osms.com</a>  <br>

      </div><!--Using remaining 4 col that is second col-->
    </div>
</div><!--end contact us-->

<!--Start footer-->
<footer class="container-fluid bg-dark mt-5 text-white">
  <div class="container">
    <div class="row py-3">
    <div class="col-md-6"><!--start 1st col-->
      <span class="pr-2">Follow Us:</span>
    <a href="#" target="_blank" class="pr-2 fi-color"><!--Adding icons-->
    <i class="fab fa-facebook-f"></i></a>
    <a href="#" target="_blank" class="pr-2 fi-color"><!--Adding icons-->
    <i class="fab fa-twitter"></i></a>
    <a href="#" target="_blank" class="pr-2 fi-color"><!--Adding icons-->
    <i class="fab fa-youtube"></i></a>
    <a href="#" target="_blank" class="pr-2 fi-color"><!--Adding icons-->
    <i class="fab fa-instagram"></i></a>  
    <a href="#" target="_blank" class="pr-2 fi-color"><!--Adding icons-->
    <i class="fab fa-google"></i></a>
    </div><!--end 1st col-->
    <div class="col-md-6 text-right"><!--start second col--><!--using remaining 6col-->
     <small>Designed by DhirajGupta &copy;2020</small>
     <small class="ml-2"><a href="Admin/login.php">Admin Login</a></small>
    </div>
    </div> 
  </div><!--end container-->
</footer><!--End of footer-->

  <!--js bootstrap -->
  <script src="js/jquery.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/all.min.js"></script>  
</body>
</html>