<?php 
require_once("../ecom.php");

$id = $_GET['id'];
$result = mysqli_query($mysqli, "DELETE FROM productdetails WHERE id=$id");

header("location:./productlist.php");
?>


//
$id = mysqli_real_escape_string($mysqli, $_POST['id']);

$name = mysqli_real_escape_string($mysqli, $_POST['name']);
$specification = mysqli_real_escape_string($mysqli, $_POST['specification']);
$shortdescription = mysqli_real_escape_string($mysqli, $_POST['shortdescription']);
$longdescription = mysqli_real_escape_string($mysqli, $_POST['longdescription']);
$variation = mysqli_real_escape_string($mysqli, $_POST['variation']);
$price = mysqli_real_escape_string($mysqli, $_POST['price']);
$category = mysqli_real_escape_string($mysqli, $_POST['category']);
$weight = mysqli_real_escape_string($mysqli, $_POST['weight']);
$availability = mysqli_real_escape_string($mysqli, $_POST['availability']);
$image = mysqli_real_escape_string($mysqli, $_POST['image']);



$result = mysqli_query($mysqli, "UPDATE productdetails SET `name`='$name', `specificaton`='$specification',`shortdescription`='$shortdescription',`longdescription`='$longdescription',`variation`='$variation',`price`='$price',`category`='$category',`weight`='$weight',`availability`='$availability' WHERE `id`=$id");
