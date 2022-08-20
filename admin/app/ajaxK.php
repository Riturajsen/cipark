<?php
error_reporting(true);
$connect = mysqli_connect("127.0.0.1","root","admin","cipark");

$kitta = $_POST['kitta'];
$kaha = $_POST['kaha'];

$output = "";

$query = "INSERT Into karcha(kahahua , kittaka) values ('$kaha', '$kitta')";
$res  = mysqli_query($connect,$query);

if($res){
    $output = "Added Karcha";
}else{
    $output = "Failed to upload";
}

$resp = array(
    'output' => $output
);
echo json_encode($resp);
?>