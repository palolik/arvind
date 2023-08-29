<?php

include '../database.php';

global $orderid;
$sql = "SELECT * FROM delevery WHERE buyerid = $idd AND stat = 'delivered'";
$result = $conn->query($sql);

if ($result->num_rows == 0) {
    echo "<div class=kom><div>There is no products to give a review</div></div>";
  }
   else {
while ($row = $result->fetch_assoc()) {
  $productid = $row['productid'];

  $sql2 = "SELECT folder_location, image FROM productdetails WHERE id = $productid";
  $result2 = $conn->query($sql2);

  $row2 = $result2->fetch_assoc();
  $folder_location = $row2['folder_location'];
  $image_name = $row2['image'];


  $orderid = $row['orderid'];
  echo  "<div class='sagol'>
                <div class =sag><img  src=../image/products/". $folder_location."/". $image_name ."  class='image54'>
                </div>
                    <div class =gol> <div><div><p class='s'>Status:".$row['stat']. "</p></div>".$row['productname']."</div>
                        <div class='pil'><p class='pib'>Price: </p><p>".$row['price']."</p></div>
                            <div class='pil'><p class='pib'>Quantity: </p><p>".$row['quan']."</p></div>
                                <div class='pil'><p class='pib'> Date: </p><p>".$row['deliverydate']."</p></div>
                            
                        <div class='pil'><p class='pib'>Address: </p><p>".$row['address']."</p></div>
                    <div> <div class='rrb'>
                    <button class='rbtn opmd'>Review</button>
                </div> </div>
                  </div>            
                </div>";
}
  }
?>

