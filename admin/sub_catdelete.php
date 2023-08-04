<?php
    require_once("ecom.php");

    $id = $_GET['id'];
    $result = mysqli_query($mysqli, "DELETE FROM category WHERE id=$id");

    header("location:sub_category.php");
?>