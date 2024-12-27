
<?php

// Sessions = SGB used to store information on a user to be used 
// across multiple pages. A user is assigned a session-id
// For example this would be used for login-credentials

// It allows you to move to different pages within a website with certain
// data following you. 

// When creating a session it must come BEFORE any HTML
session_start();
// after that we can add any html we want to

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Page</title>
</head>
<body>
  This is the login Page <br>
  <form action="index.php" method="post">
    <label for="username">Username:</label><br>
    <input type="text" name="username" id="username"><br>
    <label for="password">Password:</label><br>
    <input type="password" name="password" id="password"><br>
    <input type="submit" value="Login" name="login">
  </form>
  <a href="home.php">This goes to the home page</a><br>
</body>
</html>
<?php
  if(isset($_POST['login'])){
    
    if(!empty($_POST['username']) &&
    !empty($_POST['password'])){
      $_SESSION['username'] = $_POST['username'];
      $_SESSION['password'] = $_POST['password'];

      // we then jump to another page with the header()
      header('Location:home.php');
      

    }
  }

?>


