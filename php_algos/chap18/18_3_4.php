<?php

/**
 * Write a php script that prompts the user to enter two integers
 * and then displays a message indicating whether both numbers are
 * odd or both are even; otherwise the message "Nothing special"
 * must be displayed.
 */

 $n1 = (int)readline("Please enter the first integer: ");
 $n2 = (int)readline("Please enter the second integer: ");

 if($n1%2==0 && $n2%2==0){
  echo"Both numbers are even!\n";
 }elseif($n1%2!=0 && $n2%2!=0){
  echo"Both numbers are odd!\n";
 }else{
  echo"Nothing special!\n";
 }