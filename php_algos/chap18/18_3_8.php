<?php

/**
 * Write a PHP script that displays the following menu:
 *  1) Convert USD to Euro (EUR)
 *  2) Convert USD to British Pound Sterling (GBP)
 *  3) Convert USD to Japanese Yen (JPY)
 *  4) Convert USD to Canadian Dollar (CAD)
 * 
 * It then prompts the user to enter a choice (of 1,2,3, and 4)
 * and an amount in US dollars and calculates and displays the 
 * required value. Assume that the user enters valid values. It 
 * is given that:
 * $1 = 0.94 EUR
 * $1 = 0.81 GBP
 * $1 = Y149.11 JPY
 * $1 = 1.36 CAD($)
 * 
 */

 echo"
1) Convert USD to Euro (EUR)
2) Convert USD to British Pound Sterling (GBP)
3) Convert USD to Japanese Yen (JPY)
4) Convert USD to Canadian Dollar (CAD)

Please enter your conversion method (1-4):\n";
$selection = (int)readline();
echo"...and the amount to convert: \n";
$amt = (float)readline();

switch($selection){
  case 1:echo"\${$amt}USD = $".$amt * 0.94."EUR\n";break;
  case 2:echo"\${$amt}USD = $".$amt * 0.81."GBP\n";break;
  case 3:echo"\${$amt}USD = $".$amt * 149.11."JPY\n";break;
  case 4:echo"\${$amt}USD = $".$amt * 1.36."CAD\n";break;
}