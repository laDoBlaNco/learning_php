<?php

// Write a script that prompts the user to enter four numbers and,
// if at least one of them  is negative, it displays the message
// "Amoung the provided numbers, there is a negative one!"

echo"Please enter 4 numbers:\n";
$n1=readline();
$n2=readline();
$n3=readline();
$n4=readline();

if($n1<0||$n2<0||$n3<0||$n4<0) echo"Among the provided numbers, there is a negative one!\n";
