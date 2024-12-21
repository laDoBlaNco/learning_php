<?php

/**
 * Arithmetic Operators
 *     + - * / % **
 * 
 *     
 */

// Precedence:
//  **
//  *,/,%
//  +,-

// Compound Assignment Operators
// +=
// -=
// *=
// /=
// %=
// **=

// Incrementing  / Decrementing Operators
// There are pre and post increment and decrement operators

$a = $b = 5;
++$a;
$b++;
echo $a," ",$b,"\n"; // this displays 6 6

$a=5;
$b=++$a;
echo $a," ",$b,"\n"; // this displays 6 6

$a=5;
$b=$a++;
echo $a," ",$b,"\n"; // this displays 6 5

$a1 = $a2 = 5;
$b = --$a1 * 2 -1;
echo $b,"\n"; // this displays 7
echo $a2++ * 2,"\n"; // it displays 10
echo $a2,"\n"; // it displays 6


// 7.6 String Operators
// we have our concat operator '.' for php as well as '.='
$a = "What's ";
$b = "up, ";
$c = $a.$b;
echo $c,"\n";
$c.="dude?";
echo $c,"\n";

// Exercise 7.6-1 Concatenating Names
$first_name = readline("Enter first name: ");
$last_name = readline("Enter last name: ");
$full_name = $first_name." ".$last_name;

echo $full_name,"\n";