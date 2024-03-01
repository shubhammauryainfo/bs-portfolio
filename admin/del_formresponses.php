<?php 
  session_start();
     
 
  $admin=$_SESSION['admin'];
  if ($admin==true) {
  
  }
  else{
    header("location:index.html");
  }
include "connect.php";

$No = $_GET["no"];

$sql = "DELETE FROM  `contact` WHERE`no` = $No";

mysqli_query($conn, $sql);

if($conn){
    header("location:response.php");
}
mysqli_close($conn);
?>