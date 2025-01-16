<?php
// $tax in the global scope - Changing t0 25
$tax = '25';

function calculate_total($price, $quantity)
{
    $cost  = $price * $quantity;
    // $tax in the local scope of the function
    $tax   = $cost  * (20 / 100);
    $total = $cost  + $tax;
    return $total;
}
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Global and Local Scope</title>
    <link rel="stylesheet" href="css/styles.css">
  </head>
  <body>
    <h1>The Candy Store</h1>
    <p>Mints:  $<?= calculate_total(2, 5) ?></p>
    <p>Toffee: $<?= calculate_total(3, 5) ?></p>
    <p>Fudge:  $<?= calculate_total(5, 4) ?></p>
    <!-- This is still the global $tax so its not the actual
     $tax being used in the function-->
    <p>Prices include tax at: <?= $tax ?>%</p>
  </body>
</html>