<?php

  $string = 'Hello World';

  // get length of string
  echo strlen($string),'<br>';

  // find the position of the first occurence of a substring in a string
  echo strpos($string,'o'),'<br>';

  // Find the position of the last occurence of a substring in a string
  echo strrpos($string,'o'),'<br>';

  // Reverse a string
  echo strrev($string),"<br>";
  echo $string,'<br>'; // again it doesn't mutate the original

  // Convert all characters to lowercase
  echo strtolower($string),'<br>';

  // Convert all characters to uppercase
  echo strtoupper($string),'<br>';

  // Uppercase the first character of each word
  echo ucwords($string),'<br>';

  // String replace
  echo str_replace('World','Everyone',$string),'<br>';

  // Return portion of a string specified by teh offset and length
  echo substr($string,0,5),'<br>';
  echo substr($string,5),'<br>'; // third arg is optional. one arg returns to the end
  
  // Starts with
  if(str_starts_with($string,'Hello')) echo 'YES<br>';

  // Ends with
  if(str_ends_with($string,'World')) echo 'YES<br>';


  // We can also use some functions htmlentities and htmlspecialchars
  // They are very similar but used for security as they won't parse
  // the HTML
  $string2 = '<h1>Hello</h1>';
  echo $string2,'<br>'; // browser will parse it as normal. But if we have this
  // in a form it opens us up for attack.
  // $string3 = '<script>alert(1)</script>';
  // echo $string3,'<br>'; // so now people can insert JS into our page
  echo htmlspecialchars($string2),'<br>'; // not it'll just show the tags, but NOT
  // parse them. So the script wouldn't run either.
  // htmlentities does pretty much the same thing with small differences, but we can
  // usually get away with using htmlspecialchars. Looks like htmlentities simply
  // has a larger charset to translate the chars to, but they both are simply 
  // translating chars to HTML entities rather than parsing them
  $string4 = "A 'quote' is <b>bold</b>";
  echo htmlentities($string4),'<br>';
  // so the above translates to &lt;b&gt;bold&lt;/b&gt; so it prints '<b>bold</b>'
  echo htmlentities($string4,ENT_QUOTES),'<br>'; // ENT_QUOTES includes the quotes '' in the
  // translation or ignores them with ENT_IGNORE, etc. Not going to go down that documentation
  // rabbit hole just yet. This is going to be my career, so I can come back to it.


  // We can also do formatted strings with printf, which is good when getting user input. 
  // php.net docs has all the specifiers, but here are some examples
  printf('%s likes to %s','Ladoblanco','code');echo '<br>';
  printf('1+1=%d',1+1);echo '<br>';
  printf('1+1=%.2f',1+1);echo '<br>';


  


  // NOTING that some of these functions numbers are strange, but at the
  // same time pretty intuitive after you see the patterns in the naming.