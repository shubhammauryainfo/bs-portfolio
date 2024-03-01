<?php 
  session_start();
     

  $admin=$_SESSION['admin'];
  if ($admin==true) {
  
  }
  else{
    header("location:admin/index.html");
  }
include("connect.php");


$title = $_POST["title"];
$filter=$_POST["filter"];

$image = $_FILES['image']['name'];

$target_dir = "image/";
$target_file = $target_dir.$image;
move_uploaded_file($_FILES['image']['tmp_name'],"$target_file");


$sql = "INSERT INTO `content`(`title`, `filter`,`image`) VALUES ('$title','$filter','$target_file')";

    if (mysqli_query($conn, $sql)) {
        header("location:admin/dashboard.php");

        } 
        else {
        echo mysqli_error($conn);
    }

    mysqli_close($conn);


?>
