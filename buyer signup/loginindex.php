<!DOCTYPE html>
<html>

<head>
  <title>Sign In</title>
  <link rel="stylesheet" href="../css/styl15.css">
  <link rel="stylesheet" href="../css/mobb8.css">

  <style>
  </style>
</head>

<body>

  <div class="header">
    <div class="iconmain"> <img src="../image/website/log.png" style="width:200px"></div>

  </div>


  <div class="searchbar">
    <form action="search.php" method="POST">
      <input class="coco" type="text" name="search" placeholder="Search . . .">
      <button class="popo" type="submit" name="submit-search"><img src="image/website/search.png" style="width:15px"></button>
    </form>

  </div>
  <div class="topnav">
    <div>
      <a class="active" href="index.php">Home</a>
      
    </div>
   
  </div>
  <div class="containerin">
    <form class="form" action="login.php" method="post">
      <h2>SIGN IN</h2>
      <?php if (isset($_GET['error'])) { ?>
        <p class="error"><?php echo $_GET['error']; ?></p>
      <?php } ?>
      <div class="fits">
        <label class="lal" for="username">Username:</label>
        <input class="lals" type="text" id="username" name="uname" required>
      </div>
      <div class="fits">
        <label class="lal" for="password">Password:</label>
        <input class="lals" type="password" id="password" name="password" required>
      </div>
      <button class="but" type="submit">Sign In</button>
    </form>
    <div>don't have an account? <a href="buyersignup.php">sign up</a></div>
  </div>
</body>
<?php
include '../footter2.php'
?>

</html>