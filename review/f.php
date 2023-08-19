<?php
session_start();

include '../database.php';
$conn = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);

if (!$conn) {
    echo "Connection failed!";
    exit; // Exit if connection fails
}



if (!empty($_POST['productid'])) {
    $productid = $_POST['productid'];
} else {
    $productid = $_SESSION['productid'];
}
  $_SESSION["productid"] = $productid;



$user_name = $_SESSION['user_name'];
$idd = $_SESSION['id'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/styl10.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/b830a6716b.js" crossorigin="anonymous"></script>
    <title>Review</title>
</head>

<body>

    <?php
    $sql = "SELECT * FROM buyersignup WHERE user_name=? AND id=?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "si", $user_name, $idd);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    ?>

    <?php
        $sql1 = "SELECT * FROM delevery WHERE productid='$productid'";
        $result1 = mysqli_query($conn,$sql1);
    ?>

    <?php while ($row = mysqli_fetch_assoc($result)) {
        echo "<a href='buyer signup/home.php'>ID: " . $row["id"] . "  USERNAME: " . $row["user_name"] . "</a>";
    } ?>

    <h2 align="center">Add Review</h2>

    <form style="display: flex;flex-direction: column;" action="f.php" method="post" enctype="multipart/form-data">
        <div class="imupform">
            <div class="imup1">
                <label>Review:</label>
                <input class="in" type="text" name="review" placeholder="Add review">
                <input type="hidden" autocomplete="off" name='id' value='<?php echo $idd ?>'>
                <label>Rating:</label>
                <i class="fa fa-star" data-index="0"></i>
                <i class="fa fa-star" data-index="1"></i>
                <i class="fa fa-star" data-index="2"></i>
                <i class="fa fa-star" data-index="3"></i>
                <i class="fa fa-star" data-index="4"></i>
                <br>
                <input type="hidden" autocomplete="off" name='id' value='<?php echo $productid ?>'>
                <label>time:</label>
                <input type="text" class="in" autocomplete="off" name="time" value="<?php echo strftime("%R %a %d %b"); ?>">
            </div>
        </div>

        <div class="imup">
            <div>
                <label for="image_upload"><h2>Image1</h2></label>
                <input type="file" name="image" id="image">
            </div>
            <div>
                <label for="image_upload"><h2>Image2</h2></label>
                <input type="file" name="image2" id="image2">
            </div>
            <div>
                <label for="image_upload"><h2>Image3</h2></label>
                <input type="file" name="image3" id="image3">
            </div>
        </div>
        <input class="namnai" type="submit" value="submit" name="submit">
    </form>

    <?php
    if (isset($_POST['submit'])) {

        
        // $productid = $_POST['productid'];
        $review = $_POST['review'];
        
        $time = $_POST['time'];
        $image = $_FILES['image']['name'];
        $target = "../image/review/" . basename($_FILES['image']['name']);
        $image2 = $_FILES['image2']['name'];
        $target2 = "../image/review/" . basename($_FILES['image2']['name']);
        $image3 = $_FILES['image3']['name'];
        $target3 = "../image/review/" . basename($_FILES['image3']['name']);

         $sql = "INSERT INTO review (`review`, `buyerid`, `productid`, `time`, `image`,`image2`,`image3`) VALUES ('$review', '$idd', '$productid', '$time', '$image', '$image2', '$image3')";
        $result = mysqli_query($conn, $sql);


        
      
        if (move_uploaded_file($_FILES['image']['tmp_name'], $target) &&
            move_uploaded_file($_FILES['image2']['tmp_name'], $target2) &&
            move_uploaded_file($_FILES['image3']['tmp_name'], $target3) 
           ) {
            // Success message
        } else {
            // Error message
        }
    }
    ?>

    <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>



<script>

    var ratedIndex = -1;

    $(document).ready(function(){
        resetStarColor();

        if(localStorage.getItem('ratedIndex') !=null){
            setStars(parseInt(localStorage.getItem('ratedIndex')));
            ratedIndex = parseInt(localStorage.getItem('ratedIndex'));
        }

        $('.fa-star').on('click', function(){
            ratedIndex = parseInt($(this).data('index'));
            localStorage.setItem('ratedIndex', ratedIndex);
            saveToTheDB();
            setStars(ratedIndex); // Update the stars color immediately after clicking
        });

        $('.fa-star').mouseover(function(){
            resetStarColor();

            var currentIndex = parseInt($(this).data('index'));
            setStars(currentIndex);
        });

        $('.fa-star').mouseleave(function(){
            resetStarColor();

            if (ratedIndex != -1){
                setStars(ratedIndex);
            }
        });
    });

    function saveToTheDB(){
        $.ajax({
            url: "save_rating.php", // Change this to the correct PHP file to handle the AJAX request
            method: "POST",
            data: {
                ratedIndex: ratedIndex
            },
            success: function(response) {
                // Optionally, you can handle the response from the server here if needed
            },
            error: function(xhr, status, error) {
                // Optionally, you can handle errors here if the AJAX request fails
            }
        });
    }

    function setStars(max){
        for (var i=0; i <= max; i++)
            $('.fa-star:eq('+i+')').css('color', '#1effbb');
    }

    function resetStarColor(){
        $('.fa-star').css('color', 'black');
    }
</script>

<!-- ... (remaining HTML code) ... -->


</body>

</html>
