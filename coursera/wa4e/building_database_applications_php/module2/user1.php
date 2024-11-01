<?php
require_once 'pdo.php';

if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['password'])){
  $sql = "insert into users (name,email,password)
          values (:name,:email,:password)";
  echo "<pre>\n".$sql."\n</pre>\n";
  $stmt = $pdo->prepare($sql);
  $stmt->execute([
    ':name'=>$_POST['name'],
    ':email'=>$_POST['email'],
    ':password'=>$_POST['password']
  ]);
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>User1 PHP</title>
</head>
<body>
  <p>Add A New User</p>
  <form method="post">
    <p>Name: <input type="text" name="name" size="40"/></p>
    <p>Email: <input type="email" name="email"/></p>
    <p>Password: <input type="password" name="password"/></p>
    <p><input type="submit" value="Add New"/></p>
  </form>
  
</body>
</html>