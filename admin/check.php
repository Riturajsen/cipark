<?php
session_start();

 include "../core/dbconnect.php";
 include "../core/inc.php";
$user = $_POST['email'];
$pass = $_POST['password'];
 
$res = mysqli_query($con , "SELECT * From admins where mail='$user'");
// $row = mysqli_fetch_row($res);
$ret = mysqli_fetch_array($res); 
 if($ret== 0){
    $msg = "No Email Found Please check the Email Address";
    header('Location: index.php?msg='.$msg);
 }
 else{
    // echo "Email : ".$user." Password : ".$pass;
    //  echo " Your password is : ".$ret['password'];
     if($pass == $ret['password']){
        //  echo " Login Success";
        $_SESSION["uid"] = $ret['mail'];
        header('Location: app/dashboard.php');
     }
     else{ 
        $msg = "Wrong Password";
    header('Location: index.php?msg='.$msg);
     }

}



?>