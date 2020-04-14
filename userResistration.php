<?php
include('dbConnection.php');

if(isset($_REQUEST['rsignup'])) //checking for empty field
{
    if(($_REQUEST['rname']=="")||($_REQUEST['remail']=="")||($_REQUEST['rpassword']==""))
    {
        $regmsg= '<div  class="alert alert-warning mt-2 " role="alert">
        All field are required</div>';
    }
    else
    {//email already registerd
      $sql="SELECT r_email FROM requesterlogin_tb where r_email
      ='".$_REQUEST['remail']."'";//checking the user enterd email in my database
      $result=$conn->query($sql);//checking the above query in my database
      if($result->num_rows==1)//if the user has already registered
      {
          $regmsg='<div class="alert alert-warning mt-2" role="alert">
          Email Id aleady Registerd</div>';
      }
      else
      {//assigning user value to variables
         $rName= $_REQUEST['rname'];//rname will come here from registration form which user has entered
         $rEmail= $_REQUEST['remail'];
         $rPassword= $_REQUEST['rpassword'];
         //$rDob=$_REQUEST['rdate'];
         $sql="INSERT INTO  requesterlogin_tb(r_name,r_email,r_password)VALUES('$rName',
          '$rEmail','$rPassword')" ;
          if($conn->query($sql)==true) //executing the above query
          {
          $regmsg= '<div class="alert alert-success mt-2" role="alert">
          Account successfuly created</div>';
          }
         else
         {
         $regmsg= '<div class="alert alert-danger mt-2" role="alert">
          Unable to create Account </div>';
         }
       }
    }
}
//end of php work
?>



<!--start registration form-->
<div class="container pt-5" id="Registration">
  <h2 class="text-center">Create An Account</h2>
  <div class ="row mt-4 mb-4">
    <div class="col-md-6 offset-md-3">
      <!--creating form-->
      <form action="" class="shadow-lg p-4" method="POST">
        <div class="form-group">
          <i class="fas fa-user"></i> <label for="name" class="font-weight-bold pl-2">
            Name</label><input type="text" class="form-control"
             placeholder="Name" name="rname"><!--name attribute is used for database-->
        </div>
        <div class="form-group">
          <i class="fas fa-user"></i> <label for="email" class="font-weight-bold pl-2">
            Email</label><input type="text" class="form-control"
             placeholder="Email" name="remail">
             <small class="form-text">We will never share your email with anyone</small>
        </div>
        <div class="form-group">
          <i class="fas fa-key"></i> <label for="pass" class="font-weight-bold pl-2">
            Password</label><input type="password" class="form-control"
             placeholder="password" name="rpassword">
        </div>
        <button type="submit" class="btn btn-danger mt-5 btn
        btn-block shadow-sm font-weight-bold" name="rsignup" >Sign Up</button>
        <em style="font-size:10px;">Note-By clicking sign Up , you agree to our Term ,Data policy and
          Cookies Policy
        </em>
                <?php
                   if(isset($regmsg))//i am checking if all field are not there pop up this msg
                   {
                      echo $regmsg;
                   }
               ?>
      </form><!--end of form-->
    </div>
  </div>
</div>
<!--end registration form container-->
