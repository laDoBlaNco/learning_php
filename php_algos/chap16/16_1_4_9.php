<?php
// Write a script that prompts the user to enter a string, and then
// displays the message "Many chars" when the user-provided string 
// contains more than 20 chars

$str = readline("Enter a string: ");

if(strlen($str)>20){
  echo"Many characters!\n";
}