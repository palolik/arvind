<?php
session_start(); 
include '../database.php';

$conn = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);

if (!$conn) {
	echo "Connection failed!";
}

// $user_name=$_SESSION['user_name'];
        
// $id	=$_SESSION['id']; 


?>





 <html>
    <head>
        <title>Seller Sign up</title>
        <link rel="stylesheet" type="text/css" href="../css/styl21.css">
    </head>

    <body>


    <!-- <?php 

$sql = "SELECT * FROM adminup ";

$sql = "SELECT * FROM adminup WHERE user_name='$user_name' AND id='$id'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {

// while($row = $result->fetch_assoc()) {
//     echo "<p>cloud id :". $row["id"] . $row["user_name"]."</p>";
// }

} else {
echo "0 results";
}
?> -->

    </body>
</html> 





<!DOCTYPE html>
<html>



<head>
    <title>Seller SignUp</title>
</head>
<body>
<div class="containerin">    
<h2 >Seller Sign Up Form</h2>

<form  method="POST" name="add" enctype="multipart/form-data">

<div class="fits">
     	<label class="lal">Name:</lable>
        <input type="text" name="name" placeholder="first name">
</div>
     <div class="fits">
     	<label class="lal">Mobile no:</label>
    <input type ="text" name="mobileno" placeholder="enter your mobile no">
</div>   
     <div class="fits">
     	<label class="lal">E-mail Address:</label>
    <input type="text" name="emailaddress" placeholder="Enter your email address">
</div>
     <div class="fits">
     	<label class="lal" for="image_upload">Seller Photo:</label>
    <input type ="file" name="sellerphoto" placeholder="upload your image">
</div>
     <div class="fits">
     	<label class="lal" for="image_upload">Logo:</label>
    <input type="file" name="logo" placeholder="upload your logo ">
</div>
     <div class="fits">
     	<label class="lal">Seller Address</label>
    <input type="text" name="selleraddress" placeholder="Enter your address">
</div>
     <div class="fits">
     	<label class="lal">Business Name</label>
    <input type="text" name="businessname" placeholder="Input your businessname">
</div>
     <div class="fits">
     	<label class="lal" for="image_upload">NID</label>
    <input type="file" name="nid[]" multiple >
</div>
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
    <input class="but" type="submit" name="submit" value="add">




</form>
</div>





<!-- 
<?php
    require_once("../database.php");
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

?> -->








<?php

include '../database.php';

$conn = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);


if(isset($_POST['submit']))
{

   
    $selleraddress = $_FILES['sellerphoto']['name'];
    $target1 = "../image/seller_photo/".basename($_FILES['sellerphoto']['name']);
    $logo = $_FILES['logo']['name'];
    $target = "../image/seller_photo/".basename($_FILES['logo']['name']);
    $nid = $_FILES['nid']['name'];
    $target2 = "../image/seller_photo/";
    $image_name = implode(",", $nid);

    if(!empty($nid)){

        foreach($nid as $key => $val){

            $targetPath = $target2 .$val;

            move_uploaded_file($_FILES["nid"]["tmp_name"][$key],$targetPath);

        }
    }
    

if($conn)
{
    
    $name = $_POST['name'];
    $mobileno = $_POST['mobileno'];
    $emailaddress = $_POST['emailaddress'];
    $selleraddress = $_POST['selleraddress'];
    $businessname = $_POST['businessname'];
    $password = $_POST['password'];
    $confirmpassword = $_POST['confirmpassword'];
    $user_name = $_POST['user_name'];
    $sellerphoto = $_FILES['sellerphoto']['name'];
    $logo = $_FILES['logo']['name'];
    $nid = $_FILES['nid']['name'];
    
    $sql = "INSERT INTO sellersignup (`name`, `mobileno`, `emailaddress`, `selleraddress`, `businessname`, `nid`, `password`, `confirmpassword`, `user_name`, `sellerphoto`, `logo`)VALUES('$name', '$mobileno', '$emailaddress', '$selleraddress', '$businessname', '$image_name', '$password', '$confirmpassword', '$user_name', '$sellerphoto', '$logo')";
    $result = mysqli_query($conn, $sql);
    if($result)
    {
        echo "Query Fired successfully";
        echo "<br>";
    }
    else
    {
        echo "There was an error while executing the query". mysqli_error($conn);
        echo "<br>";
    }





    if(move_uploaded_file($_FILES['sellerphoto'] ['tmp_name'], $target1))
    {
        $msg = "File uploaded successfully.";
    }
    else
    {
        $msg = "There was an error while uploading the files.".mysqli_error($conn);
    }
    echo $msg;







    if(move_uploaded_file($_FILES['logo'] ['tmp_name'], $target))
    {
        $msg = "File uploaded successfully.";
    }
    else
    {
        $msg = "There was an error while uploading the files.".mysqli_error($conn);
    }
    echo $msg;






    
}
}



?>




</body>





</html>