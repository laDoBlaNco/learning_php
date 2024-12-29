<?php
  // (string)number
  // It returns a string version of number or in other words, it
  // converts a number (real or integer) into a string. typecasting

  $age = (int)readline("Enter your age: ");

  $new_age = $age + 10;

  $message = "You'll be ".(string)$new_age." years old in 10 years from now!";
  echo $message,"\n";

  // In computer science, type casting is a way of converting a var
  // from one data type into another. Note that (string) is not a function
  // It is just a way in PHP to turn a number into a string.