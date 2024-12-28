<?php
// str_replace
// This function searches in subject and returns a copy of it 
// in which all occurences of the search string are replace with
// the replace string.
$a = "I am a newbie in C++. C++ rocks!";
$b = str_replace("C++","PHP",$a);

echo $a,"\n";
echo $b,"\n";

// Good to note that the original string wasn't changed
// to change the actual var we would do $a = str_replace("C++","PHP",$a);
