<?php

include '../database.php';

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve counter data from the database
$sql = "SELECT * FROM visitor_counter";
$result = $conn->query($sql);

$counterData = array();
while ($row = $result->fetch_assoc()) {
    $counterData[$row['visit_date']] = $row['visit_count'];
}

$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Website Visitor Counter</title>
</head>
<body>
    <h1>Website Visitor Counter</h1>
    <table>
        <tr>
            <th>Date</th>
            <th>Visitor Count</th>
        </tr>
        <?php foreach ($counterData as $date => $count) { ?>
            <tr>
                <td><?php echo $date; ?></td>
                <td><?php echo $count; ?></td>
            </tr>
        <?php } ?>
    </table>
</body>
</html>
