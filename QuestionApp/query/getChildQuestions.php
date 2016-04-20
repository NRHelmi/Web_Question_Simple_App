<?php
    include("../config/config.php");

    $sql = "SELECT * FROM childQuestions";
    $result1 = mysqli_query($db,$sql);
    echo "<ul>";
    while($row1 = mysqli_fetch_array($result1,MYSQLI_ASSOC)){
      echo "<li><h2>".$row1['question']."</h2></li>";
      $id_question = $row1['id'];
      $sql = "SELECT * FROM choice where id_question='$id_question'";
      $result2 = mysqli_query($db,$sql);
      echo "<ul>";
        while($row2 = mysqli_fetch_array($result2,MYSQLI_ASSOC)){
          $answer = $row2['answer'];
          $id3 = $row2['id'];
          echo "<label for='$id3'>".$row2['choice']."</label>";
          echo "<li><input type=\"radio\" name='$id_question' value='$answer' id='$id3'/> </li>";
        }
        echo "</ul>";
      }
      echo "</ul>";
 ?>
