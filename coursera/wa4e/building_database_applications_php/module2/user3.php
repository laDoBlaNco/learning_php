<?php
require_once "pdo.php";

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

if(isset($_POST['user_id'])){
  $sql='delete from users where user_id = :zip';
  echo "<pre>\n$sql\n</pre>\n";
  $stmt = $pdo->prepare($sql);
  $stmt->execute([':zip'=>$_POST['user_id']]);
}
?><html><head></head>
<body>
  <table border="1">
  <?php
  $stmt = $pdo->query('select name,email,password,user_id from users');
  while($row=$stmt->fetch(PDO::FETCH_ASSOC)){
    echo "<tr><td>";
    echo $row['name'];
    echo "</td><td>";
    echo $row['email'];
    echo "</td><td>";
    echo $row['password'];
    echo "</td><td>";
    echo '<form method="post"><input type="hidden"';
    echo 'name="user_id" value="'.$row['user_id'].'">'."\n";
    echo '<input type="submit" value="Del" name="delete">';
    echo "\n</form>\n";
    echo "</td></tr>\n";
  }
  

  ?>
  </table>
  <p>Add A New User</p>
  <form method="post">
    <p>Name: <input type="text" name="name" size="40"/></p>
    <p>Email: <input type="email" name="email"/></p>
    <p>Password: <input type="password" name="password"/></p>
    <p><input type="submit" value="Add New"/></p>
  </form>
</body>
</html>