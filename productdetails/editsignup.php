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
        <title>Product List</title>
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
require_once("../database.php");
if(isset($_POST['update']))
{

    $name = $_POST['name'];
    $specification = $_POST['specification'];
    $shortdescription = $_POST['shortdescription'];
    $longdescription = $_POST['longdescription'];
    $variation = $_POST['variation'];
    $price = $_POST['price'];
    $category = $_POST['category'];
    $weight = $_POST['weight'];
    $availability = $_POST['availability'];

$result = mysqli_query($mysqli, "UPDATE productdetails (`name`, `specification`, `shortdescription`, `longdescription`, `variation`, `price`, `category`, `weight`, `availability`)VALUES('$name', '$specification', '$shortdescription', '$longdescription', '$variation', '$price', '$category', '$weight', '$availability')");

    echo "<a href='./product_image_upload/show.php'>View Table</a>";
}
?>