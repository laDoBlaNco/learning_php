<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exercise - GET & post</title>
</head>
<body>
  <form action="exercise.php" method='get'>
    <label for="quantity">Quantity:</label><br>
    <input type="text" name="quantity" id="quantity"/>
    <input type="submit" value="Total">
  </form>
</body>
</html>

<?php
  $item='pizza';
  $price= 5.99;
  $quantity = $_GET['quantity'];
  $total = null;

  $total = $quantity*$price;

  echo "You have ordered {$quantity} x {$item}(s).<br>";
  echo "Your total is \${$total}.";

?>