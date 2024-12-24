<?php
/**
 * Write a script that converts a temperature value from Fahr to
 * Kelvin. The formula is:
 * 
 * 1.8 * kelvin = fahrenheit + 459.67
 * 
 * We can't put the formula exactly like this in php as its goes
 * against the rules of assignment. On the left hand side of the =
 * only a var can exist. This var is a region in Ram where a value
 * can be stored. 
 * 
 * Since the problem states that we need to solve for kelvin then
 * the input will be the degrees in fahr
 */

 $fahr = (float)readline("Enter a temperature in Fahrenheit: ");

 $kelvin = ($fahr + 459.67)/1.8;

 echo"The temperature $fahr in Kelvin is $kelvin\n";
 

  

?>