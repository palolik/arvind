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


<html>
    <head>
        <title>Buyer Sign up</title>
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
</html>







<?php
    require_once("../ecom.php");
    if(isset($_POST['update'])){
        $id = mysqli_real_escape_string($mysqli, $_POST['id']);
        $name = mysqli_real_escape_string($mysqli, $_POST['name']);
        $mobileno = mysqli_real_escape_string($mysqli, $_POST['mobileno']);
        $emailaddress = mysqli_real_escape_string($mysqli, $_POST['emailaddress']);
        $password = mysqli_real_escape_string($mysqli, $_POST['password']);
        $confirmpassword = mysqli_real_escape_string($mysqli, $_POST['confirmpassword']);
        $user_name = mysqli_real_escape_string($mysqli, $_POST['user_name']);

        $result = mysqli_query($mysqli, "UPDATE buyersignup SET `name`='$name', `mobileno`='$mobileno', `emailaddress`='$emailaddress', `password`='$password', `confirmpassword`='$confirmpassword', `user_name`='$user_name' WHERE `id`=$id");

        echo "<a href='buyerlist.php'> View Table </a>";

    }

?>