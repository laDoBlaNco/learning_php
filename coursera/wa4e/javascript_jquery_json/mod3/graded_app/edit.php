<?php
// Make the dbase connection and leave it in the variable $pdo
// edit.php
require_once 'pdo.php';
require_once 'util.php';

session_start();

// If the user is not logged in redirect back to index.php
// with the error flashed
if(!isset($_SESSION['user_id'])){
  die("ACCESS DENIED");
  return;
}

// if the user requested to cancel go back to index.php
if ( isset($_POST['cancel'] ) ) {
  header("Location: index.php");
  return;
}

// let's make sure the request param is present
// Remember the $_REQUEST holds both GET and POSt vars
if(!isset($_REQUEST['profile_id'])){
  $_SESSION['error'] = 'Missing profile_id';
  header('Location:index.php');
  return;
}

// Load up the profile in question
$stmt = $pdo->prepare('select * from Profile
  where profile_id = :prof and user_id = :uid');
$stmt->execute([
  ':prof'=>$_REQUEST['profile_id'],
  ':uid'=>$_SESSION['user_id'],
]);
$profile = $stmt->fetch(pdo::FETCH_ASSOC);
if($profile === false){
  $_SESSION['error'] = 'Could not load profile';
  header('Location:index.php');
  return;
}

// Handle incoming data - This is where we have to do a bit different from our
// add file in that we need to ensure that the profile_id is being sent back through
// after the redirect if an error is made. We can't lose track of the profile_id
if(isset($_POST['first_name']) && isset($_POST['last_name']) && isset($_POST['email']) 
  && isset($_POST['headline']) && isset($_POST['summary'])){

  // data validation from util.php
  $msg = validate_profile();
  if(is_string($msg)){
    $_SESSION['error'] = $msg;
    header('Location:edit.php?profile_id='.$_REQUEST['profile_id']); // redirect with pid
    return;
  }

  // Validate position entries if present
  $msg = validate_pos();
  if(is_string($msg)){
    $_SESSION['error'] = $msg;
    header('Location:edit.php?profile_id='.$_REQUEST['profile_id']); // redirect with pid
  }

  $sql = 'update Profile set first_name = :first_name,last_name=:last_name,
            email=:email,headline=:headline,summary=:summary
            where profile_id=:profile_id and user_id=:user_id';
  $stmt = $pdo->prepare($sql);
  $stmt->execute([
    ':first_name'=>$_POST['first_name'],
    ':last_name'=>$_POST['last_name'],
    ':email'=>$_POST['email'],
    ':headline'=>$_POST['headline'],
    ':summary'=>$_POST['summary'],
    ':profile_id'=>$_REQUEST['profile_id'],
    ':user_id'=>$_SESSION['user_id'],
  ]);
  
  // clear out the old position entries
  $stmt = $pdo->prepare('delete from Position where profile_id=:pid');
  $stmt->execute(array(
    ':pid'=>$_REQUEST['profile_id']
  ));

  // insert edited (new) position entries
  $rank = 1;
  for($i=1;$i<=9;$i++){
    if(!isset($_POST['year'.$i])) continue;
    if(!isset($_POST['desc'.$i])) continue;
    $year = $_POST['year'.$i];
    $desc = $_POST['desc'.$i];
    
    $stmt = $pdo->prepare('insert into Position
      (profile_id,rank,year,description)
      values (:pid,:rank,:year,:desc)');
    $stmt->execute([
      ':pid'=>$_REQUEST['profile_id'],
      ':rank'=>$rank,
      ':year'=>$year,
      ':desc'=>$desc,
    ]);
    $rank++;
  }
  

  $_SESSION['success'] = 'Profile updated';
  header('Location:index.php');
  return;
}


// Guardian: make sure that user_id is presnet
if(!isset($_GET['profile_id'])){
  $_SESSION['error'] = 'Bad value for id';
  header('Location:index.php');
  return;
}


$stmt = $pdo->prepare('select * from Profile where profile_id=:xyz');
$stmt->execute([':xyz'=>$_GET['profile_id']]);
$row = $stmt->fetch(PDO::FETCH_ASSOC);
$stmt2 = $pdo->prepare('select year,description from Position where profile_id = :xyz');
$stmt2->execute([':xyz'=>$_GET['profile_id']]);
$row2 = $stmt2->fetchAll(PDO::FETCH_ASSOC);

if($row===false){
  $_SESSION['error'] = 'Bad value for id';
  header('Location:index.php');
  return;
}

//////////////////// View //////////////////////////////
// again it seems we have some stuff leaking into our views
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Kevin Whiteside -Resume Registry - Edit Entries</title>
  <?php require_once 'head.php'  ?>
</head>
<body>
  <?php
    $fn = htmlentities($row['first_name']);
    $ln = htmlentities($row['last_name']);
    $em = htmlentities($row['email']);
    $hd = htmlentities($row['headline']);
    $sm = htmlentities($row['summary']);
    $profile_id = $row['profile_id'];
  ?>
  <div class="container">
  <h1>Editing Profile for <?= $_SESSION['name']  ?></h1>
  <?php
    if ( isset($_SESSION['error'])) {    
      echo('<p style="color: red;">'.htmlentities($_SESSION['error'])."</p>\n");
      unset($_SESSION['error']);
    }
  ?>
  
  <form method="post" action="edit.php">
    <p>First Name: <input type="text" name="first_name" size="60" value="<?= $fn ?>"></p>
    <p>Last Name: <input type="text" name="last_name" size="60" value="<?= $ln ?>"></p>
    <p>Email: <input type="text" name="email" size="30" value="<?= $em ?>"></p>
    <p>Headline:<br/> <input type="text" name="headline" size="80" value="<?= $hd ?>"></p>
    <p>Summary:<br/> <textarea name="summary" rows="8" cols="80"><?= $sm ?></textarea></p>
    <p>
        Position: <input type="submit" id="add_pos" value="+">
        <div id="position_fields"></div>
    </p>
    <p>
    <input type="hidden" name="profile_id" value="<?= $profile_id ?>">
    <input type="submit" value="Save"> 
    <input type="submit" name="cancel" value="Cancel"></p>

  </form>
  <script>
      count_pos = 0;
      pos_obj = <?= json_encode($row2) ?>;
      $(document).ready(()=>{
        window.console && console.log('Document ready called');
        for(const row of pos_obj){
          count_pos++
          $('#position_fields').append(
            `<div id="position${count_pos}"> 
            <p>Year: <input type="text" name="year${count_pos}" value="${row['year']}" /> 
            <input type="button" value="-" 
              onclick="$('#position${count_pos}').remove();return false;"></p> 
            <textarea name="desc${count_pos}" rows="8" cols="80">${row['description']}</textarea>
            </div>`
          );
        }
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
            `<div id="position${count_pos}"> 
            <p>Year: <input type="text" name="year${count_pos}" value="" /> 
            <input type="button" value="-" 
              onclick="$('#position${count_pos}').remove();return false;"></p> 
            <textarea name="desc${count_pos}" rows="8" cols="80"></textarea>
            </div>`
          );
        });
      });  
   </script>
</div>
</body>
</html>