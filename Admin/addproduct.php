<?php
define('TITLE','Add New Product');
define('PAGE','assets');
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

if(isset($_REQUEST['psubmit']))
{
        if(($_REQUEST['pname']=="")||($_REQUEST['pdop']=="")||($_REQUEST['pava']=="")
        ||($_REQUEST['ptotal']=="")||($_REQUEST['poriginalcost']=="")
        ||($_REQUEST['psellingcost']==""))
        {
            $msg='<div class="alert alert-danger col-sm-6 ml-5 mt-2"
            role="alert">All Fields are required </div>';
        }
        else
        {
            $pname=$_REQUEST['pname'];
            $pdop=$_REQUEST['pdop'];
            $pava=$_REQUEST['pava'];
            $ptotal=$_REQUEST['ptotal'];
            $poriginalcost=$_REQUEST['poriginalcost'];
            $psellingcost=$_REQUEST['psellingcost'];
             
            $sql="INSERT INTO assets_tb (pname,pdop,pava,ptotal,poriginalcost
            ,psellingcost) 
            VALUES('$pname','$pdop','$pava','$ptotal','$poriginalcost',$psellingcost)";
            if($conn->query($sql)==TRUE)
            {
                $msg='<div class="alert alert-success col-sm-6 ml-5 mt-2"
                role="alert">Added Successfully</div>';
            }
            else
            {
                $msg='<div class="alert alert-danger col-sm-6 ml-5 mt-2"
                role="alert">Unable to ADD</div>';
            }
        }
}
   
?> 

<!-- start second column -->
<div class="col-sm-6 mt-5 mx-3 jumbotron">
    <h3 class="text-center">Add New Product</h3>
    <form action="" method="POST">
        <div class="form-group">
            <label for="pname"> Product Name</label>
            <input type="text" class="form-control" id="pname" name="pname">
        </div>
        <div class="form-group">
            <label for="pdop">Date of Purchase</label>
            <input type="date" class="form-control"id="pdop" name="pdop">
        </div>
        <div class="form-group">
            <label for="pava">Available</label>
            <input type="text" class="form-control"id="pava"name="pava">
        </div>
        <div class="form-group">
            <label for="ptotal">Total</label>
            <input type="text" class="form-control"id="ptotal"name="ptotal">
        </div>
        <div class="form-group">
            <label for="poriginalcost">Original Cost Each</label>
            <input type="text" class="form-control"id="poriginalcost"
            name="poriginalcost">
        </div>
        <div class="form-group">
            <label for="psellingcost">Selling Cost Each</label>
            <input type="text" class="form-control"id="psellingcost"
            name="psellingcost">
        </div>
        <div class="text-center">
            <button type="submit" class="btn btn-danger" id="psubmit" name="psubmit">
            Submit</button>
            <a href="assets.php" class="btn btn-secondary">Close</a>
        </div>
        <?php if(isset($msg)) {echo $msg;}?>
    </form>
<!-- end second column -->

<?php
include('includes/footer.php');
?>       