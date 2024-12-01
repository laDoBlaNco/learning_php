<?php
// view.php
require_once "pdo.php";
session_start();
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Kevin Whiteside - Resume Registry - Profile View</title>
    <?php require_once 'head.php' ?>
  </head>
  <body>
    <div class="container">
      <h1>Profile information</h1>
      <?php
      $stmt = $pdo->query("select first_name,last_name,email,headline,summary from Profile
                            where profile_id=".$_GET['profile_id']);
      $stmt2 = $pdo->query('select year,description from Position
                            where profile_id='.$_GET['profile_id']);
      $stmt3 = $pdo->query('select year,Institution.name from Education
                              join Institution on Institution.institution_id = Education.institution_id
                              where profile_id='.$_GET['profile_id']);
      $row = $stmt->fetch(PDO::FETCH_ASSOC);
      $row2 = $stmt2->fetchAll(pdo::FETCH_ASSOC);
      $row3 = $stmt3->fetchAll(pdo::FETCH_ASSOC);
      echo '<p>First Name: '.$row['first_name'].'</p>';
      echo '<p>Last Name: '.$row['last_name'].'</p>';
      echo '<p>Email: '.$row['email'].'</p>';
      echo '<p>Headline:<br/> '.$row['headline'].'</p>';
      echo '<p>Summary:<br/> '.$row['summary'].'</p>';
      echo '<p>Education</p><ul>';
      foreach($row3 as $row){
        echo "<li>$row[year]: $row[name]</li>";
      }
      echo '</ul>';
      echo '<p>Position</p><ul>';
      foreach($row2 as $row){
        echo "<li>$row[year]: $row[description]</li>";
      }
      echo '</ul>'
      ?>

<a href="index.php">Done</a>
</div>
</body>
</html>
