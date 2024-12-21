<?php

/**
 * PHP Arithmetic Explained
 */

 // Arithmetic operators
 // + - * / ** %
  $x=10;
  $y=2; 
  $z=null;

  echo "ARITHMETIC OPERATORS:<br>";
  $z=$x+$y;
  echo $z."<br>";

  $z=$x-$y;
  echo $z."<br>";
  
  $z=$x*$y;
  echo $z."<br>";
  
  $z=$x/$y;
  echo $z."<br>";

  $z=$x**$y;
  echo $z."<br>";

  $z=$x%$y;
  echo $z."<br>";echo "<br>";

 
  // Increment/decrement operators
  // ++, --
  $counter=9;

  // this can be cumbersome so we use the operators ++/-- if by 1
  // and +=/-=/*=//=, etc for other steps/numbers
  //  $counter=$counter+1;
  $counter++;
  echo "INCREMENT/DECREMENT OPERATORS:<br>";
  echo $counter."<br>";
  $counter+=2;
  echo $counter."<br>";echo "<br>";


  // Operator precedence
  // ()
  // **
  // * / %
  // + -

  $total = 1 + 2 - 3 * 4 / 5 ** 6;

  echo "PRECEDENCE:<br>";
  echo $total;

