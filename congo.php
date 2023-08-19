<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>congratulations </h1>

    <?php

include 'database.php';

$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);



    if(isset($_POST['submittt'])){
        
        $cname = mysqli_real_escape_string($mysqli, $_POST['cname']);
        $email = mysqli_real_escape_string($mysqli, $_POST['email']);
        $phone = mysqli_real_escape_string($mysqli, $_POST['phone']);
        $district = mysqli_real_escape_string($mysqli, $_POST['district']);
        $subdistrict = mysqli_real_escape_string($mysqli, $_POST['subdistrict']);
        $address = mysqli_real_escape_string($mysqli, $_POST['address']);
        $productname = mysqli_real_escape_string($mysqli, $_POST['productname']);
        $sellerid = mysqli_real_escape_string($mysqli, $_POST['sellerid']);
        $productid = mysqli_real_escape_string($mysqli, $_POST['productid']);
        $price = mysqli_real_escape_string($mysqli, $_POST['price']);
        $deliverydate = mysqli_real_escape_string($mysqli, $_POST['deliverydate']);
        $status = mysqli_real_escape_string($mysqli, $_POST['status']);



        $result = mysqli_query($mysqli, "INSERT INTO delevery (`cname`, `email`,`phone`,`district`,`subdistrict`,`address`,`productname`,`sellerid`,`productid`,`price`,`deliverydate`,`status`)VALUES( '$cname', '$email','$phone','$district','$subdistrict','$address','$productname','$sellerid','$productid','$price','$deliverydate','$status')");


    }

?>




</body>
</html>