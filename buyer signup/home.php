<?php

include '../database.php';
$conn = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);


//$user_name=$_SESSION['user_name'];
        
//$id	=$_SESSION['id']; 
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    
    <link rel="stylesheet" href="../css/styl10.css">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
</head>
<body>
<!-- <?php

$sql = "SELECT * FROM buyersignup ";

$sql = "SELECT * FROM buyersignup WHERE user_name='$user_name' AND id='$id'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {

while($row = $result->fetch_assoc()) {
    echo "<p>cloud id :". $row["id"] . $row["user_name"]."</p>";
}

} else {
echo "0 results";
}
?> -->

<?php
    include '../header.php';
?>

    <a href="#">Your profile</a>
    <br>
    <a href="order_tracking.php">Order Tracking</a>
    <br>
    <a href="#">Past Order</a>
    <br>
    <a href="#">Invoices</a>
    <br>
    <a href="#">Cart</a>
    <br>
    

    <a href="logout.php"> <input type="submit" name="" value="Logout" style="background: blue; color: white; height: 35px; width: 100px; margin-top: 20px; font-size: 18px; border-radius: 5px; cursor: pointer;  "></a>
    <br>
    <br>
</body>
<?php
    include '../footter2.php';
?>
</html>