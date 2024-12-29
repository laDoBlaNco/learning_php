<?php
/**
 * Write a PHP script that prompts the user to enter their first name
 * middle name, and last name and displays them formatted in all the
 * following ways.
 * 
 * $fname $mname $lname
 * $fname $m[0] $lname
 * $lname $fname[0]
 * 
 * Furthermore the script must ensure that regardless of how teh user
 * enters their name, it will always be displayed with the first letter
 * capitalized and the rest lowercase
 */

 echo"Pleae enter your first, middle, and last names:\n";
 $fname = readline();
 $mname = readline();
 $lname = readline();

echo ucfirst("$fname $mname $lname\n");
echo ucfirst("$fname $mname[0]. $lname\n");
echo ucfirst("$lname $fname[0].\n");


