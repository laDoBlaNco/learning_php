<?php

$x = (float)readline();
$w = (float)readline();
$z = (float)readline();

$temp1 = 3 * $x**2 + 5 * $x + 2;

$temp2 = 7 * $w + 1/$z;

$temp3 = (3 + $x)/7;

$nominator = 5*$temp1/$temp2+$z;

$denominator = 4*$temp3;

$y = $nominator/$denominator;

echo"The result is: $y\n";