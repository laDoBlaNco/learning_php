<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP - While Loopps Explained</title>
</head>
<body>
  <form action="index.php" method="post">
   <input type="submit" value="Stop" name='stop'>
  </form>
</body>
</html>


<?php

/////////////////// PHP - While Loops Explained /////////////////////

// While loops do some code infinitely while some condition remains
// true.

// If you have to do something a limited amount of times, use a for loop
// if its an infinite amount of iterations, use a while loop.

$counter = 0;
while($counter<=10){
  $counter++;
  echo $counter."<br>";
}

$seconds = 0;
$running = true;

while($running){
  if(isset($_POST['stop'])){
    $running = false;
  }else{  
    // wait 1 second
    $seconds++;
    echo $seconds . "<br>";
  }
}