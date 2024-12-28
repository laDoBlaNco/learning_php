<?php
/**
 * Php string functions are subprograms used when there is a need to
 * manipulate a string, for example, to isolate a number of characters
 * from the string, remove spaces that might exist at the beginning of
 * it or convert all of its characters to uppercase, etc. 
 * 
 * Functions are nothing more than small subprograms that solve small
 * problems.
 * 
 * PHP numerates chars assuming that the first one is at position 0, 
 * the second one is at position 1, and so on. 
 * 
 * A space is a character just like any other char. Just because 
 * nobody can see it, it doesn't mean it doesn't exist.
 * 
 * Let's start with triming
 */
$a = "   Hello    ";
$b = trim($a);

echo $b," Poseidon!\n";
echo $a," Poseidon!\n";