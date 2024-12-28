<?php
  // (string)number
  // It returns a string version of number or in other words, it
  // converts a number (real or integer) into a string. typecasting

  $age = (int)readline("Enter your age: ");

  $new_age = $age + 10;

  $message = "You'll be ".(string)$new_age." years old in 10 years from now!";
  echo $message,"\n";