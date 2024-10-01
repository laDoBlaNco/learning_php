<?php
    /** ------------------- EP 4 Variables --------------------------- */
    // we can start to use variables Why? Because a lot of times it refers to things that
    // you don't have control over. (User input, something dynamic, etc)
    $greeting = 'Hello';

    // echo $greeting . ' ' . 'Everybody'; // Concatenation operator '.' 
    // Another way to do it is a refactor and put it in all double quotes 
    // for interpolation, only with "" not with ''
    echo "$greeting Everybody!";



?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Episode 4: Variables</title>
</head>
<body>
  <h1><?php echo "$greeting Everybody!"  ?></h1>
</body>
</html>