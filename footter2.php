
<div class="mobfooter">
<div><div class="dropdown">
    <button class="dropbtn"><img class="ic" src="../image/icons/cat.png">
    </button>
    
    <div class="dropdown-content">

	<?php $result7 = mysqli_query($mysqli, "SELECT * FROM category where parent_id=0");
  while($caty = mysqli_fetch_assoc($result7))

{
  $variableToPush = $caty['category'];

echo "<form action='search.php?' method='post' class='htun'>
 <input  type='submit' name='variable' value='$variableToPush'>                
</form> ";
}
 ?>
    </div>
  </div></div>
	<div><a href="../index.php"><img class="ic" src="../image/icons/home.png"></a></div>
	
	<div><a href="cart.php"><img class="ic" src="../image/icons/cart.png"></a>
</div>

	<div> <?php
                // print_r( $result->num_rows);
                if ($result->num_rows > 0) 
                { ?>
				  <a href="buyer signup/home.php"><img class="ic" src="../image/icons/pro.png"></a>
                  <?php
                }
                else { ?>
                  <a href="loginindex.php"><img class="ic" src="../image/icons/pro.png"></a>
                <?php } ?></div>
</div>
<footer>
<link rel="stylesheet" href="styl25.css">

<div class="container1">
  	 	<div class="row1">
			<div class="footer-col">
				<img src="../image/website/logw.png" alt="logo cc">
			</div>
  	 		<div class="footer-col">
  	 			
  	 			<ul class="f">
				   <li class="q">HELP</li>
  	 				<li class="p"><a href="../seller signup/loginindex.php">seller signin</a></li>
  	 				<li class="p"><a href="#">authors</a></li>
  	 				<li class="p"><a href="#">trust & safety</a></li>
					   <li class="p"><a href="affiliate/index.php">Affiliate Marketing</a></li>
  	 			</ul>
  	 		</div>
  	 		<div class="footer-col">
  	 			
  	 			<ul class="f">
					<li class="q">ABOUT</li>
  	 				<li class="p"><a href="#">about us</a></li>
  	 				<li class="p"><a href="#">how it works</a></li>
  	 				<li class="p"><a href="#">security</a></li>
  	 				<li class="p"><a href="#">investor</a></li>
  	 				<li class="p"><a href="#">quotes</a></li>
  	 				<li class="p"><a href="#">news</a></li>

  	 			</ul>
  	 		</div>
  	 		<div class="footer-col">
  	 			
  	 			<ul class="f">
				   <li class="q">TERMS</li>
  	 				<li class="p"><a href="#">privacy policy</a></li>
  	 				<li class="p"><a href="#">terms of service</a></li>
  	 				<li class="p"><a href="#">copyright policy</a></li>
  	 				<li class="p"><a href="#">trade mark</a></li>
  	 			</ul>
  	 		</div>
			   <div class="footer-col">
				   
				   <ul class="f">
				   <li class="q">F&Q<li>
					   <li class="p"><a href="#">How it works?</a></li>
					   <li class="p"><a href="#">What is the ordering process?</a></li>
					   <li class="p"><a href="#">Ask a question</a></li>
					</ul>
			   </div>
  	 	</div>
		<div class="row2">
			<div class="col1">
				<p style="color: white;">&#169 Cloud Company 2021</p>
			</div>
	
		 <div class="col1">
			<div class="social-links">
			 <a href="#"><i class="fab fa-instagram"></i></a>
			 <a href="#"><i class="fab fa-facebook-f"></i></a>
			 <a href="#"><i class="fab fa-youtube"></i></a>
			 <a href="#"><i class="fab fa-pinterest-p"></i></a>
		    </div>
		</div>
	  </div>
  	</div>
</footer>