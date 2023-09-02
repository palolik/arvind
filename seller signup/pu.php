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

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <link rel="stylesheet" href="../css/styl3.css">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
</head>
<div class="header">
  <div class="iconmain"> <img src="../image/website/log copy.png" style="width:150px"></div>
  <div class="topnav">
            <a  href="home.php">Home</a> 
            <a href="Product List.php">Product List</a>   
            <a  class="active" href="productuploader.php">Product Uploader</a>
            <a href="Pending Order.php">Pending Order</a>
            <a href="Statistics.php">Statistics</a>
            <a href="logout.php"> <input type="submit" name="" value="Logout"></a>
</div>
  <div >

</div>
  
</div>
<body>
    <h1>Please select an image to Upload</h1>
<form action="pu.php" method="post" enctype = "multipart/form-data">


<label>Name:</label>
<input type="text" name="name" placeholder="Name">
<label>Quantity:</label>
<input type="text" name="quantity" placeholder="quantity">
<input type="text" name="sellerid" value=" <?php echo $id ?> ">


<label>Specification:</label>
<input type="text" name="specification" placeholder="Specification">

<label>Short description:</label>
<input type="text" name="shortdescription" placeholder="Short description">

<label>Long description:</label>
<input type="text" name="longdescription" placeholder="Long description">

<label>Variation:</label>
<input type="text" name="variation" placeholder="Variation">

<label>Price:</label>
<input type="text" name="price" placeholder="Price">

<label>Category:</label>
<input type="text" name="category" placeholder="Category">
<label>SubCategory:</label>
<input type="text" name="subcategory" placeholder="Category">

<label>Weight:</label>
<input type="text" name="weight" placeholder="Weight">

<label>Availability:</label>
<input type="text" name="availability" placeholder="Availability">

<label for="image_upload"><h2>Select Image</h2></label>
<input type="file" name="image" id="image">
<label for="image_upload"><h2>Select Image2</h2></label>
<input type="file" name="image2" id="image2">
<label for="image_upload"><h2>Select Image3</h2></label>
<input type="file" name="image3" id="image3">
<label for="image_upload"><h2>Select Image4</h2></label>
<input type="file" name="image4" id="image4">
<label for="image_upload"><h2>Select Image5</h2></label>
<input type="file" name="image5" id="image5">
<label for="image_upload"><h2>Select Image6</h2></label>
<input type="file" name="image6" id="image6">

<input type="submit" value="submit" name = "submit">
</form>












<?php

include '../database.php';

$conn = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);


if(isset($_POST['submit']))
{

   
    $image = $_FILES['image']['name'];
    $target = "../image/ d /".basename($_FILES['image']['name']);
    $image2 = $_FILES['image2']['name'];
    $target2 = "../image/d/".basename($_FILES['image2']['name']);  
    $image3 = $_FILES['image3']['name'];
    $target3 = "../image/d/".basename($_FILES['image3']['name']);
    $image4 = $_FILES['image4']['name'];
    $target4 = "../image/d/".basename($_FILES['image4']['name']); 
    $image5 = $_FILES['image5']['name'];
    $target5 = "../image/d/".basename($_FILES['image5']['name']);
    $image6 = $_FILES['image6']['name'];
    $target6 = "../image/d/".basename($_FILES['image6']['name']);
    
if( $conn)
    {
        echo "Connected Successfully";
    }
else
    {
        echo "There was an error while connecting to database".mysqli_connect_error($conn);
    }

if($conn)
{
    
    $name = $_POST['name'];
    $quantity = $_POST['quantity'];
    $sellerid = $_POST['sellerid'];
    $specification = $_POST['specification'];
    $shortdescription = $_POST['shortdescription'];
    $longdescription = $_POST['longdescription'];
    $variation = $_POST['variation'];
    $price = $_POST['price'];
    $category = $_POST['category'];
    $subcategory = $_POST['subcategory'];
    $weight = $_POST['weight'];
    $availability = $_POST['availability'];
    $image = $_FILES['image']['name'];
    $image2 = $_FILES['image2']['name'];
    $image3 = $_FILES['image3']['name'];
    $image4 = $_FILES['image4']['name'];
    $image5 = $_FILES['image5']['name'];
    $image6 = $_FILES['image6']['name'];



    
    $sql = "INSERT INTO productdetails (`name`,`quantity`,`sellerid`, `specification`, `shortdescription`, `longdescription`, `variation`, `price`, `category`, `subcategory`, `weight`, `availability`, `image`,`image2`,`image3`,`image4`,`image5`,`image6`)VALUES('$name','$quantity','$sellerid' , '$specification', '$shortdescription', '$longdescription', '$variation', '$price', '$category', '$subcategory', '$weight', '$availability', '$image', '$image2', '$image3', '$image4', '$image5', '$image6')";
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
    if(move_uploaded_file($_FILES['image'] ['tmp_name'], $target) &&
    move_uploaded_file($_FILES['image2'] ['tmp_name'], $target2) &&
    move_uploaded_file($_FILES['image3'] ['tmp_name'], $target3) &&
    move_uploaded_file($_FILES['image4'] ['tmp_name'], $target4) &&
    move_uploaded_file($_FILES['image5'] ['tmp_name'], $target5) &&
    move_uploaded_file($_FILES['image6'] ['tmp_name'], $target6)
    )
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