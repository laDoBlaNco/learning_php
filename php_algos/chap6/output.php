<?php
// in our flowcharts we use the oblique shape and the reserved
// word 'write' to display a message or the final result to the
// users screen. 

// in php we use 'echo' for this. 

$a = 5;
$b = 6;
$c = $a+$b;

echo "The sum of 5 and 6 is $c\n";

// we can also do the calculation right in the echo statement
echo"The sum of 5 and 6 is ",$a+$b,"\n";

// printing escaped chars
echo "Hello\nHallo\nSalut\n";

// other chars
echo "John\t";
echo "George\n";
echo "Sofia\t";
echo "Mary\n";
echo "\n";
// or asi
echo "John\tGeorge\nSofia\tMary\n";

