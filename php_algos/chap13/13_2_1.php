<?php

/**
 * Write a php script that prompts the user to enter any integer and
 * then multiplies its last digit by 8 and displays the result.
 */

 $num = (int)readline("Please enter  any integer number: ");

 $last_digit = $num%10;

 echo $last_digit*8,"\n";