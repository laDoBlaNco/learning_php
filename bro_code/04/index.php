<?php

  /**
   * PHP $_GET and $_POST SuperGlobals Explained
   */

  // $_GET, $_POST = special variables used to collect data from an html
  //                 form when data is sent to the file in the action attribute
  //                 of the <form>
  //                 <form action="some_file.php" method="get" (or method="post")>


  // $_GET = Data is appended to the URL as key=value pairs separated by &
            // NOT SECURE
            // char limit
            // Bookmark is possible with values
            // GET requests can be cached
            // Better for a search page.

  if(!empty($_GET)){
    echo $_GET['username'].'<br>';
    echo "{$_GET["password"]}<br>";
  }
  

  // $_POST = Data is packaged inside the body of the HTTP request
            // MORE SECURE
            // No data limit
            // Cannot bookmark
            // POST requests are not cached
            // Better for submitting credentials
  if(!empty($_POST)){
    echo "$_POST[username]<br>";
    echo "$_POST[password]<br>";
  }

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP $_GET and $_POST Explained</title>
</head>
<body>
  <form action="index.php" method="post">
    <label for="username">Username:</label><br>
    <input type="text" name="username" id="username"/><br>
    <label for="password">Password:</label><br>
    <input type="password" name="password" id="password"/><br>
    <input type="submit" value="Log in">
  </form>
</body>
</html>