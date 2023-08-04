<?php
session_start(); 
$sname= "localhost";
$unmae= "root";
$password = "";

$db_name = "ecom";

$conn = mysqli_connect($sname, $unmae, $password, $db_name);

if (!$conn) {
	echo "Connection failed!";
}

// $user_name=$_SESSION['user_name'];
        
// $id	=$_SESSION['id']; 


?>





 <html>
    <head>
        <title>Seller Sign up</title>
        <link rel="stylesheet" type="text/css" href="../css/styl3.css">
    </head>

    <body>


    <?php

$sql = "SELECT * FROM adminup ";

$sql = "SELECT * FROM adminup WHERE user_name='$user_name' AND id='$id'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {

while($row = $result->fetch_assoc()) {
    echo "<p>cloud id :". $row["id"] . $row["user_name"]."</p>";
}

} else {
echo "0 results";
}
?>

    </body>
</html> 





<!DOCTYPE html>
<html>

<?php
    require_once("ecom.php");
    if(isset($_POST['submit'])){
        $name = mysqli_real_escape_string($mysqli, $_POST['name']);
        $mobileno = mysqli_real_escape_string($mysqli, $_POST['mobileno']);
        $emailaddress = mysqli_real_escape_string($mysqli, $_POST['emailaddress']);
        $sellerphoto = mysqli_real_escape_string($mysqli, $_POST['sellerphoto']);
        $logo = mysqli_real_escape_string($mysqli, $_POST['logo']);
        $selleraddress = mysqli_real_escape_string($mysqli, $_POST['selleraddress']);
        $businessname = mysqli_real_escape_string($mysqli, $_POST['businessname']);
        $nid = mysqli_real_escape_string($mysqli, $_POST['nid']);
        $password = mysqli_real_escape_string($mysqli, $_POST['password']);
        $confirmpassword = mysqli_real_escape_string($mysqli, $_POST['confirmpassword']);
        $user_name = mysqli_real_escape_string($mysqli, $_POST['user_name']);

        $result = mysqli_query($mysqli, "INSERT INTO sellersignup (`name`, `mobileno`, `emailaddress`, `sellerphoto`, `logo`, `selleraddress`, `businessname`, `nid`, `password`, `confirmpassword`, `user_name`)VALUES('$name', '$mobileno', '$emailaddress', '$sellerphoto', '$logo', '$selleraddress', '$businessname', '$nid', '$password', '$confirmpassword', '$user_name')");

        echo "<a href='sellerlist.php'> View Table </a>";

    }

?>

<head>
    <title>Seller SignUp</title>
</head>
<body>
<div class="containerin">    
<h2 >Seller Sign Up Form</h2>

<form  method="POST" name="add">

<div class="fits">
     	<label class="lal">Name:</lable>

    <input type="text" name="name" placeholder="first name">
        <br>
        <br>
     <div class="fits">
     	<label class="lal">Mobile no:</label>
    <input type ="text" name="mobileno" placeholder="enter your mobile no">
</div>   
     <div class="fits">
     	<label class="lal">E-mail Address:</label>
    <input type="text" name="emailaddress" placeholder="Enter your email address">
</div>
     <div class="fits">
     	<label class="lal">Seller Photo:</label>
    <input type ="text" name="sellerphoto" placeholder="upload your image">
</div>
     <div class="fits">
     	<label class="lal">Logo:</label>
    <input type="text" name="logo" placeholder="upload your logo ">
</div>
     <div class="fits">
     	<label class="lal">Seller Address</label>
    <input type="text" name="selleraddress" placeholder="Enter your address">
</div>
     <div class="fits">
     	<label class="lal">Business Name</label>
    <input type="text " name="businessname" placeholder="Input your name">
</div>
     <div class="fits">
     	<label class="lal">NID</label>
    <input type="text" name="nid" placeholder="input ypur nid no">
        <br>
        <br>
     <div class="fits">
     	<label class="lal">Password</label>
    <input type="text" name="password" placeholder="Enter your password">
</div>
     <div class="fits">
     	<label class="lal">Confirm Password</label>
    <input type="text" name="confirmpassword" placeholder="Enter your password"> 
</div>
     <div class="fits">
     	<label class="lal">User Name</label>
    <input type="text" name="user_name" placeholder="Enter your User Name"> 
</div>
    <input type="submit" name="submit" value="add">




</form>
</div>
</body>





</html>