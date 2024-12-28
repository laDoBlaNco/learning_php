<?php
// Let's try  reversing a number now using the same algo
// We isolate the 3 numbers and then build the reversed number from the 
// digits. We could just put them together as a string, but to truly
// reverse the number we would sum the products.
$number = (int)readline("Enter a three-digit integer: ");

$digit3 = $number%10; // isolate the right-most number
$r = (int)($number/10);
$digit2 = $r%10; // then the number in the middle
$digit1 = (int)($r/10); //will be whats left over.

echo $digit3*100+$digit2*10+$digit1,"\n";
