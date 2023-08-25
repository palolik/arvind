<?php 
include '../database.php';



$resultg = mysqli_query($mysqli, "SELECT * FROM buyersignup  WHERE user_name='$user_name' ");
?>
            <?php
              while($kot = mysqli_fetch_assoc($resultg))

                {
                    echo "<tr>";
                    echo "<div>".$kot['id']."</div>";
                    echo "<div>".$kot['name']."</div>";
                    echo "<div>".$kot['mobileno']."</div>";
                    echo "<div>".$kot['emailaddress']."</div>";
                    echo "<div>".$kot['password']."</div>";
                    echo "<div>".$kot['confirmpassword']."</div>";
                    echo "<div>".$kot['user_name']."</div>";
                    echo "<div><a href=\"edit.php?id=$kot[id]\">Edit</a></div>";
                    echo "</tr>";
                }
            ?>