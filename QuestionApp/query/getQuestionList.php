<?php
include("../config/config.php");
  $sql = "SELECT * FROM module";
  $result1 = mysqli_query($db,$sql);
  echo "<ul>";
  while($row1 = mysqli_fetch_array($result1,MYSQLI_ASSOC)){
    echo "<li><h2 name=\"response\">".$row1['module']."</li>";
    $id_module=$row1['id'];
    $sql = "SELECT * FROM material where id_module='$id_module'";
    $result2 = mysqli_query($db,$sql);
    echo "<ul>";
    while($row2 = mysqli_fetch_array($result2,MYSQLI_ASSOC)){
      echo "<li><h3>".$row2['material']."</li>";
      $id_material=$row2['id'];
      $sql = "SELECT * FROM question where id_material='$id_material'";
      $result3 = mysqli_query($db,$sql);
      echo "<ul>";
        while($row3 = mysqli_fetch_array($result3,MYSQLI_ASSOC)){
          $id3=$row3['id'];
          echo "<label for='$id3'>".$row3['question']."</label>";
          echo "<li><input type=\"checkbox\" name=data[] value='$id3' id='$id3'/></li>";
        }
        echo "</ul>";
    }
    echo "</ul>";
  }
echo "</ul>";

?>
