<?php

$db_host="localhost";
$db_root="root";
$db_password="";
$db_name="osms";
$db_port=3306;

//create connection
$conn=new mysqli($db_host,$db_root,$db_password,$db_name,$db_port);

//checking connection
if($conn->connect_error)
{
    die("connection failed");
}
//else{
  //  echo "connection successfull";
//}

?>