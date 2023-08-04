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

    <a class="kp" href="../productlist/productlist.php">Product List</a>
    <a class="kpa" href="../buyerlist/buyerlist.php">Buyer List</a>
    <a class="kp" href="../sellerlist/show.php">Seller List</a>
    <a class="kp" href="../category.php">Category</a>
    <a class="kp" href="../sub_cat.php">SubCategory</a>
    <a class="kp" href="../../affiliate/show.php">Affiliate List</a>
    <a class="kp" href="../statistics.php">Statistics</a>
    <a class="kp" href="../folder.php">add folder</a>


    <a  href="logout.php"> <input class="kp" type="submit" name="" value="Logout" ></a>
</div>
    </body>
</html>


<?php 
$databaseHost = 'localhost';
$databaseName = 'ecom';
$databaseUsername = 'root';
$databasePassword = '';

$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);



$result = mysqli_query($mysqli, "SELECT * FROM buyersignup ORDER BY id DESC");
?>

<html>
    <head>
        <title>Buyer Sign up</title>
        <td><a href="../login/home.php">Home</a>
    </head>

    <body>
        <table>
            <tr>
                <td>ID</td>
                <td>Name</td>
                <td>Mobile no</td>
                <td>E-mail Address</td>
                <td>Password</td>
                <td>Confirm Password</td>
                <td>Delete</td>
                <td>Edit</td>
                <td>User Name</td>
            </tr>

            <?php
              while($res = mysqli_fetch_assoc($result))

                {
                    echo "<tr>";
                    echo "<td>".$res['id']."</td>";
                    echo "<td>".$res['name']."</td>";
                    echo "<td>".$res['mobileno']."</td>";
                    echo "<td>".$res['emailaddress']."</td>";
                    echo "<td>".$res['password']."</td>";
                    echo "<td>".$res['confirmpassword']."</td>";
                    echo "<td>".$res['user_name']."</td>";
                    echo "<td><a href=\"delete.php?id=$res[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";
                    echo "<td><a href=\"edit.php?id=$res[id]\">Edit</a></td>";
                    echo "</tr>";
                }
            ?>
        </table>
    </body>
</html>
