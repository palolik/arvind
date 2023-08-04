<?php
 $id = $_GET['id'];
  // include page header html
 include 'header.php';
  // $cart_count variable is initialized in navigation.php
  if($cart_count>0){

      $cart_item->user_id=1;
      $stmt=$cart_item->read();

      $total=0;
      $item_count=0;

      while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
          extract($row);

          $sub_total=$price*$quantity;

          echo 
          
          "
          <div class= 'subb'>
          <div>{$name}</div>
          <div>&#36;" . number_format($price, 2, '.', ',') . "</div>
        </div>
          <div>";
                 echo $quantity>1 ? "<div class= 'subc'>{$quantity} items</div>" : "<div class= 'subc'>{$quantity} item</div></div>

           
        </div>";

          $item_count += $quantity;
          $total+=$sub_total;
      }

      echo "<div class='tott' >";
          echo "<div >";
              if($item_count>1){
                  echo "<h4>Total ({$item_count} items)</h4>";
              }else{
                  echo "<h4>Total ({$item_count} item)</h4>";
              }
              echo "<h4>&#36;" . number_format($total, 2, '.', ',') . "</h4>";

              echo "<a href='place_order.php' >
             Place Order</a></div></div>";

  }else{
    echo "<div class='col-md-12'>";
        echo "<div class='alert alert-danger'>";
            echo "No products found in your cart!";
        echo "</div>";
    echo "</div>";
  }
?>

<div>
<div>
<?php
$databaseHost = 'localhost';
$databaseName = 'ecom';
$databaseUsername = 'root';
$databasePassword = '';

$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);



    if(isset($_POST['submittt'])){
        
        $cname = mysqli_real_escape_string($mysqli, $_POST['cname']);
        $email = mysqli_real_escape_string($mysqli, $_POST['email']);
        $phone = mysqli_real_escape_string($mysqli, $_POST['phone']);
        $district = mysqli_real_escape_string($mysqli, $_POST['district']);
        $subdistrict = mysqli_real_escape_string($mysqli, $_POST['subdistrict']);
        $address = mysqli_real_escape_string($mysqli, $_POST['address']);
        $productname = mysqli_real_escape_string($mysqli, $_POST['productname']);
        $sellerid = mysqli_real_escape_string($mysqli, $_POST['sellerid']);
        $buyerid = mysqli_real_escape_string($mysqli, $_POST['buyerid']);

        $productid = mysqli_real_escape_string($mysqli, $_POST['productid']);
        $price = mysqli_real_escape_string($mysqli, $_POST['price']);
        $quan = mysqli_real_escape_string($mysqli, $_POST['quan']);
        $deliverydate = mysqli_real_escape_string($mysqli, $_POST['deliverydate']);
        $status = mysqli_real_escape_string($mysqli, $_POST['status']);



        $result = mysqli_query($mysqli, "INSERT INTO delevery (`cname`, `email`,`buyerid`,`phone`,`district`,`subdistrict`,`address`,`productname`,`sellerid`,`productid`,`price`,`quan`,`deliverydate`,`status`)VALUES( '$cname', '$email','$buyerid','$phone','$district','$subdistrict','$address','$productname','$sellerid','$productid','$price','$quan','$deliverydate','$status')");
   
      
 
          
        }
        $query2 = "SELECT sellerid FROM productdetails WHERE id = $id";
        $query3 = "SELECT * FROM buyersignup WHERE id = $idd";

        $result2 = mysqli_query($mysqli, $query2);
          $row2 = mysqli_fetch_assoc($result2);
          $result3 = mysqli_query($mysqli, $query3);
          $row3 = mysqli_fetch_assoc($result3);
?>

<form method="POST" name="add">
<label>Name</label>

    <input style="display:none" type="text" name="cname" value= "<?php echo $row3['name'] ?>"> 
    <input style="display:none" type="text" name="email" value= "<?php echo $row3['emailaddress'] ?>"> 
    <input style="display:none" type="text" name="phone" value= "<?php echo $row3['mobileno'] ?>"> 
    <input style="display:none" type="text" name="district" value= "<?php echo $row3['district'] ?>"> 
    <input style="display:none" type="text" name="subdistrict" value= "<?php echo $row3['subdistrict'] ?>"> 
    <input style="display:none" type="text" name="address" value= "<?php echo $row3['address'] ?>"> 
    <input style="display:none" type="text" name="buyerid" value= <?php echo $idd ?> > 
    <input style="display:none" type="text" name="productname" value= <?php echo $name ?> > 
    <input style="display:none" type="text" name="sellerid" value= "<?php echo $row2['sellerid'] ?>" > 
    <input style="display:none" type="text" name="productid" value= <?php echo $id ?>> 
    <input style="display:none" type="text" name="price" value= <?php echo $total ?> > 
    <input style="display:none" type="text" name="quan" value= <?php echo $item_count ?> > 
    <input style="display:none" type="text" name="deliverydate" value="pending"> 
    <input style="display:none" type="text" name="status" value="pending"> 
    <input type="submit" name="submittt" value="add">

   


</form>
</div>
<button>Sign in</button>
</div>
<div>Payment Box</div>
<?php 

  include 'footter.php' 
?>
