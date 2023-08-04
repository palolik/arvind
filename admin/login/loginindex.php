<!DOCTYPE html>
<html>
<head>
<style>
		body {
    background: #1690A7;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    flex-direction: column;
}

* {
    font-family: sans-serif;
    box-sizing: border-box;
}

	</style>
	<title>SIGN IN</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
     <form class="form" action="login.php" method="post">
     	<h2>SIGN IN</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
     	<label>User Name</label>
     	<input type="text" name="uname" placeholder="User Name"><br>

     	<label>Password</label>
     	<input type="password" name="password" placeholder="Password"><br>

     	<button type="submit">Login</button>
		<br>
		
     </form>
	 <div><a href="../add.php">Don't have an account</a></div>
</body>
</html>