<?php
session_start(); 
include '../db.php';

$conn = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);

if (!$conn) {
	echo "Connection failed!";
}

$user_name=$_SESSION['user_name'];
        
$id	=$_SESSION['id']; 


?>


<html>
    <head>
        <title>Buyer Sign up</title>
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
require_once("buyersignup.php");
$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);

$id = $_GET['id'];
 $result = mysqli_query($mysqli, "SELECT * FROM buyersignup WHERE id=$id");

 $resultData = mysqli_fetch_assoc($result);

        $name = $resultData['name'];
        $mobileno = $resultData['mobileno'];
        $emailaddress = $resultData['emailaddress'];
        $password = $resultData['password'];
        $confirmpassword = $resultData['confirmpassword'];
        $user_name = $resultData['user_name'];


?>

<html>
    <head>
        <body>
        <form method="POST" name="edit" action="editsignup.php">

<lable >Name:</lable>
<input type="text" name="name" value="<?php echo $name; ?>" >

<br>
<br>
<lebel>Mobile no:</lebel>
<input type ="text" name="mobileno" value="<?php echo $mobileno; ?>" >
<br>
<br>
<br>
<lebel>E-mail Address:</lebel>
<input type="text" name="emailaddress" value="<?php echo $emailaddress; ?>" >
<br>
<br>
<br>
<lebel>Password</lebel>
<input type="text" name="password" value="<?php echo $password; ?>" >
<br>
<br>
<br>
<lebel>Confirm Password</lebel>
<input type="text" name="confirmpassword" value="<?php echo $confirmpassword; ?>" >
<br>
<br>
<br>
<lebel>User Name</lebel>
<input type="text" name="user_name" value="<?php echo $user_name; ?>" >
<br>
<br>
<br>
<input type="hidden" name="id" value="<?php echo $id; ?>">
<input type="submit" name="update" value="update">




</form>
        </body>
    </head>
</html>