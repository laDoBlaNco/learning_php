<?php

/* floats */

$x = 13.5; // floats are numbers with decimals
$x = 13.5e3; // we can also do exponential form
$x = 13.5e-3; // we can also do negative exponential
$x = 13_000.5; // using underscores still works and its still a float
$x = PHP_FLOAT_MAX; // we also have the constants to see what our platform allows
$x = PHP_FLOAT_MIN; // here's the min
$x = floor((0.1+0.7)*10); // you would think it should return 8, but this is
// a gotcha with floats. This is because internally these are converted to 
// binary so it loses some of the precision. 
$x = ceil((0.1+0.2)*10);// you would think this would be 4 based on the prev example
// so the lesson is to be careful using floating numbers in comparisons, etc
$x = PHP_FLOAT_MAX*2; // results in infinity. When we go out of bounds of the limits
// we don't get overflow we get infinity. We can use functions is_infinite and is_finite
// to check and see if we have an infinity number
$x = (float)5; // we can also cast to a float.
$x = (float)'abscd'; // will give us 0 not an error, be careful
$x = (float)'15.5abc'; // will cast to float and just truncate at the number

echo var_dump($x),"<br>"; // confirming its  float
echo $x;
