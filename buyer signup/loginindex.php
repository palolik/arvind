
<!DOCTYPE html>
<html>
<head>
  <title>Sign In</title>
<<<<<<< HEAD
  <link rel="stylesheet" href="../css/styl10.css">
=======
  <link rel="stylesheet" href="../css/styl11.css">
>>>>>>> 77ed7ca96a2e171a8fca356349ee7d7a4cf8eaf6
  <style>
  </style>
</head>

<body>
  
<div class="header">
  <div class="iconmain"> <img src="../image/website/log.png" style="width:150px"></div>
  <div class="topnav">
  <a  href="../index.php">Home</a>
  <a class="active" href="loginindex.php">Sign in</a>
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
        <input  type="text" id="username" name="uname" required>
      </div>
      <div class="fits">
        <label class="lal" for="password">Password:</label>
        <input type="password" id="password" name="password" required>
      </div>
      <button class="but" type="submit">Sign In</button>
    </form>
    <div>don't have an account? <a href="buyersignup.php" >sign up</a></div>
  </div>
</body>
<?php 
include '../footter2.php' 
?>

</html>
