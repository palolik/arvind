<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/styl10.css">
  <title>Document</title>
</head>
<body>

<div class= 'subb'>
          <div>{$name}</div>
          <div>&#36;" . number_format($price, 2, '.', ',') . "</div>
        </div>
          <div><div class= 'subc'>{$quantity} items</div>" : "<div class= 'subc'>{$quantity} item</div></div>

           
        </div><div class='tott' ><div ><h4>Total ({$item_count} items)</h4><h4>Total ({$item_count} item)</h4><h4>&#36;" . number_format($total, 2, '.', ',') . "</h><a href='place_order.php' >
             Place Order</a></div></div><div class='col-md-12'><div class='alert alert-danger'>No products found in your cart!</div></div>

<div>
<div>


<form method="POST" name="add">
<label>Name</label>

    <input style="display:none" type="text" name="cname" value= ""> 
    <input style="display:none" type="text" name="email" value= ""> 
    <input style="display:none" type="text" name="phone" value= ""> 
    <input style="display:none" type="text" name="district" value= ""> 
    <input style="display:none" type="text" name="subdistrict" value= ""> 
    <input style="display:none" type="text" name="address" value= ""> 
    <input style="display:none" type="text" name="buyerid" value= "" > 
    <input style="display:none" type="text" name="productname" value=""> 
    <input style="display:none" type="text" name="sellerid" value= "" > 
    <input style="display:none" type="text" name="productid" value= > 
    <input style="display:none" type="text" name="price" value= > 
    <input style="display:none" type="text" name="quan" value= > 
    <input style="display:none" type="text" name="deliverydate" value="pending"> 
    <input style="display:none" type="text" name="status" value="pending"> 
    <input type="submit" name="submittt" value="add">

   


</form>
</div>
<button>Sign in</button>
</div>
<div>Payment Box</div>


</body>
</html>
