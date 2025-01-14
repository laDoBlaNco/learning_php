<?php

$a = (int)readline();

if($a < 1){
  $y = 5 + $a;
  echo $y,"\n";
}elseif($a < 5){
  $y = 23/$a;
  echo $y,"\n";
}elseif($a < 10){
  $y = 5 * $a;
  echo $y,"\n";
}else{
  echo"Error!\n";
}
