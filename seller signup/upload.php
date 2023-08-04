<?php
// Connect to MySQL database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ecom";


$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Loop through the file inputs and process each image
for ($i = 1; $i <= 5; $i++) {
    $imageFieldName = "image" . $i;
    $targetDir = "uploads/";
    $targetFile = $targetDir . basename($_FILES[$imageFieldName]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

    // Check if image file is a actual image or fake image
    $check = getimagesize($_FILES[$imageFieldName]["tmp_name"]);
    if ($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }

    // Check if file already exists
    if (file_exists($targetFile)) {
        echo "Sorry, file already exists.";
        $uploadOk = 0;
    }

    // Check file size (optional)
    if ($_FILES[$imageFieldName]["size"] > 500000) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }

    // Allow certain file formats (you can modify this according to your needs)
    if (
        $imageFileType != "jpg" &&
        $imageFileType != "png" &&
        $imageFileType != "jpeg" &&
        $imageFileType != "gif"
    ) {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
    }

    // If the image passed all checks, move it to the target directory and store the file path in the database
    if ($uploadOk == 1) {
        if (move_uploaded_file($_FILES[$imageFieldName]["tmp_name"], $targetFile)) {
            // Insert the file path into the database (adjust table and column names accordingly)
            $sql = "INSERT INTO images VALUES ('$targetFile')";
            if ($conn->query($sql) === TRUE) {
                echo "The file " . basename($_FILES[$imageFieldName]["name"]) . " has been uploaded and inserted into the database.";
            } else {
                echo "Error inserting record: " . $conn->error;
            }
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }
}

// Close the database connection
$conn->close();
?>