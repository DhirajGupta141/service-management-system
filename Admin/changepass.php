<?php
define('TITLE','Change Password');
define('PAGE','changepass');
include('includes/header.php');
include('../dbconnection.php');
session_start();
if(isset($_SESSION['is_adminlogin']))
{
  $aEmail=$_SESSION['aEmail'];
}
else{
 echo "<script> location.href='login.php';</script>";
}

if(isset($_REQUEST['passupdate']))//if update is clicked
{
  if($_REQUEST['aPassword']=="")//checking if our name field is empty or not
  {
    $passmsg='<div class="alert alert-warning col-sm-6 ml-5 mt-2" 
    role="alert">Fill All Fields</div>';
  }
  else{
    $rPass=$_REQUEST['aPassword'];
    $sql="UPDATE adminlogin_tb SET a_password ='$rPass' WHERE a_email='$aEmail'";
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

<div class="col-sm-9 col-md-10">  <!--Start admin change pass from second column-->
   <form action="" method="POST" class="mt-5 mx-5">
     <div class="form-group">
        <label for="inputemail">Email</label><input type="Email" class="form-control"
         id="aEmail" value="<?php echo $aEmail;?>" readonly>
    </div>
    
       <div class="form-group">
            <label for="inputnewpassword">New Password</label>
            <input type="password" class="form-control"
            name="aPassword" id="inputnewpassword" placeholder="New Password">
        </div>
            
    <button typr="submit" class="btn btn-danger mr-4 mt-4" name="passupdate">
     Update</button>       
            
    <button typr="reset" class="btn btn-secondary mt-4">
     Reset</button> 
    <?php if(isset($passmsg)){echo $passmsg;}?>    
     </form>   
            
</div><!--Start admin change pass from second column-->


?>

<?php
include('includes/footer.php');
?>       