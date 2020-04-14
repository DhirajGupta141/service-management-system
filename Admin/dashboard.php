<?php
define('TITLE','Dashboard');
define('PAGE','dashboard');
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
//getting the maximum request receive
$sql="SELECT MAX(request_id) FROM submitrequest_db";
$result=$conn->query($sql);
$row=$result->fetch_row();
$submitrequest=$row[0];
//getting the maximum of assigned work
$sql="SELECT MAX(request_id) FROM assignwork_tb";
$result=$conn->query($sql);
$row=$result->fetch_row();
$assignwork=$row[0];
//getting the maximum technician
$sql="SELECT MAX(empid) FROM technician_tb";
$result=$conn->query($sql);
$row=$result->fetch_row();
$totaltech=$row[0];
?>
       <div class="col-sm-9 col-md-10"><!--start dashboard col 2nd-->
           <div class="row text-center mx-5">
              <div class="col-sm-4 mt-5">
                <div class="card text-white bg-danger mb-3" style="max-width:18rem;">
                  <div class="card-header">Requests Received</div>
                    <div class="card-body">
                     <h4 class="card-title"><?php echo $submitrequest;?></h4>
                      <a  class="btn text-white"href="request.php">View</a>
                    </div>
                
                </div>
              </div>
              <div class="col-sm-4 mt-5">
                <div class="card text-white bg-success mb-3" style="max-width:18rem;">
                  <div class="card-header">Assigned work</div>
                    <div class="card-body">
                     <h4 class="card-title"><?php echo $assignwork;?></h4>
                      <a  class="btn text-white"href="work.php">View</a>
                    </div>
                
                </div>
              </div>
              <div class="col-sm-4 mt-5">
                <div class="card text-white bg-info mb-3" style="max-width:18rem;">
                  <div class="card-header">No. of Technician</div>
                    <div class="card-body">
                     <h4 class="card-title"><?php echo $totaltech;?></h4>
                      <a  class="btn text-white"href="technician.php">View</a>
                    </div>
                </div>
              </div>
           </div><!--Row ends-->

           <div class="mx-5 mt-5 text-center">
            <p class="bg-dark text-white p-2">List of Requester</p>
              <?php
              $sql="SELECT * FROM requesterlogin_tb";
              $result=$conn->query($sql);
              if($result->num_rows>0)
              {
                  echo '
                  <table class="table">
                   <thead>
                    <tr>
                     <th scope="col">Requester ID</th>
                     <th scope="col">Name</th>
                     <th scope="col">Email</th>
                    </tr>
                   </thead>
                   <tbody>';
                   while($row=$result->fetch_assoc()){
                    echo '<tr>';
                      echo '<td>'.$row["r_login_id"].'</td>';
                      echo '<td>'.$row["r_name"].'</td>';
                      echo '<td>'.$row["r_email"].'</td>';
                   
                    echo '</tr>';
                   }
                   echo '</tbody>
                   </table>';
              }
              else{
                  echo '0 Results';
              }
              
              ?>
             </div>
       </div><!--end Dashboard col 2nd-->
<?php
include('includes/footer.php');
?>       



    