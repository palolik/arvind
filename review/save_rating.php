<?php

session_start();

include '../database.php';

$conn = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);

if (!$conn) {
    echo "Connection failed!";
    exit; // Exit if connection fails
}

if (isset($_POST['ratedIndex'])) {
    $ratedIndex = (int)$_POST['ratedIndex'];
    
    // Assuming you have a table named 'review' to store ratings with columns 'ratedIndex', 'buyerid', etc.
    // You should replace 'review' and other column names with your actual table and column names.
    $buyerid = $_SESSION['id'];
    
    $sql = "UPDATE review SET ratedIndex = $ratedIndex WHERE buyerid = $buyerid";
    $result = $conn->query($sql);

    if ($result) {
        // Success message or any other actions on successful update
        echo json_encode(['status' => 'success', 'message' => 'Rating updated successfully']);
    } else {
        // Error message or any other actions on update failure
        echo json_encode(['status' => 'error', 'message' => 'Failed to update rating']);
    }
}
?>
