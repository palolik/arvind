<?php


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the current date already exists in the database
$today = date("Y-m-d");
$sql1 = "SELECT * FROM visitor_counter WHERE visit_date = '$today'";
$res = $conn->query($sql1);

if ($res->num_rows > 0) {
    // If the date exists, increment the visit count
    $row = $res->fetch_assoc();
    $newCount = $row['visit_count'] + 1;
    $updateSql = "UPDATE visitor_counter SET visit_count = $newCount WHERE visit_date = '$today'";
    $conn->query($updateSql);
} else {
    // If the date doesn't exist, insert a new record
    $insertSql = "INSERT INTO visitor_counter (visit_date, visit_count) VALUES ('$today', 1)";
    $conn->query($insertSql);
}


?>
