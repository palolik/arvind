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
    
    <link rel="stylesheet" href="../css/styl24.css">

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
    include '../header2.php';
?>

 
  <div class="dashb">
    <div>
        <p>Pending Review</p>
    <div class="dasha">
 <?php include 'order_tracking.php';?> 


    </div>
</div>
   <div>        <p>Pending Delivery</p>
<div class="dasha"><?php include 'pendingdelivery.php'; ?></div></div>
<div>        <p>Profile Info</p>
<div class="dasha"><?php include 'profileinfo.php'; ?></div></div>
   </div>
    
    

    <a href="logout.php">
     <input type="submit" name="" value="Logout" ></a>
    <br>
    <br>
</body>
<?php
    include '../footter2.php';
?>
</html>