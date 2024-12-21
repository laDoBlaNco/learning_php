<?php

  $age = 48;
  $citizen = false;

  if(!$age>=18 || !$citizen){
    echo"You can't vote!<br>";
  }else{
    echo"You can vote!<br>";
  }


  $child = false;
  $senior = false;
  $ticket = null;

  if($child||$senior){
    $ticket = 10;
  }else{
    $ticket = 15;
  }

  echo"The ticket price is \${$ticket}";