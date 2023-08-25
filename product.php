<html lang="en">

<head>
    <meta charset="UTF-8">


    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product</title>
</head>

<body>

    <?php

    include 'header.php'


    ?>


    <?php
    include 'database.php';

    $mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);


    if (!empty($_POST['id'])) {
        $id = $_POST['id'];
    } else {
        $id = $_SESSION['pid'];
    }
    $_SESSION["pid"] = $id;




    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    
    // Check if the current date already exists in the database
    $today = date("Y-m-d");
    $sql1 = "SELECT * FROM productdetails WHERE visit_date = '$today'";
    $res = $conn->query($sql1);
    
    if ($res->num_rows > 0) {
        // If the date exists, increment the visit count
        $row = $res->fetch_assoc();
        $newCount = $row['visit_count'] + 1;
        $updateSql = "UPDATE productdetails SET visit_count = $newCount WHERE visit_date = '$today'";
        $conn->query($updateSql);
    } else {
        // If the date doesn't exist, insert a new record
        $insertSql = "INSERT INTO productdetails (visit_date, visit_count) VALUES ('$today', 1)";
        $conn->query($insertSql);
    }
    ?>

    <div class="promain">

        <?php
        include 'database.php';

        // Create connection
        $conn = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);

        // Check connection
        if (isset($_POST['create'])) {
            $pid = mysqli_real_escape_string($conn, $_POST['pid']);
            $buyerid = mysqli_real_escape_string($conn, $_POST['buyerid']);
            $comment = mysqli_real_escape_string($conn, $_POST['comment']);
            $resultcomment = mysqli_query($conn, "INSERT INTO comments (`pid`,`buyerid`, `comment`) VALUES ('$pid', '$buyerid', '$comment')");
        }



        $sql = "SELECT * FROM productdetails  WHERE id='$id'";
        $result = $conn->query($sql);

        while ($row = $result->fetch_assoc()) {
            echo  "         <div class='proall' >
                                <div class='bardi' >
                                   <div class='p11'>
                                             <div class='pompom' style='background: url(./image/products/" . $row["folder_location"] . "/" . $row["image"] . ")'>
                                   </div>
                                   <div class='back-frem'>
                                         <div class='back-chang' onclick='background1()'><img src=./image/products/" . $row["folder_location"] . "/" .  $row["image2"] . "></div>
                                            <div class='back-chang' onclick='background2()'><img src=./image/products/" . $row["folder_location"] . "/" . $row["image3"] . "></div>
                                            <div class='back-chang' onclick='background3()'><img src=./image/products/" . $row["folder_location"] . "/" .  $row["image4"] . " ></div>
                                            <div class='back-chang' onclick='background4()'><img src=./image/products/" . $row["folder_location"] . "/" .  $row["image5"] . " ></div>
                                            <div class='back-chang' onclick='background5()'><img src=./image/products/" . $row["folder_location"] . "/" .  $row["image6"] . " ></div>
                                        </div>
                                    </div>
                                <div>

                                <div>
                                    <div class=title>" . $row['name'] . "</div> 
                                    <br>
                                    </div>
                                    <div class=specification>" . $row['specification'] . "</div>
                                    <div class=sdes >" . $row['shortdescription'] . "</div>
                                    <br>
                                    <div class=price>$" . $row['price'] . "</div>
                                    <br>
                                    <div class=category>" . $row['category'] . " </div>
                                    <div class=weight>" . $row['weight'] . "</div>
                                    <div class=longdescription>" . $row['longdescription'] . "
                                    </div><div class=variation>" . $row['variation'] . " </div>
                                    <br><br> <div class=availability>" . $row['availability'] . " </div>
<div class=mn>
                                    <button class=add ><a class=addd href='add_to_cart.php?id={$row['id']}'>Add to Cart</a></button></div>
                                </div>   
             
                
                            </div>  
              
                 "; ?>

<script>
    function background1() {
        document.querySelector('.pompom').style.background = "url('./image/products/<?php echo $row['folder_location']; ?>/<?php echo $row['image2']; ?>') center center / cover";
    }

    function background2() {
        document.querySelector('.pompom').style.background = "url('./image/products/<?php echo $row["folder_location"]; ?>/<?php echo $row["image3"]; ?>') center center / cover";
    }

    function background3() {
        document.querySelector('.pompom').style.background = "url('./image/products/<?php echo $row["folder_location"]; ?>/<?php echo $row["image4"]; ?>') center center / cover";
    }

    function background4() {
        document.querySelector('.pompom').style.background = "url('./image/products/<?php echo $row["folder_location"]; ?>/<?php echo $row["image5"]; ?>') center center / cover";
    }

    function background5() {
        document.querySelector('.pompom').style.background = "url('./image/products/<?php echo $row["folder_location"]; ?>/<?php echo $row["image6"]; ?>') center center / cover";
    }
</script>



<!-- 
            <?php

            $cat = mysqli_query($mysqli, "SELECT * FROM comments WHERE pid=$id ");
            while ($res = mysqli_fetch_assoc($cat)) {

                echo $res['comment'] . "<br>";

                echo $res['time'] . "</td><br><br>";
            };


            include 'comments/addcom.php';
            ?> -->
        <?php "
   
            ";
        }
       ?>




    </div>

        <div class="proside">
            <?php
            include 'database.php';

            $conn = new mysqli($databaseHost, $databaseUsername, $databasePassword, $databaseName);





            $sql = "SELECT * FROM productdetails ";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {

                while ($row = $result->fetch_assoc()) {
                    echo
                    "<div class=cardi value='read more' name='readmore'  style=cursor: pointer;>
      <div class='bontainer'>
         <img  src=./image/products/" . $row["folder_location"] . "/" . $row["image"] . "  class='image' >
         <div class='middle'>
            <form action='product.php' method='post'>
                 <input class='text' type='submit' value='details' name='readmore'>
 
                <input  type='hidden' name='id' value=" . $row['id'] . ">                
            </form> 
         </div>
       </div>
                 
       <div class='details'>
                    <div class='dd'>
                        <div class=title>" . $row['name'] . "</div> 
                   <div class=price>৳" . $row['price'] . "</div>
                    </div>
           </div>";
                }
            }

            ?>

      
    </div>
        </div></div></div>
</body>
<?php
include 'footter.php'
?>



</html>

</html>