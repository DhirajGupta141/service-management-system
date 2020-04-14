
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo TITLE?></title>
    <!--Bootstrap css-->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <!--font awesome css-->
    <link rel="stylesheet" href="../css/all.min.css">
    <!-- custom css -->
    <link rel="stylesheet" href="../css/custom.css">
    
</head>
<body>
        <!--top nav bar-->
    <nav class="navbar navbar-dark fixed-top bg-danger flex-md-nowrap p-0 shadow">
    <a class="navbar-brand col-sm-3 col-md-2 mr-0"href="dashboard.php">OSMS</a></nav>
   <!--start container-->
   <div class="container-fluid" style="margin-top:40px;">
    <div class="row"><!--start row-->
      <nav class="col-sm-2 bg-light sidebar py-5 d-print-none">  <!-- start side bar 1st col-->
         <div class="sidebar-sticky" >
            <ul class="nav flex-column">
             <li class="nav-item "><a class="nav-link <?php
              if(PAGE=='dashboard'){ echo 'active';} ?>"
             href="dashboard.php"><i class="fas fa-user"></i>Dashboard</a></li>
            
             <li class="nav-item "><a class="nav-link <?php
              if(PAGE=='work'){ echo 'active';} ?>"
             href="work.php"><i class="fab fa-accessible-icon">
             </i>Work Order</a></li>
             
             <li class="nav-item "><a class="nav-link  <?php
              if(PAGE=='request'){ echo 'active';} ?>"
             href="request.php"><i class="fas fa-align-center">
             </i>Request</a></li>

             <li class="nav-item "><a class="nav-link  <?php
              if(PAGE=='assets'){ echo 'active';} ?>"
             href="assets.php"><i class="fab fa-atlassian">
             </i>Assets</a></li>

             <li class="nav-item "><a class="nav-link  <?php
              if(PAGE=='technician'){ echo 'active';} ?>"
             href="technician.php"><i class="fas fa-wrench">
             </i>Technician</a></li>

             <li class="nav-item "><a class="nav-link  <?php
              if(PAGE=='requester'){ echo 'active';} ?>"
             href="requester.php"><i class="fas fa-male">
             </i>Requester</a></li>

             <li class="nav-item "><a class="nav-link  <?php
              if(PAGE=='sellreport'){ echo 'active';} ?>"
             href="sellreport.php"><i class="fas fa-clipboard-check">
             </i>Sell Report</a></li>

             <li class="nav-item "><a class="nav-link  <?php
              if(PAGE=='workreport'){ echo 'active';} ?>"
             href="workreport.php"><i class="fas fa-briefcase">
             </i>Work Report</a></li>

             
            <li class="nav-item "><a class="nav-link  <?php
              if(PAGE=='changepass'){ echo 'active';} ?>"
             href="changepass.php"><i class="fas fa-key">
             </i>Change password</a></li>
             
            <li class="nav-item "><a class="nav-link"
             href="../logout.php"><i class="fas fa-sign-out-alt"></i>Logout</a></li>
            
            </ul>         
         </div>
      </nav><!--end side bar col 1st-->
