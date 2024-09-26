<?php

  // these are php built-in functions for using, manipulating, etc arrays
  // there's a function to do pretty much anything inside of an array
  $fruits = ['apple','orange','pear'];

  // get length of an array
  echo count($fruits),'<br>';

  // search an array
  var_dump(in_array('apple',$fruits));
  echo '<br>';

  // Add to array - this is an interesting way to append
  $fruits[]='grape';
  print_r($fruits); echo '<br>';

  array_push($fruits,'blueberry','strawberry');
  print_r($fruits);echo '<br>';

  array_unshift($fruits,'mango');
  print_r($fruits);echo '<br>';
  // these last two are similar to JS, but we don't have the dot syntax
  // to use them like $fruits.push, so its all with functions.

  // Remove from array
  array_pop($fruits); // remove last
  print_r($fruits);echo '<br>';

  array_shift($fruits);  // remove first
  print_r($fruits);echo '<br>';

  // unset($fruits[2]); // this removes specific indexes but as seen it removes the index
  // // as well, so its now 0,1,3,4 
  // print_r($fruits);echo '<br>';

  // Split into chunks of 2 , multi-dimensional array???
  array_chunk($fruits,2); // so firat thing, this returns a chunked array but 
  // doesn't mutate the original in line
  print_r($fruits);echo '<br>';

  $chunked_array = array_chunk($fruits,2);
  // According to php.net: chunks an array into arrays with n elements. The last
  // chunk may contain less than n elements.
  // Returns a multidimensional numerically indexed array, starting with zero,
  // with each dimension containing n elements. 
  print_r($chunked_array);echo '<br>';


  // Concatenate arrays
  $arr1 = [1,2,3];
  $arr2 = [4,5,6];

  array_merge($arr1,$arr2); // again it doesn't mutate the original
  print_r($arr1); echo '<br>';

  $arr3 = array_merge($arr1,$arr2);
  print_r($arr3); echo '<br>';

  // we can also use the spread operator, same as in js
  $arr4 = [...$arr1,...$arr2]; // same as above

  print_r($arr4);echo '<br>';

  // Working with Associative arrays
  $a = ['green','red','yellow'];
  $b = ['avacado','apple','banana'];
  $c = array_combine($a,$b); // and we create an associate array
  // so what if one is longer than the other??? We get an errror, 'must have the
  // same number of elements', and this is for both args 1 and 2 in combine. 
  // O sea, both arrays must be the same length
  print_r($c);echo '<br>';

  $keys = array_keys($c);
  print_r($keys);echo '<br>';

  $values = array_values($c);
  print_r($values);echo '<br>';

  $flipped = array_flip($c);  // wow, this is better than JS :O)
  print_r($flipped);echo '<br>';

  // Working with Ranges:
  $numbers = range(1,20);
  print_r($numbers);echo '<br>';

  // Using Map - similar to js high order (takes fn) Map
  // in the course Brad uses a normal function, I decided to try the
  // anony => function and it worked as expected. But i'll probably see that
  // in the wild with the full function as well. 
  // NOTE: that unlike JS again its not $numbers.map, so we need to 
  // put $numbers in as the second argument.
  $new_numbers = array_map(fn($number)=>"Number: $number",$numbers);
  print_r($new_numbers);echo '<br>';

  // Love that we have both map and filter to get functional ;) , but not consistent
  // because array_map(fn,arr) and array_filter(arr,fn)???
  $less_than_10 = array_filter($numbers,fn($number)=>$number<=10);
  print_r($less_than_10);echo '<br>';


  //  OMG with reduce as well ;), array_reduce(arr,fn($carry,$item,[$initial]))
  $sum = array_reduce($numbers,fn($carry,$number)=>$carry+$number);
  var_dump($sum);

  








