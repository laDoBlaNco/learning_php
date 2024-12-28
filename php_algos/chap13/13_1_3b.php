<?php

// The second approach that we learned is going the other way and first
// dividing by 60 and 60 again and finally 24
$number = (int)readline("Enter a period of time in seconds: ");

$seconds = $number%60;
$r = (int)($number/60);

$minutes = $r%60;
$r=(int)($r/60);

$hours = $r%24;
$days = (int)($r/24);

echo"$days day(s) $hours hour(s)\n";
echo"$minutes minute(s) and $seconds second(s)\n";

// so basically the algos we are looking at are using math to divide
// numbers into their whole parts and manipulate them as digits.