<?php

include '../db.php';
$conn = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);
 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        .sagol{
            height: 150px;
            width: 80px;
            background-color:aqua;
            border: 1px;
            border-radius:3px;
            margin: 10px;
        }
        /* .review{
            margin: 50px;
            border: none;
            background: #6affeb;
            padding: 20px 20px;
            border-radius: 10px;
            color: #007544;
            cursor: pointer;
            transition: background .2s ease-in-out;
        } */
    </style>
    <link rel="stylesheet" href="../css/styl8.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Tracking</title>
</head>
<body>
<?php
    include '../header.php';
?>

<?php
    

$sql = "SELECT * FROM delevery where buyerid=$idd";
    $result = $conn->query($sql);

    while($row = $result->fetch_assoc()) { 
          echo  "<div class='sagol' align='center'>
                
                    <div>".$row['productname']."</div>
                        <div>".$row['price']."</div>
                            <div>".$row['quan']."</div>
                                <div>".$row['deliverydate']."</div>
                            <div>".$row['status']."</div>
                        <div>".$row['address']."</div>
                    <div> <form action='../review/f.php?' method='post'>
                    <input class='text' type='submit' value='review' name='readmore'>
    
                   <input  type='hidden' name='productid' value=" . $row['productid']. ">                
               </form> </div>
                    <br>

                    
                </div>";
    }


?>



</body>
<?php
    include '../footter2.php';
?>
</html>