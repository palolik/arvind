<?php
include '../database.php';
$idorder = $_POST['orderid'];

echo $idorder ;

if (isset($_POST['submit'])) {
    if ($conn) {
        $buyername = mysqli_real_escape_string($conn, $_POST['buyername']);
        $orderq = mysqli_real_escape_string($conn, $_POST['orderq']);
        $review = mysqli_real_escape_string($conn, $_POST['review']);
        $rating = mysqli_real_escape_string($conn, $_POST['rating']);
        $date = mysqli_real_escape_string($conn, $_POST['date']);
        $buyerid = mysqli_real_escape_string($conn, $_POST['buyerid']);
        $productid = mysqli_real_escape_string($conn, $_POST['productid']);
        $sql = "INSERT INTO reviews (`orderq`,`buyername`,`productid`,`review`, `rating`, `buyerid`, `date`) VALUES ('$orderq','$buyername','$productid','$review', '$rating', '$buyerid', '$date')";
        $result = mysqli_query($conn, $sql);
    }
}
header('location:home.php')

?>
