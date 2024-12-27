<?php

// String functions are awesome in PHP
$username = 'Bro PHP Code';

echo strtolower($username),"<br>";
echo strtoupper($username),"<br>";
echo trim($username),"<br>";
echo str_pad($username,25,'x'),"<br>";
echo str_replace('Bro','Lado',$username),"<br>";
echo strrev($username),"<br>";
echo str_shuffle($username),"<br>";
echo strcmp($username,"Bro Code"),"<br>";
echo strlen($username),"<br>";
echo strpos($username,"o"),"<br>";
echo substr($username,0,3),"<br>";
echo substr($username,4),"<br>";
print_r(explode(" ",$username));


