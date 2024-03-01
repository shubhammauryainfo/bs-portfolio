<?php
// Connect to the database
include "connect.php";


$name = $_POST["name"];
$phone = $_POST["phone"];
$Email=$_POST["email"];
$subject=$_POST["subject"];
$message = $_POST["message"];




$sql = "INSERT INTO `contact`(`name`, `phone`, `email`, `subject`, `message`) VALUES ('$name','$phone','$Email','$subject','$message')";

    if (mysqli_query($conn, $sql)) {
        header("location:thankyou.html");

        } 
        else {

        echo "try again".mysqli_error($conn);
    }

    mysqli_close($conn);


?>
