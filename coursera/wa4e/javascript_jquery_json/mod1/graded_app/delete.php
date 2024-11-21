<?php
require_once 'pdo.php';
session_start();
if ( isset($_POST['cancel'] ) ) {
    // Redirect the browser to game.php
    header("Location: index.php");
    return;
}
if(isset($_POST['delete']) && isset($_POST['profile_id'])){
    // HERE WE ENSURE BOTH profile_id AND user_id match
    $sql = "delete from Profile where profile_id = :zip and user_id = :owner";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([':zip'=>$_POST['profile_id'],':owner'=>$_SESSION['user_id']]);
    $_SESSION['success'] = 'Record Deleted';
    header('Location:index.php');
    return;
}

// Guardian: make sure that profile_id is present
if(!isset($_GET['profile_id'])){
    $_SESSION['error'] = 'Bad value for profile_id';
    header('Location:index.php');
    return;
}


$stmt = $pdo->prepare('select first_name,last_name,profile_id from Profile where profile_id = :xyz');
$stmt->execute([':xyz'=>$_GET['profile_id']]);
$row = $stmt->fetch(PDO::FETCH_ASSOC);
if($row === false){
    $_SESSION['error'] = 'Bad value for profile_id';
    header('Location:index.php');
    return;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kevin Whiteside - Resume Registry - Delete Profile</title>
</head>
<body>
    <h1>Deleting Profile</h1>
    <p>First Name: <?= htmlentities(($row['first_name'])) ?></p>
        <!-- I made my confirmation a bit more readable and exact -->
    <p>Last Name: <?= htmlentities($row['last_name']) ?></p>

    <form method="post">
        <input type="hidden" name="profile_id" value="<?= $row['profile_id'] ?>">
        <input type="submit" value="Delete" name="delete">
        <input type="submit" value="Cancel" name="cancel">
    </form>
</body>
</html>