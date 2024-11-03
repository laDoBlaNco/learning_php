<?php
require_once "pdo.php";

// Demand a GET parameter
if ( ! isset($_GET['name']) || strlen($_GET['name']) < 1  ) {
    die('Name parameter missing');
}

// If the user requested logout go back to index.php
if ( isset($_POST['logout']) ) {
    header('Location: index.php');
    return;
}

// adding the form entry to the dbase...

// for our fail & success messages
$failure = false;
$success = false;

if ( isset($_POST['make']) && isset($_POST['year']) 
     && isset($_POST['mileage'])) {
    if(strlen($_POST['make'])<1){
      $failure = 'Make is required';
    }else if(!is_numeric($_POST['year'])||!is_numeric($_POST['mileage'])){
      $failure = 'Mileage and year must be numeric';
    }else if(strlen($_POST['make'])<1){
      $failure = 'Make is required';
    }else{
      $sql = "INSERT INTO autos (make,year,mileage) 
                VALUES (:make, :year, :mileage)";
      $stmt = $pdo->prepare($sql);
      $stmt->execute([
          ':make' => htmlentities($_POST['make']),
          ':year' => (int)round($_POST['year']),
          ':mileage' => (int)round($_POST['mileage'])]);
      
      $success = 'Record inserted';
    }
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
<h1>Tracking Autos for <?= $_REQUEST['name'] ?></h1>
<?php
// Failure or Success messages
if ( $failure !== false ) {
    echo('<p style="color: red;">'.htmlentities($failure)."</p>\n");
}
if($success !== false){
    echo('<p style="color: green;">'.htmlentities($success)."</p>\n");

}
?>

<form method="post">
  <p>Make:
  <input type="text" name="make" size="60"></p>
  <p>Year:
  <input type="text" name="year"></p>
  <p>Mileage:
  <input type="text" name="mileage"></p>  
  <input type="submit" value="Add">
  <input type="submit" name="logout" value="Logout">
</form>

<h2>Automobiles</h2>
<ul>
<?php
foreach ( $rows as $row ) {
  echo "<li>$row[year] $row[make] / $row[mileage]</li>";
}
?>
</ul>
</div>
</body>
</html>
