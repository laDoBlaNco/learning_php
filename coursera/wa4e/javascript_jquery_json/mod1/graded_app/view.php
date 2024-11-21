<?php
require_once "pdo.php";
session_start();
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Kevin Whiteside - Resume Registry - Profile View</title>
    <?php require_once "bootstrap.php"; ?>
  </head>
  <body>
    <div class="container">
      <h1>Profile information</h1>
      <?php
      $stmt = $pdo->query("select first_name,last_name,email,headline,summary from Profile
                            where profile_id=".$_GET['profile_id']);
      $row = $stmt->fetch(PDO::FETCH_ASSOC);
      echo '<p>First Name: '.$row['first_name'].'</p>';
      echo '<p>Last Name: '.$row['last_name'].'</p>';
      echo '<p>Email: '.$row['email'].'</p>';
      echo '<p>Headline:<br/> '.$row['headline'].'</p>';
      echo '<p>Summary:<br/> '.$row['summary'].'</p>';
    
      ?>

<a href="index.php">Done</a>
</div>
</body>
</html>
