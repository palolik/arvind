

<div class="combox">
    <p>Comments Regurding the Product</p>
<?php



function inner_function($ratingss) {
    $stars = "";
    for ($i = 0; $i < $ratingss; $i++) {
      $stars .= "<img class='ic' src='./image/icons/sf.png'>";
    }
    return $stars;
  }
            $rat = mysqli_query($mysqli, "SELECT * FROM reviews WHERE productid=$id ");
            while ($resy = mysqli_fetch_assoc($rat)) {

                echo "
                <div class=ox12>
                        <div class=ox13>
                        <div><div>". $resy['buyername']."</div><div>".inner_function($resy["rating"])."</div> </div>
                        <div> ". $resy['date'] ." </div>
                        </div>
                        <div class=ox14>"
                        . $resy['review'] ."
                        </div></div>
                        
                        
                      ";
            };
?>
</div>