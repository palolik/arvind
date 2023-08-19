<!DOCTYPE html>
<html>

<?php
    require_once("../database.php");
    if(isset($_POST['submit'])){
        
        $sub_category = mysqli_real_escape_string($mysqli, $_POST['sub_category']);
       

        $result = mysqli_query($mysqli, "INSERT INTO sub_category (`sub_category`)VALUES('$sub_category')");

    }

?>

<head>

    <title>Sub - Category Adding</title>
    <style>
        
    .kp{ 
      margin:0px;
      list-style-type:none;
      display:block;
      font-size:medium;
      width:100px;
      color:#00203fff;
      font-size:12px;
      padding:10px; 
      width: 150px;
      background-color: #ADEFD1FF;
      color:midnightblue;
      text-decoration:none;
      }   
      .kpa{ 
      margin:0px;
      list-style-type:none;
      display:block;
      font-size:medium;
      width:100px;
      color:#00203fff;
      font-size:12px;
      padding:10px; 
      width: 150px;
      background-color:lightseagreen;      
      color:midnightblue;
      text-decoration:none;
      }  

    .kp:hover{
      background-color:aqua;
      }
      .adnav{
display: flex;
flex-direction: row;

      }
  
</style> 
</head>
<body>
<div class='adnav'><a class='kp'></a> 
<a class="kp" href="../admin/login/home.php">Home</a>

<a class="kp" href="../admin/productlist/productlist.php">Product List</a>
<a class="kp" href="../admin/buyerlist/buyerlist.php">Buyer List</a>
<a class="kp" href="../admin/sellerlist/show.php">Seller List</a>
<a class="kp" href="../admin/category.php">Category</a>
<a class="kpa" href="sub_cat.php">SubCategory</a>
<a class="kp" href="../affiliate/show.php">Affiliate List</a>
<a class="kp" href="../admin/statistics.php">Statistics</a>
<a class="kp" href="../admin/folder.php">add folder</a>
<a  href="logout.php"> <input class="kp" type="submit" name="" value="Logout" ></a>
</div>




    <h3>Add Sub-Category</h3>

<form  method="POST" name="add">

    <lebel>Add Sub-Category</lebel>
    <input type="text" name="sub-category" placeholder="Add Sub-Category"> 
        <br>
        <br>
        <br>
    
    
    <input type="submit" name="submit" value="add">

</form>


<br>

<br>
<br>


<table>
            <tr>
                
                <td>ID</td>
                <td>Sub-Category</td>
                

            </tr>

            <?php
            $cat = mysqli_query($mysqli, "SELECT * FROM sub_category ORDER BY id DESC");
              while($res = mysqli_fetch_assoc($cat))

                {
                    echo "<tr>";
                    echo "<td>".$res['id']."</td>";
                    echo "<td>".$res['sub_category']."</td>";
                    
                    echo "<td><a href=\"catdelete.php?id=$res[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";
                    echo "</tr>";
                }
            ?>
        </table>
</body>





</html>

