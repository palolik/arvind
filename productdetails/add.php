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
        <title>Product List</title>
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





<!DOCTYPE html>
<html>

<?php
    require_once("../database.php");
    if(isset($_POST['submit'])){
    $name = mysqli_real_escape_string($mysqli, $_POST['name']);
    $specification = mysqli_real_escape_string($mysqli, $_POST['specification']);
    $shortdescription = mysqli_real_escape_string($mysqli, $_POST['shortdescription']);
    $longdescription = mysqli_real_escape_string($mysqli, $_POST['longdescription']);
    $variation = mysqli_real_escape_string($mysqli, $_POST['variation']);
    $price = mysqli_real_escape_string($mysqli, $_POST['price']);
    $category = mysqli_real_escape_string($mysqli, $_POST['category']);
    $weight = mysqli_real_escape_string($mysqli, $_POST['weight']);
    $availability = mysqli_real_escape_string($mysqli, $_POST['availability']);
    
    $image = $_FILES['image']['name'];
    $target = "../image/".basename($_FILES['image']['name']);

    $result = mysqli_query($mysqli,"INSERT INTO productdetails (`name`, `specification`, `shortdescription`, `longdescription`, `variation`, `price`, `category`, `weight`, `availability`, `image`)VALUES('$name', '$specification', '$shortdescription', '$longdescription', '$variation', '$price', '$category', '$weight', '$availability', '$image')");

    

    echo "<a href='index.php'> View Table </a>";
    }
?>
<head>
    <title>Document</title>
</head>
<body>
<form method="POST" name="add">

<label>Name:</label>
<input type="text" name="name" placeholder="Name">
<br>
<br>
<br>
<label>Specification:</label>
<input type="text" name="specification" placeholder="Specification">
<br>
<br>
<br>
<label>Short description:</label>
<input type="text" name="shortdescription" placeholder="Short description">
<br>
<br>
<br>
<label>Long description:</label>
<input type="text" name="longdescription" placeholder="Long description">
<br>
<br>
<br>
<label>Variation:</label>
<input type="text" name="variation" placeholder="Variation">
<br>
<br>
<br>
<label>Price:</label>
<input type="text" name="price" placeholder="Price">
<br>
<br>
<br>
<label>Category:</label>
<input type="text" name="category" placeholder="Category">
<br>
<br>
<br>
<label>Weight:</label>
<input type="text" name="weight" placeholder="Weight">
<br>
<br>
<br>
<label>Availability:</label>
<input type="text" name="availability" placeholder="Availability">
<br>
<br>
<br>
<label for="image_upload"><h2>Select Image</h2></label>
<input type="file" name="image" id="image">
<br>
<br>
<br>
<input type="submit" name="submit" value="add">

</form>
</body>
</html>