<?php

// Create array
$fruits = ['banana','apple','orange'];
// $fruits = array('banana','apple','orange'); // the old way of doing it


// Print the whole array
echo"<pre>";
var_dump($fruits);
echo"</pre>";

// Get element by index
echo $fruits[0],"<br>";

// Set element by index
$fruits[0] = 'peach';
echo"<pre>";
var_dump($fruits);
echo"</pre>";

// Check if array has element at index 2
echo"<pre>";
var_dump(isset($fruits[3]));
echo"</pre>";

// Append element - I JUST REALIZED WHY THIS SYNTAX WORKS. DUE TO THE
// WAY THAT PHP ASSOCIATED ARRAYS WORK, BASED ON THE SAME ARRAY SYNTAX
// THE SYNTAX BELOW IS SAYING, "ADD 'banana' WITH NO '[]' SPECIFIED INDEX, SO
// PHP AUTOMATICALLY SETS THE INDEX. BUT WE COULD PUT:
//  $fruits['my_fruit'] = 'banana'; AND WE WOULD BE SETTING THE INDEX TO
// A SPECIFIED KEY. SO THE QUESTION IS CAN WE HAVE A MIXED ARRAY OF INDEXES 
// AND KEYS???  LET'S SEE: (YEAP IT WORKED. NOTE THE INDEX DOESN'T SKIP
// IT CONTINUES WITH '3' AFTER THE SPECIFIED KEYS) it's ugly but it works
$fruits['my_fruit'] = 'strawberry';
$fruits['another_fruit'] = 'guava';
$fruits[] = 'banana';
echo"<pre>";
print_r($fruits);
echo"</pre>";

// Print the length of the array
echo count($fruits),"<br>";

// Add element at the end of the array
array_push($fruits,'nectarine');
echo"<pre>";
var_dump($fruits);
echo"</pre>";

// Remove element from the end of the array
array_pop($fruits);
echo"<pre>";
var_dump($fruits);
echo"</pre>";


// Add element at the beginning of the array
array_unshift($fruits,'apple');
echo"<pre>";
var_dump($fruits);
echo"</pre>";


// Remove element from the beginning of the array
array_shift($fruits);
echo"<pre>";
var_dump($fruits);
echo"</pre>";


// Split the string into an array
$string = 'banana,apple,peach';
echo"<pre>";
var_dump(explode(',',$string));
echo"</pre>";


// Combine array elements into string
echo implode(' & ',$fruits),"<br>";
echo"<pre>";
print_r($fruits);
echo"</pre>";


// Check if element exist in the array
echo var_dump(in_array('apple',$fruits)),"<br><br>";

// Search element index in the array
echo array_search('apple',$fruits),"<br><br>";

// Merge two arrays
$vegetables = ['potato','cucumber'];
echo"<pre>";
print_r(array_merge($fruits,$vegetables));
echo"</pre>";

# as of php 7.4 we have the spread operator as in other languages
echo"<pre>";
print_r([...$fruits,...$vegetables]);
echo"</pre>";

// Sorting of array (Reverse order also)
sort($fruits);
echo"<pre>";
print_r($fruits);
echo"</pre>";

rsort($fruits);
echo"<pre>";
print_r($fruits);
echo"</pre>";

// usort will take a callback so we can customize our sort

// Filter, map, reduce of array
$numbers = [1,2,3,4,5,6,7,8,];
$evens = array_filter($numbers,function($n){
  return $n%2===0; // just like JS here
});

// like js we have the short version as well - arrow functions from 7.4 on
$evens2 = array_filter($numbers,fn($n)=>$n%2===0);
echo"<pre>";
print_r($evens);
echo"</pre>";
echo"<pre>";
print_r($evens2);
echo"</pre>";

$squares = array_map(fn($n)=>$n*$n,$numbers);
echo"<pre>";
print_r($squares);
echo"</pre>";

$sum = array_reduce($numbers,fn($acumulator,$item)=>$acumulator+$item);
echo"<pre>";
print_r($sum);
echo"</pre>";

// https://www.php.net/manual/en/ref.array.php




// ============================================
// Associative arrays - key value pairs
// ============================================

// Create an associative array
$person = [
  'name'=>'Brad',
  'surname'=>'Traversy',
  'age'=>40,
  'hobbies'=>['Tennis','Video Games'],
];

// Get element by key
echo $person['age'],"<br>";
echo $person['name'],"<br>";

// Set element by key
$person['channel'] = 'TraversyMedia';
echo"<pre>";
print_r($person);
echo"</pre>";

// Check if array has specific key
echo var_dump(isset($person['age'])),"<br>";
echo var_dump(isset($person['address'])),"<br>";


// Print the keys of the array
echo"<pre>";
print_r(array_keys($person));
echo"</pre>";


// Print the values of the array
echo"<pre>";
print_r(array_values($person));
echo"</pre>";


// Sorting associative arrays by values, by keys
ksort($person);
echo '<pre>';
print_r($person);
echo '</pre>';

krsort($person);
echo '<pre>';
print_r($person);
echo '</pre>';

// Note the 'a' is to sort by value and keep the key's intact
// otherwise we sort by value and reset with index 0,1,2,...
asort($person);
echo '<pre>';
print_r($person);
echo '</pre>';

arsort($person);
echo '<pre>';
print_r($person);
echo '</pre>';


// Two dimensional arrays
$todo_items = [
  ['title'=>'item1','completed'=>true],
  ['title'=>'item2','completed'=>false],
  ['title'=>'item3','completed'=>true],
];

echo '<pre>';
print_r($todo_items);
echo '</pre>';
