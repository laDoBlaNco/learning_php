<?php
// Write a php script that lets the user enter a long word and 
// displays its abbreviations

// Examples:
// revolutionary => r11y
// internationlization => i18n

$l_word = readline("Enter the word to be abbreviated: ");

echo $l_word[0].(strlen($l_word)-2).$l_word[-1],"\n";
