<?php 

include '../database.php';

if($conn->connect_error){
    die("Connection failed: ". $conn->connect_error);
}

$data = array();

<<<<<<< HEAD
$sql = "SELECT visit_date, visit_count FROM visitor_counter";
=======
$sql = "SELECT value FROM productdetails";
>>>>>>> bf41870b5f08b20261f02b3174c4538dbae1bd9f
$result = $conn->query($sql);

if($result->num_rows > 0){
    while($row = $result->fetch_assoc()){
        $data[] = $row;
    }
}

$conn->close();

echo json_encode($data);

?>




