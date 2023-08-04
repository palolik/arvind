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
// $email	=$_SESSION['email']; 
// $mobileno	=$_SESSION['mobileno']; 
// $presentaddress	=$_SESSION['presentaddress']; 
// $permanentaddress	=$_SESSION['permanentaddress']; 
// $institutionname	=$_SESSION['institutionname']; 
// $department	=$_SESSION['department']; 
// $bkash	=$_SESSION['bkash']; 
// $nid	=$_SESSION['nid']; 
// $password	=$_SESSION['password']; 
// $photo	=$_SESSION['photo']; 

?>

<?php

    

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

$sql = "SELECT * FROM affiliate ";

$sql = "SELECT * FROM affiliate WHERE user_name='$user_name' AND id='$id'";

$result = $conn->query($sql);

if ($result->num_rows > 0) {

while($row = $result->fetch_assoc()) {
    echo "<p>cloud id :". $row["id"] . $row["user_name"]."</p>";
    echo "<p>Mobline no :". $row["mobileno"] . "</p>";
    echo "<p>E-mail :". $row["email"] . "</p>";
    echo "<p>Present Address :". $row["presentaddress"] . "</p>";
    echo "<p>Permanent Address :". $row["permanentaddress"] . "</p>";
    echo "<p>Intitution Name :". $row["institutionname"] . "</p>";
    echo "<p>Department :". $row["department"] . "</p>";
    echo "<p>Bkash :". $row["bkash"] . "</p>";
    echo "NID:"."<p><img style='height:150px;width:250px;' src = '../nid/". $row["nid"] . "'. alt='There is no image to show'></p>";
    echo "<p>Password :". $row["password"] . "</p>";
    echo "Profile Picture:"."<p><img style='height:150px;width:250px;' src = '../image/". $row["photo"] . "'. alt='There is no image to show'></p>";
    
}

} else {
echo "0 results";
}
?>
    



 

    <a href="logout.php"> <input type="submit" name="" value="Logout" style="background: blue; color: white; height: 35px; width: 100px; margin-top: 20px; font-size: 18px; border-radius: 5px; cursor: pointer;  "></a>
</body>
</html>