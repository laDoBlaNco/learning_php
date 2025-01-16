<?php

// strings is a series of chars. 
$fname = 'Will';
$lname = 'Smith';
$name = $fname.' '.$lname;

// main difference between single and double quotes is interpolation
echo"$fname $lname<br>";
// as opposed to  
echo'$fname $lname\n',"<br>";

// negative to come from the end of the string
echo"$name[-2]<br>";

// we can change a char the same way we would changed an array value
$name[7] = 'k';
// but if we are out of bounds it'll pad the word, though we can't see it
// on the web page if we look at soruce we will notice it.
$name[20] = 'J'; // and of course increase the length of the word.

echo var_dump($name),"<br>";


// These special docs are used for multi-line strings with complex
// expressions - The main difference again being that Heredoc is as if 
// we are using "" and Nowdoc ''
// Heredoc 
$text = <<<TEXT
Line 1
Line 2
Line 3
$name
TEXT;

echo nl2br($text),"<br><br>";
// Nowdoc - the syntax here is the same except we need to enclose the
// indentifier in '' and there is no interpolation like ""
$text2 = <<<'text'
Line 1
Line 2
Line 3
$name
text;
echo nl2br($text2),"<br>";
// note that the identifier doesn't need to be in caps.
// the use case here is when there's a lot of concatenation and complex
// expressions, you don't need to worry about any of it and its much easier
// to read. I ran into this with the PHP course . Very confusing when 
// trying to interpolate and concatenate without heredoc strings

