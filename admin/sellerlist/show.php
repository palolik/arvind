<?php
session_start(); 
include '../../database.php';

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
      background-color: #ccc;
      color:black;
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
      .kptp{
   background-color:#ccc;
   margin:5px;
   padding:5px;
   overflow-x: scroll;
   width:100px
     }
    
  
  
</style> 
</head>
<div class="iconmain"> <img src="../../image//website/log copy.png" style="width:150px"></div>
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

<a class="kp" href="../productlist/productlist.php">Product List</a>
<a class="kp" href="../buyerlist/buyerlist.php">Buyer List</a>
<a class="kpa" href="../sellerlist/show.php">Seller List</a>
<a class="kp" href="../category.php">Category</a>
<a class="kp" href="../sub_cat.php">SubCategory</a>
<a class="kp" href="../../affiliate/show.php">Affiliate List</a>
<a class="kp" href="../statistics.php">Statistics</a>
<a class="kp" href="../folder.php">add folder</a>

<a  href="../login/logout.php"> <input class="kp" type="submit" name="" value="Logout" ></a>
</div>

    <center>
        <h2 style="text-align:center">Seller List</h2>
        
    </center>

    <table style="width:100%">
            <tr class="kptp">
                <td>ID</td>
                <td>Folder name</td>
                <td>Name</td>
                <td>Mobile no</td>
                <td>E-mail Address</td>
                <td>Seller Photo</td>
                <td>Logo</td>
                <td>Seller Address</td>
                <td>Business Name</td>
                <td>NID</td>
                <td>Password</td>
                <td>Confirm Password</td>
                <td>User Name</td>
                <td>Delete</td>
                <td>Edit</td>

            </tr>
    <?php
    if($conn){
        
        $sql = "SELECT * FROM sellersignup";
        $result = mysqli_query($conn, $sql);
        while($row = mysqli_fetch_array($result))
        {
            echo "<tr>";
            echo "<td>".$row['id']."</td>";
            echo "<td>".$row['foldername']."</td>";

            echo "<td>".$row['name']."</td>";
            echo "<td>".$row['mobileno']."</td>";
            echo "<td>".$row['emailaddress']."</td>";
            echo "<td>".$row['sellerphoto']."</td>";
            echo "<td><a target = _blank><img style='height:150px;width:250px;' src = '../image/seller_photo/".$row['sellerphoto']."'. alt='There is no image to show'></a></td>";
            echo "<td>".$row['selleraddress']."</td>";
            echo "<td>".$row['businessname']."</td>";
            echo "<td>".$row['nid']."</td>";
            echo "<td>".$row['password']."</td>";
            echo "<td>".$row['confirmpassword']."</td>";
            echo "<td>".$row['user_name']."</td>";
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