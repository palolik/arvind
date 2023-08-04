<?php
require_once("ecom.php");

$id = $_GET['id'];
 $result = mysqli_query($mysqli, "SELECT * FROM adminup WHERE id=$id");

 $resultData = mysqli_fetch_assoc($result);

        $user_name = $resultData['user_name'];
        $password = $resultData['password'];
    


?>

<html>
    <head>
        <body>
        <form method="POST" name="edit" action="editsignup.php">

<lable >Name:</lable>
<input type="text" name="user_name" value="<?php echo $user_name; ?>" >

<br>
<br>

<lebel>Password</lebel>
<input type="text" name="password" value="<?php echo $password; ?>" >
<br>
<br>
<br>
<input type="hidden" name="id" value="<?php echo $id; ?>">
<input type="submit" name="update" value="update">




</form>
        </body>
    </head>
</html>