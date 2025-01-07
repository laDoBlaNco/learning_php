<?php

// Create simple string
$name = "Ladoblanco";
$hello = "Hello $name";
$hello2 = 'Hello $name';
echo $hello,"<br>";
echo $hello2,"<br>";
echo"<br>";


// String concatenation
echo"Hello " . "Ladoblanco" . "<br>";
echo"<br>";

// String functions
$string = "     Hello Ladoblanco     ";
echo"1 - ",strlen($string),"<br>", PHP_EOL;
echo"2 - ",trim($string),"<br>",PHP_EOL;
echo"3 - ",ltrim($string),"<br>",PHP_EOL;
echo"4 - ",rtrim($string),"<br>",PHP_EOL;
echo"5 - ",str_word_count($string),"<br>",PHP_EOL;
echo"6 - ",strrev($string),"<br>",PHP_EOL;
echo"7 - ",strtoupper($string),"<br>",PHP_EOL;
echo"8 - ",strtolower($string),"<br>",PHP_EOL;
echo"9 - ",ucfirst('ladoblanco'),"<br>",PHP_EOL;
echo"10 - ",lcfirst('LADOBLANCO'),"<br>",PHP_EOL;
echo"11 - ",ucwords('hello ladoblanco'),"<br>",PHP_EOL;
echo"12 - ",strpos($string,'Ladoblanco'),"<br>",PHP_EOL;
echo"13 - ",stripos($string,'ladoblanco'),"<br>",PHP_EOL;
echo"14 - ",substr($string,8,3),"<br>",PHP_EOL;
echo"15 - ",str_replace('Ladoblanco','Kevin',$string),"<br>",PHP_EOL;
echo"16 - ",str_ireplace('ladoblanco','Kevin',$string),"<br>",PHP_EOL;

$number1 = 100;
$number2 = 123456;
echo"17 - ",str_pad($number1,8,'0',STR_PAD_LEFT),"<br>",PHP_EOL;
echo"18 - ",str_pad($number2,8,'0',STR_PAD_LEFT),"<br>",PHP_EOL;
echo"19 - ",str_repeat("PHP ",10),"<br>",PHP_EOL;

echo"<br>";

// Multiline text and line breaks
$long_text = "
Hello, my name is Ladoblanco
I am 48 years old,
I have two kids and I love them both
";
echo $long_text,"<br>";
echo nl2br($long_text),"<br>";
echo "<br>";

// Multiline text and reserve html tags
$long_text = "
Hello, my name is <b>Ladoblanco</b>
I am <b>48</b> years old,
I have two kids and I love them both
";
echo"1 - ",$long_text,"<br>";
echo"2 - ",nl2br($long_text),"<br>";
echo"3 - ",htmlentities($long_text),"<br>",PHP_EOL;
echo"4 - ",nl2br(htmlentities($long_text)),"<br>",PHP_EOL;
echo"5 - ",html_entity_decode(htmlentities($long_text)),"<br>",PHP_EOL;
echo"6 - ",htmlspecialchars($long_text),"<br>",PHP_EOL;

echo"<br>";




// https://www.php.net/manual/en/ref.strings.php
