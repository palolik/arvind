<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Images</title>
</head>
<body>
<center>
    <h1>Please select an image to Upload</h1>
<form action="index.php" method="post" enctype = "multipart/form-data">


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
<input type="submit" value="submit" name = "submit">
</center>
</form>












<?php

$conn = mysqli_connect("localhost", "root", "", "ecom");


if(isset($_POST['submit']))
{

   
    $image = $_FILES['image']['name'];
    $target = "../../image/".basename($_FILES['image']['name']);
    
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
    $specification = $_POST['specification'];
    $shortdescription = $_POST['shortdescription'];
    $longdescription = $_POST['longdescription'];
    $variation = $_POST['variation'];
    $price = $_POST['price'];
    $category = $_POST['category'];
    $weight = $_POST['weight'];
    $availability = $_POST['availability'];


    $image = $_FILES['image']['name'];
    
    $sql = "INSERT INTO productdetails (`name`, `specification`, `shortdescription`, `longdescription`, `variation`, `price`, `category`, `weight`, `availability`, `image`)VALUES('$name', '$specification', '$shortdescription', '$longdescription', '$variation', '$price', '$category', '$weight', '$availability', '$image')";
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
    if(move_uploaded_file($_FILES['image'] ['tmp_name'], $target))
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


<a href="show.php" style="color: black; font-size: larger; text-decoration: none; border: 2px solid black;">Show Products</a>
















</body>
</html>