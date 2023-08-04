

<?php 

  $page_title="Cart";

  include 'header.php';

  $action = isset($_GET['action']) ? $_GET['action'] : "";

  echo "<div >";
    if($action=='removed'){
        echo "<div >";
            echo "Product was removed from your cart!";
        echo "</div>";
    }else if($action=='quantity_updated'){
        echo "<div >";
            echo "Product quantity was updated!";
        echo "</div>";
    }else if($action=='exists'){
        echo "<div>";
            echo "Product already exists in your cart!";
        echo "</div>";
    }else if($action=='cart_emptied'){
        echo "<div>";
            echo "Cart was emptied.";
        echo "</div>";
    }else if($action=='updated'){
        echo "<div>";
            echo "Quantity was updated.";
        echo "</div>";
    }else if($action=='unable_to_update'){
        echo "<div class='alert alert-danger'>";
            echo "Unable to update quantity.";
        echo "</div>";
    }
  echo "</div>";

  // $cart_count variable is initialized in navigation.php
  if($cart_count>0){

    $cart_item->user_id=1;
    $stmt=$cart_item->read();

    $total=0;
    $item_count=0;

    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
        extract($row);

        $sub_total=(float)$price*(float)$quantity;

        echo "
        



        
        
        
        <div class='mainn'>
        
            <div class= 'subb'>     
                    <div>{$name}</div>
                    <div>&#36;" . number_format((float)$price, 2, '.', ',') . "</div>
            </div>
                    
            
                <form class= 'subc' action='update_quantity.php' method=get>
                    <div  style='display:none;'>{$id}</div>
                    
                    <input class='cartin' type='number' name='quantity' value='{$quantity}'  min='1' />
                    <input type='number' name='id' value='{$id}' hidden>
                    <button class='butty' type='submit'>Update</button>
                    <a class='butty' href='remove_from_cart.php?id={$id}'>Delete</a>
                    
                </form>  
                    
            
            
        </div>";

        $item_count += $quantity;
        $total+=$sub_total;
    }

    echo "<div class='tott' >
   <div class='a'><div >Total = &#36;" . number_format($total, 2, '.', ',') . "</div>
   <div style='margin-top:10px'><a class='butti' href='checkout.php?id=$id'>Proceed to Checkout</a></div>
    </div>
    </div>";

  }else{
    echo "<div >";
        echo "<div >";
            echo "No products found in your cart!";
        echo "</div>";
    echo "</div>";
  }


include 'footter.php' 
?>
</html>