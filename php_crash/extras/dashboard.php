<?php

// so here we want to check for that session variable, but to use a 
// session we need to make sure we have a session started. That 
// function to start the session must be on every page that is included
// in those sessions.
// Normally we would have a header php file that would include this on
// all of the pages rather than manually doing so. Including php files
// into one another. 

// Now to destroy a session after its all working, we can create a 
// logout link. 

session_start();

if(isset($_SESSION['username'])){
  echo '<h1> Welcome ' . $_SESSION['username'] . '</h1>';
  echo '<a href="logout.php">Logout</a>';
}else{
  echo '<h1>Welcome Guest</h1>';
  echo '<a href="/learning_php/phpCrash/13_sessions.php">Home</a>';
}

