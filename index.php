
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


include './views/counter.php';
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