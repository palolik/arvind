<?php 
include '../database.php';
if(isset($_POST['submit'])){
    $name = mysqli_real_escape_string($mysqli, $_POST['name']);
    $mobileno = mysqli_real_escape_string($mysqli, $_POST['mobileno']);
    $emailaddress = mysqli_real_escape_string($mysqli, $_POST['emailaddress']);
    $password = mysqli_real_escape_string($mysqli, $_POST['password']);
    $confirmpassword = mysqli_real_escape_string($mysqli, $_POST['confirmpassword']);
    $user_name = mysqli_real_escape_string($mysqli, $_POST['user_name']);
    $district = mysqli_real_escape_string($mysqli, $_POST['district']);
    $subdistrict = mysqli_real_escape_string($mysqli, $_POST['subdistrict']);
    $address = mysqli_real_escape_string($mysqli, $_POST['address']);
    $exists = false;

   
        $result = mysqli_query($mysqli, "INSERT INTO buyersignup (`name`, `mobileno`, `emailaddress`, `password`, `confirmpassword`, `user_name`, `district`, `subdistrict`, `address`)VALUES('$name', '$mobileno', '$emailaddress', '$password', '$confirmpassword', '$user_name', '$district', '$subdistrict','$address')");
        $sql2 = mysqli_query($mysqli, $result);

 

   

    header("location:loginindex.php");


}

?>

<form>
    <label>Review</label>
    <input name="orderid">
    <label>Rating</label>
    <input>
    <label>time</label>
    <input>
</form>