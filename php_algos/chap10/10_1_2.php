<?php

// Calculating the Area of a Circle
// Write a php script that calculates and displays the area of
// a circle

// data input - prompt the user to enter a value for radius
$radius = (float)readline("Enter the length of the radius: ");

// using a constant
define("PI",3.14159);

// Data processing - Calculate the area of the circle
$area = PI * $radius ** 2;

// Results output - display the result on user's screen
echo"The area of the circle is $area\n";
