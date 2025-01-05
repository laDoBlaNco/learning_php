<?php

// Write a script that prompts the user to enter a string, and then
// displays the message 'uppercase' when the user-provided string contains
// only uppercase chars. 

$str = readline("Please enter a string: ");

if($str == strtoupper($str)){
  echo"Uppercase\n";
}