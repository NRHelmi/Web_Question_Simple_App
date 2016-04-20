<?php
session_start();

if($_SESSION['root']==1){
  header("location: ../composants/parent.php");
}
elseif($_SESSION['root']==0){
  header("location: ../composants/child.php");
}
else{
  header("location: ../index.php");
}
 ?>
