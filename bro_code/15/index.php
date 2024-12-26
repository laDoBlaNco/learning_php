<?php
  // PHP - Functions Explained

  // function  => write some code once, then reuse it when needed
  //  type () after function name to invoke it. 
  // For example: add(), subtract(), multiply(), divide()

  // function happy_day($first_name){
  //   echo"Happy $first_name days!<br>";
  //   echo "Happy days!<br>";
  //   echo "Happy days!<br>";
  //   echo "Happy days!<br><br>";
  // }

  // happy_day('Kevin');
  // happy_day('Odalis');
  // happy_day('Xavier');

  function is_even($num){
    $result = $num%2;
    return $result;
  }

  echo is_even(137).'<br>';

  function hypotenuse(float $a,float $b){
    return sqrt($a**2+$b**2);
  }

  echo hypotenuse('hello',4);


?>