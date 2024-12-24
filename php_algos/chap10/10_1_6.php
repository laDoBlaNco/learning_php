<?php

// Calculating a sales discount. 
// Prompt user to enter the price of an item and the discount
// rate offered (on a scale of 0 to 100). The script will then 
// calculate and display the new price. 

$regular_price = (float)readline("Enter the price of the product: ");
$discount = (int)readline("Enter the discount offered (0 - 100): ");

$discounted = $regular_price*$discount/100;
$final_price = $regular_price-$discounted;


echo"The final price after the discount is $final_price\n";