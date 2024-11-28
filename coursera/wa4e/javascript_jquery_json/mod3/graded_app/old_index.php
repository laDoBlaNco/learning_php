<?php
require_once 'pdo.php';
session_start();
?>
<!DOCTYPE html>
<html>

<head>
  <title>Kevin Whiteside - Resume Registry</title>
  <?php require_once "bootstrap.php"; ?>
</head>

<body>
  <div class="container">
    <h1>Kevin Whiteside's Resume Registry</h1>
    <?php


    // Displaying registry and links if or if not  logged in:
    if (isset($_SESSION['name'])) {
      echo '<p><a href="logout.php">Logout</a></p>';
      $stmt = $pdo->query('select first_name,last_name,headline,profile_id from Profile');
      $row = $stmt->fetch(PDO::FETCH_ASSOC); // THIS FEELS HACKY. THERE'S PROBABLY A MORE ELEGANT WAY
      if ($row) {
        echo '<table border="2">' . "\n";
        echo '<thead><tr>';
        echo '<th>Name</th>';
        echo '<th>Headline</th>';
        echo '<th>Action</th>';
        echo '</tr></thead>';

        $stmt = $pdo->query('select first_name,last_name,headline,profile_id,user_id from Profile');
        while ($row = $stmt->fetch(pdo::FETCH_ASSOC)) {
          echo "<tr><td>";
          echo '<a href="view.php?profile_id=' . $row['profile_id'] . '">' . htmlentities($row['first_name']), ' ', htmlentities($row['last_name']) . '</a>';
          echo "</td><td>";
          echo htmlentities($row['headline']);
          echo "</td><td>";
          // NOTE: HERE IS WHERE WE ENSURE OUR GET REQUEST WITH user_id for
          // the other pages to check $_GET['user_id']
          echo '<a href="edit.php?profile_id=' . $row['profile_id'] . '">Edit</a> /';
          echo '<a href="delete.php?profile_id=' . $row['profile_id'] . ',user_id=' . $row['user_id'].'">Delete</a>';
          echo "</td></tr>\n";
        }
      }
      echo '</table><p><a href="add.php">Add New Entry</a></p>';
    } else {
      $stmt = $pdo->query('select first_name,last_name,headline,profile_id from Profile');
      $row = $stmt->fetch(PDO::FETCH_ASSOC); // THIS FEELS HACKY. THERE'S PROBABLY A MORE ELEGANT WAY
      if ($row) {
        echo '<table border="2">' . "\n";
        echo '<thead><tr>';
        echo '<th>Name</th>';
        echo '<th>Headline</th>';
        echo '</tr></thead>';

        $stmt = $pdo->query('select first_name,last_name,headline,profile_id from Profile');
        while ($row = $stmt->fetch(pdo::FETCH_ASSOC)) {
          echo "<tr><td>";
          echo '<a href="view.php?profile_id=' . $row['profile_id'] . '">' . htmlentities($row['first_name']), ' ', htmlentities($row['last_name']) . '</a>';
          echo "</td><td>";
          echo htmlentities($row['headline']);
          echo "</td></tr>\n";
        }
      }
    }



    if (!isset($_SESSION['name'])) {
      echo '<p><a href="login.php">Please log in</a></p>';
    }
    ?>
  </div>

</body>