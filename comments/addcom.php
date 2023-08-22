<?php
if(isset($_POST['create'])){
    $pid = mysqli_real_escape_string($conn, $_POST['pid']);
    if (isset($_SESSION['buyerid'])) {
        $buyerid = $_SESSION['buyerid'];
      } else {
        $buyerid = generate_buyerid();
        $_SESSION['buyerid'] = $buyerid;
      }
      if (isset($_SESSION['buyername'])) {
        $buyername = $_SESSION['buyername'];
      } else {
        $buyername = 'anonymus member';
      }
    $comment = mysqli_real_escape_string($conn, $_POST['comment']);   
    $time = mysqli_real_escape_string($conn, $_POST['time']);   
    $resultcomment = mysqli_query($conn, "INSERT INTO comments (`pid`,`buyerid`, `buyername`,`comment`,`time`) VALUES ('$pid', '$buyerid','$buyername',  '$comment' , '$time')");
}
function generate_buyerid(){
    return random_int(1, 100000);
  }
  
?>
<form  method="post" class="comq">
            <input style='display:none;' type=text autocomplete="off" name='pid' value='<?php echo $id?> '><br>
            <input style='display:none;' type=text autocomplete="off" name='buyerid'><br>
            <input style='display:none;' type=text autocomplete="off" name='buyername'><br>

            <input style='margin:10px; width:-webkit-fill-available' type=text autocomplete="off" name='comment'><br>
           <input style='display:none;' type=text autocomplete="off" name="time" value="<?php echo (strftime("%R %a %d %b")); ?>" >
            <button style='margin:10px; width:-webkit-fill-available' type='submit' name='create'>Create</button>
</form>  
          

