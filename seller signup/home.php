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
    <link rel="stylesheet" href="../css/styl21.css">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
</head>
<div class="header">
  <div class="iconmain"> <img src="../image/website/log.png" style="width:150px"></div>
  <div class="topnav">
  
            <a  class="active" href="home.php">Home</a> 
            <a href="Product List.php">Product List</a>   
            <a href="productuploader.php">Product Uploader</a>
            <a href="Pending Order.php">Pending Order</a>
            <a href="Statistics.php">Statistics</a>
            <a href="logout.php"> <input class="jom" type="submit" name="" value="Logout"></a>
</div>

  
</div>

<body>
<div class="sellerui">
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> bf41870b5f08b20261f02b3174c4538dbae1bd9f
<p>Dashboard</p>
<?php echo "<a>ID :". $row["id"] . "  USERNAME: " . $row["user_name"]."</a>"; }?>
=======
<h>Welcome to Seller Account </h>
<?php echo "<a>ID :". $row["id"].
 "  USERNAME: " . $row["user_name"]."</a>"; ?>
>>>>>>> 398e2ac2deb261202dcd4458f1c39e60e911f4a8

<p><button>Growth Center</button></p>
<p><button>Seller Support</button></p>
<p><button>Account & Setting</button></p>

<p><button><a href="chart.html">Growth Center</a></button></p>
<p><button>Seller Support</button></p>
<p><button>Account & Setting</button></p>

</div>

</body>
<?php
    include '../footter2.php';
?>
</html>




















<!--
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="Product List.php">Product List</a>
    <br>
    <a href="Product Uploader.php">Prodcut Uploader</a>
    <br>
    <a href="Pending Order.php">Pending Order</a>
    <br>
    <a href="Statistics.php">Statistics</a>
</body>
</html>