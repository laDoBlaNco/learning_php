<?php

require 'functions.php';
require_once 'Database.php';
// require 'router.php';

// here $config will be whatever is returned from our required
// file.
$config = require('config.php');


$db = new Database($config['database']);

// WHENEVER WE GET INPUT FROM A USER NEVER NEVER EVER EVER EVER
// INLINE IT DIRECTLY INTO A SQL QUERY. Unless we format it properly
// and typically people don't


$id = $_GET['id'];
$query = "select * from posts where id = ?"; // there are two ways to do this
// with the var in a prepared statement. Either with '?' or with a key such as
// :id (var used can be anything at all) and if we use that then in our params
// we would execute on an assoc array rather than just a variable.

// dd($query);

$posts = $db->query($query,[$id])->fetch();

dd($posts);

