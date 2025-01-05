<?php

// Write a php script that prompts the user to enter two numbers. If
// the first user-provided number is greater than the second one, the
// script must swap their values. In the end, the script must display
// the numbers, always in ascending order. 

echo"Please enter two numbers: \n";
$n1 = (int)readline();
$n2 = (int)readline();

if($n1>$n2){
  echo"\n$n2-->$n1\n";
  return;
}

echo"\n$n1-->$n2\n";