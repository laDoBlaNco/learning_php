<?php
  // this is the pre oop way of doing things in php
  date_default_timezone_set('America/New_York');
  $next_week = time() + (7 * 24 * 60 * 60);
  echo 'Now:  ' . date('Y-m-d') . "\n<br>";
  echo 'Next Week:  ' . date('Y-m-d',$next_week) . "\n<br>";
  
  echo "=======<br>\n";

  // now with objects, namespace and methods
  $now = new DateTime();
  $next_week = new DateTime('today +1 week');
  echo 'Now: ' . $now->format('Y-m-d') . '<br>';
  echo 'Next Week: ' . $next_week->format('Y-m-d') . '<br>';
  


  
