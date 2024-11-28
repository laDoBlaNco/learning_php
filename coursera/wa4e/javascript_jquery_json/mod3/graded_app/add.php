<?php
// We will make the database connection and leave it in the var pdo (which is different)
require_once "pdo.php";
require_once "util.php";

session_start();

// If the user is not logged in redirect back to index.php
// with an error
if(!isset($_SESSION['user_id'])){
  die('ACCESS DENIED');
  return;
}

if (isset($_POST['cancel'])) {
  // Redirect the browser to index.php
  header("Location: index.php");
  return;
}

// Handle the incoming data
if (
  isset($_POST['first_name']) && isset($_POST['last_name'])
  && isset($_POST['email']) && isset($_POST['headline']) && isset($_POST['summary'])) {
  
  $msg = validate_profile();  
  if (is_string($msg)){
    $_SESSION['error'] = $msg;
    header('Location:add.php');
    return;
  }

  $msg = validate_pos();
  if(is_string($msg)){
    $_SESSION['error'] = $msg;
    header('Location:add.php');
    return;
  }

  // Data is valid - time to insert
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
  $profile_id = $pdo->lastInsertId();

  // Insert the position entries
  $rank = 1;
  for($i=1;$i<=9;$i++){
    if(!isset($_POST['year'.$i])) continue;
    if(!isset($_POST['desc'.$i])) continue;
    $year = htmlentities($_POST['year'.$i]);
    $desc = htmlentities($_POST['desc'.$i]);
    
    $stmt = $pdo->prepare('insert into Position
      (profile_id,rank,year,description)
      values (:pid,:rank,:year,:desc)');
    $stmt->execute([
      ':pid'=>$profile_id,
      ':rank'=>$rank,
      ':year'=>$year,
      ':desc'=>$desc,
    ]);
    $rank++;
  }

  $_SESSION['success'] = 'Profile added';
  header('Location:index.php');
  return;
}
?>

<!-- We then come to our view here -->
<!DOCTYPE html>
<html>

<head>
  <title>Kevin Whiteside - Resume Registry - Profile Add</title>
  <?php require_once "head.php"; ?>
</head>

<body>
  <div class="container">
    <h1>Adding Profile for <?= htmlentities($_SESSION['name']) ?></h1>
    <?php flash_messages() ?>

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
        Position: <input type="submit" id="add_pos" value="+">
        <div id="position_fields"></div>
      </p>
      <p>
        <input type="submit" value="Add">
        <input type="submit" name="cancel" value="Cancel">
      </p>
    </form>
    <script>
      count_pos = 0;

      $(document).ready(()=>{
        window.console && console.log('Document ready called');
        $('#add_pos').click((e)=>{
          // https://api.jquery.com/event.preventDefault/
          e.preventDefault();
          if(count_pos>=9){
            alert('Maximum of nine position entries exceeded');
            return;
          }
          count_pos++;
          window.console && console.log('Adding position '+count_pos);
          $('#position_fields').append(
            '<div id="position'+count_pos+'"> \
            <p>Year: <input type="text" name="year'+count_pos+'" value="" /> \
            <input type="button" value="-" \
              onclick="$(\'#position'+count_pos+'\').remove();return false;"></p> \
            <textarea name="desc'+count_pos+'" rows="8" cols="80"></textarea>\
            </div>'
          );
        });
      });  


    </script>
  </div>
</body>

</html>