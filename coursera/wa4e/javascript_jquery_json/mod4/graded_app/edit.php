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

// Load up the profile in question and ensure that you can only pull ones
// that belong to you with the session user_id
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
    return;
  }

// Validate education entries if present
  $mst = validate_education();
  if(is_string($msg)){
    $_SESSION['error'] = $msg;
    header('Location:edit.php?profile_id='.$_REQUEST['profile_id']);
    return;
  }

  // start updating the data
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
  insert_positions($pdo,$_REQUEST['profile_id']);
  
  // clear out the old position entries
  $stmt = $pdo->prepare('delete from Education where profile_id=:pid');
  $stmt->execute(array(
    ':pid'=>$_REQUEST['profile_id']
  ));

  // insert edited (new) education entries
  insert_educations($pdo,$_REQUEST['profile_id']);

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

$positions = load_pos($pdo,$_REQUEST['profile_id']);
$schools = load_education($pdo,$_REQUEST['profile_id']);

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
    <p>Summary:<br/> <textarea name="summary" rows="8" cols="80"><?= $sm ?></textarea>

    <?php
    $count_edu = 0;
    echo '<p>Education: <input type="submit" id="add_edu" value="+">'."\n";
    echo '<div id="edu_fields">'."\n";
    if(count($schools)>0){
      foreach($schools as $school){
        // this is what I was trying to do before I figured out the conversion of 
        // a php array to json and use jquery to loop through a converted array :)
        // So in the end, I moved this to the browser in the last assignment and we are
        // putting it back in the server for this one.
        $count_edu++;
        echo '<div id="edu'.$count_edu.'">';
        echo
        '<p>Year: <input type="text" name="edu_year'.$count_edu.'" value="'.$school['year'].'"/>
        <input type="button" value="-" onclick="$(\'#edu'.$count_edu.'\').remove();return false;"></p>
        <p>School: <input type="text" size="80" name="edu_school'.$count_edu.'" class="school"
        value="'.htmlentities($school['name']).'"/>';
        echo "\n</div>\n";
      }
    }
    echo "</div></p>\n";

    $count_pos = 0;
    echo '<p>Position: <input type="submit" id="add_pos" value="+">'."\n";
    echo '<div id="position_fields">'."\n";
    if(count($positions)>0){
      foreach($positions as $position){
        // this is what I was trying to do before I figured out the conversion of 
        // a php array to json and use jquery to loop through a converted array :)
        $count_pos++;
        echo '<div class="position" id="position'.$count_pos.'">';
        echo
        '<p>Year: <input type="text" name="year'.$count_pos.'" value="'.htmlentities($position['year']).'"/>
        <input type="button" value="-" onclick="$(\'#position'.$count_pos.'\').remove();return false;"><br/>';

        echo '<textarea name="desc'.$count_pos.'" rows="8" cols="80">'."\n";
        echo htmlentities($position['description'])."\n";
        echo "\n</textarea>\n</div>\n";
      }
    }
    echo "</div></p>\n";


    ?>

    <p>
    <input type="hidden" name="profile_id" value="<?= $profile_id ?>">
    <input type="submit" value="Save"> 
    <input type="submit" name="cancel" value="Cancel"></p>

  </form>
  <script>
      count_pos = <?= $count_pos ?>;
      count_edu = <?= $count_edu ?>;
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
            `<div id="position${count_pos}"> 
            <p>Year: <input type="text" name="year${count_pos}" value="" /> 
            <input type="button" value="-" 
              onclick="$('#position${count_pos}').remove();return false;"></p> 
            <textarea name="desc${count_pos}" rows="8" cols="80"></textarea>
            </div>`
          );
        });

        $('#add_edu').click((e)=>{
          e.preventDefault();
          if(count_edu>=9){
            alert('Maximum of nine education entries exceeded');
            return;
          }
          count_edu++;
          window.console && console.log('Adding education '+count_edu);

          // Grab some HTML with hot spots??? and insert into dom. I guess he means
          // use the ids to identify where we are and where we want to insert???
          let source = $('#edu_template').html();
          $('#edu_fields').append(source.replace(/@COUNT@/g,count_edu));

          // Add the event handler to the new ones
          $('.school').autocomplete({
            source:'school.php'
          });
        });

        $('.school').autocomplete({
          source:'school.php'
        })
      });  
  </script>
  <!-- HTML with Substitutions (hot spots)  YEAH THIS IS NEW I've got ???s -->
   <!-- so here is where we have the 'edu_template' as well as the class 'school' Very interesting-->
  <script id='edu_template' type='text'>
    <div id="edu_@COUNT@">
      <p>Year: <input type="text" name="edu_year@COUNT@" value=""/>
      <input type="button" value="-" onclick="$('#edu_@COUNT@').remove();return false;"><br/>
      <p>School: <input type="text" size="80" name="edu_school@COUNT@" class="school" value=""/></p>
    </div>
  </script>
  <!-- So the above is really trying to refactor the long string from the very first
   time we did this. I refactored that already to use js template strings which was way 
   better, and in this one Chuck is using an actual Template. Again just another way to
   refactor the mess from before. -->
</div>
</body>
</html>