<?php
session_start(); 
include '../database.php';


if (!$conn) {
	echo "Connection failed!";
}

$user_name=$_SESSION['user_name'];
        
$id	=$_SESSION['id']; 


?>
<html>
    <head>Buyer List</head>
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
</html>


<?php 
require_once("buyersignup.php");

$result = mysqli_query($mysqli, "SELECT * FROM buyersignup ORDER BY id DESC");
?>

<html>
    <head>
        <title>Buyer Sign up</title>
    </head>

    <body>
<a href="database adding.php">form</a>
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



