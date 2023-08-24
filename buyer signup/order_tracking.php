<?php

include '../database.php';


$sql = "SELECT * FROM delevery where buyerid=$idd";
    $result = $conn->query($sql);

    while($row = $result->fetch_assoc()) { 
          echo  "<div class='sagol'>
                
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
