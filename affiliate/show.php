<?php
session_start(); 
$sname= "localhost";
$unmae= "root";
$password = "";

$db_name = "ecom";

$conn = mysqli_connect($sname, $unmae, $password, $db_name);

if (!$conn) 
{
	echo "Connection failed!";
}

$user_name=$_SESSION['user_name'];
        
$id	=$_SESSION['id']; 


?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show images</title>
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


<a class="kp" href="../admin/login/home.php">Home</a>

<a class="kp" href="../admin/productlist/productlist.php">Product List</a>
<a class="kp" href="../admin/buyerlist/buyerlist.php">Buyer List</a>
<a class="kp" href="../admin/sellerlist/show.php">Seller List</a>
<a class="kp" href="../admin/category.php">Category</a>
<a class="kp" href="../admin/sub_cat.php">SubCategory</a>
<a class="kpa" href="show.php">Affiliate List</a>
<a class="kp" href="../admin/statistics.php">Statistics</a>
<a class="kp" href="../admin/folder.php">add folder</a>
<a  href="logout.php"> <input class="kp" type="submit" name="" value="Logout" ></a>
</div>



    <center>
        <h2>Affiliate Marketer Database</h2>
        <a href="index.php">Upload</a>
    </center>

    <table>
            <tr>
                <td>ID</td>
                <td>Name</td>
                <td>E-mail Address </td>
                <td>Mobile no</td>
                <td>Present Address</td>
                <td>Permanent Address</td>
                <td>Institution Name</td>
                <td>Department</td>
                <td>Bkash/Nogod</td>
                <td>NID</td>
                <td>Password</td>
                <td>Confirm Password</td>
                <td>User Name</td>
                <td>Photo</td>

            </tr>
    <?php
    $conn = mysqli_connect("localhost", "root", "", "ecom");
    if($conn){
        printf("Connected successfully.");
        $sql = "SELECT * FROM affiliate";
        $result = mysqli_query($conn, $sql);
        while($row = mysqli_fetch_array($result))
        {
            echo "<tr>";
            echo "<td>".$row['id']."</td>";
            echo "<td>".$row['name']."</td>";
            echo "<td>".$row['email']."</td>";
            echo "<td>".$row['mobileno']."</td>";
            echo "<td>".$row['presentaddress']."</td>";
            echo "<td>".$row['permanentaddress']."</td>";
            echo "<td>".$row['institutionname']."</td>";
            echo "<td>".$row['department']."</td>";
            echo "<td>".$row['bkash']."</td>";
            echo "<td><a target = _blank><img style='height:150px;width:250px;' src = '../nid/".$row['nid']."'. alt='There is no image to show'></a></td>";
            echo "<td>".$row['password']."</td>";
            echo "<td>".$row['confirmpassword']."</td>";
            echo "<td>".$row['user_name']."</td>";
            echo "<td><a target = _blank><img style='height:150px;width:250px;' src = '../image/".$row['photo']."'. alt='There is no image to show'></a></td>";
            echo "<td><a href=\"delete.php?id=$row[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";
            echo "<td><a href=\"edit.php?id=$row[id]\">Edit</a></td>";
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



