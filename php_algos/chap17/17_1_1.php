<?php

// so the dual alternative decision structure is your basic
// if...else structure. In PHP works just like any other language
$age = (int)readline("Enter your age: ");

if($age>=18){
  echo"You are an adult!\n";
}else{
  echo"You are underage!\n";
}

// seems ugly and confusing, but for single statement decisions
// we could do all of this with no brackets. 

if($age>=18)echo"You are an adult!\n";
else echo"You are underage!\n";

// I don't really like it. 