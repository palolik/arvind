<?php
 require_once("../ecom.php");

 $id = $_GET['id'];
 $result = mysqli_query($mysqli, "DELETE FROM buyersignup WHERE id=$id");

 header("location:buyerlist.php");
?>