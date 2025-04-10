<?php

/**
 * Design a program that lets the user enter an integer between 
 * -9999 and 9999, and then counts its total numbers of digits.
 * In the end, a message "You entered a n-digit number" is displayed
 * where n is the total number of digits. Assume that the user enters
 * a valid integer between -9999 and 9999
 * 
 * 
 */

$digit = (int)readline("Please enter an integer between -9999 and 9999: ");

$msg = match(true){
  $digit < -999 && $digit >= -9999,$digit > 999 && $digit <= 9999 => 'You entered a 4-digit number',
  $digit < -99 && $digit >= -999,$digit > 99 && $digit <= 999 => 'You entered a 3-digit number',
  $digit < -9 && $digit >= -99,$digit > 9 && $digit <= 99 => 'You entered a 2-digit number',
  $digit >-10 && $digit <= 9 => 'You entered a 1-digit number',
};

echo"$msg\n";