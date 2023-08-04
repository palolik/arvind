<?php
session_start(); 
$sname= "localhost";
$unmae= "root";
$password = "";
$db_name = "ecom";

$conn = mysqli_connect($sname, $unmae, $password, $db_name);

if (!$conn) {
	echo "Connection failed!";
}

$user_name=$_SESSION['user_name'];
        
$id	=$_SESSION['id']; 
?>



<!DOCTYPE HTML>
<html>
    <title>Statistics</title>
<head>
<style>
    .kp{ 
      margin:0px;
      list-style-type:none;
      display:block;
      font-size:medium;
      width:100px;
      color:#00203fff;
      font-size:12px;
      padding:10px; 
      width: 150px;
      background-color: #ADEFD1FF;
      color:midnightblue;
      text-decoration:none;
      }   
      .kpa{ 
      margin:0px;
      list-style-type:none;
      display:block;
      font-size:medium;
      width:100px;
      color:#00203fff;
      font-size:12px;
      padding:10px; 
      width: 150px;
      background-color:lightseagreen;      
      color:midnightblue;
      text-decoration:none;
      }  

    .kp:hover{
      background-color:aqua;
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
<a class="kp" href="../admin/folder.php">add folder</a>

<a  href="login/logout.php"> <input class="kp" type="submit" name="" value="Logout" ></a>
</div>




<?php
// Query to fetch data from the database
$sql = "SELECT date, value FROM data_table ORDER BY date ASC";
$result = $conn->query($sql);

// Initialize an empty array to store the data
$dataPoints = array();

// Fetch and format the data
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $dataPoints[] = array(
            "x" => $row['date'],
            "y" => $row['value']
        );
    }
}

// Close the database connection
$conn->close();
?>

<script src="https://www.gstatic.com/charts/loader.js"></script>

<div id="lineChart" style="width: 100%; height: 400px;"></div>

<script>
// Load the Google Charts API
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawLineChart);

// Function to draw the line chart
function drawLineChart() {
    var data = new google.visualization.DataTable();
    data.addColumn('date', 'Date');
    data.addColumn('number', 'Value');

    // Add the data to the chart
    data.addRows(<?php echo json_encode($dataPoints); ?>);

    // Set the chart options
    var options = {
        title: 'Line Graph',
        curveType: 'function',
        legend: { position: 'bottom' }
    };

    // Create the line chart
    var chart = new google.visualization.LineChart(document.getElementById('lineChart'));
    chart.draw(data, options);
}
</script>



</body>
</html> 















 










    <a href="./login/logout.php"> <input type="submit" name="" value="Logout" style="background: blue; color: white; height: 35px; width: 100px; margin-top: 20px; font-size: 18px; border-radius: 5px; cursor: pointer;  "></a>
    </body>
</html>
