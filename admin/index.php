<?php
include "../core/dbconnect.php";
include "../core/inc.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo "Admin | ".$name ?></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
</head>
<body class="bg-light">
    <div class="container mt-5 ">
        <div class="card shadow">
            <div class="card-header text-white bg-primary text-center">
                <h3>Hello Login to Admin panel</h3> 
            </div>
            <div class="card-body">
                <h4 class="text-danger text-center"><?php echo $_GET['msg']; ?></h3>

            <form action="check.php" method="post">
            <lable class="text-primary mt-5">
                Enter your Email
            </lable>
                    <input type="email" name="email" autocomplete="false" class="form-control mb-3" required>
            
                    <lable class="text-primary">
                Enter your Password
            </lable>
                    <input type="password" name="password" autocomplete="false" class="form-control" type="password" required>
            
                    <input type="submit" value="Submit" class="form-control text-white mt-3 bg-success shadow">
                    </form>
            </div>
        </div>
    </div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>