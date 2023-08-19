<?php
    require_once("../database.php");

    $id = $_GET['id'];
    $result = mysqli_query($mysqli, "DELETE FROM category WHERE id=$id");

    header("location:category.php");
?>