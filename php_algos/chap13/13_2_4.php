<?php

/**
 * Write a PHP script that prompts the user to enter an int and then
 * it displays 1 when the number is even; otherwise, it displays 0. 
 * (the opposite of the previous exer)
 * Try not to use any dicision control structures since we haven't gone
 * over those just yet.
 */

 $num = (int)readline("Enter any integer: ");

 echo ($num+1)%2,"\n";