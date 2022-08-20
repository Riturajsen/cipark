<?php
include "core/dbconnect.php";
include "core/inc.php";
$res = mysqli_query($con , "SELECT SUM(amount) FROM chanda");
$ret = mysqli_fetch_array($res);
// echo "Chandda : ".$ret[0];


$res_k = mysqli_query($con , "SELECT SUM(kittaka) from karcha");

$ret_k = mysqli_fetch_array($res_k);

// echo "<br>Karcha : ". $ret_k[0];
// $bacha = $ret[0] - $ret_k[0];
// echo "<br><br> Bacha amount : ".$bacha

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $name ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  </head>
  <body>
    <div class="container mt-5">
        <div class="card shadow">
            <div class="card-header text-center text-white bg-dark">
                <h3>Chanda Collected Till Now</h3>
            </div>
            <div class="card-body">
                <table class="table">
                    <tr>
                        <th>S.No</th>
                        <th>House No.</th>
                        <th>Name</th>
                        <th>Chanda</th>
                    </tr>
                    <?php
                     $ret_get=mysqli_query($con,"SELECT * from chanda");
                     $cnt=1;
                     while ($row_get=mysqli_fetch_array($ret_get)) {
                     
                     ?>
                     <tr>
                        <td><?php echo $cnt; ?></td>
                        <td><?php  echo $row_get['Houseno'];?></td>
                        <td><?php  echo $row_get['fname'];?></td>
                        <td><?php  echo $row_get['amount'];?></td>
                     </tr>
                     <?php
                     $cnt=$cnt+1;
                     }
                     ?>
                     <hr>
                        <tr>
                            <th colspan="3">Total</th>
                            <th class="text-success"><?php echo $ret[0]; ?></th>
                        </tr>
                        <tr>
                            <th colspan="3" >Expenses</th>
                            <th class="text-danger"><?php echo $ret_k[0]; ?></th>
                        </tr>
                        <tr>
                            <th colspan="3" >Left Amount</th>
                            <th class="text-primary"><?php $bacha = $ret[0] - $ret_k[0]; echo $bacha; ?></th>
                        </tr>
                </table>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </body>
</html>
