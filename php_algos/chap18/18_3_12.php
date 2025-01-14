<?php

/**
 * Write a PHP script that prompts the suer to enter a number with
 * one decimal digit between 0.0 and 9.9, and then displays the number
 * as English text. For example, if the user enters 2.3, the script
 * must display "Two point three". Assume the user enters a valid
 * value.
 */

$num = readline("Please enter a number with one decimal: ");

$digit1 = match($num[0]){
  '1'=>'one',
  '2'=>'two',
  '3'=>'three',
  '4'=>'four',
  '5'=>'five',
  '6'=>'six',
  '7'=>'seven',
  '8'=>'eight',
  '9'=>'nine',
};
$digit2 = match($num[2]){
  '1'=>'one',
  '2'=>'two',
  '3'=>'three',
  '4'=>'four',
  '5'=>'five',
  '6'=>'six',
  '7'=>'seven',
  '8'=>'eight',
  '9'=>'nine',
};


echo ucfirst($digit1)." point ".$digit2,"\n";

// not sure if that's what you wanted me to do but that's what I 
// did.