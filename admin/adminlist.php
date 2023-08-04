<?php 
require_once("ecom.php");

$result = mysqli_query($mysqli, "SELECT * FROM adminup ORDER BY id DESC");
?>

<html>
    <head>
        <title>Seller Sign up</title>
    </head>

    <body>
<a href="add.php">form</a>
        <table>
            <tr>
                <td>ID</td>
                <td>User Name</td>
                <td>Password</td>

            </tr>

            <?php
              while($res = mysqli_fetch_assoc($result))

                {
                    echo "<tr>";
                    echo "<td>".$res['id']."</td>";
                    echo "<td>".$res['user_name']."</td>";
                    echo "<td>".$res['password']."</td>";
                    echo "<td><a href=\"delete.php?id=$res[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";
                    echo "<td><a href=\"edit.php?id=$res[id]\">Edit</a></td>";
                    echo "</tr>";
                }
            ?>
        </table>
    </body>
</html>