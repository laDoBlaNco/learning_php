<?php

// working with quotients and remainders using modulus %
// this operator performs an integer division and returns the integer
// remainder. Since php doesn't actually incorporate an arithmetic
// operator that calculates the integer quotient, I can use the (int)
// casting to achieve the same result. 

$number1 = (int)readline("enter first number: ");
$number2 = (int)readline("enter second number: ");

$q = (int)($number1/$number2); // so what we are saying here is that
// we can use (int) as we do with '//' in python, the integer division

$r = $number1%$number2;

echo"Integer Quotient: $q\nInteger Remainder: $r\n";