<?php
session_start();
require "db.inc.php";

$POST = filter_var_array($_POST, FILTER_SANITIZE_STRING);
$POSTI = filter_var_array($_POST, FILTER_SANITIZE_NUMBER_INT);



if(isset($POST['rating'])) {

    $buyername = mysqli_real_escape_string($conn, $POST['buyername'] ?? "");
    $orderq = mysqli_real_escape_string($conn, $POST['orderq'] ?? "");
    $review = mysqli_real_escape_string($conn, $POST['review'] ?? "");
    $rating = mysqli_real_escape_string($conn, $POST['rating'] ?? "");
    $date = mysqli_real_escape_string($conn, $POST['date'] ?? "");
    $buyerid = mysqli_real_escape_string($conn, $POST['buyerid'] ?? "");
    $productid = mysqli_real_escape_string($conn, $POST['productid'] ?? "");


    $stmt = $conn->prepare("INSERT INTO reviews (orderq,buyername,productid,review,rating, buyerid, date) VALUES ( ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssssss", $orderq, $buyername, $productid, $review, $rating, $buyerid, $date);
      $stmt->execute();
           


}