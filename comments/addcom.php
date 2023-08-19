<?php
// Database connection details
include '../database.php';

// Create connection
$conn = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);

// Check connection

if(isset($_POST['create'])){
    $pid = mysqli_real_escape_string($conn, $_POST['pid']);
    $buyerid = mysqli_real_escape_string($conn, $_POST['buyerid']);
    $comment = mysqli_real_escape_string($conn, $_POST['comment']);   
    $time = mysqli_real_escape_string($conn, $_POST['time']);   

 

    $resultcomment = mysqli_query($conn, "INSERT INTO comments (`pid`,`buyerid`, `comment`,`time`) VALUES ('$pid', '$buyerid', '$comment' , '$time')");

}
// header('location:../product.php')


?>

<form  method="post">
            <input style='display:none;' type=text autocomplete="off" name='pid' value='<?php echo $id?> '><br>
            <input type=text autocomplete="off" name='buyerid' ><br>
            <input type=text autocomplete="off" name='comment'><br>
           <input type=text autocomplete="off" name="time" value="<?php echo (strftime("%R %a %d %b")); ?>" >
            <button type='submit' name='create'>Create</button>

</form>  
          
