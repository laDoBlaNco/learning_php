<?php

// The round function returns the rounded value of a number to a 
// specified precision. The argument precision is optional. If it
// is omitted, the default value is 0.

$a = 5.9;
echo round($a),"\n";
echo round(5.4),"\n";

$a = 5.312;
echo round($a,2),"\n";

$a = 5.315;
echo round($a,2),"\n";

echo round(2.3447,3),"\n";