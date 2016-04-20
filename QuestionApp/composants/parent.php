<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Parent</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css">
<script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
<link rel="stylesheet" type="text/css" href="../css/parent.css">



  </head>
  <body >
<div id="container">
  <div id="wrapper">
      <div data-role="page1">
        <div data-role="header1">
          <?php include ("navBar.php"); ?>
        </div>
        <form action="../query/setQuestionList.php" method="post" data-ajax="false">
          <h1>Select Module and Material</h1>
              <?php include("../query/getQuestionList.php"); ?>
        <div data-role="footer1">
          <input type = "submit" value="Validate"  />
          <input type = "reset"  value="Reset" />
        </div>
        </form>
      </div>
</div>
</div>
  </body>
</html>
