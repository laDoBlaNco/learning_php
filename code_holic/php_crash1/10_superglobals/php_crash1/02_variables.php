<?php

// What is a variable - is a container which can store a value

// Variable types - there are 8 types of variables. Technically the var doesn't have a type
// its the value in the variable that has the type.
/**
 * string
 * integer
 * float
 * boolean
 * null
 * array
 * object
 * resource
 */

// Declare variables - must start  with $ and letter or underscore. It can't 
// start with a number, though it can have a number in it after.
$name = 'kevin';
$age = 48;
$is_male = true;
$height = 1.85;
$salary = null;

// Print the variables. Explain what is concatenation
// we echo the variable $name and the '.' is the concatenation operator in
// php. Like '+' in python
echo $name.'<br>';
echo $age.'<br>';
echo $is_male.'<br>'; # booleans are convertd to 1 or '' for true and false
echo $height.'<br>';
echo $salary.'<br>'; // here our null is converted to an empty string ''
echo'<br>';
// Print types of the variables
echo gettype($name).'<br>';
echo gettype($age).'<br>';
echo gettype($is_male).'<br>';
echo gettype($height).'<br>';
echo gettype($salary).'<br>';
echo"<br>";
// Print the whole variable
echo var_dump($name,$age).'<br>';
echo var_dump($is_male).'<br>';
echo var_dump($height,$salary).'<br>';
echo"<br>";

// Change the value of the variable - varible type is same as whatever
// the value is contained in the variable.
echo gettype($name)."<br>";
$name = 42;
echo gettype($name)."<br>";
$name = true;
echo gettype($name)."<br>";
echo"<br>";

// Variable checking functions
echo var_dump(is_string($name)).'<br>';
echo var_dump(is_bool($name)).'<br>';

// Check if variable is defined
echo var_dump(isset($address)).'<br>';
echo var_dump(isset($name)).'<br>';
echo var_dump(isset($age)).'<br>';
echo var_dump(isset($salary)).'<br>'; # note that this is assigned but its 
# assigned to 'null' which to php means its undefined.
echo '<br>';

// Constants

define('PI',3.14);
echo PI."<br>"; # note that constants don't use '$'

echo var_dump(defined(PI))."<br>";
// echo var_dump(defined(PI2))."<br>";
echo '<br>';

// Using PHP built-in constants - there are a lot of buiit-in constants
// for example:
echo PHP_INT_MAX;
# https://www.php.net/manual/en/reserved.constants.php
