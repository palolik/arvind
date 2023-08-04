
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Affiliate Marketing</title>
</head>
<body>


<center>
    <h1>Please input your information</h1>
<form action="index.php" method="post" enctype = "multipart/form-data">


<label>Name:</label>
<input type="text" name="name" placeholder="Name">
<br>
<br>
<br>
<label>E-mail:</label>
<input type="email" name="email" placeholder="email">
<br>
<br>
<br>
<label>Mobile no:</label>
<input type="text" name="mobileno" placeholder="Mobile no">
<br>
<br>
<br>
<label>Present Address:</label>
<input type="text" name="presentaddress" placeholder="Present Address">
<br>
<br>
<br>
<label>Permanent Address:</label>
<input type="text" name="permanentaddress" placeholder="Permanent Address">
<br>
<br>
<br>
<label>Institution Name:</label>
<input type="text" name="institutionname" placeholder="Institution Name">
<br>
<br>
<br>
<label>Department:</label>
<input type="text" name="department" placeholder="Department">
<br>
<br>
<br>
<label>Bkash/Nogod:</label>
<input type="text" name="bkash" placeholder="Bkash/Nogod">
<br>
<br>
<br>
<label>Password:</label>
<input type="text" name="password" placeholder="Password">
<br>
<br>
<br>
<label>Confirm Password:</label>
<input type="text" name="confirmpassword" placeholder="Confirm Password">
<br>
<br>
<br>
<label>User Name:</label>
<input type="text" name="user_name" placeholder="User Name">
<br>
<br>
<br>
<label for="image_upload"><h2>Select Image</h2></label>
<input type="file" name="image" id="image">
<br>
<br>
<br>
<label for="image_upload"><h2>Select NID</h2></label>
<input type="file" name="image" id="image">
<br>
<br>
<br>
<input type="submit" value="submit" name = "submit">
</center>
</form>












<?php

$conn = mysqli_connect("localhost", "root", "", "ecom");
$msg = "";

if(isset($_POST['submit']))
{

    $nid = $_FILES['image']['name'];
    $target = "../nid/".basename($_FILES['image']['name']);
    $photo = $_FILES['image']['name'];
    $target = "../image/".basename($_FILES['image']['name']);
    
    

if( $conn)
{
    echo "Connected Successfully";
}
else
{
    echo "There was an error while connecting to database".mysqli_connect_error($conn);
}

if($conn)
{
    
    
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobileno = $_POST['mobileno'];
    $presentaddress = $_POST['presentaddress'];
    $permanentaddress = $_POST['permanentaddress'];
    $institutionname = $_POST['institutionname'];
    $department = $_POST['department'];
    $bkash = $_POST['bkash'];
    
    $password = $_POST['password'];
    $confirmpassword = $_POST['confirmpassword'];
    $user_name = $_POST['user_name'];
    

    $nid = $_FILES['image']['name'];
    $photo = $_FILES['image']['name'];
    
    $sql = "INSERT INTO affiliate (`name`, `email`, `mobileno`, `presentaddress`, `permanentaddress`, `institutionname`, `department`, `bkash`, `nid`, `password`, `confirmpassword`, `user_name`, `photo`)VALUES('$name', '$email', '$mobileno', '$presentaddress', '$permanentaddress', '$institutionname', '$department', '$bkash', '$nid', '$password', '$confirmpassword', '$user_name', '$photo')";
    $result = mysqli_query($conn, $sql);
    if($result)
    {
        echo "Query Fired successfully";
        echo "<br>";
    }
    else
    {
        echo "There was an error while executing the query". mysqli_error($conn);
        echo "<br>";
    }
    if(move_uploaded_file($_FILES['image'] ['tmp_name'], $target))
    {
        $msg = "File uploaded successfully.";
    }
    else
    {
        $msg = "There was an error while uploading the files.".mysqli_error($conn);
    }
    echo $msg;
}
}

?>


<a href="show.php" style="color: black; font-size: larger; text-decoration: none; border: 2px solid black;">Show images</a>
















</body>
</html>