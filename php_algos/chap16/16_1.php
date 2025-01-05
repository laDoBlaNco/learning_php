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

 if($age<18) echo"You are underage!\n";