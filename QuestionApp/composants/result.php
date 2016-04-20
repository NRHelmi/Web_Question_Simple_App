<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Result</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css">
    <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
    <script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
    <link rel="stylesheet" type="text/css" href="../css/result.css">
  </head>
  <body>
    <div id="container">
      <div id="wrapper">
   <div data-role="page3">
     <div data-role="header">
       <?php include("navBar.php"); ?>
     </div>
     <div data-role="main3" class="ui-content">
    <h1> Your Score is :
      <?php
      $count =0;
        foreach ($_POST as $answer) {
          if($answer == 1)
            $count ++;
          }
          echo $count;
          ?>
        </h1>
      </div>
      <div data-role="footer3" position="fixed">
      </div>
</div>
</div>
</div>
  </body>
</html>
