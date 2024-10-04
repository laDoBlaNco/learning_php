<?php

/* ----------------------- PHP Data Types -------------------------*/
/*
    - String        Series of characters surrounded by single or double quotes
    - Integer       Whole numbers
    - Float         Decimal numbers
    - Boolean       true or false
    - Array         Special variable, which can hold more than one value and different types
    - Object        A class (OOP in php)
    - NULL          Empty variable
    - Resource      Special variable that holds a resource like an asset or a file, etc. 

*/

/**--------------------- Variable Rules ---------------------------- */
/*
    - Variables must be prefixed with a '$'
    - Variables must start with a letter or the underscore character
    - Variables can't start with a number
    - Variables can only contain alpha-numeric chars and underscores (A-z, 0-9, and _)
    - Variables are case-sensitive, though the rest of the language is not (
      $name and $NAME are two different variables.)

*/

$name = 'Kevin'; // string
$age = 47;  // int
$has_kids = true;   // boolean
$cash_on_hand = 20.75;  // float

// echo $name;
// echo $age;
// echo $has_kids;  // this will give us just a 1 for true and nothing for false
// var_dump($has_kids);  // this shows the type and value bool(true)
// var_dump($cash_on_hand);

// echo $name . ' is ' . $age . ' years old';  // concatenation
// echo "$name is $age years old"; // interpolation. We could also concatenate with '.' 

$x = '5' + '5';  // interestingly rather than the js '55', we actually get 10
// var_dump($x);
// echo 10-5,' ';
// echo 5*6,' ';
// echo 10/2,' ';
// echo 10%3,' ';

// Constants are only used with things you know will never change
define('HOST','localhost');
define('DB_NAME','dev_db');

echo HOST; // Note that with constants there is no $, so these may not be actual
// variables, but with 'define' we use them as variables. 

