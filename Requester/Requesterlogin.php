<?php
  include('../dbConnection.php');//now database is connected with login form
  session_start();
if(!isset($_SESSION['is_login']))
{
  if(isset($_REQUEST['rEmail']))
  {//small if
  $rEmail=mysqli_real_escape_string($conn,trim($_REQUEST['rEmail']));//attribute of name field
  $rPassword=mysqli_real_escape_string($conn,trim($_REQUEST['rpassword']));
  $sql="SELECT r_email,r_password FROM requesterlogin_tb where r_email='".$rEmail."'
  AND r_password='".$rPassword."'limit 1";
  $result=$conn->query($sql);//$conn is connection object
  if($result->num_rows==1)
  {
      $_SESSION['is_login']=true;//if successfully logined then true will re set
      $_SESSION['rEmail']=$rEmail;//email will be stored
      echo "<script> location.href='RequesterProfile.php';</script>";
      exit;

  }
  else{
      $msg='<div class="alert alert-warning mt-2;">Enter valid email adderess and 
      password</div>';
      }
 }//small if
}//big if
else
{
    echo "<script> location.href='RequesterProfile.php';</script>";
} 
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <!--Bootstrap css-->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <!--font awesome css-->
    <link rel="stylesheet" href="../css/all.min.css">

</head>
<body>
<div class="mt-5 text-center mb-2" style="font-size:30px;">
   <i class="fas fa-stethoscope"></i>
   <span >Online Service Management System </span>
</div>
  <p class="text-center" style="font-size:20px;">
  <i class="fas fa-user-secret text-danger mr-1"></i>Requester Area </p>
<div class="container-fluid">
  <div class="row justify-content-center"><!--to bring the things in center-->
    <div class="col-sm-6 col-md-4">
      <form action="" class="shadow-lg p-4" method="POST">
         <div class="form-group">
            <i class="fas fa-user"></i><label for="email" class="font-weight-bold pl-2">
            Email</label> <input type="email" class="form-control" placeholder="Email"
            name="rEmail">
            <small class="form-text">We will neverever share your email adderess</small>
         </div>

         <div class="form-group">
          <i class="fas fa-key"></i><label for="pass"class="font-weight-bold pl-2" >
          Password</label><input type="password" class="form-control" 
          placeholder="Password" name="rpassword">
         </div>

         <button type="submit" class="btn btn-outline-danger mt-3 font-weight-bold
          btn-block shadow-sm"> Login </button>

          <?php
           if(isset($msg))
            {
               echo $msg;
            }  
          ?>

      </form>
      <!--back to home-->
       <div class="text-center"><a href="../index.php" class="btn btn-info mt-3 
       font-weight-bold shodow-sm">Back To Home</a></div>
    
    </div>
  
  </div>

</div>  

<!--javascript file-->

<script src="../js/jquery.min.js"></script>
<script src="../js/popper.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/all.min.js"></script>
</body>
</html>