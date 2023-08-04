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

$user_name=$_SESSION['user_name'];
        
$id	=$_SESSION['id']; 


?>






<html>
    <head>
        <title>Seller Sign up</title>
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






<?php
require_once("dbconnection.php");


$id = $_GET['id'];
    $result = mysqli_query($mysqli, "SELECT * FROM affiliate WHERE id=$id");

    $resultData = mysqli_fetch_assoc($result);

    $id = $resultData['id'];
    $name = $resultData['name'];
    $email = $resultData['email'];
    $mobileno = $resultData['mobileno'];
    $presentaddress = $resultData['presentaddress'];
    $permanentaddress = $resultData['permanentaddress'];
    $institutionname = $resultData['institutionname'];
    $department = $resultData['department'];
    $bkash = $resultData['bkash'];
    
    $password = $resultData['password'];
    $confirmpassword = $resultData['confirmpassword'];
    $user_name = $resultData['user_name'];
    

    
?>

<html>
    <head>
        <body>
<center>
        <form action="editsignup.php" method="post" enctype = "multipart/form-data">


<label>Name:</label>
<input type="text" name="name" placeholder="Name">
<br>
<br>
<br>
<label>E-mail:</label>
<input type="email" name="email" placeholder="email">
<br>
<br>
<br>
<label>Mobile no:</label>
<input type="text" name="mobileno" placeholder="Mobile no">
<br>
<br>
<br>
<label>Present Address:</label>
<input type="text" name="presentaddress" placeholder="Present Address">
<br>
<br>
<br>
<label>Permanent Address:</label>
<input type="text" name="permanentaddress" placeholder="Permanent Address">
<br>
<br>
<br>
<label>Institution Name:</label>
<input type="text" name="institutionname" placeholder="Institution Name">
<br>
<br>
<br>
<label>Department:</label>
<input type="text" name="department" placeholder="Department">
<br>
<br>
<br>
<label>Bkash/Nogod:</label>
<input type="text" name="bkash" placeholder="Bkash/Nogod">
<br>
<br>
<br>
<label>Password:</label>
<input type="text" name="password" placeholder="Password">
<br>
<br>
<br>
<label>Confirm Password:</label>
<input type="text" name="confirmpassword" placeholder="Confirm Password">
<br>
<br>
<br>
<label>User Name:</label>
<input type="text" name="user_name" placeholder="User Name">
<br>
<br>
<br>
<label for="image_upload"><h2>Select Image</h2></label>
<input type="file" name="image" id="image">
<br>
<br>
<br>
<label for="image_upload"><h2>Select NID</h2></label>
<input type="file" name="image" id="image">
<br>
<br>
<br>
<input type="submit" value="submit" name = "submit">
</center>
</form>
        </body>
    </head>
</html>