<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "ecom";

    $conn = new mysqli($servername, $username, $password, $dbname);

   

 

    $sql = "SELECT * FROM productdetails";
    $result = $conn->query($sql);

    if ($result->num_rows > 0)
    
    {

    while($row = $result->fetch_assoc()) { 
        $name = $row["name"];
          echo  "<div class='stars'><img class='ic' src='./image/icons/sf.png'><img class='ic' src='./image/icons/sf.png'><img class='ic' src='./image/icons/sh.png'><img class='ic' src='./image/icons/se.png'><img class='ic' src='./image/icons/se.png'>" 
                    


                    
          .$row['rating']." </p></div>
          <div class=price>৳".$row['price']."</div>
          </div>
       <div >

    
       
          
  </div>        
        
          

          
  </div>";


}
$json = json_encode([
    "name" => $name
  ]);
 echo $json;
} else {
echo "0 results";
}
?>       

<html>
<head>
<title>Rating with JavaScript</title>
</head>
<style>
    .stars span {
  width: 20px;
  height: 20px;
  background-color: #ccc;
  border-radius: 50%;
  display: inline-block;
  margin: 0 5px;
}

.stars span:first-child {
  background-color: gold;
}
</style>
<body>

<script>
// const stars = document.querySelectorAll(".star");
// const rating = 5;

// for (let i = 0; i < rating; i++) {
//   stars[i].classList.add("filled");
// }

const data = JSON.parse(json);

// Display the data on a page
const name = data["name"];

document.querySelector("#name").textContent = name;
</script>
</body>
</html>