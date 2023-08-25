<?php
session_start();
include '../database.php';

$conn = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);

if (!$conn) {
    echo "Connection failed!";
}

$user_name = $_SESSION['user_name'];

$id    = $_SESSION['id'];


?>


<html>

<head>
    <title>Buyer Sign up</title>
</head>

<body>



</body>

</html>





<?php
require_once("../database.php");

$orderid = $_GET['orderid'];
$result = mysqli_query($mysqli, "SELECT * FROM delevery WHERE orderid='$orderid'");

$resultData = mysqli_fetch_assoc($result);

$sellerid = $resultData['sellerid'];
$email = $resultData['email'];
$phone = $resultData['phone'];
$deliverydate = $resultData['deliverydate'];
$stat = $resultData['stat'];
$district = $resultData['district'];
$subdistrict = $resultData['subdistrict'];
$address = $resultData['address'];



?>

<html>

<head>

<body>
    <form method="POST" name="edit" action="orderedit2.php">
        <input type="hidden" name="orderid" value="<?php echo $orderid; ?>">

        <lable>seller id</lable>
        <input type="text" name="sellerid" value="<?php echo $sellerid; ?>">
        <lable>seller id</lable>
        <input type="text" name="email" value="<?php echo $email; ?>">
        <lable>seller id</lable>
        <input type="text" name="phone" value="<?php echo $phone; ?>">
        <lable>deliverydate</lable>
        <input type="text" name="deliverydate" value="<?php echo $deliverydate; ?>">

        <lable>stat</lable>
        <select id="cars" name="stat">
            <option value="<?php
                            echo $stat; ?>"><?php echo $stat;
                        ?></option>
            <option value="On Wear House">On Wear House</option>
            <option value="On the Way">On the Way</option>
            <option value="Delivered">Delivered</option>
        </select>
        <input type="submit" name="update" value="update">




    </form>
</body>
</head>

</html>