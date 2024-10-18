<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Kevin Whiteside FIRST PHP APP</title>
</head>
<body>
  <h1>Kevin Whiteside - Our First PHP Application</h1>
  <?php 
    $name_hash = hash('sha256','Kevin Anthony Whiteside'); 
    echo 'The SHA256 hash of "Kevin Anthony Whiteside is ' . $name_hash;
  ?>
  <br>
  <p>ASCII ART:</p>
  <pre>
    ***      ****
    ***    ****
    ***  ****
    *******
    *******
    ***  ****
    ***    ****
    ***      ****
  </pre>
  <a href="check.php">Click here to check the error setting</a>
  <br>
  <a href="fail.php">Click here to cause a traceback</a>


</body>
</html>