<?php
    require_once("ecom.php");

    $id = $_GET['id'];
    $result = mysqli_query($mysqli, "DELETE FROM adminup WHERE id=$id");

    header("location:adminlist.php");
?>