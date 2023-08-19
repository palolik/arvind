<?php
    require_once("../database.php");

    $id = $_GET['id'];
    $result = mysqli_query($mysqli, "DELETE FROM affiliate WHERE id=$id");

    header("location:show.php");
?>