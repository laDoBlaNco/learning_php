<?php

/////////////////////// PHP - Arrays Explained //////////////////////

// array - Variable which can hold more than one value at a time
// a collection. Consider it as a special type of variable or box
// that can hold several values in one place. 

// Instead of dealing with this:

// $food_1 = 'apple';
// $food_2 = 'orange';
// $food_3 = 'banana';
// $food_4 = 'coconut';

$foods = array('apple','orange','banana','coconut');

// accessing arrays in php
echo $foods,"<br>"; // php can't convert a full array to a string, but each element
echo $foods[0],"<br>";
echo $foods[1],"<br>";
echo $foods[2],"<br>";
echo $foods[3],"<br>";
echo $foods[4],"<br>";echo "<br>"; // if we ask for something not there

// common functions for altering arrays
$foods[0] = 'pineapple';
array_push($foods,"pineapple","kiwi");
array_pop($foods);
array_shift($foods);
$foods = array_reverse($foods);

foreach($foods as $food){
  echo $food,"<br>";
}

echo count($foods);



