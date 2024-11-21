<?php
require_once "pdo.php";
session_start();

if (isset($_POST['cancel'])) {
  // Redirect the browser to index.php
  header("Location: index.php");
  return;
}

if (! isset($_SESSION['name'])) {
  die('ACCESS DENIED');
}

// adding the form entry to the dbase...

if (
  isset($_POST['first_name']) && isset($_POST['last_name'])
  && isset($_POST['email']) && isset($_POST['headline']) && isset($_POST['summary'])
) {
  if (
    strlen($_POST['first_name']) < 1 || strlen($_POST['last_name']) < 1
    || strlen($_POST['email']) < 1 || strlen($_POST['headline']) < 1 || strlen($_POST['summary']) < 1
  ) {
    $_SESSION['error'] = 'All fields are required';
    header('Location:add.php');
    return;
  } else if (!str_contains($_POST['email'], '@')) {
    $_SESSION['error'] = 'Email must have an at-sign (@)';
    header('Location:add.php');
    return;
  } else {
    $sql = "INSERT INTO Profile (user_id,first_name,last_name,email,headline,summary) 
                VALUES (:user_id,:first_name,:last_name,:email,:headline,:summary)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([
      ':user_id' => htmlentities(($_SESSION['user_id'])),
      ':first_name' => htmlentities($_POST['first_name']),
      ':last_name' => htmlentities(($_POST['last_name'])),
      ':email' => htmlentities($_POST['email']),
      ':headline' => htmlentities($_POST['headline']),
      ':summary'=>htmlentities($_POST['summary']),
    ]);

    $_SESSION['success'] = 'Profile added';
    header('Location:index.php');
    return;
  }
}

?>
<!DOCTYPE html>
<html>

<head>
  <title>Kevin Whiteside - Resume Registry - Add Entry</title>
  <?php require_once "bootstrap.php"; ?>
</head>

<body>
  <div class="container">
    <h1>Adding Profile for <?= $_SESSION['name'] ?></h1>
    <?php
    // Failure or Success messages
    if (isset($_SESSION['error'])) {
      echo ('<p style="color: red;">' . htmlentities($_SESSION['error']) . "</p>\n");
      unset($_SESSION['error']);
    }
    ?>

    <form method="post">
      <p>First Name:
        <input type="text" name="first_name" size="60">
      </p>
      <p>Last Name:
        <input type="text" name="last_name" size="60">
      </p>
      <p>Email:
        <input type="text" name="email" size="30">
      </p>
      <p>Headline:<br />
        <input type="text" name="headline" size="80">
      </p>
      <p>Summary:<br />
        <textarea name="summary" rows="8" cols="80"></textarea>
      </p>
      <p>
        <input type="submit" value="Add">
        <input type="submit" name="cancel" value="Cancel">
      </p>
    </form>
  </div>
</body>

</html>