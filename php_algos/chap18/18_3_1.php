<?php

// a contrived examples for trace tables again, so just for
// practice
$q = (int)readline();

if($q > 0 && $q <= 50){
  $b = 1;
}elseif($q > 50 && $q <= 100){
  $b = 2;
}elseif($q > 100 && $q <= 200){
  $b = 3;
}else{
  $b = 4;
}

echo"$b\n";