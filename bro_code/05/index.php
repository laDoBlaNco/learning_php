<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP - Useful Math Functions</title>
</head>
<body>
  <form action="index.php" method='post'>
    <label for="">X</label>
    <input type="text" name="x">
    <label for="">Y</label>
    <input type="text" name="y">
    <label for="">Z</label>
    <input type="text" name="z">
    <input type="submit" value="Total">
  </form>
  
</body>
</html>

<?php
  $x = $_POST['x'];
  $y = $_POST['y'];
  $z = $_POST['z'];
  $total = null;

  $total1 = abs($x);
  $total2 = round($x);
  $total3 = floor($x);
  $total4 = ceil($x);
  $total5 = pow($x,$y);
  $total6 = sqrt($x);
  $total7 = max($x,$y,$z);
  $total8 = min($x,$y,$z);
  $total9 = pi();
  $total10 = rand(90,100);



  echo"$total1<br>";
  echo"$total2<br>";
  echo"$total3<br>";
  echo"$total4<br>";
  echo"$total5<br>";
  echo"$total6<br>";
  echo"$total7<br>";
  echo"$total8<br>";
  echo"$total9<br>";
  echo"$total10<br>";

?>