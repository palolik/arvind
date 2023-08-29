
<?php

include 'database.php';

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styl25.css">
    <link rel="stylesheet" href="css/mobb14.css">
    <title>Search Page</title>
</head>
<?php 
include 'header.php' 

?>
<body>



        <?php
            if(isset($_POST['variable'])){
              $variableToPush = $_POST['variable'];
              $sqly = "SELECT id FROM category WHERE category = '$variableToPush'";
              $resultr = $conn->query($sqly);
              $row = $resultr->fetch_assoc();
              $idg = $row['id'];
              $sqlg = "SELECT * FROM productdetails WHERE category LIKE '%$idg%'";
              $result = mysqli_query($conn, $sqlg);
              $queryResult = mysqli_num_rows($result);
                ?>               
                <div class="prorow">
                <?php 

if ($result->num_rows > 0) {
  function inner_function($rating) {
    $stars = "";
    for ($i = 0; $i < $rating; $i++) {
      $stars .= "<img class='ic' src='./image/icons/sf.png'>";
    }
    return $stars;
  }
                    while($row = mysqli_fetch_assoc($result)){ 
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
                  echo "there is no match for this Category";
                } 
              }
                elseif(isset($_POST['submit-search'])){
                $search = mysqli_real_escape_string($conn, $_POST['search']);
                $sql = "SELECT * FROM productdetails WHERE name LIKE '%$search%' OR category LIKE '%$search%' OR price LIKE '%$search%'";
                $result = mysqli_query($conn, $sql);
                $queryResult = mysqli_num_rows($result);

            
                ?> 
                
                <div class="prorow">

                <?php 

               

if ($result->num_rows > 0)
    
{
  function inner_function($rating) {
    $stars = "";
    for ($i = 0; $i < $rating; $i++) {
      $stars .= "<img class='ic' src='./image/icons/sf.png'>";
    }
    return $stars;
  }
                    while($row = mysqli_fetch_assoc($result)){ 
       

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
                }

                else {
                  echo "There are no results matching your search!";

                }
                } else {
                    echo "There are no results matching your search!";
                }
            
        ?>

    </div>





</body>



<?php 
include 'footter.php' 
?>

</html>