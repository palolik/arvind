<?php 

include '../database.php';

if($conn->connect_error){
    die("Connection failed: ". $conn->connect_error);
}

$data = array();

$sql = "SELECT value FROM productdetails";
$result = $conn->query($sql);

if($result->num_rows > 0){
    while($row = $result->fetch_assoc()){
        $data[] = $row;
    }
}

$conn->close();

echo json_encode($data);

?>




