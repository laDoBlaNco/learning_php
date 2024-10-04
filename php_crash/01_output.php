<?php
  // Comments I already have down below
  # this is also a comment just like python wtih the #

  /*
  And then the multiline comments. 
  */

  // echo - output strings, numbers, html, etc. and takes multiple args
  // echo 123,'hello',10.5;

  // print - works like echo, but can only take in a single arg
  // print 123;  

  // print_r() - is a function and will print single values and arrays
  // print_r([1,2,3]);


  // var_dump() - also a function and returns more info like data types and length
  // var_dump(true);

  // var_export() - similar  to var_dump(), outputs a string representation of a variable.
  // var_export('hello'); // here we get the quotes as well



  // This closing tag for php is only needed when we are going to have html in the same doc. Otherwise in the 
  // wild I'll probably see a lot of folks just using the opening tag and nothing else.
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <!-- Note here below the embedded PHP with a short syntax without 'echo' -->
  <h1><?='Post One';?></h1> 
</body>
</html>