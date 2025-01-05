<?php

// Prompt the user to enter three temperature values measured at
// three different points in New York, and then displays the message
// "Heat Wave" if the average value is greater than 60 degrees 
// Fahrenheit.

echo"Please enter 3 temp checks:\n";
$t1 = (int)readline();
$t2 = (int)readline();
$t3 = (int)readline();

if(($t1+$t2+$t3)/3>60){
  echo"Heat Wave!\n";
}