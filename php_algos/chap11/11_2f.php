<?php
// type casting - (int)value

// This returns the number in value as an
// integer. The fractional portion is lost
// during the conversion.
$a = 5.4;
echo (int)34,"\n";
echo (int)34.9,"\n";
echo (int)-34.999,"\n";

$s1 = "5";
$s2 = "3.1";

$k = (int)$s1;
echo $k,"\n";
echo (int)$s2,"\n";
echo $s1.$s2,"\n";
echo $k + (int)$s2,"\n";