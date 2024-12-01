<?php

// no need to continue
if(!isset($_GET['term'])) die('Missing required parameter');

// Let's not start the session unless we already have one
if(!isset($_COOKIE[session_name()])){
  die('Must be logged in');
}

session_start();

if(!isset($_SESSION['user_id'])){
  die('ACCESS DENIED'); // this is the reason I get kicked out of certain pages
  // when I'm using Google search to go directly to certain folders on the server
  // after certain docs :-|
}

// Don't even make a database connection until we are happy with all the above
require_once 'pdo.php'; // note we didn't do this until now after the guardians

header('Content-type:application/json;charset=utf-8');

$term = $_GET['term'];
error_log('Looking up typeahead term='.$term);

$stmt = $pdo->prepare('select name from Institution
  where name like :prefix');
$stmt->execute([':prefix'=>$term."%"]);

$retval = [];
while($row = $stmt->fetch(pdo::FETCH_ASSOC)){
  $retval[]=$row['name'];
}

echo json_encode($retval,JSON_PRETTY_PRINT);