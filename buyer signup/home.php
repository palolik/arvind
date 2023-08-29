<?php

include '../database.php';
$conn = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);


//$user_name=$_SESSION['user_name'];
        
//$id	=$_SESSION['id']; 
?>
<?php  
$mydate = getdate(date('U'));
$date = "$mydate[weekday], $mydate[month] $mydate[mday], $mydate[year]";



    
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<link rel="stylesheet" href="style1.css">
    <link rel="stylesheet" href="fontawesome/css/all.css">
    <script src="jquery/jquery.js"></script>
    <link rel="stylesheet" href="../css/styl25.css">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
</head>
<body>
<!-- <?php

$sql = "SELECT * FROM buyersignup ";

$sql = "SELECT * FROM buyersignup WHERE user_name='$user_name' AND id='$id'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {

while($row = $result->fetch_assoc()) {
    echo "<p>cloud id :". $row["id"] . $row["user_name"]."</p>";
}

} else {
echo "0 results";
}
?> -->

<?php
    include '../header2.php';
?>

 
  <div class="dashb">
    <div>
        <p class="titlepro">Pending Review</p>
    <div class="dasha">
 <?php include 'reviewpending.php';?> 


    </div>
</div>
   <div>        <p class="titlepro">Pending Delivery</p>
<div class="dasha"><?php include 'pendingdelivery.php'; ?></div></div>
<div>        <p class="titlepro">Profile Info</p>
<div class="dasha"><?php include 'profileinfo.php'; ?></div></div>
   </div>
    
    



</body>
<?php
    include '../footter2.php';
?>
    <script src="main.js"></script>

</html>


<?php
include '../database.php';

$idorder = $orderid;



$resultg = mysqli_query($mysqli, "SELECT * FROM delevery  WHERE orderid='$idorder' ");
?>
            <?php
              while($kot = mysqli_fetch_assoc($resultg)){

                
?>

<div class="review-modal" style="display:none">
                    <div class="review-bg"></div>
                    <div class="rmp">

                        <div class="rpc">
                            <span><i class="far fa-times"></i></span>
                        </div>
                        <div class="rps" align="center">
                            <i class="fa fa-star" data-index="0" style="display:none"></i>
                            <i class="fa fa-star" data-index="1"></i>
                            <i class="fa fa-star" data-index="2"></i>
                            <i class="fa fa-star" data-index="3"></i>
                            <i class="fa fa-star" data-index="4"></i>
                            <i class="fa fa-star" data-index="5"></i>
                        </div>
                        <input type="hidden" value="" class="starRateV">
                        <input type="hidden" value="<?php echo $date ?>" class="rateDate">

                        <div class="rptf" align="center" style="display:none">
                            <input type="text" class="orderq" placeholder="orderq" value="<?php echo $idorder ?>">
                        </div>
                        <div class="rptf" align="center" style="display:none">
                            <input type="text" class="buyername" placeholder="name."  value="<?php echo $kot["cname"] ?>">
                        </div>
                        <div class="rptf" align="center" style="display:none">
                            <input type="text" class="productid" placeholder="pid."  value="<?php echo $kot["productid"] ?>">
                        </div>
                        <div class="rptf" align="center">
                            <input type="text" class="review" placeholder="review.">
                        </div>
                        <div class="rptf" align="center" style="display:none">
                            <input type="text" class="buyerid" placeholder="bid." value="<?php echo $kot["buyerid"] ?>">
                        </div>
                     
                        <div class="rate-error" align="center"></div>
                        <div class="rpsb" align="center">
                            <button class="rpbtn">Add Review</button>
                        </div>

                    </div>
                </div>

                <?php
}
?>
             