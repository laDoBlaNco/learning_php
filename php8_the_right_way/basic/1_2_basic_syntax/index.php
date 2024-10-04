<?php
// anything in this code block will be php interpreted. If the entire file
// is php, there is no need for the closing tag, because that could create
// unwanted text or space in the html

echo 'Hello world','<br>'; // all we see is 'hello world' since php is a server-side
// language and not on the actual response page. 
// Semicolons are obligatory unless you are on the last  light before a 
// php closing tag. 

// We can also execute this script in the terminal, meaning we can create
// clis as well with PHP. :)

// We can also use 'print'
print 'Hello world'; // this actually returns a value, so it can be used
// in expressions while echo can't. As expressions always return a value
// to be used. 
echo '<br>';

echo print 'Hello world'; // see the 1 we get back? That's because it prints
// and then returns 1. This means 

echo '<br>';

// this doesn't work and we get a parser error.
// print echo 'Hello world';

// it also works with ()s, but echo works with comma separated strings
echo 'Hello ','world','<br>'; // print can't do this.

// QUOTES used are '' and "", pretty self explanatory, "" can use interpolation

// Variables must start with letter or _ and all of them must start with $
$_123name = 'Kevin';
echo $_123name;

// Variables are by default assigned by value, similar to Go its basically
// copies rather than references. 

$x = 1;
$y = $x;

$x = 3;  // here we change $x to 3, what gets printed?
echo '<br>',$x; // 3 of course, and $y
echo '<br>',$y; // 1 because even though we say $y = $x, it was a copy not ref.

// but we can assign by ref (we'll talk about that more later) with &

$x = 1;
$y = &$x;
$x = 3;
echo '<br>',$y; // $y is now 3 as its by reference (pointer) and not a copy (value)


$first_name = 'Kevin';
echo '<br>','Hello $first_name'; // no interpolation
echo '<br>',"Hello $first_name"; // interpolation. Some folks use ${...} or {$...}
echo '<br>',"Hello ${first_name}"; // But apparently its  deprecated in php8
echo '<br>',"Hello {$first_name}"; // looks like this one is still used. ;)


// CONCATENATION OPERATOR
echo '<br>',"Hello " . "$first_name"; // '.' is the concat operator


// What about embedding in HTML

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>1-2 Basic PHP Syntax</title>
</head>
<body>
<h1><?php echo 'Hello world' ?></h1>
<h1><?= 'Hello world' ?></h1> <!-- This is the short-hand to simply echo variables
To process php on the page we need to use the open close tags as normal with semicolons  -->

<?php
  $a = 10;
  $b = 5;

  echo '<p>',$a . ', ' . $b,'</p>'; // and this works right in the HTML with the php tags
  // we can use this for dynamically generated html, but not a great idea to mix it all together
  // siempre. we'll talk about separating code later. 


  // NOTE on comments. We have our single line with this '//'

  /*
    multiline comments
    which work as we figure 
    they should
  */

  /**
   * These are actually doc blocks in php which are used for writing documentation
   * for the source code. We'll discuss that when we get to OOP.
   */

   // COMMENTS DON'T WORK WITH THE CLOSING PHP TAG ON THE SAME LINE.
   // WRITING NESTED MULTILINE COMMENTS DON'T WORK IN PHP, WE'LL GET A PARSER
   // ERROR.
?>


<p>My first paragraph</p>
</body>
</html>

