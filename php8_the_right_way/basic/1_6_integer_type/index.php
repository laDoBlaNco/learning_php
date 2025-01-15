<?php
// PHP Integer Data type

/* integers */

// Integers are numbers without decimals. To get the actual size it depends
// on the platform, but we can sue the constants we covered before
echo PHP_INT_MAX.'<br>';
echo PHP_INT_MIN.'<br>';
echo PHP_INT_SIZE.'<br>';

// integers can be displayed in base 10
$x = 5;
echo $x.'<br>';

// hexadecimal base 16
$x = 0x2a;
echo $x.'<br>';

// octal numbers prefixed by 0
$x = 055;
echo $x.'<br>';

// binary as will prefixed with 0b.
$x = 0b111;
echo $x.'<br>';

// what happens with numbers overflow?
$x = PHP_INT_MAX;
echo $x.'<br>';
echo var_dump($x+1); // no longer an integer.
echo '<br>';

// we can cast with (int) or (integer)
echo (int)true.'<br>';
echo (int)false.'<br>';
echo (int)5.7584.'<br>';
echo (int)'5.9'.'<br>'; // strings will be converted to numbers if possible
echo (int)'5.9abcde'.'<br>';
echo (int)'abc5.9def'.'<br>'; // if it can't convert then it'll return 0

// we can determine if something is an int with the function
echo is_int(69).'<br>';

// there is a gotcha when using underscores and casting.
echo 2_000_000_000 . '<br>'; // this works and the '_' are ignored.
echo (int)'2_000_000_000' . '<br>'; // this is seen as 2 as the rest is considered a string




