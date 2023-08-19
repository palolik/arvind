<?php
    require_once("../database.php");
    if(isset($_POST['update'])){
        $id = mysqli_real_escape_string($mysqli, $_POST['id']);
        $user_name = mysqli_real_escape_string($mysqli, $_POST['user_name']);
        $password = mysqli_real_escape_string($mysqli, $_POST['password']);

        $result = mysqli_query($mysqli, "UPDATE adminup SET `user_name`='$user_name',`password`='$password', WHERE `id`=$id");

        echo "<a href='adminlist.php'> View Table </a>";

    }

?>