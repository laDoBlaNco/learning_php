<?php

// I'm designing a flowchart, but I'll solve the problem of
// figuing out if a number is odd or even with an if...else

$num = (int)readline("Enter a positive integer: ");

if($num%2==0){
  echo"That's even!\n";
}else{
  echo "Must be odd\n";
}