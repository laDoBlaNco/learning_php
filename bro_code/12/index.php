<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP - Associative Arrays Explained</title>
</head>
<body>
  <form action="index.php" method="post">
    <label for="country">Country: </label>
    <input type="text" name="country" id="country"/>
    <input type="submit" value="Submit">
  </form>
</body>
</html>

<?php

/////////////////////// PHP - Associative Arrays Explained /////////////////

// associative arrays are arrays made up of key=>value pairs.

// countries=>capitals
// id=>username
// item=>price

// we can also use [] instead of the array function
$capitals = [
  'USA'=>'Washington D.C.',
  'Japan'=>'Kyoto',
  'South Korea'=>'Seoul',
  'India'=>"New Dheli",
];

// echo $capitals['USA'],"<br>";

// changing an assoc. array
$capitals['USA'] = 'Las Vegas';
$capitals['China'] = 'Beijing';
array_pop($capitals);
array_shift($capitals);
$keys = array_keys($capitals);
$values = array_values($capitals);
$capitals2 = array_flip($capitals); // to switch our keys and values
$capitals2 = array_reverse($capitals2);

echo "The capital is {$capitals[$_POST['country']]}<br>";

echo "<hr><hr>";

foreach($capitals as $key=>$value){
  echo"$key =  $value <br>";
}

echo "<br>";

foreach($keys as $key){
  echo"$key <br>";
}
echo "<br>";
foreach($values as $value){
  echo"$value <br>";
}
echo "<br>";
foreach($capitals2 as $key=>$value){
  echo"$key =  $value <br>";
}

echo count($capitals);



