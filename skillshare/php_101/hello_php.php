<!-- Since this is treated as an html file, anything not in the php bracket 
is considered html -->
<?php
// Inside the php bracket the comments use '//'
/*
and this
*/

echo "<h1>PHP Mastery - PHP 101</h1>";


// GET:
echo "GET:<br>";
// when we see in the url '?name=kevin' for example, this is data or information being
// passed to the 'superglobal' GET. We can then use this on different pages. Though
// this isn't the main way we'll be doing this, it does have its uses. A lot of times
// I'll use for search parameters or maybe user or post IDs, so the data base will 
// know where to start, etc.

// note that I haven't set this anywhere, just adding it to the url manually
if(isset($_GET['s'])){
  echo "Your search term is: $_GET[s]";
}
echo "
<form method='get' action=''>
  <label>Enter search term</label>
  <input type='search' name='s'>
</form>";

// WHILE LOOPS
echo '<br><br>';
echo 'WHILE LOOPS: <br>';

// interestingly, rather than erroring out with an out of bounds on the array, once we get
// to an index that doesn't exist, it'll be considered false and just stop.
// This makes me wonder about truthy and falsy values in php??? For the most part, anything
// empty or null is falsy and anything with a value (+ or - as in -1) is  truthy
// I believe the null case is what's happening with the array.
$array = ['name','email','address'];
$i = 0;
while($i < 3){
  echo "$array[$i]<br>";
  $i++;
}


// ARRAYS
echo 'ARRAYS:<br>';
// There are several ways to create an array
// index array
$array = array('name','email','address');
// echo $array; // you can't echo an array, so we need to use 'print_r' (print recursive) 
// which is like like a print loop 
print_r($array);
echo '<br>'.$array[2];

// We can just use brackets
$array2[] = 'salad';
print_r($array2); echo'<br>';

// then to append on to the array there's no fancy keywords, just
$array2[]='bowl'; 
print_r($array2); echo'<br>';

// then we have associative arrays (or dicts or maps)
$array3 = array('name'=>'Kevin','age'=>47,'email'=>'whitesidekevin@gmail.com',);
print_r($array3); echo'<br>';
echo $array3['name'];echo'<br><br>';

// If..else and switch
echo 'IF..ELSE AND SWITCH: <br>';
$number = 1;
$number2 = '1';
$number3 = 3;

// == && || != (all just as expected), also === is just like JS with checking data types looking
// at both value and data type
if($number===$number2 || $number==$number3){
  echo 'true';
}else{
  echo 'false';
}
echo '<br>';
// Just as in other langs, switch replaces the chains of elseif
switch($number){
  case 1:echo 'True';break;
  case 2:echo 'False';break;
  case 'three':echo 'Three';break;
  default:echo 'no idea';
}

echo '<br><br>';


// FOR & FOREACH
echo 'FOR & FOREACH: <BR>';
// pretty normal for loop
for($i=1;$i<=10;$i++){
  echo "$i<br>";
}

// now foreach seems pretty normal as well, how we have access to both value and index (keys)
$array = ['name','email','address'];
foreach($array as $data) echo "$data<br>"; // or
foreach($array as $key=>$value) echo "Key $key: $value<br>";
echo'<br>';


// VARIABLES
echo 'VARIABLES:<br>';
// Pretty common syntax here. Except that the concatenation is with '.' instead of '+'
$variable="I am".  " a variable".'<br>';
$number = 66;
$number*=2;
$a = 'number';

// Also as you can see below, we can do interpolation just adding in the var due to the $
// but they need to use double quotes

echo $variable;
echo $number;
echo "My age is $number!".'<br>';

// something interesting with php I'm seeing is that you can kinda compound or chain vars
// by chaining the $$$s if the value of the first var is an actual var name and only
// with concatenation, not interpolation. Its called a variable variable.
echo "My age is ".$$a.'<br>'.'<br>';

// echo "$array[3]<br>"; // nothing is printed, so its empty/null when we get out of bounds


// HELLO WORLD
echo 'HELLO WORLD IN PHP:';
echo 'hello, php world!';

?>