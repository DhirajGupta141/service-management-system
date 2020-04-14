
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo TITLE ?></title>
    <!--Bootstap css-->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <!--font awesome css-->
    <link rel="stylesheet" href="../css/all.min.css">

    <!--custom css-->
    <link rel="stylesheet" href="../css/custom.css">

</head>
<body>
    <!--top nav bar-->
    <nav class="navbar navbar-dark fixed-top bg-danger flex-md-nowrap p-0 shadow">
    <a class="navbar-brand col-sm-3 col-md-2 mr-0"href="RequesterProfile.php">OSMS</a></nav>

   <!--start container-->
  <div class="container-fluid" style="margin-top:40px;">
    <div class="row"><!--start row-->
      <nav class="col-sm-2 bg-light sidebar py-5 d-print-none">  <!-- start side bar 1st col-->
         <div class="sidebar-sticky" >
            <ul class="nav flex-column">
             <li class="nav-item "><a class="nav-link <?php
              if(PAGE=='RequesterProfile'){ echo 'active';} ?>"
             href="RequesterProfile.php"><i class="fas fa-user"></i>Profile</a></li>
            
             <li class="nav-item "><a class="nav-link <?php
              if(PAGE=='SubmitRequester'){ echo 'active';} ?>"
             href="SubmitRequester.php"><i class="fab fa-accessible-icon">
             </i>Submit Request</a></li>
             
             <li class="nav-item "><a class="nav-link  <?php
              if(PAGE=='CheckStatus'){ echo 'active';} ?>"
             href="CheckStatus.php"><i class="fas fa-align-center">
             </i>Service status</a></li>
             
            <li class="nav-item "><a class="nav-link  <?php
              if(PAGE=='RequesterChangepass'){ echo 'active';} ?>"
             href="RequesterChangepass.php"><i class="fas fa-key">
             </i>Change password</a></li>
             
            <li class="nav-item "><a class="nav-link"
             href="../logout.php"><i class="fas fa-sign-out-alt"></i>Logout</a></li>
            
            </ul>         
         </div>
      </nav><!--end side bar col 1st-->

 