<?php
// the common code that I keep writing on almost every document
function flash_messages(){
  // Flash messages
  if (isset($_SESSION['success'])) {
    echo ('<p style="color: green;">' . htmlentities($_SESSION['success']) . "</p>\n");
    unset($_SESSION['success']);
  }
  if (isset($_SESSION['error'])) {
    echo ('<p style="color: red;">' . htmlentities($_SESSION['error']) . "</p>\n");
    unset($_SESSION['error']);
  }
}

// some more utility code:
function validate_profile(){
  if (
    strlen($_POST['first_name']) < 1 || strlen($_POST['last_name']) < 1
    || strlen($_POST['email']) < 1 || strlen($_POST['headline']) < 1 || strlen($_POST['summary']) < 1
  ) {
    return 'All fields are required';
  }
  if (!str_contains($_POST['email'], '@')) {
    return 'Email address must contain @';
  }
  return true;
}

// Look through the POST data and return true or error msg
function validate_pos(){
  for($i=1;$i<=9;$i++){
    if(!isset($_POST['year'.$i])) continue;
    if(!isset($_POST['desc'.$i])) continue;
    $year = $_POST['year'.$i];
    $desc = $_POST['desc'.$i];
    if(strlen($year)==0 || strlen($desc)==0){
      return "All fields are required";
    }
    if(!is_numeric($year)){
      return 'Position year must be numeric';
    }
  }
  return true;
}

// Let's validate our education here
function validate_education(){
  for($i=1;$i<=9;$i++){
    if(!isset($_POST['edu_year'.$i])) continue;
    if(!isset($_POST['edu_school'.$i])) continue;
    $year = $_POST['edu_year'.$i];
    $school = $_POST['edu_school'.$i];
    if(strlen($year) == 0 || strlen($school) == 0){
      return 'All fields are required';
    }
    if(!is_numeric($year)){
      return 'Education year must be numeric';
    }
  }
  return  true;
}

function insert_positions($pdo,$profile_id){
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
      ':pid'=>$profile_id,
      ':rank'=>$rank,
      ':year'=>$year,
      ':desc'=>$desc,
    ]);
    $rank++;
  }
}

function insert_educations($pdo,$profile_id){
  // insert edited (new) education entries
  $rank = 1;
  for($i=1;$i<=9;$i++){
    if(!isset($_POST['edu_year'.$i])) continue;
    if(!isset($_POST['edu_school'.$i])) continue;
    $year = $_POST['edu_year'.$i];
    $school = $_POST['edu_school'.$i];

    // look up the school if its there
    $institution_id = false;
    $stmt = $pdo->prepare('select institution_id from Institution
      where name=:name');
    $stmt->execute([':name'=>$school]);
    $row = $stmt->fetch(pdo::FETCH_ASSOC);
    if($row!==false) $institution_id = $row['institution_id'];

    // if there was no insitution, insert it
    if($institution_id === false){
      $stmt = $pdo->prepare('insert into Institution (name) values (:name)');
      $stmt->execute([':name'=>$school]);
      $institution_id = $pdo->lastInsertID();
    }

    $stmt = $pdo->prepare('insert into Education (profile_id,rank,year,institution_id)
      values (:pid,:rank,:year,:iid)');
    $stmt->execute([
      ':pid'=>$profile_id,
      ':rank'=>$rank,
      ':year'=>$year,
      ':iid'=>$institution_id,
    ]);
    $rank++;
  } 
}



/**
 * NOTE: What fetchAll() does...
 * $profiles = array();
 * while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
 *   $profiles[]=$row;
 * }  - NOW I UNDERSTAND WHY THIS NOTE IS HERE :)
 */

function load_pos($pdo,$profile_id){
  $stmt = $pdo->prepare('select * from Position
    where profile_id = :prof order by rank');
  $stmt->execute([':prof'=>$profile_id]);
  $positions = $stmt->fetchAll(pdo::FETCH_ASSOC);
  return $positions;
}

function load_education($pdo,$profile_id){
  $stmt = $pdo->prepare('select year,name from Education
    join Institution
      on Education.institution_id = Institution.institution_id
    where profile_id = :prof
    order by rank');
  $stmt->execute([':prof'=>$profile_id]);
  $educations = $stmt->fetchAll(pdo::FETCH_ASSOC);
  return $educations;
}