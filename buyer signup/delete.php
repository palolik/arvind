<?php
 require_once("../db.php");
 $mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);

 $id = $_GET['id'];
 $result = mysqli_query($mysqli, "DELETE FROM buyersignup WHERE id=$id");

 header("location:buyerlist.php");
?>