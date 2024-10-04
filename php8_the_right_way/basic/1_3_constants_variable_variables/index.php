<?php
/**
 * ---------- What Are Constants & Variable Variables in PHP -------------
 * Constants can't change after they are defined, unlike vars that can be
 */

 $first_name = 'Kevin';
 $first_name = 'Odalis';
 echo $first_name,'<br>';

 define('name','value'); // same rules for naming constants
 // Convention is all upperase for constants
 define('STATUS_PAID','paid'); // notice that we don't use $ with constants

echo STATUS_PAID,'<br>'; // and we just use the constant. 

// we can't change them
// define('STATUS_PAID','owes'); // here we get an error

// We can check to see if the constant is defined using defined()
echo defined('STATUS_PAID'),'<br>'; // we get back a boolean true (1)
echo defined('STATUS_VOID'),'<br>'; // and we get nothing (false)


// We can also use const keyword similar to JS
const STATUS_VOID = 'void'; // the main difference is that this is a compile time assignment
// and define() is a runtime assignment. This means we could use define() in a contol structure
// for example an if...then statement, but we can't use 'const'
echo defined('STATUS_VOID'),'<br>';  // Now we get 1 again


// There are also pre-defined constants and superglobals which we'll see later. 
// https://www.php.net/manual/en/reserved.constants.php
echo PHP_VERSION,'<br>';
echo PHP_VERSION_ID,'<br>'; // etc.

// Also there are magic constants which change depending on the context
// they are kinda like superglobals, but not the same thing.
// https://www.php.net/manual/en/language.constants.magic.php
echo __LINE__,'<br>'; // and its prints the line its currently on.

// Variable variables: Takes the value of the variable and treats that as the name
// of the new variable. 
$foo = 'bar';
$$foo = 'baz'; // this is the same as $bar = 'baz'
echo $foo,$bar,'<br>';
echo $foo,$$foo,'<br>';
// this gives us the ability to create our variables dynamically, but we'll get into them
// in more depth later. 





