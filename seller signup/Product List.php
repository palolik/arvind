<?php
session_start();
include '../database.php';

$conn = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);

if (!$conn) {
    echo "Connection failed!";
}

$user_name = $_SESSION['user_name'];

$id    = $_SESSION['id'];






?>

<?php

$sql = "SELECT * FROM sellersignup ";

$sql = "SELECT * FROM sellersignup WHERE user_name='$user_name' AND id='$id'";
$result = $conn->query($sql);
while ($row = $result->fetch_assoc()) {

?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="../css/styl16.css">

        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Homepage</title>
    </head>
    <div class="header">
        <div class="iconmain"> <img src="../image/website/log.png" style="width:150px"></div>
        <div class="topnav">
        <?php echo "<a>User:" . $row["user_name"].  $row["id"]."</a>"; }?>

        <a href="home.php">Home</a>
        <a class="active" href="Product List.php">Product List</a>
        <a href="productuploader.php">Product Uploader</a>
        <a href="Pending Order.php">Pending Order</a>
        <a href="Statistics.php">Statistics</a>
        <a href="logout.php"> <input type="submit" name="" value="Logout"></a>
        </div>
        <div>

        </div>

    </div>

    <body>

        <div class="divscroll">
            <table>
                <tr>
                    <th>ID</th>
                    <th>quantity</th>
                    <th>Hits</th>
                    <th>Name</th>
                    <th>Specification</th>
                    <th>Short description</th>
                    <th>Long description</th>
                    <th>Variation</th>
                    <th>Price</th>
                    <th>Category</th>
                    <th>Sub-Category</th>
                    <th>Weight</th>
                    <th>Availability</th>
                    <th>Image</th>
                    <th>Image2</th>
                    <th>Image3</th>
                    <th>Image4</th>
                    <th>Image5</th>
                    <th>Image6</th>

                    <th>Action</th>

                </tr>
                <?php
                    include '../database.php';

                    $conn = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);
                if ($conn) {
                    $sql = "SELECT * FROM productdetails WHERE sellerid='$id'";
                    $result = mysqli_query($conn, $sql);
                    while ($row = mysqli_fetch_array($result)) {
                        echo "<tr>";
                        echo "<td>" . $row['id'] . "</td>";
                        echo "<td>" . $row['quantity'] . "</td>";
                        echo "<td>" . $row['value'] . "</td>";
                        echo "<td>" . $row['name'] . "</td>";
                        echo "<td>" . $row['specification'] . "</td>";
                        echo "<td>" . $row['shortdescription'] . "</td>";
                        echo "<td>" . $row['longdescription'] . "</td>";
                        echo "<td>" . $row['variation'] . "</td>";
                        echo "<td>" . $row['price'] . "</td>";
                        echo "<td>" . $row['category'] . "</td>";
                        echo "<td>" . $row['subcategory'] . "</td>";
                        echo "<td>" . $row['weight'] . "</td>";
                        echo "<td>" . $row['availability'] . "</td>";
                        echo "<td><a target = _blank><img style='height:50px;width:50px;' src = '../image/products/". $row['folder_location'] ."/" . $row['image'] . "'. alt='There is no image to show'></a></td>";
                        echo "<td><a target = _blank><img style='height:50px;width:50px;' src = '../image/products/". $row['folder_location'] ."/" . $row['image2'] . "'. alt='There is no image to show'></a></td>";
                        echo "<td><a target = _blank><img style='height:50px;width:50px;' src = '../image/products/". $row['folder_location'] ."/" . $row['image3'] . "'. alt='There is no image to show'></a></td>";
                        echo "<td><a target = _blank><img style='height:50px;width:50px;' src = '../image/products/". $row['folder_location'] ."/" . $row['image4'] . "'. alt='There is no image to show'></a></td>";
                        echo "<td><a target = _blank><img style='height:50px;width:50px;' src = '../image/products/". $row['folder_location'] ."/" . $row['image5'] . "'. alt='There is no image to show'></a></td>";
                        echo "<td><a target = _blank><img style='height:50px;width:50px;' src = '../image/products/". $row['folder_location'] ."/" . $row['image6'] . "'. alt='There is no image to show'></a></td>";


                        echo "<td><a href=\"../delete.php?id=$row[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";
                        echo "<td><a href=\"../edit.php?id=$row[id]\">Edit</a></td>";
                        echo "</tr>";
                    }
                } else {
                    print("There was an error while connecting to database.");
                }

                ?>

            </table>
            </div>
    </body>



    <?php
    include '../footter2.php';
    ?>
