<?php
  // A Cookie is information about a user stored in a user's web-browser
  // This is how we get targeted advertisements, browsing preferences, and
  // other NON-sensitive data.

  // to create a cookie we use the function. The function takes as 
  // args the key, value, expiration,folder. To delete we just set
  // the time() - 0

  setcookie('fav_food','pizza',time()+(86400*2),"/");
  setcookie('fav_drink','coke',time()+(86400*2),"/");
  setcookie('fav_place','bed',time()+(86400*2),"/");

  // we can use the cookie superglobal to print all of them out
  foreach($_COOKIE as $key=>$value){
    echo"$key = $value <br>";
  }

  // note how we can customize actions based on the cookies that are set
  if(isset($_COOKIE['fav_food'])){
    echo"Buy some $_COOKIE[fav_food]";
  }else{
    echo"I don't know your favorite food";
  }