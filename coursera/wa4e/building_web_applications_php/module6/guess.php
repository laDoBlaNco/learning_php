<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>0d63bf5e</title>
</head>
<body>
  <h1>Welcome to my guessing game</h1>
  <?php
    $answer = 46;
    $entry = $_GET['guess']??'missing';
  
    switch(true){
      case $entry=='missing':echo '<p>Missing guess parameter</p>';break;
      case $entry=="":echo '<p>Your guess is too short</p>';break;
      case !is_numeric($entry):echo '<p>Your guess is not a number</p>';break;
      case $entry<$answer:echo '<p>Your guess is too low</p>';break;
      case $entry>$answer:echo '<p>Your guess is too high</p>';break;
      default:echo '<p>Congratulations - You are right</p>';break;

    }
  ?>
  
  
</body>
</html>