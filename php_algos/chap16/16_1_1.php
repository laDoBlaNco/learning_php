<?php

// some more examples of single alternative decision structures
$a = (int)readline();

$y = 5;

if($a*2>100){
  $a=$a*3;
  $y=$a*4;
}
echo $a," ",$y,"\n";
