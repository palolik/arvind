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

$id = $_GET['id'];
$result = mysqli_query($mysqli, "SELECT * FROM productdetails WHERE id=$id");

$resultData= mysqli_fetch_assoc($result);

$name =$resultData['name'];
$specification =$resultData['specification'];
$shortdescription =$resultData['shortdescription'];
$longdescription =$resultData['longdescription'];
$variation =$resultData['variation'];
$price =$resultData['price'];
$category =$resultData['category'];
$weight =$resultData['weight'];
$availability =$resultData['availability'];
$image =$resultData['image'];
?>
<html>
    <head>
        <body>
            <form method="POST" name="edit" action="editsignup.php">
<label>Name:</label>
<input type="text" name="name" value="<?php echo $name; ?>">
<br>
<br>
<br>
<label>Specification:</label>
<input type="text" name="specification" value="<?php echo $specification; ?>">
<br>
<br>
<br>
<label>Short description:</label>
<input type="text" name="shortdescription" value="<?php echo $shortdescription; ?>">
<br>
<br>
<br>
<label>Long description:</label>
<input type="text" name="longdescription"  value="<?php echo $longdescription; ?>">
<br>
<br>
<br>
<label>Variation:</label>
<input type="text" name="variation"  value="<?php echo $variation; ?>">
<br>
<br>
<br>
<label>Price:</label>
<input type="text" name="price"  value="<?php echo $price; ?>">
<br>
<br>
<br>
<label>Category:</label>
<input type="text" name="category"  value="<?php echo $category; ?>">
<br>
<br>
<br>
<label>Weight:</label>
<input type="text" name="weight"  value="<?php echo $weight; ?>">
<br>
<br>
<br>
<label>Availability:</label>
<input type="text" name="availability"  value="<?php echo $availability; ?>">
<br>
<br>
<br>
<label for="image_upload"><h2>Select Image</h2></label>
<input type="file" name="image" id="image">
<br>
<br>
<br>
<input type="submit" name="update" value="update">

            </form>
        </body>
    </head>
</html>