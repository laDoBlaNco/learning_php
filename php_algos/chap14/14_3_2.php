<?php
// Switching order of names
// Write a PHP script that prompts the user to enter in one single 
// string both first and last name. In the end, the script must change 
// the order of the two names. 

// In this exercise both the first and last names are entered in one
// single string, so the first thing that the script must do is split
// the string and assign each name to a different variable. If you 
// manage to do so, then you can just rejoin them in a different
// order. We will use strpos to locate the separator of these two
// words. If used with "Tom Smith" we get back the value 3. With
// "Angelina Brown" we would get 8. 

// The value isn' tjust the position where the space character is, it 
// also represents the number of characters that the first word contains.
// The same is true for Angelina 8. Its both the position and the
// length of the first word. 

$name = readline("Please enter a two word full name: ");

// Find the position of the space character. This is also the number
// of characters in the first name.
$space_pos = strpos($name,' ');

// get space_pos number of characters starting from position 0
$first_name = substr($name,0,$space_pos);

// get the rest of the chars starting from position space_pos + 1
$last_name = substr($name,$space_pos+1);

$new_name = "$last_name, $first_name";
echo "$name\n";
echo "$new_name\n";
