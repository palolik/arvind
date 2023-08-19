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






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product List</title>
</head>
<body>

<?php

// $sql = "SELECT * FROM adminup ";

// $sql = "SELECT * FROM adminup WHERE user_name='$user_name' AND id='$id'";
// $result = $conn->query($sql);

// if ($result->num_rows > 0) {

// while($row = $result->fetch_assoc()) {
//     echo "<p>cloud id :". $row["id"] . $row["user_name"]."</p>";
// }

// } else {
// echo "0 results";
// }
?>




    <center>
        <h2>Uploaded images</h2>
        <a href="index.php">Upload</a>

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
    </center>
    <?php
   include '../../database.php';

   $conn = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);
   
    if($conn){
        printf("Connected successfully.");
        $sql = "SELECT * FROM productdetails";
        $result = mysqli_query($conn, $sql);
        while($row = mysqli_fetch_array($result))
        {
            echo "<tr>";
            echo "<td>".$row['id']."</td>";
            echo "<td>".$row['name']."</td>";
            echo "<td>".$row['specification']."</td>";
            echo "<td>".$row['shortdescription']."</td>";
            echo "<td>".$row['longdescription']."</td>";
            echo "<td>".$row['variation']."</td>";
            echo "<td>".$row['price']."</td>";
            echo "<td>".$row['category']."</td>";
            echo "<td>".$row['weight']."</td>";
            echo "<td>".$row['availability']."</td>";
            echo "<td><a target = _blank><img style='height:150px;width:250px;' src = '../.././image/".$row['image']."'. alt='There is no image to show'></a></td>";
            echo "<td><a href=\"../delete.php?id=$row[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";
            echo "<td><a href=\"../edit.php?id=$row[id]\">Edit</a></td>";
            echo "</tr>";
            
        }
    }
    else{
        print("There was an error while connecting to database.");  
    }

    ?>

</table>
</body>
</html>