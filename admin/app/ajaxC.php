<?php
error_reporting(true);
$connect = mysqli_connect("127.0.0.1","root","admin","cipark");

$hno = $_POST['hno'];
$amt = $_POST['amt'];
$fname = $_POST['fname'];

$res_f = mysqli_query($connect , "SELECT * from chanda where Houseno='$hno'");
 

if (mysqli_num_rows($res_f) == 0){
$output = "";

$query = "INSERT Into chanda (Houseno , amount, fname) values ('$hno', '$amt', '$fname')";
$res  = mysqli_query($connect,$query);

if($res){
    $output = "Uploaded";
}else{
    $output = "Failed to upload";
}
}else{
    $output = "This house number is already added";
}
$resp = array(
    'output' => $output
);
echo json_encode($resp);
?>