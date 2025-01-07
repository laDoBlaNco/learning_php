<?php

// Function which prints "Hello I am TheCodeholic"
function hello($name){
  echo"Hello I'm the $name<br>";
}
hello('code_holic');
hello('net ninja');
hello('ladoblanco');
echo"<br>";

// Create sum of two functions
function sum($a,$b){
  return $a+$b;
}
echo sum(5,4),'<br>';

// Create function to sum all numbers using ...$nums
function sum2(...$numbers){
  // echo '<pre>';
  // print_r($numbers);
  // echo '</pre>';
  $sum = 0;
  foreach($numbers as $n){$sum+=$n;}
  return $sum;
}
echo sum2(1,2,3,4,5),"<br>";

// Arrow functions
function sum3(...$numbers){
  return array_reduce($numbers,fn($sum,$next)=>$sum+$next);
}
echo sum3(1,2,3,4,5),"<br>";


