<?php

$age = 21;
$salary = 3000000;

// if condition
if($age>25){
  echo "You are not young<br>";
}
if($age<=25){
  echo"You are young<br>";
}

// if condition - else
if($age>25){
  echo"You are not you<br>";
}else{
  echo"You are young<br>";
}

// if condition1 AND condition2
if($age<22 && $salary>500000){
  echo"You are young and very rich<br>";
}

// if condition1 OR condition2
if($age<22 || $salary>500000){
  echo"You are young or very rich<br>";
}

// if condition1 - elseif condition2 - else
if($age<22){
  echo"Young<br>";
}elseif($age<30){
  echo"You are not young but not old<br>";
}elseif($age<60){
  echo"You are old, but not too old<br>";
}else{
  echo"You are old!<br>";
}

// if condition1 and condition2 - elseif condition1 and condition2 - else
if($age < 22 && $salary >= 500000){
  echo"You are a young man AND rich!!!<br>";
}elseif($age < 22 && $salary < 500000){
  echo"You are young and not so rich<br>";
}elseif($age > 60 && $salary >= 500000){
  echo"You are old, but rich<br>";
}elseif($age > 60 && $salary < 500000){
  echo"You are old and NOT rich either<br>";
}

// Ternary if
// NOTE: you must use ()s since version 7.4
echo $age<22 ? 'Young':($age<30? 'Not young but not old':'old'),"<br>";
// Null coalescing operator - (shorthand ternary operator is ?: which works
// as this before 7.1)
$my_age = $age ?? 18;
echo"$my_age<br>";

// Null coalescing assignment operator. Since PHP 7.4
$person = [
  // 'name'=>'John',
];

$person['name']??='Anonymous';
echo '<pre>';
print_r($person);
echo '</pre>';

// switch
$userrole = 'editor2';
switch($userrole){
  case 'admin':echo"You are admin<br>";break;
  case 'editor':echo"You are editor<br>";break;
  default:echo"Unknown role<br>";break;
}

