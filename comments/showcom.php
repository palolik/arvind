

<div class="combox">
    <p>Comments Regurding the Product</p>
<?php
            $ratt = mysqli_query($mysqli, "SELECT * FROM comments WHERE pid=$id ");
            while ($restt = mysqli_fetch_assoc($ratt)) {

                echo "
                <div class=ox12>
                        <div class=ox13>
                        <div><div>". $restt['buyername']."</div></div>
                        <div> ". $restt['time'] ." </div>
                        </div>
                        <div class=ox14><p>"
                        . $restt['comment'] ."
                        </p></div></div>
                        
                        
                      ";
            };
?>
</div>