<link rel="stylesheet" href="css/styl3.css">
<link rel="stylesheet" href="css/mobb4.css">
<?php

  $_SESSION['cart']=isset($_SESSION['cart']) ? $_SESSION['cart'] : array();

   
 
      include 'config/database.php';



      include_once "objects/cart_item.php";

      $database = new Database();
      $db = $database->getConnection();

  ?>    
<style>
         
        .mos {
            width: 100%;
            height: 100vh;
            margin-top: 30px;
           
        }

        .cos {
            position: relative;
        }

        .cos::before {
            position: absolute;
            content: attr(data-item);
            width: 30px;
            height: 30px;
            background-color: #ff3300;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 18px;
            font-weight: bold;
            border-radius: 100%;
            color: #fff;
            right: 22%;
            top: 4px;
            z-index: -1;
            transition: 0.2s all cubic-bezier(0.175, 0.885, 0.32, 1.275);
        }

        .cos:hover:before {
            transform: scale(1.2);
            top: -1px;
            z-index: 0;
        }

        .cos svg {
            width: 80px;
            height: 80px;
        }

        .cos svg path {
            fill: #292929;
        }
.fofo {
  display: flex;
  width: 500px;
}

.coco{
  padding: 8px;
  border: 1px solid #ccc;
  border-radius: 4px;
  width:100%;
}

.popo{
  padding: 8px 16px;
  background-color: #4CAF50;
  color: white;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}
</style>
<div class="header">
  <div class="iconmain"> <img src="images/log.png" style="width:150px"></div>

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
        <input class="coco" type="text" name="search" placeholder="Search">
        <button class="popo" type="submit" name="submit-search">Search</button>
    </form>
</div>
          <div style="display:flex">
              <div>
                  <a href="./buyer signup/login/loginindex.php">Sign In</a>
              </div>
              <div>
                 
                                          <?php
                                                  //count the products in the Cart
                                                  $cart_item = new CartItem($db);
                                                  $cart_item->user_id=1; //default to user iwth ID "1" for now
                                                  $cart_count = $cart_item->count();
                                              ?>
                                      <section class="mos">
  <a  class="cos" href="cart.php" data-item="<?php echo $cart_count ?>">
      <svg viewBox="0 0 32 32" ><g data-name="Layer 2" id="Layer_2"><path d="M24.33,23H13.53a3,3,0,0,1-2.9-2.21L8,11.26a1,1,0,0,1,.17-.87A1,1,0,0,1,9,10H28a1,1,0,0,1,.77.36,1,1,0,0,1,.21.82l-1.7,9.36A3,3,0,0,1,24.33,23Zm-14-11,2.25,8.26a1,1,0,0,0,1,.74h10.8a1,1,0,0,0,1-.82L26.8,12Z"/><path d="M9,12a1,1,0,0,1-1-.73L6.45,5.73a1,1,0,0,0-1-.73H4A1,1,0,0,1,4,3H5.49A3,3,0,0,1,8.38,5.18L10,10.73A1,1,0,0,1,9.27,12,.84.84,0,0,1,9,12Z"/><path d="M16,29a2,2,0,1,1,2-2A2,2,0,0,1,16,29Zm0-2h0Zm0,0h0Zm0,0h0Zm0,0h0Zm0,0h0Zm0,0h0Zm0,0h0Zm0,0h0Z"/><path d="M22,29a2,2,0,1,1,2-2A2,2,0,0,1,22,29Zm0-2Z"/><path d="M22,17H16a1,1,0,0,1,0-2h6a1,1,0,0,1,0,2Z"/></g><g id="frame"><rect fill="none" height="32" width="32"/></g></svg>
  </a>
</section>
                                     
              </div>
          </div>
 
</div>













































































