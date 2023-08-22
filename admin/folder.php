<?php

   // Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id']; // Get the folder name from the form input field

    $foldername = $_POST['foldername']; // Get the folder name from the form input field
    $targetDir = '../image/products/'; // Define the target directory where you want to create the folder

    // Check if the folder name is provided
    if (!empty($foldername)) {
        // Check if the folder already exists
        if (!is_dir($targetDir . $foldername)) {
            // Create the folder/directory
            if (mkdir($targetDir . $foldername)) {
                echo "Folder created successfully.";

                // Store the folder name in the database
           include 'ecom.php';

                // Check connection
                if (mysqli_connect_errno()) {
                    die("Failed to connect to MySQL: " . mysqli_connect_error());
                }

                // Escape the folder name to prevent SQL injection
                $foldernameEscaped = mysqli_real_escape_string($conn, $foldername);

                // Insert the folder name into the database
                $sql = "UPDATE sellersignup SET foldername = '$foldernameEscaped' WHERE id = '$id'";

                if (mysqli_query($conn, $sql)) {
                    echo "Folder name stored in the database.";
                } else {
                    echo "Error: " . mysqli_error($conn);
                }

                // Close the connection
                mysqli_close($conn);
            } else {
                echo "Failed to create folder.";
            }
        } else {
            echo "Folder already exists.";
        }
    } else {
        echo "Please enter a folder name.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Create Folder and Upload Picture</title>
<style>
     .kp{ 
      margin:0px;
      list-style-type:none;
      display:block;
      font-size:15px;
      width:100px;
      color:#00203fff;
      font-size:12px;
      padding:10px; 
      width: 150px;
      background-color: #ccc;
      color:black;
      text-decoration:none;
      }   
      .kpa{ 
      margin:0px;
      list-style-type:none;
      display:block;
      font-size:15px;
      width:100px;
      color:#00203fff;
      font-size:12px;
      padding:10px; 
      width: 150px;
      background-color:#9c0000;      
      color:#fff;
      text-decoration:none;
      }  

    .kp:hover{
        background-color: #c3ffe1;
      color: black; ;
      
      }
      .adnav{
display: flex;
flex-direction: row;

      }
  
</style> 
</head>
<div class="iconmain"> <img src="../image//website/log.png" style="width:150px"></div>
<body>
<div class='adnav'><a class='kp'></a>
<a class="kp" href="../admin/login/home.php">Home</a>

<a class="kp" href="../admin/productlist/productlist.php">Product List</a>
<a class="kp" href="../admin/buyerlist/buyerlist.php">Buyer List</a>
<a class="kp" href="../admin/sellerlist/show.php">Seller List</a>
<a class="kp" href="../admin/category.php">Category</a>
<a class="kp" href="../admin/sub_cat.php">SubCategory</a>
<a class="kp" href="../affiliate/show.php">Affiliate List</a>
<a class="kp" href="../admin/statistics.php">Statistics</a>
<a class="kpa" href="folder.php">add folder</a>
<a  href="login/logout.php"> <input class="kp" type="submit" name="" value="Logout" ></a>
</div>
    <form method="post">
        <input type="text" name="foldername" placeholder="Enter folder name" />
        <input type="text" name="id" placeholder="id" />

        <input type="submit" value="Create Folder" />
    </form>
</body>
</html>