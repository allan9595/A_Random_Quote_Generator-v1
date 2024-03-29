<?php
  include('inc/functions.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Random Quotes</title>
  <link href='https://fonts.googleapis.com/css?family=Playfair+Display:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/styles.css">
  <style>
      <?php 
        $color = setRandomBackgroundColor(); 
      ?>
      body,#loadQuote {
        background-color: rgb(
          <?php 
            echo $color[0] . ', ' . $color[1] . ', ' . $color[2];
          ?>
        );
      };
  </style>
</head>
<body>
  <div class="container">
    <div id="quote-box">
      <?php
        printQuote($quotes);
      ?>
    </div>
    <button id="loadQuote" onclick="window.location.reload(true)" >Show another quote</button>
  </div>
  <script src="scripts.js"></script>
</body>
</html>