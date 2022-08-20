<?php
error_reporting(true);

// Connection 
$con=mysqli_connect("localhost", "root", "admin", "cipark");
if (!$con) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit();
  
 }
 

?>