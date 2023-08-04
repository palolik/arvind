

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ecom";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
if(isset($_POST['create'])){
    $pid = mysqli_real_escape_string($conn, $_POST['pid']);
    $buyerid = mysqli_real_escape_string($conn, $_POST['buyerid']);
    $comment = mysqli_real_escape_string($conn, $_POST['comment']);   
 

    $resultcomment = mysqli_query($conn, "INSERT INTO comments (`pid`,`buyerid`, `comment`) VALUES ('$pid', '$buyerid', '$comment')");

}


        header('Location: ../product.php');
        exit();

?>