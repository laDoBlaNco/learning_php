<?php
  require_once 'pdo.php';
  session_start();
?>
<!DOCTYPE html>
<html>
<head>
<title>Kevin Whiteside - Autos Tracker Database</title>
<?php require_once "bootstrap.php"; ?>
</head>
<body>
<div class="container">
<h1>Welcome to Autos Database</h1>
<?php

// Flash messages
if(isset($_SESSION['success'])){
  echo('<p style="color: green;">'.htmlentities($_SESSION['success'])."</p>\n");
  unset($_SESSION['success']);
}
if ( isset($_SESSION['error'])) {    
  echo('<p style="color: red;">'.htmlentities($_SESSION['error'])."</p>\n");
  unset($_SESSION['error']);
}


if(isset($_SESSION['name'])){
  $stmt = $pdo->query('select make,model,year,mileage,auto_id from autos');
  $row = $stmt->fetch(pdo::FETCH_ASSOC); // THIS FEELS HACKY. THERE'S PROBABLY A MORE ELEGANT WAY
  if($row === false){
    echo '<p>No rows found</p>';
  }else{  
    echo '<table border="2">' . "\n";
    echo '<thead><tr>';
    echo '<th>Make</th>';
    echo '<th>Model</th>';
    echo '<th>Year</th>';
    echo '<th>Mileage</th>';
    echo '<th>Action</th>';
    echo '</tr></thead>';
  }
  $stmt = $pdo->query('select make,model,year,mileage,auto_id from autos');
  while($row= $stmt->fetch(pdo::FETCH_ASSOC)){
      echo "<tr><td>";
      echo htmlentities($row['make']);
      echo "</td><td>";
      echo htmlentities($row['model']);
      echo "</td><td>";
      echo htmlentities($row['year']);
      echo "</td><td>";
      echo htmlentities($row['mileage']);
      echo "</td><td>";
      // NOTE: HERE IS WHERE WE ENSURE OUR GET REQUEST WITH user_id for
      // the other pages to check $_GET['user_id']
      echo '<a href="edit.php?auto_id='.$row['auto_id'].'">Edit</a> /';
      echo '<a href="delete.php?auto_id='.$row['auto_id'].'">Delete</a>';
      echo "\n</form>\n";
      echo "</td></tr>\n";
  }
  echo '</table><br/><a href="add.php">Add New Entry</a><br/><a href="logout.php">Logout</a>';
}

if(!isset($_SESSION['name'])){
  echo '<p><a href="login.php">Please log in</a></p>';
  echo '<p>Attempt to<a href="add.php"> add data</a> without logging in</p>';
}
?>
</div>

</body>

