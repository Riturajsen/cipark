<?php
session_start();
if($_SESSION['uid'] == ""){
    header('Location: ../index.php');
}else{
include "../../core/inc.php";
include "../../core/dbconnect.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Function | <?php echo $name ?></title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <?php include_once "header.php"; ?>
    
</body>
</html>

<?php } ?>