<?php
require_once "pdo.php";

if(isset($_POST['user_id'])){
  $sql='delete from users where user_id = :zip';
  echo "<pre>\n$sql\n</pre>\n";
  $stmt = $pdo->prepare($sql);
  $stmt->execute([':zip'=>$_POST['user_id']]);
}
?>

<p>Delete A User</p>
<form method="post">
  <p>ID to Delete: <input type="text" name="user_id" /></p>
  <p><input type="submit" value="Delete"/></p>
</form>