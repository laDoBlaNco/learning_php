<?php


$name = 'Laracasts';
$cost = 15;

$business = [
  'name' => 'Laracasts',
  'cost' => 15,
  'categories' => ['Testing','PHP','JavaScript'],
];
if($business['cost'] > 99){
  echo 'Not interested';
}

// foreach($business['categories'] as $category){
//   echo $category . '<br>';
// }

function register($user){
  // Create the user record in the db.

  // log them in.

  // Send a welcome email.

  // Redirect to their new dashboard.
}

require 'index.view.php';