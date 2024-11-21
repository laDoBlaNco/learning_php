<?php
require_once 'pdo.php';
session_start();
if ( isset($_POST['cancel'] ) ) {
    // Redirect the browser to game.php
    header("Location: index.php");
    return;
}

if(isset($_POST['first_name']) && isset($_POST['last_name']) && isset($_POST['email']) 
    && isset($_POST['headline']) && isset($_POST['summary'])){

    // data validation:
    if(strlen($_POST['first_name'])<1 || strlen($_POST['last_name'])<1
        || strlen($_POST['email'])<1 || strlen($_POST['headline'])<1 || strlen($_POST['summary'])<1){
        $_SESSION['error'] = 'All fields are required';
        // NOTE THE ADDITIONAL $_REQUEST['auto_id'] - THIS IS TO ENSURE THE ID IS 
        // PASSED THROUGH GET AGAIN. WE USE REQUEST SINCE IT'LL CATCH BOTH GET AND POST
        // DATA
        header('Location:edit.php?profile_id='.$_REQUEST['profile_id']);
        return;
    } else if(!str_contains($_POST['email'],'@')){
        $_SESSION['error'] = "Email must have an at-sign (@)";
        header('Location:edit.php?profile_id='.$_REQUEST['profile_id']);
        return;
    }else{  
        $sql = 'update Profile set first_name = :first_name,last_name=:last_name,
                email=:email,headline=:headline,summary=:summary
                where profile_id=:profile_id';
        $stmt = $pdo->prepare($sql);
        $stmt->execute([
            ':first_name'=>$_POST['first_name'],
            ':last_name'=>$_POST['last_name'],
            ':email'=>$_POST['email'],
            ':headline'=>$_POST['headline'],
            ':summary'=>$_POST['summary'],
            ':profile_id'=>$_POST['profile_id'],
        ]);
        $_SESSION['success'] = 'Profile updated';
        header('Location:index.php');
        return;
    }
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
        <input type="hidden" name="profile_id" value="<?= $profile_id ?>">
        <input type="submit" value="Save"> 
        <input type="submit" name="cancel" value="Cancel"></p>

    </form>
</body>
</html>