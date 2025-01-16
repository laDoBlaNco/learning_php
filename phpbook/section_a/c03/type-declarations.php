<?php
// Changed to a string type but no impact since we aren't in
// 'strict types' mode
$price    = '4';
$quantity = 3;

// Added the use of the union type for either int or float
function calculate_total(int|float $price, int|float $quantity): int|float
{
    return $price * $quantity;
}

$total = calculate_total($price, $quantity);
?>
<!DOCTYPE html>
<html> 
  <head>
    <title>Type Declarations</title>
    <link rel="stylesheet" href="css/styles.css">
  </head>
  <body>
    <h1>The Candy Store</h1>
    <h2>Chocolates</h2>
    <p>Total $<?= $total ?></p>
  </body>
</html>