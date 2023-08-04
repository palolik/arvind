<?php

include "ecom.php";
$category_id = $_POST["category"];
$result = mysqli_query($mysqli,"SELECT * FROM category WHERE parent_id=$category_id");

?>
<option value="">Select Sub Category</option>
<?php
while($row = mysqli_fetch_array($result)){
    ?>
    <option value="<?php echo $row["id"]; ?>"><?php echo $row["subcategory"]; ?></option>
    <?php
}
?>