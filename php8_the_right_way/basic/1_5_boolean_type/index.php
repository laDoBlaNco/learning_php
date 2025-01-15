<?php

/* Booleans */

$is_complete = null;  // mostly useed in control structures
if($is_complete){
  // do something
  echo 'it passed'.'<br>';
}else{
  // do something else.
  echo 'failed'.'<br>';
}

// integers 0 -0 = false
// floats 0.0 -0.0 = false
// '' = false
// '0' = false
// [] = false
// null = false

// Almost anything else will eval to true, even negative numbers

// How do you print the bool, eithe print something else instead
// of the boolean. We can also print the actual bool and get 
// a 1 or ''. php tries to cast the boolean to a string and thus
// gives us a '' 

// anotherway is using is_bool 

// var_dump will print out the actual bool name


var_dump(true); echo '<br>';
var_dump(false);