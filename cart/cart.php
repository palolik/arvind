 
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/styl12.css">
        <title>Document</title>
    </head>
    <body>
           
    <div class='mainn'>
        
        <div class= 'subb'>     
                <div>{$name}</div>
                <div>&#36;" . number_format($price, 2, '.', ',') . "</div>
        </div>
                
         
            <form class= 'subc'>
                <div  style='display:none;'>{$id}</div>
                
                <input class='cartin' type='number' name='quantity' value='{$quantity}'  min='1' />
                <button class='butty' type='submit'>Update</button>
                <a class='butty' href='remove_from_cart.php?id={$id}'>Delete</a>
                
            </form>  
                
        
        
    </div>";



echo "<div class='tott' >
<div class='a'><div >Total = &#36;" . number_format($total, 2, '.', ',') . "</div>
<div style='margin-top:10px'><a class='butti' href='checkout.php?id=$id'>Proceed to Checkout</a></div>
</div>
</div>";

    </body>
    </html>    
     
  
