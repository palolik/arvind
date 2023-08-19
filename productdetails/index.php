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

$result = mysqli_query($mysqli, "SELECT * FROM productdetails ORDER BY id DESC");

?>

<html>
    <head>
    <link rel="stylesheet" href="sty.css">
  <title>Product Details</title>
    </head>

    <body>


    <a href="add.php">form</a>
    <table>
        <tr>
            <td>ID</td>
            <td>Name</td>
            <td>Specification</td>
            <td>Short description</td>
            <td>Long description</td>
            <td>Variation</td>
            <td>Price</td>
            <td>Category</td>
            <td>Weight</td>
            <td>Availability</td>
            <td>Image</td>
        </tr>

        <?php
        while($res = mysqli_fetch_assoc($result))
        {
            echo "<tr>";
            echo "<td>".$res['id']."</td>";
            echo "<td>".$res['name']."</td>";
            echo "<td>".$res['specification']."</td>";
            echo "<td>".$res['shortdescription']."</td>";
            echo "<td>".$res['longdescription']."</td>";
            echo "<td>".$res['variation']."</td>";
            echo "<td>".$res['price']."</td>";
            echo "<td>".$res['category']."</td>";
            echo "<td>".$res['weight']."</td>";
            echo "<td>".$res['availability']."</td>";
            echo "<td><a target = _blank><img style='height:150px;width:250px;' src = 'product_image_upload/images/".$res['image']."'. alt='There is no image to show'></a></td>";
            echo "<td><a href=\"delete.php?id=$res[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";
            echo "<td><a href=\"edit.php?id=$res[id]\">Edit</a></td>";
            echo "</tr>";
        }
        ?>
    </table>
    </body>

</html>