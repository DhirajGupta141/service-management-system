<?php
define('TITLE','Update Technician');
define('PAGE','technician');
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
?>
<!-- start second column -->
<div class="col-sm-6 mt-5 mx-3 jumbotron">
    <h3 class="text-center">Update Technician Details</h3>
    <?php
        if(isset($_REQUEST['edit']))
        {
            $sql="SELECT * FROM technician_tb WHERE empid={$_REQUEST['id']}";
            $result=$conn->query($sql);
            $row=$result->fetch_assoc();

        }
        if(isset($_REQUEST['empupdate']))
        {
                if(($_REQUEST['empName']=="")||($_REQUEST['empCity']=="")
                ||($_REQUEST['empMobile']=="")||($_REQUEST['empEmail']==""))
                {
                    $msg='<div class="alert alert-danger col-sm-6 ml-5 mt-2"
                    role="alert">All Fields are required </div>';
                 
                }
                else
                {
                    $eId=$_REQUEST['empid'];
                    $eName=$_REQUEST['empName'];
                    $eEmail=$_REQUEST['empEmail'];
                    $eMobile=$_REQUEST['empMobile'];
                    $eCity=$_REQUEST['empCity'];
                    
                    $sql="UPDATE technician_tb SET empName='$eName',
                    empCity='$eCity',empMobile='$eMobile',empEmail='$eEmail'
                     WHERE empid='$eId'";

                    if($conn->query($sql)==TRUE)
                    {
                        $msg='<div class="alert alert-success col-sm-6 ml-5 mt-2"
                        role="alert">Updated Successfully</div>';
                    }
                    else
                    {
                        $msg='<div class="alert alert-danger col-sm-6 ml-5 mt-2"
                        role="alert">Unable to update </div>';
                    }
                }
        }

    ?>

   
    <form action="" method="POST">
        <div class="form-group">
            <label for="empid">Employee ID</label>
            <input type="text" class="form-control" name="empid" id="empid" 
            Value="<?php if(isset($row['empid']))
            {
                echo $row['empid'];
            }?>" readonly>
        </div>
        <div class="form-group">
            <label for="empName">Name</label>
            <input type="text" class="form-control" name="empName" id="empName" 
            Value="<?php if(isset($row['empName']))
            {
                echo $row['empName'];
            }?>" >
        </div>
        <div class="form-group">
            <label for="empCity">City</label>
            <input type="text" class="form-control" name="empCity" id="empCity" 
            Value="<?php if(isset($row['empCity']))
            {
                echo $row['empCity'];
            }?>" >
        </div>
        <div class="form-group">
            <label for="empMobile">Mobile</label>
            <input type="text" class="form-control" name="empMobile" id="empMobile" 
            Value="<?php if(isset($row['empMobile']))
            {
                echo $row['empMobile'];
            }?>" >
        </div>
        <div class="form-group">
            <label for="empEmail">Email</label>
            <input type="text" class="form-control" name="empEmail" id="empEmail" 
            Value="<?php if(isset($row['empEmail']))
            {
                echo $row['empEmail'];
            }?>" >
        </div>
        <div class="text-center">
            <button type="submit" class="btn btn-danger" id="empupdate" 
            name="empupdate">Update</button>
            <a href="technician.php" class="btn btn-secondary">Close</a>
        </div>
        <?php if(isset($msg)){echo $msg;}?>
    </form>
</div><!-- End second column -->


<?php
include('includes/footer.php');
?>       