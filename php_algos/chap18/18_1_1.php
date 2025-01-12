<?php

// another contrived example just to type out
$a = (int)readline();
$b = (int)readline();


if($a > 3){
  echo"Message #1\n";
}elseif($a > 4 && $b <= 10){
  echo"Message #2\n";
  echo"Message #3\n";
}elseif($a*2 == -26){
  echo"Message #4\n";
  echo"Message #5\n";
  $b++;
}elseif($b == 1){
  echo"Message #6\n";
}else{
  echo"Message #7\n";
  echo"Message #8\n";
}

echo"The end\n";