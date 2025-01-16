<?php

// Null represents a var with no value. There are 3 cases in which 
// we will see null

// null constant
$x = null; // can be NULL as well
$x = is_null(null);
$x = is_null(123);
$x = $x===null; // false
echo var_dump($x),"<br>";

// we will also get a null if the variable is undefined. We'll get
// a warning, but we'll still get the null returned.
echo var_dump($y),"<br>";

// The other situation we will see null is if we deliberately unset
// a variable.
$z = 123;
echo var_dump($z),"<br>";
unset($z);
echo var_dump($z),"<br>"; // and we get the warning again.

// Casting is what happens when we try to echo null alone
$x = null;
echo var_dump((string)$x),"<br>";
echo var_dump((int)$x),"<br>";
echo var_dump((bool)$x),"<br>";
echo var_dump((array)$x),"<br>";


