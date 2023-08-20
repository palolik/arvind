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

<?php 

$sql = "SELECT * FROM sellersignup ";

$sql = "SELECT * FROM sellersignup WHERE user_name='$user_name' AND id='$id'";
$result = $conn->query($sql);
while($row = $result->fetch_assoc()) {

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <link rel="stylesheet" href="../css/styl14.css">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
</head>
<div class="header">
  <div class="iconmain"> <img src="../image/website/log.png" style="width:150px"></div>
  <div class="topnav">
  <?php echo "<a>User:" . $row["user_name"]."</a>"; }?>
            <a   href="home.php">Home</a> 
            <a href="Product List.php">Product List</a>   
            <a href="productuploader.php">Product Uploader</a>
            <a class="active"  href="Pending Order.php">Pending Order</a>
            <a href="Statistics.php">Statistics</a>
            <a href="logout.php"> <input type="submit" name="" value="Logout"></a>
</div>
  <div >

</div>
  
</div>

<body>

<div class="divscroll">
<table>
        <tr>
            <th>Order id</th>
            <th>cname</th>
            <th>Email</th>
            <th>phone</th>
            <th>district</th>
            <th>subdistrict</th>
            <th>address</th>
            <th>productname</th>
            <th>productid</th>
            <th>price</th>
            <th>Quantity</th>
            <th>Delevery Date</th>
            <th>Status</th>
            <th>Action</th>


        </tr>
<?php
    include '../database.php';

    $conn = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);
    if($conn){
        printf("Connected successfully.");
        $sql = "SELECT * FROM delevery where sellerid='$id'";
        $result = mysqli_query($conn, $sql);
        while($row = mysqli_fetch_array($result))
        {
            echo "<tr>";
            echo "<td>".$row['orderid']."</td>";
            echo "<td>".$row['cname']."</td>";
            echo "<td>".$row['email']."</td>";
            echo "<td>".$row['phone']."</td>";
            echo "<td>".$row['district']."</td>";
            echo "<td>".$row['subdistrict']."</td>";
            echo "<td>".$row['address']."</td>";
            echo "<td>".$row['productname']."</td>";
            echo "<td>".$row['productid']."</td>";
            echo "<td>".$row['price']."</td>";
            echo "<td>".$row['quan']."</td>";
            echo "<td>".$row['deliverydate']."</td>";
            echo "<td>".$row['status']."</td>";
            echo "<td><a href=\"../delete.php?orderid=$row[orderid]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a>
           <a href=\"./orderedit.php?orderid=$row[orderid]\">Edit</a></td>";




            echo "</tr>";
            
        }
    }
    else{
        print("There was an error while connecting to database.");  
    }

    ?>
  
</table>
</div>
</body>
<?php
    include '../footter2.php';
?>
</html>




















