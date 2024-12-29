<?php
/**
 * Creating a Login ID
 * 
 * Write a php script that prompts theuser to enter their last name
 * and then creates a login ID from the first 4 letters of the name
 * (in lowercase) and a 3-digit random integer
 * 
 * To create a random integer I can use the rand() function. Since I 
 * need a random integer of 3 digits, teh range must be between 100
 * and 999. The PHP script for this algo is show here.
 */

 $last_name = readline("Enter last name: ");

 // now get a random 3 digit number from 100 to 999
 $random_int = rand(100,999);

 $login_id = strtolower(substr($last_name,0,4)).$random_int;

 echo $login_id,"\n";