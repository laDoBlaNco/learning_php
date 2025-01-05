<?php
// Write a php script that prompts the user to enter two numbers,
// and then displays the message "Both Positives" when both are
// user-provided numbers are positive
echo"Please enter two numbers: \n";
$n1=readline();
$n2=readline();

if($n1>0 && $n2>0) echo"Both Positives\n";