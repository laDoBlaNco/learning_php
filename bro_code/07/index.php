<?php

  /////////////////////  PHP Logical Operators Explained /////////////////

  // Logical operators = combine conditional statements
  // if(condition1 && condition2)

  // && = true if both conditions are true
  // || = true if at least one condition is true
  // ! = true if false and false is true

  $temp = 15;
  $cloudy = false;

  if($temp<0 || $temp > 30){
    echo"The weather is horrible<br>";
  }else{
    echo"The weather is good<br>";
  }

  if(!$cloudy){
    echo"It's sunny<br>";
  }else{
    echo"It's cloudy<br>";
  }