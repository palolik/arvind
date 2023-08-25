<?php 
require_once("../../database.php");

$id = $_GET['id'];
$result = mysqli_query($mysqli, "DELETE FROM productdetails WHERE id=$id");

header("location:./productlist.php");
?>


