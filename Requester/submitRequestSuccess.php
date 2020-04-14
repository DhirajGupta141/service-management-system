<?php
define('TITLE','Success');
define('PAGE','submitRequester');
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
$sql="SELECT * FROM submitrequest_db WHERE request_id={$_SESSION['myid']}";
$result=$conn->query($sql);
if($result->num_rows==1)
{
    $row=$result->fetch_assoc();
    echo "<div class='ml-5 mt-5'>
    <table class='table'>
      <tbody>
        <tr>
          <th>Request ID</th>
          <td>".$row['request_id']."</td>
        </tr>
        <tr>
          <th>Name</th>
          <td>".$row['requester_name']."</td>
        </tr>  
        <tr>
          <th>Requester EmailiD</th>
          <td>".$row['requester_email']."</td>
        </tr>
        <tr>
          <th>Request Info</th>
          <td>".$row['request_info']."</td>
        </tr>
        <tr>
          <th>Request Description</th>
          <td>".$row['request_desc']."</td>
        </tr>
        <tr>
          <td><form class='d-print-none'><input class='btn btn-danger' type='submit'
          value='Print' onClick='window.print()'></form></td>
        </tr>
        </tbody>
        </table>
    </div>";
}
else{
    echo "fails";
}
include('includes/Footer.php')
?>
