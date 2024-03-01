<?php
// Connect to the database
$conn = mysqli_connect("localhost", "root", "", "arsh");

// Check connection
if (!$conn) {
 echo"failed ".mysqli_connect_error($conn);
}

?>