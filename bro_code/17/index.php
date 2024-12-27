<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP - How to Sanitize/Validate Input</title>
</head>
<body>
  <form action="index.php" method="post">
    Username: <br>
    <input type="text" name="username"><br>
    Age: <br>
    <input type="text" name="age"><br>
    Email: <br>
    <input type="text" name="email"><br>
    <input type="submit" name="login" value="Login">
  </form>
</body>
</html>

<?php
  if(isset($_POST['login'])){
    // one way to sanitize is with php filters. Basically it means we
    // don't use user input directly, but we put it through a filter
    $username = filter_input(INPUT_POST,'username',FILTER_SANITIZE_SPECIAL_CHARS);
    $age = filter_input(INPUT_POST,'age',FILTER_SANITIZE_NUMBER_INT);
    $email = filter_input(INPUT_POST,'email',FILTER_SANITIZE_EMAIL);
    echo"Hello $username<br>";
    echo"You are $age years old<br>";
    echo"You're email is $email<br>";

    // Now with validation, it we don't get what we expect, we get an empty
    // string. Note the difference in the santizing above and the validation
    // of age here below.
    $age = filter_input(INPUT_POST,'age',FILTER_VALIDATE_INT);
    if(empty($age)){
      echo"That number wasn't valid";
    }else{
      echo"You are $age years old<br>";
    }
  }

?>