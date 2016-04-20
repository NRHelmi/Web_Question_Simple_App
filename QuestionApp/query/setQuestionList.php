<?php

include("../config/config.php");

   $array = $_POST['data'];
   //clean Table
   $sql = "truncate table childQuestions;";
   $result = mysqli_query($db,$sql);


   foreach ($array as $question_id) {
     $sql = "SELECT * FROM question where id = '$question_id'";
     $result = mysqli_query($db,$sql);
     while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
       $question = $row['question'];
       $id = $row['id'];
       echo $question.$id."hello";

       $sql = "insert into childQuestions values ('$id','$question')";
       mysqli_query($db,$sql);
     }

   }

   include ("../session/redirect.php");



?>
