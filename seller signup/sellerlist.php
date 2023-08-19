<?php
session_start(); 
include '../database.php';

$conn = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);

if (!$conn) {
	echo "Connection failed!";
}

// $user_name=$_SESSION['user_name'];
        
// $id	=$_SESSION['id']; 


?>






<!-- <html>
    <head>
        <title>Seller Sign up</title>
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

    </body>
</html> -->



<?php 
require_once("../database.php");

$result = mysqli_query($mysqli, "SELECT * FROM sellersignup ORDER BY id DESC");
?>

<html>
    <head>
        <title>Seller List</title>
    </head>

    <body>
        <h2 align=center>Seller List</h2>
<a href="sellersignup.php">form</a>
        <table>
            <tr>
                <td>ID</td>
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

            </tr>


            

            <?php

                $sql = "SELECT * from sellersignup";
                $result = mysqli_query($conn,$sql);
                if(mysqli_num_rows($result)>0){
                    while($res = mysqli_fetch_assoc($result)){

                        echo "<tr>";
                        echo "<td>".$res['id']."</td>";
                        echo "<td>".$res['name']."</td>";
                        echo "<td>".$res['mobileno']."</td>";
                        echo "<td>".$res['emailaddress']."</td>";
                        echo "<td><a target = _blank><img style='height:150px;width:250px;' src = '../image/seller_photo/".$res['sellerphoto']."'. alt='There is no image to show'></a></td>";
                        echo "<td><a target = _blank><img style='height:150px;width:250px;' src = '../image/seller_photo/".$res['logo']."'. alt='There is no image to show'></a></td>";
                        echo "<td>".$res['selleraddress']."</td>";
                        echo "<td>".$res['businessname']."</td>";
                        echo "<td><a target = _blank><img style='height:150px;width:250px;' src = '../image/seller_photo/".$res['nid']."'. alt='There is no image to show'></a></td>";;
                        echo "<td>".$res['password']."</td>";
                        echo "<td>".$res['confirmpassword']."</td>";
                        echo "<td>".$res['user_name']."</td>";
                        echo "<td><a href=\"delete.php?id=$res[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";
                        echo "<td><a href=\"edit.php?id=$res[id]\">Edit</a></td>";
                        echo "</tr>";

                    }//while loop
                }//if loop


             
            ?>
        </table>
    </body>
</html>