<?php
/**
 * Diplaying a string backwards
 * 
 * Write a PHP script that prompts the user to enter any string with
 * four letters and then displays its contents backwards. For example,
 * if the string entered is 'Zeus', the script must display sueZ'
 */

 // there's a function for this and the instructions don't tell me not
 // to use it, so.

 $s = readline("Enter a four letter word: ");

 $rev1 = strrev($s);
 $rev2 = $s[3].$s[2].$s[1].$s[0];

 echo $rev1,"\n";
 echo $rev2,"\n";