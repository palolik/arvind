<?php
session_start(); 
$sname= "localhost";
$unmae= "root";
$password = "";

$db_name = "ecom";

$conn = mysqli_connect($sname, $unmae, $password, $db_name);

if (!$conn) {
	echo "Connection failed!";
}

$user_name=$_SESSION['user_name'];
        
$id	=$_SESSION['id']; 


?>


<html>
    <head>
        <title>Buyer Sign up</title>
    </head>

</html>







<?php

    require_once("./ecom.php");
    if(isset($_POST['update'])){
        $orderid = mysqli_real_escape_string($mysqli, $_POST['orderid']);
        $status = mysqli_real_escape_string($mysqli, $_POST['status']);
        $deliverydate = mysqli_real_escape_string($mysqli, $_POST['deliverydate']);


        
        $result = mysqli_query($mysqli, "UPDATE delevery SET `status`='$status' ,  `deliverydate`='$deliverydate' WHERE `orderid`='$orderid'");

        echo "<a href='Pending Order.php'> View Table </a>";

    }

?>