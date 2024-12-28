<?php
// subject[index]

// This notation returns the char located at subejects specified
// index. As already mentioned, the string indexes start from zero
// You can use index 0 to acces the first char, index 1 to access
// the second, and so on.

// The notation subject[index] is call substring notation. Referring
// to individual chars in the string.

$a = "Hello World";

echo $a[0],"\n";
echo $a[6],"\n";
echo $a[10],"\n";

// we get a warning if we trying to get a char that is longer than the
// string.
echo $a[100],"\n"; // PHP Warning:  Uninitialized string offset 100