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
    <title>Add Chandda | <?php echo $name ?></title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">

<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</head>
<body>
    <?php include_once "header.php"; ?>
<div class="container mt-5">
<h4 id="alert"class="text-danger"></h4>
    <form method="post" id="myform">
    <h3> Name</h3>
            <input type="text" name="fname" id="fname" class="form-control mt-3" placeholder="Enter Full Name" required>
        <h3> House no</h3>
            <input type="Number" name="hno" id="hno" class="form-control mt-3" placeholder="Enter House Number" required>
            <h3 class="mt-3">Amount</h3>
            <input type="Number" name="amt" id="amt" class="form-control mt-3" placeholder="Enter Amount Receved" required>

            <input type="submit" class="form-control btn btn-success mt-3 text-dark" value="Submit">
    </form>
    </div>

    <script type="text/javascript">
        $(document).ready(function(e){
            $('#myform').on("submit",function(e){
                e.preventDefault();
                // alert("Image Uploaded")
                    var form_data = new FormData(this);

                $.ajax({
                    url:"ajaxC.php",
                    method: "POST",
                    data: form_data,
                    dataType: "JSON" ,
                    processData: false,
                    contentType: false,
                    success:function(data){
                        $("#alert").text(data.output);
                        document.getElementById("hno").value = "";
                        document.getElementById("fname").value = "";
                        document.getElementById("amt").value = "";
                    }
            
                });
            });
        });
    </script>
</body>
</html>

<?php } ?>