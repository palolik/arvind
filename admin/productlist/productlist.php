<?php
session_start(); 
include '../../database.php';

$conn = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);

if (!$conn) {
	echo "Connection failed!";
}

 $user_name=$_SESSION['user_name'];
        
 $id	=$_SESSION['id']; 
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
</head>
<body>
<?php

$sql = "SELECT * FROM adminup ";

 $sql = "SELECT * FROM adminup WHERE user_name='$user_name' AND id='$id'";

$result = $conn->query($sql);

if ($result->num_rows > 0) {

 while($row = $result->fetch_assoc()) {
     echo "<div class='adnav'><a class='kp'>". $row["id"] . $row["user_name"]."</a>";
 }

} else {
echo "0 results";
}
?>

    <a class="kp" href="../login/home.php">Home</a>

    <a class="kpa" href="../productlist/productlist.php">Product List</a>
    <a class="kp" href="../buyerlist/buyerlist.php">Buyer List</a>
    <a class="kp" href="../sellerlist/show.php">Seller List</a>
    <a class="kp" href="../category.php">Category</a>
    <a class="kp" href="../sub_cat.php">SubCategory</a>
    <a class="kp" href="../../affiliate/show.php">Affiliate List</a>
    <a class="kp" href="../statistics.php">Statistics</a>
    <a class="kp" href="../folder.php">add folder</a>


    <a  href="logout.php"> <input class="kp" type="submit" name="" value="Logout" ></a>
</div>
        <h2>Uploaded images</h2>
        <a href="../login/home.php">home</a>

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
            echo "<td><a target = _blank><img style='height:50px;width:50px;' src = '../.././image/".$row['image']."'. alt='There is no image to show'></a></td>";
            echo "<td><a href=\"./delete.php?id=$row[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";
            echo "<td><a href=\"./edit.php?id=$row[id]\">Edit</a></td>";
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