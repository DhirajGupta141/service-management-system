<?php
define('TITLE','Sell Product');
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
    if(($_REQUEST['cname']=="")||($_REQUEST['cadd']=="")||($_REQUEST['pname']=="")
        ||($_REQUEST['qrequire']=="")||($_REQUEST['totalcost']=="")||
        (($_REQUEST['psellingcost']==""))||($_REQUEST['selldate']==""))
        {
            $msg='<div class="alert alert-danger col-sm-6 ml-5 mt-2"
            role="alert">All Fields are required </div>';
        }
    else
    {
        $pid=$_REQUEST['pid'];
        $pava=$_REQUEST['pava'] -$_REQUEST['qrequire'];

        $custname=$_REQUEST['cname'];
        $custadd=$_REQUEST['cadd'];
        $cpname=$_REQUEST['pname'];
        $cpquantity=$_REQUEST['qrequire'];
        $cpeach=$_REQUEST['psellingcost'];
        $cptotal=$_REQUEST['totalcost'];
        $cpdate=$_REQUEST['selldate'];

        $sql="INSERT INTO customer_tb (custname,custadd,cpname,cpquantity,cpeach,
        cptotal,cpdate) VALUES('$custname','$custadd','$cpname','$cpquantity',
        '$cpeach','$cptotal','$cpdate')";
            if($conn->query($sql)==TRUE)
            {
               $genid=mysqli_insert_id($conn);
               session_start();
               $_SESSION['myid']==$genid;
               echo "<script>location.href='productsellsuccess.php';</script>";

            }
            //quary to decrease product avalability
            $sqlp="UPDATE assets_tb SET pava='$pava' WHERE pid='$pid'";
            $conn->query($sqlp);
    }

}
?>

<!-- start second column -->
<div class="col-sm-6 mt-5 mx-3 jumbotron">
    <h3 class="text-center">Customer Bill</h3>
<?php
if(isset($_REQUEST['issue']))
{
$sql="SELECT * FROM assets_tb ";
$result=$conn->query($sql);
$row=$result->fetch_assoc();
}
?>
    <form action="" method="POST">
        <div class="form-group">
            <label for="pname"> Product ID</label>
            <input type="text" class="form-control" id="pid" name="pid" value="<?php
            if(isset($row['pid'])){echo $row['pid'];}?>" readonly>
        </div>
        <div class="form-group">
            <label for="pname">Customer Name</label>
            <input type="text" class="form-control" id="cname" name="cname"  >
        </div>
        <div class="form-group">
            <label for="pname">Customer Address</label>
            <input type="text" class="form-control" id="cadd" name="cadd" >
        </div>
        <div class="form-group">
            <label for="pname"> Product Name</label>
            <input type="text" class="form-control" id="pname" name="pname" value="<?php
            if(isset($row['pname'])){echo $row['pname'];}?>">
        </div>
        <div class="form-group">
            <label for="pava">Available</label>
            <input type="text" class="form-control"id="pava"name="pava" value="<?php
            if(isset($row['pava'])){echo $row['pava'];}?>" readonly>
        </div>
        <div class="form-group">
            <label for="pname">Quantity Require</label>
            <input type="text" class="form-control" id="qrequire" name="qrequire">
        </div>
        <div class="form-group">
            <label for="psellingcost">Price Each</label>
            <input type="text" class="form-control"id="psellingcost"
            name="psellingcost" value="<?php
            if(isset($row['psellingcost'])){echo $row['psellingcost'];}?>" readonly>
        </div>
        <div class="form-group">
            <label for="pname">Total Price</label>
            <input type="text" class="form-control" id="totalcost" name="totalcost">
        </div>
        <div class="form-group col-md-6">
            <label for="pname">Date</label>
            <input type="Date" class="form-control" id="selldate" name="selldate">
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