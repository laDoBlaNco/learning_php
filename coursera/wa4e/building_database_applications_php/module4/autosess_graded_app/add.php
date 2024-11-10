<?php
require_once "pdo.php";
session_start();

if ( isset($_POST['cancel'] ) ) {
  // Redirect the browser to game.php
  header("Location: view.php");
  return;
}

if ( ! isset($_SESSION['name'])) {
    die('Not logged in');
}

// adding the form entry to the dbase...

if ( isset($_POST['make']) && isset($_POST['year']) 
     && isset($_POST['mileage'])) {
    if(strlen($_POST['make'])<1){
      $_SESSION['error'] = 'Make is required';
      header('Location:add.php');
      return;
    }else if(!is_numeric($_POST['year'])||!is_numeric($_POST['mileage'])){
      $_SESSION['error'] = 'Mileage and year must be numeric';
      header('Location:add.php');
      return;
    }else if(strlen($_POST['make'])<1){
      $_SESSION['error'] = 'Make is required';
      header('Location:add.php');
      return;
    }else{
      $sql = "INSERT INTO autos (make,year,mileage) 
                VALUES (:make, :year, :mileage)";
      $stmt = $pdo->prepare($sql);
      $stmt->execute([
          ':make' => htmlentities($_POST['make']),
          ':year' => (int)round($_POST['year']),
          ':mileage' => (int)round($_POST['mileage'])]);
      
      $_SESSION['success'] = 'Record inserted';
      header('Location:view.php');
      return;
    }
  }

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
// Failure or Success messages
if ( isset($_SESSION['error']) ) {
    echo('<p style="color: red;">'.htmlentities($_SESSION['error'])."</p>\n");
    unset($_SESSION['error']);
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
  <input type="submit" name="cancel" value="Cancel">
</form>

</div>
</body>
</html>
