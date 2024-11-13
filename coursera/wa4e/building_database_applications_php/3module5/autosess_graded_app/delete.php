<?php
require_once 'pdo.php';
session_start();
if(isset($_POST['delete']) && isset($_POST['auto_id'])){
    $sql = "delete from autos where auto_id = :zip";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([':zip'=>$_POST['auto_id']]);
    $_SESSION['success'] = 'Record Deleted';
    header('Location:index.php');
    return;
}

// Guardian: make sure that auto_id is presnet
if(!isset($_GET['auto_id'])){
    $_SESSION['error'] = 'Bad value for auto_id';
    header('Location:index.php');
    return;
}


$stmt = $pdo->prepare('select make,model,year,auto_id from autos where auto_id = :xyz');
$stmt->execute([':xyz'=>$_GET['auto_id']]);
$row = $stmt->fetch(PDO::FETCH_ASSOC);
if($row === false){
    $_SESSION['error'] = 'Bad value for auto_id';
    header('Location:index.php');
    return;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kevin Whiteside - Autos Tracker Database - Delete</title>
</head>
<body>
    <p>Confirm: Deleting 
        <!-- I made my confirmation a bit more readable and exact -->
        <?= htmlentities($row['year']).' '.
            htmlentities($row['make']).' '.
            htmlentities($row['model']) ?></p>

    <form method="post">
        <input type="hidden" name="auto_id" value="<?= $row['auto_id'] ?>">
        <input type="submit" value="Delete" name="delete">
        <a href="index.php">Cancel</a>
    </form>
</body>
</html>