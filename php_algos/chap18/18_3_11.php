<?php

/**
 * The most popular and commonly used grading system in the US uses
 * discrete evaluation in the form of letter grades. Write the 
 * correspodning php script that prompts the user to enter a letter
 * between A and F, and then displays the corresponding percentage
 * according to the following table 
 *   A  90-10
 *   B  80-89
 *   C  70-79
 *   D  60-69
 *  E/F 0-59
 * 
 */

$grade = readline("Please enter letter grade: ");
$percentage = match($grade){
'A' => '90%-100%',
'B' => '80%-89%',
'C' => '70%-79%',
'D' => '60%-69%',
'E' => '0%-59%',
'F' => '0%-59%',
};

echo"You earned $percentage";
