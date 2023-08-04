<?php
    require_once("../ecom.php");

    $id = $_GET['id'];
    $result = mysqli_query($mysqli, "DELETE FROM sellersignup WHERE id=$id");

    header("location:show.php");
?>