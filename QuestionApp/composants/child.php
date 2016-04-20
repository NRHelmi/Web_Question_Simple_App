<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Child</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css">
<script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
<link rel="stylesheet" type="text/css" href="../css/parent.css">



  </head>
  <body >
<div id="container">
  <div id="wrapper">
      <div data-role="page2">
        <div data-role="header2">
          <?php include ("navBar.php"); ?>
        </div>
        <h1> Questions to answer </h1>
        <form action="result.php" method="post" data-ajax="false">
              <?php include("../query/getChildQuestions.php"); ?>
        <div data-role="footer2">
          <input type = "submit" value="Validate"  />
          <input type = "reset"  value="Reset" />
        </div>
        </form>
      </div>
</div>
</div>
  </body>
</html>
