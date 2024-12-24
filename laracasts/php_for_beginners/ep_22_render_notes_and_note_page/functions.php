<?php  

function dd($var){
  echo '<pre>';
  var_dump($var);
  echo '</pre>';

die();
}

// dd($_SERVER['REQUEST_URI']);
// echo $_SERVER['REQUEST_URI'];

// Now we can just use this to check the superglobal request_uri in order to 
// update the nav styles.
function is_uri($value){
  if($_SERVER['REQUEST_URI']===$value) return true;
}