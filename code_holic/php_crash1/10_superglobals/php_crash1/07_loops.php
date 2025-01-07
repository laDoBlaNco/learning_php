<?php

// while Loop with $counter
$counter = 0;
while($counter<10){
  echo"Counter $counter<br>";
  if($counter>=5)break;
  $counter++;
}
echo "<br>";

// do - while
$counter = 0;
do{
  echo"Counter $counter<br>";
  $counter++;
}while($counter<10);
echo"<br>";

// for
for($i=0;$i<10;$i++){
  echo"Counter is $i<br>";
};
echo"<br>";
// foreach
// A little aside into phps range function:
// echo implode(',',range(0,12)),"<br>";
// echo implode(',',range(0,100,10)),"<br>";
// echo implode(',',range('a','i')),"<br>";
// echo implode(',',range('c','a')),"<br>"; # php knows to go backwards 
// echo implode(',',range('A','z')),"<br>";

foreach(range('a','z') as $letter){
  echo"The letter is: $letter<br>";
}
echo"<br>";
// Iterate Over associative array.
foreach(range('a','z') as $i=>$l){
  echo"Index with letter is $i => $l<br>";
}
