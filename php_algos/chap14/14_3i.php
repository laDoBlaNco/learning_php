<?php
// substr(subject,begin_index[,length])
// This function returns a portion of subject. Specifically, it starts
// from position begin_index and returns a substring of length chars
// or up to the end of the subject, whichever comes first. The arg
// length is optional. 

$a = "Hello Athena";

echo substr($a,6,3),"\n";
echo substr($a,6,300),"\n";
echo substr($a,7),"\n";