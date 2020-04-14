<?php
define('TITLE','Submit Request');
define('PAGE','SubmitRequester');
include('includes/Header.php');

include('../dbConnection.php');
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

if(isset($_REQUEST['submitrequest']))
{
  if(($_REQUEST['requestinfo']=="")||($_REQUEST['requestdesc']=="")||($_REQUEST['requestername']=="")
  ||($_REQUEST['requesteradd1']=="")||($_REQUEST['requesteradd2']=="")
  ||($_REQUEST['requestercity']=="")||($_REQUEST['requesterstate']=="")
  ||($_REQUEST['requesterzip']=="")||($_REQUEST['requesteremail']=="")
  ||($_REQUEST['requestermobile']=="")||($_REQUEST['requesterdate']==""))
  {
    $msg='<div class="alert alert-danger col-sm-6 ml-5 mt-2"
    role="alert">Fill all fields </div>';
  }
  //if all fields are filled
  else
  {
    $rinfo=$_REQUEST['requestinfo'];
    $rdesc=$_REQUEST['requestdesc'];
    $rname=$_REQUEST['requestername'];
    $radd1=$_REQUEST['requesteradd1'];
    $radd2=$_REQUEST['requesteradd2'];
    $rcity=$_REQUEST['requestercity'];
    $rstate=$_REQUEST['requesterstate'];
    $rzip=$_REQUEST['requesterzip'];
    $remail=$_REQUEST['requesteremail'];
    $rmobile=$_REQUEST['requestermobile'];
    $rdate=$_REQUEST['requesterdate'];

    $sql="INSERT INTO submitrequest_db(request_info,request_desc,requester_name
    ,requester_add1,requester_add2,requester_city,requester_state,requester_zip
    ,requester_email,requester_mobile,request_date)VALUES('$rinfo','$rdesc',
    '$rname','$radd1','$radd2','$rcity','$rstate','$rzip','$remail',
    '$rmobile','$rdate')";

//checking wheater the above query ran correctly or not
    if($conn->query($sql)==TRUE)
    {
     $genid=mysqli_insert_id($conn);//returns the latestID which is entered 
    $msg='<div class="alert alert-success col-sm-6 ml-5 mt-2"
    role="alert"> Request Submitted Successfully</div>';
    $_SESSION['myid']=$genid;//session variable
    echo "<script>location.href='submitRequestSuccess.php'</script>";

    }
    else{
      
    $msg='<div class="alert alert-danger col-sm-6 ml-5 mt-2"
    role="alert">Unable to submit your Request </div>';
 
    }
  }
}







?>

<div class="col-sm-9 col-md-10 mt-5"> <!--Start service request form 2nd column--> 
 
 <form  class="mx-5"action="" method="POST">
   <div class="form-group">
     <label for="inputRequestInfo">Request Info</label>
     <input type="text" class="form-control" id="inputRequestInfo" 
     placeholder="Request Info" name="requestinfo">
   </div>
   <div class="form-group">
     <label for="inputRequestDescription">Description</label>
     <input type="text" class="form-control" id="inputRequestDescription" 
     placeholder="Write Description " name="requestdesc">
   </div>
   <div class="form-group">
     <label for="inputName">Name</label>
     <input type="text" class="form-control" id="inputName" 
     placeholder="Dhiraj" name="requestername">
   </div>
   <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputAddress">Address Line1</label>
      <input type="text" class="form-control" id="inputAddress" 
      placeholder="House No. A/5" name="requesteradd1">
    </div>
    <div class="form-group col-md-6">
      <label for="inputAddress">Address Line2</label>
      <input type="text" class="form-control" id="inputAddress" 
      placeholder="Gorai road" name="requesteradd2">
    </div>
    </div>
    <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">City</label>
      <input type="text" class="form-control" id="inputCity" 
     name="requestercity">
    </div>
    <div class="form-group col-md-4">
      <label for="inputState">State</label>
      <input type="text" class="form-control" id="inputState" 
      name="requesterstate">
    </div>
    <div class="form-group col-md-2">
      <label for="inputZip">Zip</label>
      <input type="text" class="form-control" id="inputZip" 
      name="requesterzip" onkeypress="isInputNumber(event)">
    </div>
    </div>
    <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail">Email</label>
      <input type="text" class="form-control" id="inputEmail" 
      placeholder="abc@gmail.com" name="requesteremail">
    </div>
    <div class="form-group col-md-3">
      <label for="inputMobile">Mobile</label>
      <input type="text" class="form-control" id="inputmobile" 
      placeholder="8080361810" name="requestermobile" onkeypress="isInputNumber(event)">
    </div>
    <div class="form-group col-md-3">
      <label for="inputDate">Date</label>
      <input type="date" class="form-control" id="inputmobile" 
       name="requesterdate" >
    </div>
    </div>
    <button type="submit" class="btn btn-danger" name="submitrequest">Submit</button>
    <button type="reset" class="btn btn-secondary">Reset</button>
 </form>
 <!-- msg for if all the fields are not fill -->
 <?php if(isset($msg)){echo $msg;}?>
</div><!--End service request form 2nd column-->

<!-- Only Number for input fields -->
<script>
 function isInputNumber(evt)
 {
   var ch=string.fromCharCode(evt.which);
   if(!(/[0-9]/.test(ch)))
   {
     evt.preventDefault();
   }
 }

</script>

<?php
include('includes/Footer.php')
?>