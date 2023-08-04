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
        <title>Seller Information Editing</title>
    </head>

    <body>


    <!-- <?php

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
?> -->

    </body>
</html>






<?php
require_once("ecom.php");

$id = $_GET['id'];
    $result = mysqli_query($mysqli, "SELECT * FROM sellersignup WHERE id=$id");

    $resultData = mysqli_fetch_assoc($result);

    $name = $resultData['name'];
    $mobileno = $resultData['mobileno'];
    $emailaddress = $resultData['emailaddress'];
    $sellerphoto = $resultData['sellerphoto'];
    $logo = $resultData['logo'];
    $selleraddress = $resultData['selleraddress'];
    $businessname = $resultData['businessname'];
    $nid = $resultData['nid'];
    $password = $resultData['password'];
    $confirmpassword = $resultData['confirmpassword'];
    $user_name = $resultData['user_name'];
?>

<html>
    <head>
    <link rel="stylesheet" type="text/css" href="../css/styl3.css">
    </head>
        <body>

                <h2 align="center">Update Information</h2>

        <form  method="POST" name="edit" action="editsignup.php" enctype="multipart/form-date">

        <div class="fits">
     	<label class="lal">Name:</lable>

    <input type="text" name="name" value="<?php echo $name; ?>">
        <br>
        <br>
     <div class="fits">
     	<label class="lal">Mobile no:</label>
    <input type ="text" name="mobileno" value="<?php echo $mobileno; ?>">
</div>   
     <div class="fits">
     	<label class="lal">E-mail Address:</label>
    <input type="text" name="emailaddress" value="<?php echo $emailaddress; ?>">
</div>
     <div class="fits">
     	<label class="lal" for="image_upload">Seller Photo:</label>
    <input type ="file" name="sellerphoto" value="<?php echo $sellerphoto; ?>">
</div>
     <div class="fits">
     	<label class="lal" for="image_upload">Logo:</label>
    <input type="file" name="logo" value="<?php echo $logo; ?>">
</div>
     <div class="fits">
     	<label class="lal">Seller Address</label>
    <input type="text" name="selleraddress" value="<?php echo $selleraddress; ?>">
</div>
     <div class="fits">
     	<label class="lal">Business Name</label>
    <input type="text " name="businessname" value="<?php echo $businessname; ?>">
</div>
     <div class="fits">
     	<label class="lal">NID</label>
    <input type="text" name="nid" value="<?php echo $nid ; ?>">
        <br>
        <br>
     <div class="fits">
     	<label class="lal">Password</label>
    <input type="text" name="password" value="<?php echo $password; ?>">
</div>
     <div class="fits">
     	<label class="lal">Confirm Password</label>
    <input type="text" name="confirmpassword" value="<?php echo $confirmpassword; ?>"> 
</div>
     <div class="fits">
     	<label class="lal">User Name</label>
    <input type="text" name="user_name" value="<?php echo $user_name; ?>"> 
</div>
<input type="hidden" name="id" value="<?php echo $id; ?>">
<input class="but" type="submit" name="update" value="update">

</form>
        </body>
    
</html>