<?php

// Now we have the Multiple Alternative Decision Structure
// which translates to our if..elseif..else struture. This
// basically states if a condition is true then we do something
// and if its false then we check another condition

$name = readline("What is your name? ");

if($name=='John'){
  echo"You are my cousin!\n";
}elseif($name == "Aphrodite"){
  echo"You are my sister!\n";
}elseif($name == "Loukia"){
  echo"You are my mom!\n";
}else{
  echo"Sorry, I don't know you.\n";
}



