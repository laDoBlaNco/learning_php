<?php

// Calculating Sales Tax
// An employee needs a script to enter the before-tax price of
// a product and calculate its final price. Assume a value added
// tax (VAT) rate of 19%

$product_price = (float)readline("Please enter the before-tax product price: ");

$tax = $product_price * .19;

// or define('VAT',0.19) if using constants

$final_price = $product_price + $tax;

echo"At 19% (VAT) the final price is $final_price\n";