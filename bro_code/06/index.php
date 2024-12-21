<?php
/**
 * PHP - If Statements Explained
 */
  // if statement = if some condition is true, do something
  //                if some condition is false, don't do it

  $age = 101;

  if($age >= 100){
    echo"You are too old to enter this site<br>";
  }else if($age<=0){
    echo"That wasn't a valid age<br>";
  }elseif($age>=18){
    echo"You may enter this site<br>";
  }else{
    echo"You must be 18+ to enter<br>";
  }

  // if statements work with bool values direcctly as well
  $adult = true;

  if($adult){
    echo"You may enter this site<br>";
  }else{
    echo"You must be an adult to enter<br>";
  }