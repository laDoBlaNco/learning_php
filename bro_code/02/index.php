<?php
/**
 * Variables in PHP
 */
  // variable = a resuable container that holds data
  //            string, integer, float, boolean

  // we declare vars with $ 
  // here we have string types
  $name = "Ladoblanco Whiteside";
  $food = "Pizza";
  $email = "fake123@gmail.com";

  // here we see integers which can be used in math unlike strings
  // integers are WHOLE numbers
  $age = 48;
  $users = 2;
  $quantity = 4;

  // a float or floating point number contains decimals
  $gpa = 2.5;
  $price = 5.99;
  $tax_rate = 5.1;
  $total = null;

  // bools are like a light switch, it just on or off / true or false
  // a  bool converted to a string to display will show as '1' or ''
  // This is because we typically don't print bools to the screen but use them
  // with conditionals.
  $employed = true;
  $online = false;
  $for_sale = true;

  // echo $name."<br>";
  // a string literal can be displayed directly
  echo "STRINGS:<br>";
  echo "Hello {$name}<br>";
  echo "You like {$food}<br>";
  echo "Your email is {$email}<br>";echo "<br>";
  
  echo "INTEGERS:<br>";
  echo "You are {$age} years old<br>";
  echo "There are {$users} users online<br>";
  echo "You would like to buy {$quantity} items<br>";echo "<br>";
  
  echo "FLOATS:<br>";
  echo "Your GPA is {$gpa}<br>";
  echo "Your pizza is \${$price}<br>"; // using a \$ to escape the $ as php gets confused with the var
  echo "The sales tax rate is {$tax_rate}%<br>";echo "<br>";
  
  echo "BOOLEANS:<br>";
  echo "Online status: {$online}<br>";echo "<br>";

  echo"You hav ordered {$quantity} x {$food}s.<br>";
  $total = $quantity*$price;
  echo"Your total is \${$total}<br>";


?>