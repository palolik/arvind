
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">


    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
</head>
<body>

<?php 
include 'header.php' ;

include 'database.php' ;





// Prepare the update statement
$updateStatement = $mysqli->prepare("UPDATE views SET value=value+1 WHERE name=?");
$name = 'hits';
$updateStatement->bind_param('s', $name);
$updateStatement->execute();

// Prepare the select statement
$selectStatement = $mysqli->prepare("SELECT * FROM views WHERE name=?");
$name = 'hits';
$selectStatement->bind_param('s', $name);
$selectStatement->execute();

// Get the updated value from the select statement and display it
$result = $selectStatement->get_result();
$row = $result->fetch_assoc();
// echo "You are visitor number " . $row['value'] . " to this website.";

// Close the prepared statements and database connection
$updateStatement->close();
$selectStatement->close();
$mysqli->close();
 ?>

   <div class="prorow">
<?php

 

    $sql = "SELECT * FROM productdetails";
    $result = $conn->query($sql);

    if ($result->num_rows > 0)
    
    {
      function inner_function($rating) {
        $stars = "";
        for ($i = 0; $i < $rating; $i++) {
          $stars .= "<img class='ic' src='./image/icons/sf.png'>";
        }
        return $stars;
      }
    while($row = $result->fetch_assoc()) { 
       

          echo  
    "<div class='cardi' value='read more' name='readmore'  style=cursor: pointer;>
      <div class='bontainer'>
         <img  src=./image/products/". $row["folder_location"]."/". $row["image"] ."  class='image'>
         <div class='middle'>
            <form action='product.php?' method='post'>
                 <input class='text' type='submit' value='details' name='readmore'>
 
                <input  type='hidden' name='id' value=" . $row['id']. ">                
            </form> 
         </div>
       </div>
                 
       <div class='details'>
                    <div class='dd'>
                        <div class=title>".$row['name']."</div> 
                    </diV>
                    <div class='stars'>" .
                    inner_function($row["rating"]) ."</div>
                    <div class=price>৳".$row['price']."</div>
                    </div>
                 <div >
       
              
                 
                    
            </div>        
                  
                    

                    
            </div>";


        }
     
    } else {
    echo "0 results";
    }
?>                                 
 </div>


</body>
<?php 
include 'footter.php' 
?>
</html>
</html>