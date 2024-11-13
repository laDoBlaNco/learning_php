<?php
require_once "pdo.php";
session_start();

// Demand a GET parameter
if ( ! isset($_SESSION['name'])) {
    die('Not logged in');
}

// If the user requested logout go back to index.php
if ( isset($_POST['logout']) ) {
    header('Location: index.php');
    return;
}


$stmt = $pdo->query("SELECT make, year, mileage FROM autos");
$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>
<!DOCTYPE html>
<html>
<head>
<title>Kevin Whiteside - Auto Track Database</title>
<?php require_once "bootstrap.php"; ?>
</head>
<body>
<div class="container">
<h1>Tracking Autos for <?= $_SESSION['name'] ?></h1>
<?php

?>

<h2>Automobiles</h2>
<ul>
<?php
foreach ( $rows as $row ) {
  echo "<li>$row[year] $row[make] / $row[mileage]</li>";
}
?>
</ul>
<a href="add.php">Add New</a> | <a href="logout.php">Logout</a>
</div>
</body>
</html>
