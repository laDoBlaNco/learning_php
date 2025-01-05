<?php
// The single-Alternative Decision Structure
/**
 * This is the simplest decision control structure of them all. It 
 * includes a statement or block fo statements on the 'true' 'happy'
 * path only, as presented in the following flowchart.
 * 
 * bool_expression -> true -> result 
 * 
 * Just one branch (if true)
 * 
 * If the bool expression evaluates to true then the block of statements
 * or statement is executed, otherwise they are skipped. The general 
 * form of the PHP statement is
 * 
 * if(bool_expression){}
 */

$age = (int)readline("Enter you age: ");

if ($age < 18){
  echo"You are underage!\n";
  echo"You have to wait for a few more years\n";
}

// All statements that appear inside an if statement should be 
// indented to the right by the same number of spaces. In the previous
// example, both echo statements are indented by 2+2=4 spaces

// Though the official php website says 4 spaces, I do it the Google 
// way with 2. 
