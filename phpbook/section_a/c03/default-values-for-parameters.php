<?php
function calculate_cost($cost, $quantity, $discount = 2)
{
    $cost = $cost * $quantity;
    return $cost - $discount;
}
?>
<!DOCTYPE html>
<html> 
  <head>
    <title>Default Values for Parameters</title>
    <link rel="stylesheet" href="css/styles.css">
  </head>
  <body>
    <h1>The Candy Store</h1>
    <h2>Chocolates</h2>
    <p>Dark chocolate $<?= calculate_cost(5, 10, 7) ?></p>
    <!-- This line uses our default since we left it out -->
    <p>Milk chocolate $<?= calculate_cost(3, 4) ?></p>
    <p>White chocolate $<?= calculate_cost(4, 15, 20) ?></p>
  </body>
</html>