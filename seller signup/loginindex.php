<!DOCTYPE html>
<html>
<head>

	<title>SIGN IN</title>
	<link rel="stylesheet" type="text/css" href="../css/styl24.css">
</head>
<div class="header">
  <div class="iconmain"> <img src="../image/website/log.png" style="width:150px"></div>
  <div class="topnav">
  <a  href="../index.php">Home</a>
  <a class="active" href="loginindex.php">Sign in</a>
</div>
<body>
<div class="containerin">
     <form class="form" action="login.php" method="post">
     	<h2>SIGN IN</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
		 <div class="fits">
     	<label class="lal">User Name</label>
     	<input type="text" name="uname" ><br>
		</div> <div class="fits">
     	<label class="lal">Password</label>
     	<input type="password" name="password" ><br>
		 </div>
     	<button class="but" type="submit">Sign In</button>
     </form>
	 <p>Don't have an account</p><a href="sellersignup.php">Sign up</a>
	 </div>
	</body>
	<?php 
include '../footter2.php' 
?>
</html>