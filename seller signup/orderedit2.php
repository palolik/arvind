<?php
session_start(); 
include '../database.php';

$conn = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);

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

    require_once("../database.php");
    if(isset($_POST['update'])){
        $orderid = mysqli_real_escape_string($mysqli, $_POST['orderid']);
        $status = mysqli_real_escape_string($mysqli, $_POST['status']);
        $deliverydate = mysqli_real_escape_string($mysqli, $_POST['deliverydate']);


        
        $result = mysqli_query($mysqli, "UPDATE delevery SET `status`='$status' ,  `deliverydate`='$deliverydate' WHERE `orderid`='$orderid'");

        echo "<a href='Pending Order.php'> View Table </a>";

    }

?>