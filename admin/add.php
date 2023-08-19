<!DOCTYPE html>
<html>

<?php
    require_once("../database.php");
    if(isset($_POST['submit'])){
        
        $user_name = mysqli_real_escape_string($mysqli, $_POST['user_name']);
        $password = mysqli_real_escape_string($mysqli, $_POST['password']);

        $result = mysqli_query($mysqli, "INSERT INTO adminup (`user_name`, `password`)VALUES(  '$user_name' , '$password')");

        echo "<a href='adminlist.php'> View Table </a>";

    }

?>

<head>
    <title>Document</title>
</head>
<body>
<form  method="POST" name="add">

    
    <lebel>User Name</lebel>
    <input type="text" name="user_name" placeholder="Enter your User Name"> 
        <br>
        <br>
        <br>
    <lebel>Password</lebel>
    <input type="text" name="password" placeholder="Enter your password">
        <br>
        <br>
        <br>
    <input type="submit" name="submit" value="add">




</form>
</body>





</html>