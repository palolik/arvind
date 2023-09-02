<?php
session_start(); 
include '../database.php';

if (!$conn) {
	echo "Connection failed!";
}

$user_name=$_SESSION['user_name'];
        
$id	=$_SESSION['id']; 
?>


<?php
 
$dataPoints = array();
$y = 40;
for($i = 0; $i < 1000; $i++){
	$y += rand(0, 10) - 5; 
	array_push($dataPoints, array("x" => $i, "y" => $y));
}
 
?>
<!DOCTYPE HTML>
<html>
<head>
<style>
    .kp{ 
      margin:0px;
      list-style-type:none;
      display:block;
      font-size:15px;
      width:100px;
      color:#00203fff;
      font-size:12px;
      padding:10px; 
      width: 150px;
      background-color: #ccc;
      color:black;
      text-decoration:none;
      }   
      .kpa{ 
      margin:0px;
      list-style-type:none;
      display:block;
      font-size:15px;
      width:100px;
      color:#00203fff;
      font-size:12px;
      padding:10px; 
      width: 150px;
      background-color:#23f8bc;      
      color:#fff;
      text-decoration:none;
      }  

    .kp:hover{
        background-color: #c3ffe1;
      color: black; ;
      
      }
      .adnav{
display: flex;
flex-direction: row;

      }
  </style>
<script>
window.onload = function () {
 
var chart = new CanvasJS.Chart("chartContainer", {
	theme: "light2", // "light1", "light2", "dark1", "dark2"
	animationEnabled: true,
	zoomEnabled: true,
	title: {
		text: "Viewer Counter"
	},
	data: [{
		type: "area",     
		dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
	}]
});
chart.render();
 
}
</script>
</head>
<div class="iconmain"> <img src="../image//website/log1.png" style="width:150px"></div>
<body>
<div class='adnav'><a class='kp'></a>
 
 <a class="kp" href="../admin/login/home.php">Home</a>

<a class="kp" href="../admin/productlist/productlist.php">Product List</a>
<a class="kp" href="../admin/buyerlist/buyerlist.php">Buyer List</a>
<a class="kp" href="../admin/sellerlist/show.php">Seller List</a>
<a class="kp" href="../admin/category.php">Category</a>
<a class="kp" href="../admin/sub_cat.php">SubCategory</a>
<a class="kp" href="../affiliate/show.php">Affiliate List</a>
<a class="kpa" href="statistics.php">Statistics</a>
<a class="kp" href="folder.php">add folder</a>


<a  href="../admin/login/logout.php"> <input class="kp" type="submit" name="" value="Logout" ></a>
</div>
<div id="chartContainer" style="height: 370px; width: 100%;"></div>
<script src="https://cdn.canvasjs.com/canvasjs.min.js"></script>
</body>
</html> 


















































































































<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Statistics</title>
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
        <h2 align='center'>Viewer Counter</h2>

                <!-- <table align='center'>
                        <tr>
                            <td>Pages</td>
                            <td>Counts</td>
                            
                        </tr>
                </table> -->

 










    
    </body>
</html>
