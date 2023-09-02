<?php 
session_start(); 
// session_unset();
// session_destroy();

?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="icon" type="image/x-icon" href="image/icons/favicon.ico">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'> 
<style>
  .star {
  font-size: 20px;
  color: #ccc;
}

.star.active {
  color: gold;
}
</style>
  </head>

<link rel="stylesheet" href="../css/styl25.css">
<link rel="stylesheet" href="../css/mobb14.css">
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<?php

  $_SESSION['cart']=isset($_SESSION['cart']) ? $_SESSION['cart'] : array();

include 'database.php';
  
  $user_name= isset($_SESSION['user_name']) ? $_SESSION['user_name'] : null ;
          
  $idd	= isset($_SESSION['id']) ? $_SESSION['id'] : null; 


 
      include '../config/database.php';



      include_once "../objects/cart_item.php";

      $database = new Database();
      $db = $database->getConnection();

      $sql = "SELECT * FROM buyersignup WHERE user_name='$user_name' AND id='$idd'";
      $result = $conn->query($sql);    
  ?>    
<style>
   
</style>
<div class="header">
  <div class="iconmain"> <img src="../image/website/log copy.png" style="width:200px"></div>

</div>


<!-- <div class="searchbar">
<form  action="search.php" method="POST">
        <input class="coco" type="text" name="search" placeholder="Search . . .">
        <button class="popo" type="submit" name="submit-search"><img src="../image/website/search.png" style="width:15px"></button>
    </form>

</div> -->
<div class="topnav"><div>
  <a class="active" href="../index.php">Home</a>
  <div class="dropdown">
    <button class="dropbtn">Catagories
      <i class="fa fa-caret-down"></i>
    </button>
    
    <div class="dropdown-content">
    <?php $result7 = mysqli_query($mysqli, "SELECT * FROM category where parent_id=0");
  while($caty = mysqli_fetch_assoc($result7))

{
  $variableToPush = $caty['category'];

echo "<form action='search.php?' method='post'>
 <input  type='submit' name='variable' value='$variableToPush'>                
</form> ";
}
 ?>
    </div>
  </div>
</div>
 <div >
  <form class="fofo" action="search.php" method="POST" >
        <input class="coco" type="text" name="search" placeholder="Search . . .">
        <button class="popo" type="submit" name="submit-search"><img src="../image/website/search.png" style="width:15px"></button>
    </form>
</div>
          <div style="display:flex">
        
              <div>
                  <a href="cart.php">
                                          <?php
                                                  //count the products in the Cart
                                                  $cart_item = new CartItem($db);
                                                  $cart_item->user_id=1; //default to user iwth ID "1" for now
                                                  $cart_count = $cart_item->count();
                                              ?>
                                              Cart (<span class="badge" id="comparison-count"><?php echo $cart_count ?>)</span>
                  </a>
              </div>
              <div>
            <?php
                // print_r( $result->num_rows);
                if ($result->num_rows > 0) 
                { ?>
                  <a href="logout.php" class="btn btn-danger">logout</a>
                  <?php
                }
                else { ?>
                  <a href="./buyer signup/loginindex.php">Sign In</a>
                  
                <?php } ?>
                </div>
          </div>
 
</div>