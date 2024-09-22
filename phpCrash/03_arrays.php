<?php 

// simple array
$numbers = [1,44,55,22];
$fruits = array('apple','orange','pear');

// print_r($numbers);  // print_r is print recursive so we get the array printed out
// var_dump($numbers); // This does the same as above but with more details (types)
// echo $fruits[0]; // just as expected.

// Associative array (dictionary in python or objects in JS)
$colors = [
  1=>'red',
  4=>'blue',
  6=>'green',
];

// echo $colors[4];

$hex = [
  'red'=>'#f00',
  'blue'=>'#0f0',
  'green'=>'#00f',
];

// echo $hex['blue'];

$person = [
  'first_name'=>'Kevin',
  'last_name'=>'Whiteside',
  'email'=>'whitesidekevin@gmail.com',
];

// echo $person['email'];

// Multidimensional arrays - arrays within arrays
$people = [
  [
    'first_name'=>'Kevin',
    'last_name'=>'Whiteside',
    'email'=>'whitesidekevin@gmail.com',
  ],[
    'first_name'=>'Odalis',
    'last_name'=>'Whiteside',
    'email'=>'odalislorenzo74@gmail.com',
  ],[
    'first_name'=>'Kelen',
    'last_name'=>'Whiteside',
    'email'=>'whitesidekelen@gmail.com',
  ]
];

// echo $people[1]['email']; // we can easily turn multidimensional arrays in to json objects as well

// var_dump(json_encode($people));
var_dump(json_decode(json_encode($people))); // we can do a lot with array methods
// which we'll see later. 