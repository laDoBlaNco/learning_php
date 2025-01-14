<?php
/**
 * Write a php script that prompts the suer to enter the number of a month 
 * between 1 and 12, and then displays the corresponding season. Assume
 * that the user enters a valid value. it is given that:
 * Winter => 12,1,2
 * Sprint => 3,4,5
 * Summer => 6,7,8
 * Fall => 9,10,11
 */

$mo = (int)readline("Please enter the number of a month: ");
$res = match($mo){
  12,1,2 => "It's winter!",
  3,4,5 => "It's spring!",
  6,7,8 => "It's summer!",
  9,10,11 => "It's autumn", 
};

echo"$res\n";