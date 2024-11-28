<?php  // we don't put any html above this line
// index.php  (refactored)
require_once 'pdo.php';
require_once 'util.php';

session_start();

// Let's start off retrieving profiles from the database. This is the part
// I always felt was hacky, so looking forward to seeing how Dr. Chuck did it.
$stmt = $pdo->query('select * from Profile');
$profiles = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Now we go into the output for this page
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Kevin Whiteside - The Resume Registry</title>
  <?php require_once 'head.php' ?>  
  <!-- First time I see us putting php in the html header. Interesting -->
</head>
<body>
  <div class="container">
    <h1>The Resume Registry</h1>
    <?php
      flash_messages();  // our utility function 

      $stmt = $pdo->query('select first_name,last_name,headline,profile_id from Profile');
      $row = $stmt->fetch(PDO::FETCH_ASSOC); // THIS FEELS HACKY. THERE'S PROBABLY A MORE ELEGANT WAY
      if(!isset($_SESSION['user_id'])){
        echo '<p><a href="login.php">Please log in</a></p>'."\n";
        if(!$row) echo 'Now Rows Found';
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

      if(isset($_SESSION['user_id'])){
        echo '<p><a href="logout.php">Logout</a></p>';
        if(!$row) echo 'Now Rows Found';
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
      } 
      
      // $stmt = $pdo->query('select first_name,last_name,headline,profile_id from Profile');
      // $row = $stmt->fetch(PDO::FETCH_ASSOC); // THIS FEELS HACKY. THERE'S PROBABLY A MORE ELEGANT WAY
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
      
      

    ?>
  </div>
</body>
</html>