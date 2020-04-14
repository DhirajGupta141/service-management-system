<?php

define('TITLE','Requester Profile');
define('PAGE','RequesterProfile');
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

$sql="SELECT r_name,r_email From requesterlogin_tb where r_email='$rEmail'";

$result=$conn->query($sql);//executing the above query and storing it in $result

if($result->num_rows==1)
{
  $row=$result->fetch_assoc();
  $rName=$row['r_name'];//here r_name is the column name of our database 
  //this rName variable used for value attribute for printing
}

//for update button

if(isset($_REQUEST['nameupdate']))//if update is clicked
{
  if($_REQUEST['rName']=="")//checking if our name field is empty or not
  {
    $passmsg='<div class="alert alert-warning col-sm-6 ml-5 mt-2" 
    role="alert">Fill All Fields</div>';
  }
  //if all fields are field
  else{
    $rName=$_REQUEST['rName'];
    $sql="UPDATE requesterlogin_tb SET r_name='$rName'WHERE r_email='$rEmail'";
    if($conn->query($sql)==TRUE)//if above query is successfully excecuted
    {
      $passmsg='<div class="alert alert-success col-sm-6 ml-5 mt-2"
      role="alert">Updated Successfully</div>';
    }
    else{
      $passmsg='<div class="alert alert-danger col-sm-6 ml-5 mt-2"
      role="alert"> Unable to Updated </div>';

    }
  }
}

?>


           <div class="col-sm-6 mt-5">   <!--start profile area second col--><!--came out of that column sm-2-->
              <form action="" method="POST" class="mx-5">
               <div class="form-group">
                 <label for="rEmail">Email</label><input type="Email" class="form-control"
                 name="rEmail" id="rEmail" value="<?php echo $rEmail ?>"readonly>
               </div><!--value attribute is for display in requester profile-->
               <div class="form-group">
                 <label for="rName">Name</label><input type="text" class="form-control"
                 name="rName" id="rName" >
               </div>
               <button type="submit" class="btn btn-danger" name="nameupdate">Update </button>
                
                <?php 
                //if all feilds are not filled 
                if(isset($passmsg))
                {
                      echo $passmsg;
                }
                
                ?>
              </form>
           
           
           
           </div>  <!--end profile area second col-->          
    
<?php
include('includes/Footer.php')
?>