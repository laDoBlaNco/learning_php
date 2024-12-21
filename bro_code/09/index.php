<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP - For Loops Explained</title>
</head>
<body>
  <form action="index.php" method='post'>
    <label for="">Enter a number to count to:</label>
    <input type="text" name="counter" id="">
    <input type="submit" value="Start">
  </form>
</body>
</html>

<?php

////////////////////// PHP - For Loops Explained //////////////////
// for loop = repeat some code a certain # of times

// echo "Hello<br>";

// for($i=10;$i>=0;$i--){
//   echo"$i <br>";
// }

$counter = $_POST['counter'];
for($i=0;$i<=$counter;$i++){
  echo"$i <br>";
}