<?php
include '../db.php';

$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);

// Prepare the update statement
$updateStatement = $mysqli->prepare("UPDATE views SET value=value+1 WHERE name=?");
$name = 'hits';
$updateStatement->bind_param('s', $name);
$updateStatement->execute();

// Prepare the select statement
$selectStatement = $mysqli->prepare("SELECT * FROM views WHERE name=?");
$name = 'hits';
$selectStatement->bind_param('s', $name);
$selectStatement->execute();

// Get the updated value from the select statement and display it
$result = $selectStatement->get_result();
$row = $result->fetch_assoc();
echo "You are visitor number " . $row['value'] . " to this website.";

// Close the prepared statements and database connection
$updateStatement->close();
$selectStatement->close();
$mysqli->close();
?>
