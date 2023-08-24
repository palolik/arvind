<?php
session_start(); 
include '../database.php';



?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/styl21.css">
    <link rel="stylesheet" href="../css/mobb12.css">


    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buyer Signup</title>
</head>

<?php
    $showAlert = false;
    $showError = false;
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

        if(($password == $confirmpassword) && $exists==false)
        {
            $result = mysqli_query($mysqli, "INSERT INTO buyersignup (`name`, `mobileno`, `emailaddress`, `password`, `confirmpassword`, `user_name`, `district`, `subdistrict`, `address`)VALUES('$name', '$mobileno', '$emailaddress', '$password', '$confirmpassword', '$user_name', '$district', '$subdistrict','$address')");
            $sql2 = mysqli_query($mysqli, $result);

            if($sql2){
                $showAlert = "Your account created successfully & you can login.";
            }
        }
        else{
            $showError = "Passswords do not match";
        }

       

        header("location:loginindex.php");


    }

?>


<body>
<div class="header">
  <div class="iconmain"> <img src="../image/website/log.png" style="width:150px"></div>
  <div class="topnav">
  <a  href="../index.php">Home</a>
  <a class="active" href="loginindex.php">Sign in</a>
</div>

</div>



    <?php
        if($showAlert){
            echo '<div class="alert"><strong>Success!<strong>' . $showAlert . '</div>';
        }

        if($showError){
            echo '<div class="alert"><strong>Error!<strong>' . $showError .' </div>';
        }


    ?>
    <div class="containerin">
<form method="POST" name="add">
<div class="fits">
        <lable class="lal" >Name:</lable>
        <input class="lals" type="text" name="name" placeholder="Name">
    </div> 
<div class="fits">
        <lebel class="lal">Mobile no:</lebel>
        <input class="lals" type ="text" name="mobileno" placeholder="Enter your mobile no" required>
    </div> 
<div class="fits">
        <lebel class="lal">E-mail Address:</lebel>
        <input class="lals" type="email" name="emailaddress" placeholder="Enter your email address" required>
    </div>
<div class="fits">
        <lebel class="lal">District</lebel>
        <select class="lals" id="district" name="district">
  <?php
    // connect to database

    // query for cars
    $result = mysqli_query($conn, "SELECT * FROM districts");

    // loop through results and create option for each car
    while ($row = mysqli_fetch_assoc($result)) {
      echo '<option value="' . $row["names"] . '">' . $row["names"] . '</option>';
    }

    // close database connection
    mysqli_close($conn);
  ?>
        </select> 
    </div> 
<div class="fits">
        <lebel class="lal">Region</lebel>
        <input class="lals" type="text"  name="subdistrict" placeholder="Enter your Address" required> 

    </div> 
<div class="fits">
        <lebel class="lal">Address</lebel>
        <input class="lals" type="text" name="address" placeholder="Enter your Address" required> 
    </div> 
<div class="fits">
        <lebel class="lal">Password</lebel>
        <input class="lals" type="password" name="password" placeholder="Enter your password" required>
    </div> 
<div class="fits">
        <lebel class="lal">Confirm Password</lebel>
        <input class="lals" type="password" name="confirmpassword" placeholder="Enter your password" required> 
    </div> 
<div class="fits">
        <lebel class="lal">User Name</lebel>
        <input class="lals" type="text" name="user_name" placeholder="Enter your User name" required> 
    </div>  
        <input  class="but" type="submit" name="submit" value="Sign Up">
</form>
    </div>
</body>

<?php 
include '../footter2.php' 
?>

</html>