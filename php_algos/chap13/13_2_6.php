<?php
/**
 * Inside an ATM bank machine there are notes of $20, $10, $5 and $1
 * Write a php script that prompts the user to enter the amount of 
 * money they want to withdraw (using an integer value) and then 
 * displays the least number of notes the ATM must give.
 * 
 * For example, if the user enters an amount of $76, the script
 * must display the message:
 * "3 note(s) of $20, 1 note(s) of $10, 1 note(s) of $5, and 1 note(s)
 * of $1"
 * 
 * 
 */

 $original_num = (int)readline("Enter the amount of money to withdrawal: ");

 $note20 = (int)($original_num/20);
//  echo $note20,"\n";
$rest = $original_num%20;
$note10 = (int)($rest/10);
// echo $note10,"\n";
$rest = $rest%10;
$note5 = (int)($rest/5);
// echo $note5,"\n";
$note1 = $rest%5;
// echo $note1,"\n";

echo"$note20 note(s) of $20, $note10 note(s) of $10, $note5 note(s) of $5, and $note1 note(s) of $1\n";