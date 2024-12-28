<?php

/**
 * Write a php script that prompts the user to enter a five-digit
 * integer. The script should then find and display the sum of the 
 * original number and its its reverse. For example if the user enters
 * the number 32675, the result should be 
 * 32675 + 57623 = 90298
 */

 $original = (int)readline("Enter a 5-digit number to use: ");

 $digit1 = $original%10;
 $r = (int)($original/10);
 $digit2 = $r%10;
 $r = (int)$r/10;
 $digit3 = $r%10;
 $r = (int)$r/10;
 $digit4 = $r%10;
 $digit5 = (int)($r/10);

 $reversed = $digit1*10000+$digit2*1000+$digit3*100+$digit4*10+$digit5;

 $sum = $original + $reversed;

 echo"$original + $reversed = $sum\n";