<?php

$server = "localhost";
$username = "root";
$password = "";
$dbname = "ecom";

$conn = mysqli_connect($server, $username, $password, $dbname);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styllep.css">
    <link rel="stylesheet" href="css/mobb5.css">
    <title>Search bar</title>
</head>
<body>
    <form action="search.php" method="POST">
        <input type="text" name="search" placeholder="Search">
        <button type="submit" name="submit-search">Search</button>
    </form>
    <div>
        <?php
            $sql = "SELECT * FROM productdetails";
            $result = mysqli_query($conn, $sql);
            $queryResults = mysqli_num_rows($result);

            if($queryResults > 0){
                    while($row = mysqli_fetch_assoc($result)){
                        echo "<div class=cardi value='read more' name='readmore'  style=cursor: pointer;>
                        <div class='bontainer'>
                           <img  src=./image/" . $row["image"] ."  class='image' >
                           <div class='middle'>
                              <form action='product.php' method='post'>
                                   <input class='text' type='submit' value='details' name='readmore'>
                   
                                  <input  type='hidden' name='id' value=" . $row['id']. ">                
                              </form> 
                           </div>
                         </div>
                                   
                         <div class='details'>
                                      <div class='dd'>
                                          <div class=title>".$row['name']."</div> 
                                       
                                      
                                    
                                      </diV>
                                      <div class=price>৳".$row['price']."</div>
                                      </div>
                                   <div >
                         
                                
                                   
                                      
                              </div>        
                                    
                                      
                  
                                      
                              </div>";
                    }
            }
        ?>
    </div>
</body>
</html>