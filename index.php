<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Random Quotes</title>
  <link href='https://fonts.googleapis.com/css?family=Playfair+Display:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/styles.css">
  <!-- Refreshing the page every 25 seconds -->
  <meta http-equiv="refresh" content="25">
</head>
<!--Recoloring body everytime with three random rgb numbers -->
<body style="background-color:
  <?php echo 'rgb(' . rand(0,255) . ',' . rand(0,255) . ',' . rand(0,255) . ')'; ?>">
  
    
  
  <div class="container">
    <div id="quote-box">
      <?php include 'inc/functions.php';
        printQuote($quotes);   ?>

    </div>
    <button id="loadQuote" onclick="window.location.reload(true)" >Show another quote</button>
  </div>

</body>
</html>