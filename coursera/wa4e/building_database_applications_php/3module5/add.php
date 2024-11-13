<?php
require_once 'pdo.php';
session_start();
if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['password'])){

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

    $sql = "insert into users (name,email,password)
                values (:name,:email,:password)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([
        ':name'=>$_POST['name'],
        ':email'=>$_POST['email'],
        ':password'=>$_POST['password'],
    ]);
    $_SESSION['success'] = 'Record Added';
    header('Location:index.php');
    return;
}

// FLASH PATTERN:
if(isset($_SESSION['error'])){
    echo '<p style="color:red">'. $_SESSION['error']. "</p>\n";
    unset($_SESSION['error']);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The CRUD App - ADD</title>
</head>
<body>
    <p>Add A New User</p>
    <form method="post">
        <p>Name: <input type="text" name="name"></p>
        <p>Email: <input type="text" name="email"></p>
        <p>Password: <input type="password" name="password"></p>
        <p><input type="submit"  value="Add New">
        <a href="index.php">Cancel</a></p>
    </form>
</body>
</html>