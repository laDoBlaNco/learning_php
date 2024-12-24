<?php

// Calculating a sales tax and a discount. Write a php script 
// that prompts a user to enter the before tax price and the 
// discount rate on a sale of 0-100. Then calculate and display
// the new price. The VAT will be 19%

define('VAT',0.19);

$regular_price = (float)readline("Enter the price of the product:");
$discount = (int)readline("Enter the discount offered (0 - 100): ");
$discount_amt = $regular_price*$discount/100;
$discounted = $regular_price-$discount_amt;

$sales_tax = $discounted*VAT;
$after_tax = $discounted+$sales_tax;

echo"The discounted after-tax price is $after_tax\n";