<!DOCTYPE html>
<html>

<?php
    require_once("ecom.php");
    if(isset($_POST['submit'])){
        
        $category = mysqli_real_escape_string($mysqli, $_POST['category']);
        $sub_category = mysqli_real_escape_string($mysqli, $_POST['sub_category']);

        $result = mysqli_query($mysqli, "INSERT INTO category (`category`, `sub_category`)VALUES(  '$category', '$sub_category')");

    }

?>

<head>
    <title>Sub-Category Adding</title>
</head>
<body>

    <h3>Add Sub-Category</h3>

<form  method="POST" name="add">

    
    
    <label for="category">Choose a category:</label>
<select id="category" name="category">
  <?php
    // connect to database
    $conn = mysqli_connect("localhost", "root", "", "ecom");

    // query for cars
    $result = mysqli_query($conn, "SELECT * FROM category");

    // loop through results and create option for each car
    while ($row = mysqli_fetch_assoc($result)) {
      echo '<option value="' . $row["category"] . '">' . $row["category"] . '</option>';
    }

    // close database connection
    mysqli_close($conn);
  ?>
</select>
    <!-- <input type="text" name="category" placeholder="Add Category">  -->
        <br>
        <br>
        <br>
    <lebel>Add Sub-Category</lebel>
    <select id="sub_category" name="sub_category">
  <?php
    // connect to database
    $conn = mysqli_connect("localhost", "root", "", "ecom");

    // query for cars
    $result = mysqli_query($conn, "SELECT * FROM category");

    // loop through results and create option for each car
    while ($row = mysqli_fetch_assoc($result)) {
      echo '<option value="' . $row["sub_category"] . '">' . $row["sub_category"] . '</option>';
    }

    // close database connection
    mysqli_close($conn);
  ?>
</select>
    <!-- <input type="text" name="sub_category" placeholder="Add Sub-Category"> 
        <br>
        <br>
        <br> -->
    
    
    <input type="submit" name="submit" value="add">

</form>


<br>

<br>
<br>


<table>
            <tr>
                
                <td>ID</td>
                <td>Category</td>
                <td>Sub-Category</td>

            </tr>

            <?php
            $cat = mysqli_query($mysqli, "SELECT * FROM category ORDER BY id DESC");
              while($res = mysqli_fetch_assoc($cat))

                {
                    echo "<tr>";
                    echo "<td>".$res['id']."</td>";
                    echo "<td>".$res['category']."</td>";
                    
                    echo "<td>".$res['sub_category']."</td>";

                    echo "<td><a href=\"sub_catdelete.php?id=$res[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";
                    echo "</tr>";
                }
            ?>
        </table>







</body>





</html>