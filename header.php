<?php 
session_start(); 

?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<link rel="stylesheet" href="css/styl9.css">
<link rel="stylesheet" href="css/mobb2.css">
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<?php

  $_SESSION['cart']=isset($_SESSION['cart']) ? $_SESSION['cart'] : array();

  $sname= "localhost";
  $unmae= "root";
  $password = "";
  $db_name = "ecom";
  
  $conn = mysqli_connect($sname, $unmae, $password, $db_name);
  
  
  $user_name=$_SESSION['user_name'];
          
  $idd	=$_SESSION['id']; 

$conn = mysqli_connect($sname, $unmae, $password, $db_name);

 
      include 'config/database.php';



      include_once "objects/cart_item.php";

      $database = new Database();
      $db = $database->getConnection();

      $sql = "SELECT * FROM buyersignup WHERE user_name='$user_name' AND id='$idd'";
      $result = $conn->query($sql);    
  ?>    
<style>
   
</style>
<div class="header">
  <div class="iconmain"> <img src="image/website/log.png" style="width:200px"></div>

</div>


<div class="searchbar">
<input type="text" placeholder="Search..">
  </div>
<div class="topnav"><div>
  <a class="active" href="index.php">Home</a>
  <div class="dropdown">
    <button class="dropbtn">Catagories
      <i class="fa fa-caret-down"></i>
    </button>
    
    <div class="dropdown-content">

      <a href="#">Link 1</a>
      <a href="#">Link 2</a>
      <a href="#">Link 3</a>
    </div>
  </div>
</div>
 <div >
  <form class="fofo" action="search.php" method="POST">
        <input class="coco" type="text" name="search" placeholder="Search . . .">
        <button class="popo" type="submit" name="submit-search"><img src="image/website/search.png" style="width:15px"></button>
    </form>
</div>
          <div style="display:flex">
              <div>
              <?php while($row = $result->fetch_assoc()) {
 echo "<a href = 'buyer signup/home.php'>ID :". $row["id"] . "  USERNAME: " . $row["user_name"]."</a>"; }?>

                  <a href="./buyer signup/loginindex.php">Sign In</a>
              </div>
              <div>
                  <a href="cart.php">
                                          <?php
                                                  //count the products in the Cart
                                                  $cart_item = new CartItem($db);
                                                  $cart_item->user_id=1; //default to user iwth ID "1" for now
                                                  $cart_count = $cart_item->count();
                                              ?>
                                              Cart <span class="badge" id="comparison-count"><?php echo $cart_count ?></span>
                  </a>
              </div>
          </div>
 
</div>