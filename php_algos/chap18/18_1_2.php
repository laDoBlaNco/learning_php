<?php

/**
 * Write a PHP script that prompts the user to enter an integer
 * between 0 and 999 and then counts its it total number of digits.
 * In the end, a messgae "You entered a n-digit number" must be 
 * displayed, where n is the total number of digits. Assume that the
 * user enters a valid integer between 0 and 999
 */

 // the solution provided seems kinda contrived. It'll be easier
 // just to check the range of numbers. Not sure why using division
 // and type juggling is the best solution. Ah stand corrected. a
 // little further in the reading and it was clarified that the solution
 // below was the correct one.

 $x = (int)readline("Enter an integer between 0 and 999: ");

 if($x>=0 && $x<=9){
  echo"A 1-digit integer was entered.\n";
 }elseif($x>=10 && $x<=99){
  echo"A 2-digit integer was entered.\n";
 }elseif($x>=100 && $x<=999){
  echo"A 3-digit integer was entered.\n";
 }

