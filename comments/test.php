
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">


    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
</head>

<?php 
include '../header2.php' ;
?>
<body>
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
</html>