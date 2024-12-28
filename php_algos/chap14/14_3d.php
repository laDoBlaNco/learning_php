<?php
// strpos(subject,search)
// This function returns the numerical position of the first occurence
// of searrch in subject, or false if search is not found.
$a = "I am a newbie in PHP. PHP rocks!";
$i = strpos($a,"newbie");

echo $i,"\n";
echo strpos($a,"PHP"),"\n";