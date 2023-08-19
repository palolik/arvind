<?php
session_start(); 
include '../database.php';
    
    $conn = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);

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
    require_once("index.php");
    if(isset($_POST['update']))
    {
        echo "<a href='show.php'>View Table</a>";

        $id = $_POST['id'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $mobileno = $_POST['mobileno'];
        $presentaddress = $_POST['presentaddress'];
        $permanentaddress = $_POST['permanentaddress'];
        $institutionname = $_POST['institutionname'];
        $department = $_POST['department'];
        $bkash = $_POST['bkash'];
        
        $password = $_POST['password'];
        $confirmpassword = $_POST['confirmpassword'];
        $user_name = $_POST['user_name'];
        
    
        $nid = $_FILES['image']['name'];
        $photo = $_FILES['image']['name'];

        $result = mysqli_query($mysqli, "UPDATE affiliate (`name`, `email`, `mobileno`, `presentaddress`, `permanentaddress`, `institutionname`, `department`, `bkash`, `nid`, `password`, `confirmpassword`, `user_name`, `photo`)VALUES('$name', '$email', '$mobileno', '$presentaddress', '$permanentaddress', '$institutionname', '$department', '$bkash', '$nid', '$password', '$confirmpassword', '$user_name', '$photo')");

        
    }
?>