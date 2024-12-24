<?php

// Calculating the Area of a Rectangle
// Write a php script that prompts tthe user to enter the length
// of the base and the height of a rectangle, and then calculates
// and displays its area.

$length = (int)readline("Please enter the length of the base: ");
$height = (int)readline("Please enter the height now: ");
$area = $length * $height;

echo "The area of your rectangle is $area\n";