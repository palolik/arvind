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
    <link rel="stylesheet" href="css/mobb3.css">
    <title>Search Page</title>
</head>
<?php 
include 'header.php' 

?>
<body>



        <?php
            if(isset($_POST['submit-search'])){
                $search = mysqli_real_escape_string($conn, $_POST['search']);
                $sql = "SELECT * FROM productdetails WHERE name LIKE '%$search%' OR category LIKE '%$search%' OR price LIKE '%$search%'";
                $result = mysqli_query($conn, $sql);
                $queryResult = mysqli_num_rows($result);

                echo "There are ".$queryResult." results.";
                ?> 
                
                <div class="prorow">

                <?php 

               

                if ($queryResult > 0){
                    while($row = mysqli_fetch_assoc($result)){
                        echo "<div class='cardi' value='read more' name='readmore'  style=cursor: pointer;>
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
                } else{
                    echo "There are no results matching your search!";
                }
            }
        ?>

    </div>





</body>



<?php 
include 'footter.php' 
?>

</html>