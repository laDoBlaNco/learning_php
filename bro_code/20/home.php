<?php
// if we don't start the session, then these values aren't accessible
  session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home Page</title>
</head>
<body>
  This is the Home Page <br>
  <form action="home.php" method="post">
    <input type="submit" value="Logout" name="logout">
  </form>
</body>
</html>
<?php
  echo"$_SESSION[password]<br>";
  echo"$_SESSION[username]<br>";

  if(isset($_POST['logout'])){
    session_destroy();
    header("Location:index.php");
  }

?>