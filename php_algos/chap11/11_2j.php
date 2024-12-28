<?php

// Square root function returns the square root of number, where 
// number can be a positive value or zero

echo sqrt(9),"\n"; // this displays 9
echo sqrt(2),"\n"; // 1.4142135623731

$x = sqrt(8);
echo $x,"\n"; // 2.8284271247462

$y = round(sqrt(8));
echo $y,"\n"; // 3

/**
 * Now how the sqrt function is nested in the round function? The
 * result of the inner (nested) function or (functions) is used as 
 * an argument for the outer function. This is a writing style that
 * most programmers prefer to follow because it helps to save a lot
 * of locs. Of course, if you nest too many functions, no one will be
 * able to understand your code. A nesting of up to four levels is 
 * quite acceptable.
 */
?>
