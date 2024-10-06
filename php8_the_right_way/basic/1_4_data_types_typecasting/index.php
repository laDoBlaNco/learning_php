<?php


//  * -------------------- Data Types & Type Casting ----------------------
//  PHP is a dynamically or weakly typed language, meaning that types are
//  checked at runtime.
 
//  4 Scalar Types
//     bool - true / false - prints 1 or '' to the screen
$completed = true;
//     int - 1,2,3,5,0 -1 ...
$score = 75;
//     float - 1.5,1.1,-15.8, etc
$price = 0.99;
//     string - 'kevin' "Kevin" ...
$greeting = 'Hello kevin';

echo $completed,'<br>';
echo $score,'<br>';
echo $price,'<br>';
echo $greeting,'<br>';

// to get the type
echo gettype($price),'<br>';
echo gettype($greeting),'<br>';

// we can use var_dump which gives us the value, type and additional info. 
echo var_dump($score),'<br>';
// php will automatically determine the type depending on its context. 
echo var_dump('75'); // here php knows its a string. 

// php8 has type hinting and strict types now which we'll see more of later.

echo var_dump($completed),'<br>';
 
//  4 Compound Types
//     array - a list of items of different types, mixed as well.
$companies =[1,2,3,0.5,-9.2,'a','b',true];
echo $companies; // we get an warrning due to array's not printing as string
print_r($companies);
echo '<br>';
var_dump($companies);
echo '<br>';
//     object - we'll talk about this when we get to OOP
//     callable - We'll get this in a future video
//     iterable - This one as well when we get to the intermediate/advanced topics
 
//  2 Special Types
//     resource - This is external sources like a file, also we'll discuss in the future
//     null - this is just like in other langs meaning a 'nothing' value. 
 
//  pseudotypes: mixed and void - No idea with these. Surely they are in the advanced topics. 

 
// Type hinting - so even if we have type hinting, php will still try to convert the given 
// value. 

// declare(strict_types=1); // with strict_type mode we get errors if  we aren't closer to the expected
// types.

function sum(int $x, int $y){
  $x = 5.5; // even here typing is only guaranteed until its used and then all bets are off
  // here we convert to a float even though we are expecting an int.
  var_dump($x,$y);
  echo '<br>';
  return $x + $y;
}

echo sum(2,3),'<br>';
echo sum(2.5,'3'),'<br>';  // auto conversioning happening here, but we get the warning
// that something is going on. 

// casting
$x = (int)'5';
var_dump($x);

