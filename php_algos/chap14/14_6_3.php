<?php
/**
 * Write a PHP script that prompts the user to enter a 3 digit int and
 * then reverses it. For example, if the user enters the number 375
 * the number 573 must be displayed. Solve this exercise without using
 * integer remainder (%) operator
 */

 $num = readline("Please enter a 3 digit number:");

 $num_rev = $num[2].$num[1].$num[0];

 echo "$num_rev\n";