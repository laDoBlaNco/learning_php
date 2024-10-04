<?php

  // functions just like any other lang are basically blocks of code
  // that we can create and run anywhere in th program
  function register_user($email){
    echo $email . ' registered';
    
  }

  // register_user('whitesidekevin@gmail.com'); // then use it

  // We need to understand scope in php. We are dealing with function and
  // global scope. To get to global scope from in a function we need to 
  // use 'global' before the variable. 

  // We often have a return value as well, to do that in php we do the 
  // following syntax:
  function sum($n1=4,$n2=5){
    return $n1 + $n2;
  }

  $number = sum(5,5);
  // echo $number,'<br>';
  // echo sum(),'<br>';

  // we can also use default values as we see above


  // We also have anony functions in php similar to JS syntax
  $subtract = function($n1,$n2){
    return $n1-$n2;
  };
  // NOTE: with anony functions we need to end the declaration with ';'
  // Also with functions we must use {}, even with one-liners
  echo $subtract(10,6),'<br>';

  // We can though do single line functions with single line returns with => functions
  $multiply = fn($n1,$n2) => $n1 * $n2;
  // From what I can tell, arrow functions are only used in one liners in php
  // Also I'm seeing the use of a kw 'use' to get a global or parent scope var
  // when using regular anony functions, but it isn't needed for => functions.
  echo $multiply(9,9),'<br>';

  // So it didn't come out in the crash course, but now I'm interested in
  // this 'use' kw. Seems like it only works in anony functions and isn't needed
  // with arrow functions
  $n1=10;
  $multiply2 = function ($n2) use ($n1){
    return $n1 * $n2;
  };

  echo $multiply2(9),'<br>';

  $z=1;
  $fn = fn($x)=>fn($y)=>$x*$y*$z;
  var_dump($fn(5)(10));
// I'll need to give this some attention later. Cuz its almost like currying
// in a functional language. but I'm sure there are some differences. there is a 
// lot more about arrow functions I need to deep dive into.


