<?php
require_once 'pdo.php';
session_start();
if(isset($_POST['delete']) && isset($_POST['user_id'])){
    $sql = "delete from users where user_id = :zip";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([':zip'=>$_POST['user_id']]);
    $_SESSION['success'] = 'Record Deleted';
    header('Location:index.php');
    return;
}

// Guardian: make sure that user_id is presnet
if(!isset($_GET['user_id'])){
    $_SESSION['error'] = 'Missing user_id';
    header('Location:index.php');
    return;
}


$stmt = $pdo->prepare('select name,user_id from users where user_id = :xyz');
$stmt->execute([':xyz'=>$_GET['user_id']]);
$row = $stmt->fetch(PDO::FETCH_ASSOC);
if($row === false){
    $_SESSION['error'] = 'Bad value for user_id';
    header('Location:index.php');
    return;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The CRUD App - Delete</title>
</head>
<body>
    <p>Confirm: Deleting <?= htmlentities($row['name']) ?></p>

    <form method="post">
        <input type="hidden" name="user_id" value="<?= $row['user_id'] ?>">
        <input type="submit" value="Delete" name="delete">
        <a href="index.php">Cancel</a>
    </form>
</body>
</html>