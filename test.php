<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "ecom";

    $conn = new mysqli($servername, $username, $password, $dbname);

   

 

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
          
                echo  "<div class='stars'>" .
                inner_function($row["rating"]) .
                           " </div>
                <div class=price>৳".$row['price']."</div>
                </div>
             <div >
      
          
             
                         
             </div>";


            }
         
        } else {
        echo "0 results";
        }
    ?>    
      
  