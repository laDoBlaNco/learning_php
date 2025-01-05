<?php

// Write a php script that prompts the user to enter their age and
// then displays the message "You can drive a car in Kansas (USA)" when
// the age is great than 14

$age = (int)readline("Please enter your age: ");
if($age>14)echo"You can drive in Kansas (USA)!\n";
