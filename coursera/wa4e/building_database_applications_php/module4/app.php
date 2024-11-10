<?php session_start() ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Application</title>
</head>
<body style="font-family:sans-serif;">
    <h1>Cool Application</h1>
    <?php
        if(isset($_SESSION['success'])){
            echo '<p style="color:green">' . $_SESSION['success'] . "</p>\n";
            unset($_SESSION['success']);
        }

        // check if we are loggin in!
        if(!isset($_SESSION['account'])){ ?>
            <p>Please <a href="login.php">Log in</a> to start.</p>
        <?php }else{ ?>
            <p>This is where a cool application would be.</p>
            <p>Please <a href="logout.php">Log out</a> when you are done.</p>
        <?php }
    ?>
    
</body>
</html>