<?php

// Declaring numbers
$a = 5;
$b = 4; 
$c = 1.2;

// Arithmetic operations
echo $a + $b,"<br>";
echo $a - $b,"<br>";
echo $a * $b,"<br>";
echo $a / $b,"<br>";
echo $a % $b,"<br>";
echo "<br>";
// Assignment with math operators
$a += $b; echo $a.'<br>';
$a -= $b; echo $a.'<br>';
$a *= $b; echo $a.'<br>';
$a /= $b; echo $a.'<br>';
$a %= $b; echo $a.'<br>';
echo "<br>";

// Increment operator
echo $a++,"<br>";
echo ++$a,"<br>";
echo $a,"<br>";
echo "<br>";

// Decrement operator
echo $a--,"<br>";
echo --$a,"<br>";
echo $a,"<br>";
echo "<br>";

// Number checking functions
echo var_dump(is_float(4)),'<br>';
echo var_dump(is_integer(4)),'<br>';
echo var_dump(is_numeric(4)),'<br>';
echo var_dump(is_numeric("56")),'<br>';
echo var_dump(is_numeric("abc")),'<br>';
echo "<br>";

// Conversion
$str_number = '12.34';
$number = (float)$str_number;
echo var_dump($number),"<br>";
$number = (int)$str_number;
echo var_dump($number),"<br>";
$number = (bool)$str_number;
echo var_dump($number),"<br>";
// before we didn't have typecasting and only used functions to do the same
// thing. so both work the same, but now typecasting is the preferred method
$str_number = '12.34';
$number = floatval($str_number);
echo var_dump($number),"<br>";
$number = intval($str_number);
echo var_dump($number),"<br>";
$number = boolval($str_number);
echo var_dump($number),"<br>";

echo"<br>";

// Number functions
echo"abs(-15) - ",abs(-15),"<br>";
echo"pow(2,3) - ",pow(2,3),"<br>";
echo"sqrt(16) - ",sqrt(16),"<br>";
echo"max(2,3) - ",max(2,3),"<br>";
echo"min(2,3) - ",min(2,3),"<br>";
echo"round(2.4) - ",round(2.4),"<br>";
echo"round(2.6) - ",round(2.6),"<br>";
echo"floor(2.6) - ",floor(2.6),"<br>";
echo"ceil(2.4) - ",ceil(2.4),"<br>";
echo "<br>";

// Formatting numbers
$number = 123456789.12345;
echo number_format($number,2,'.',','),"<br>";

// https://www.php.net/manual/en/ref.math.php
