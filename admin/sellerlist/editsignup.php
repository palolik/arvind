<?php
session_start(); 
include '../../database.php';

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
    require_once("../../database.php");
    if(isset($_POST['update']))
    {
        echo "<a href='show.php'>View Table</a>";

    $name = $_POST['name'];
    $mobileno = $_POST['mobileno'];
    $emailaddress = $_POST['emailaddress'];
    $sellerphoto = $_POST['sellerphoto'];
    $logo = $_POST['logo'];
    $selleraddress = $_POST['selleraddress'];
    $businessname = $_POST['businessname'];
    $nid = $_POST['nid'];
    $password = $_POST['password'];
    $confirmpassword = $_POST['confirmpassword'];
    $user_name = $_POST['user_name'];

        $result = mysqli_query($mysqli, "UPDATE sellersignup (`name`, `mobileno`, `emailaddress`, `sellerphoto`,`logo` `selleraddress`, `businessname`, `nid`, `password`, `confirmpassword`, `user_name`)VALUES('$name', '$mobileno', '$emailaddress', '$sellerphoto', $logo''$selleraddress', '$businessname', '$nid', '$password', '$confirmpassword', '$user_name')");

        
    }
?>