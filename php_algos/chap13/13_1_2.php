<?php

// Finding the Sume of Digits
// Write php script that prompts the user to enter a 4-digit integer
// and then calculates the sum of its digits.

// First approach is to take in the number in just one variable
$number = (int)readline("Enter a 4-digit number: ");

// We can use % and separate the for digits by dividing by 1000,100,10,
$digit1 = (int)($number/1000);
$r = $number%1000;
$digit2 = (int)($r/100);
$r%=100;
$digit3 = (int)($r/10);
$digit4 = $r%10;

echo $number,"\n";
echo "$digit1  $digit2  $digit3  $digit4\n";
$total =  $digit1+$digit2+$digit3+$digit4;
echo $total,"\n";

