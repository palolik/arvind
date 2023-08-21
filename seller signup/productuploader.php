<?php
session_start();
include '../database.php';

$conn = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);

if (!$conn) {
    echo "Connection failed!";
}

$user_name = $_SESSION['user_name'];

$id    = $_SESSION['id'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/styl18.css">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Uploading</title>
</head>
<div class="header">
    <div class="iconmain"> <img src="../image/website/log.png" style="width:150px"></div>
    <div class="topnav">
        <a href="home.php">Home</a>
        <a href="Product List.php">Product List</a>
        <a class="active" href="productuploader.php">Product Uploader</a>
        <a href="Pending Order.php">Pending Order</a>
        <a href="Statistics.php">Statistics</a>
        <a href="logout.php"> <input type="submit" name="" value="Logout"></a>
    </div>
    <div>

    </div>

</div>

<body>

    <!-- 

multi image uploader fixed 

-->

    <?php


    $cat = mysqli_query($conn, "SELECT * FROM sellersignup WHERE id='$id' ");
    while ($res = mysqli_fetch_assoc($cat)) {








    ?>

        <!DOCTYPE html>
        <html lang="en">

        <head>
            <meta charset="UTF-8">
            <link rel="stylesheet" href="../css/styl18.css">

            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Product Uploading</title>
        </head>

        

        </div>

        <body>
            <form style="display: flex;flex-direction: column;" action="productuploader.php" method="post" enctype="multipart/form-data">
                <div class="imupform">
                    <div class="imup1">

                        <label>Name:</label>
                        <input class="in" type="text" name="name" placeholder="Name">
                        <input class="in" type="text" name="folder_location" value="<?php echo  $res['foldername'] ?>">

                        <label>Quantity:</label>
                        <input class="in" type="text" name="quantity" placeholder="quantity">
                        <input class="in" style="display:none" type="text" name="sellerid" value="<?php echo $id ?>">
                        <label>Price:</label>
                        <input class="in" type="text" name="price" placeholder="Price">
                        <label>Category:</label>
                            <select id="category" name="category">
                                <?php
                                    // connect to database
                                    include '../database.php';

                                    $conn = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);

                                    // query for cars
                                    $result = mysqli_query($conn, "SELECT * FROM category");
                                    $result = mysqli_query($conn, "SELECT * FROM category WHERE parent_id=0");

                                    // loop through results and create option for each car
                                    while ($row = mysqli_fetch_assoc($result)) {
                                    
                                    echo '<option value="' . $row["id"] . '">' . $row["category"] . '</option>';
                                    }

                                    // close database connection
                                    mysqli_close($conn);
                                ?>
                            </select>
                            <br>
                            <br>
                        <label>Sub Category:</label>
                            <select id="subcategory" name="subcategory">
                                <?php
                                    // connect to database
                                    include '../database.php';

                                    $conn = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);

                                    // query for cars
                                    
                                    $result = mysqli_query($conn, "SELECT * FROM category");

                                    // loop through results and create option for each car
                                    while ($row = mysqli_fetch_assoc($result)) {
                                    
                                    echo '<option value="' . $row["parent_id"] . '">' . $row["subcategory"] . '</option>';
                                    }

                                    // close database connection
                                    mysqli_close($conn);
                                ?>
                            </select>
                    </div>


                    <div class="imup3">
                        <label>Specification:</label>
                        <input type="text" name="specification" placeholder="Specification">
                        <br>
                        <label>Weight:</label>
                        <br>
                        <input type="text" name="weight" placeholder="Weight">

                        <label>Availability:</label>
                        <input type="text" name="availability" placeholder="Availability">
                        <br>
                        <label>Variation:</label>
                        <br>
                        <input type="text" name="variation" placeholder="Variation">
                    </div>

                    <div class="imup4">
                        <label>Short description:</label>
                        <textarea class="in1" type="text" name="shortdescription" placeholder="Short description">
                        </textarea>
                        <label>Long description:</label>
                        <textarea class="in2" type="text" name="longdescription" placeholder="Long description">
                        </textarea>
                    </div>

                </div>




                <div class="imup">
                    <div>
                        <label for="image_upload">
                            <h2>Image</h2>
                        </label>
                        <input type="file" name="image" id="image">
                    </div>
                    <div>
                        <label for="image_upload">
                            <h2>Image2</h2>
                        </label>
                        <input type="file" name="image2" id="image2">
                    </div>
                    <div>
                        <label for="image_upload">
                            <h2>Image3</h2>
                        </label>
                        <input type="file" name="image3" id="image3">
                    </div>
                    <div>
                        <label for="image_upload">
                            <h2>Image4</h2>
                        </label>
                        <input type="file" name="image4" id="image4">
                    </div>
                    <div>
                        <label for="image_upload">
                            <h2>Image5</h2>
                        </label>
                        <input type="file" name="image5" id="image5">
                    </div>
                    <div>
                        <label for="image_upload">
                            <h2>Image6</h2>
                        </label>
                        <input type="file" name="image6" id="image6">
                    </div>
                </div>
                <input  class="namnai" type="submit" value="submit" name="submit">
            </form>












        <?php

            include '../database.php';

            $conn = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);


        if (isset($_POST['submit'])) {


            $image = $_FILES['image']['name'];
            $target = "../image/products/" . $res['foldername'] . "/" . basename($_FILES['image']['name']);
            $image2 = $_FILES['image2']['name'];
            $target2 = "../image/products/" . $res['foldername'] . "/" . basename($_FILES['image2']['name']);
            $image3 = $_FILES['image3']['name'];
            $target3 = "../image/products/" . $res['foldername'] . "/" . basename($_FILES['image3']['name']);
            $image4 = $_FILES['image4']['name'];
            $target4 = "../image/products/" . $res['foldername'] . "/" . basename($_FILES['image4']['name']);
            $image5 = $_FILES['image5']['name'];
            $target5 = "../image/products/" . $res['foldername'] . "/" . basename($_FILES['image5']['name']);
            $image6 = $_FILES['image6']['name'];
            $target6 = "../image/products/" . $res['foldername'] . "/" . basename($_FILES['image6']['name']);

            if ($conn) {
            } else {
            }

            if ($conn) {

                $name = $_POST['name'];
                $folder_location = $_POST['folder_location'];

                $quantity = $_POST['quantity'];
                $sellerid = $_POST['sellerid'];
                $specification = $_POST['specification'];
                $shortdescription = $_POST['shortdescription'];
                $longdescription = $_POST['longdescription'];
                $variation = $_POST['variation'];
                $price = $_POST['price'];
                $category = $_POST['category'];
                $subcategory = $_POST['subcategory'];
                $weight = $_POST['weight'];
                $availability = $_POST['availability'];
                $pre = $_POST['pre'];

                $image = $_FILES['image']['name'];
                $image2 = $_FILES['image2']['name'];
                $image3 = $_FILES['image3']['name'];
                $image4 = $_FILES['image4']['name'];
                $image5 = $_FILES['image5']['name'];
                $image6 = $_FILES['image6']['name'];




                $sql = "INSERT INTO productdetails (`name`,`folder_location`,`quantity`,`sellerid`, `specification`, `shortdescription`, `longdescription`, `variation`, `price`, `category`, `subcategory`, `weight`, `availability`, `image`,`image2`,`image3`,`image4`,`image5`,`image6`)VALUES('$name','$folder_location','$quantity','$sellerid' , '$specification', '$shortdescription', '$longdescription', '$variation', '$price', '$category', '$subcategory', '$weight', '$availability', '$image', '$image2', '$image3', '$image4', '$image5', '$image6')";
                $result = mysqli_query($conn, $sql);
                if ($result) {
                } else {
                }
                if (
                    move_uploaded_file($_FILES['image']['tmp_name'], $target) &&
                    move_uploaded_file($_FILES['image2']['tmp_name'], $target2) &&
                    move_uploaded_file($_FILES['image3']['tmp_name'], $target3) &&
                    move_uploaded_file($_FILES['image4']['tmp_name'], $target4) &&
                    move_uploaded_file($_FILES['image5']['tmp_name'], $target5) &&
                    move_uploaded_file($_FILES['image6']['tmp_name'], $target6)
                ) {
                } else {
                }
            }
        };
    }


        ?>




        <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>

        <script>
        $(document).ready(function(){
        $('#category').on('change',function(){
            var category_id = this.value;
            $.ajax({
            url: "get-subcat.php",
            type: "POST",
            data: {
                category: category_id
            },
            cache: false,
            success: function(result){
                $("#subcategory").html(result);
            }
            });
        });
        });

        </script>











        </body>

        </html>