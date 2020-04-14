<?php
define('TITLE','Change Password');
define('PAGE','RequesterChangepass');
include('includes/Header.php');
include('../dbconnection.php');
session_start();
if($_SESSION['is_login'])//if logined then true will come from Requesterlogin.php
{
    $rEmail=$_SESSION['rEmail'];//if logined then email should come in $rEmail
    //we are storing the email address of the user to show on its profile by default
}
else//if not logined means someone is accessesing directly
{

     echo "<script>location.href='Requesterlogin.php'</script>";//means first login then come
}

if(isset($_REQUEST['passupdate']))//if update is clicked
{
  if($_REQUEST['rPassword']=="")//checking if our name field is empty or not
  {
    $passmsg='<div class="alert alert-warning col-sm-6 ml-5 mt-2" 
    role="alert">Fill All Fields</div>';
  }
  else{
    $rPass=$_REQUEST['rPassword'];
    $sql="UPDATE requesterlogin_tb SET r_password ='$rPass' WHERE r_email='$rEmail'";
    if($conn->query($sql)==TRUE)
    {
        $passmsg='<div class="alert alert-success col-sm-6 ml-5 mt-2" 
        role="alert">Updated successfully</div>';  
    }
    else{
        $passmsg='<div class="alert alert-warning col-sm-6 ml-5 mt-2" 
        role="alert">Unable to Update</div>';
    }
  }
}

?>

<div class="col-sm-9 col-md-10">  <!--Start user change pass from second column-->
   <form action="" method="POST" class="mt-5 mx-5">
     <div class="form-group">
        <label for="inputemail">Email</label><input type="Email" class="form-control"
         id="rEmail" value="<?php echo $rEmail;?>" readonly>
    </div>
    
       <div class="form-group">
            <label for="inputnewpassword">New Password</label>
            <input type="password" class="form-control"
            name="rPassword" id="inputnewpassword" placeholder="New Password">
        </div>
            
    <button typr="submit" class="btn btn-danger mr-4 mt-4" name="passupdate">
     Update</button>       
            
    <button typr="reset" class="btn btn-secondary mt-4">
     Reset</button> 
    <?php if(isset($passmsg)){echo $passmsg;}?>    
     </form>   
            
</div><!--Start user change pass from second column-->


<?php
include('includes/Footer.php');
?>