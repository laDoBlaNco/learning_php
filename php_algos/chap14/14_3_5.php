<?php
/**
 * Write a PHP script that prompts the user to enter a 3 digit integer
 * and then calculates the sum of its digits. We should solve this one 
 * without using % this time.
 * 
 * Now you wonder why this exercise is placed in this chapter, which 
 * primarily focuses on string manipulation. You might argue that you
 * already know how to split a 3-digit integer into its 3 digits and
 * assign each digit to a separate variable as we learned in the last
 * chapter with % nd /. So why again?
 * 
 * The reason is that PHP is a very powerful language and you can use
 * its magic forces to solve this exercise in a totally different way. 
 * The main idea is to convert the user-provided integer to type string
 * and assign each digit (each char) into individual variables:
 */

 $number = (int)readline("Enter a three-digit integer: ");

 $str_number = (string)$number;  // convert number to string

 $digit1 = $str_number[0];
 $digit2 = $str_number[1];
 $digit3 = $str_number[2];

 $total = (int)$digit1 + (int)$digit2 + (int)$digit3;

 echo $total,"\n";
 

