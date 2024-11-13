<?php
require_once 'pdo.php';
session_start();

if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['user_id'])){

    // data validation:
    if(strlen($_POST['name']) < 1 || strlen($_POST['password']) < 1){
        $_SESSION['error'] = 'Missing data';
        header('Location:add.php');
        return;
    }
    if(strpos($_POST['email'],'@') === false){
        $_SESSION['error'] = 'Bad data';
        header('Location:add.php');
        return;
    }

    $sql = 'update users set name = :name,email=:email,password=:password
            where user_id=:user_id';
    $stmt = $pdo->prepare($sql);
    $stmt->execute([
        ':name'=>$_POST['name'],
        ':email'=>$_POST['email'],
        ':password'=>$_POST['password'],
        ':user_id'=>$_POST['user_id'],
    ]);
    $_SESSION['success'] = 'Record updated';
    header('Location:index.php');
    return;
}

// Guardian: make sure that user_id is presnet
if(!isset($_GET['user_id'])){
    $_SESSION['error'] = 'Missing user_id';
    header('Location:index.php');
    return;
}


$stmt = $pdo->prepare('select * from users where user_id=:xyz');
$stmt->execute([':xyz'=>$_GET['user_id']]);
$row = $stmt->fetch(PDO::FETCH_ASSOC);
if($row===false){
    $_SESSION['error'] = 'Bad value for user_id';
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
    <title>THE CRUD App - Edit</title>
</head>
<body>
    <?php
        $n = htmlentities($row['name']);
        $e = htmlentities($row['email']);
        $p = htmlentities($row['password']);
        $user_id = $row['user_id'];
    ?>

    <p>Edit User</p>
    <form method="post">
        <p>Name: <input type="text" name="name" value="<?= $n ?>"></p>
        <p>Email: <input type="text" name="email" value="<?= $e ?>"></p>
        <p>Password: <input type="text" name="password" value="<?= $p ?>"></p>
        <input type="hidden" name="user_id" value="<?= $user_id ?>">
        <p><input type="submit" value="Update"> <a href="index.php">Cancel</a></p>

    </form>
</body>
</html>