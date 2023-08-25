 <?php
include '../database.php';
include '../header2.php';

$idorder = $_POST['orderid'];



$resultg = mysqli_query($mysqli, "SELECT * FROM delevery  WHERE orderid='$idorder' ");
?>
            <?php
              while($kot = mysqli_fetch_assoc($resultg)){

                
?>

<form action="insertreview.php" method="post" enctype="multipart/form-data">
    <label>Order id:</label>
    <input type="text" autocomplete="off" name='orderq' value="<?php echo $idorder ?>">
    <label>Review:</label>
    <input class="in" type="text" name="review" placeholder="Add review">
    <label>Buyer id:</label>
    <input class="in" type="text" name='buyerid' value="<?php echo $kot["buyerid"] ?>"> 
    <label>Buyer Name:</label>
    <input class="in" type="text" name='buyername' value="<?php echo $kot["cname"] ?>"> 
    <label>Product id:</label>
    <input class="in" type="text" name='productid' value="<?php echo $kot["productid"] ?>"> 
    <label>Rating:</label>
    <input type="radio" id="star5" name="rating" value="5">
    <label for="star5" class="fa fa-star"></label>
    <input type="radio" id="star4" name="rating" value="4">
    <label for="star4" class="fa fa-star"></label>
    <input type="radio" id="star3" name="rating" value="3">
    <label for="star3" class="fa fa-star"></label>
    <input type="radio" id="star2" name="rating" value="2">
    <label for="star2" class="fa fa-star"></label>
    <input type="radio" id="star1" name="rating" value="1">
    <label for="star1" class="fa fa-star"></label>
    <label>date:</label>
    <input type="text" class="in" autocomplete="off" name="date" value="<?php echo strftime("%R %a %d %b"); ?>">
    <input class="namnai" type="submit" value="submit" name="submit">

</form>
<script>
    var stars = document.querySelectorAll("input[name='rating']");

for (var i = 0; i < stars.length; i++) {
  stars[i].addEventListener("click", function() {
    var checked = this.checked;
    for (var j = 0; j < stars.length; j++) {
      stars[j].classList.remove("active");
    }
    if (checked) {
      for (var j = 0; j <= i; j++) {
        stars[j].classList.add("active");
      }
    }
  });
}
</script>
<?php
}
?>
