<?php
include("../config/config.php");
   session_start();

   if($_SERVER["REQUEST_METHOD"] == "POST") {

      $myusername = mysqli_real_escape_string($db,$_POST['username']);
      $mypassword = mysqli_real_escape_string($db,$_POST['password']);

      $sql = "SELECT * FROM login WHERE username = '$myusername' and passwd = '$mypassword'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $root = $row['root'];
      $count = mysqli_num_rows($result);

      if($count == 1) {
         $_SESSION['root']=$root;
      }else {
         echo "Your Login Name or Password is invalid";
      }
include("redirect.php");
   }
?>
