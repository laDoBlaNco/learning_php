<?php
    session_start();
    if(isset($_POST['account']) && isset($_POST['pw'])){
        unset($_SESSION['account']); // logout current user
        if($_POST['pw'] == 'umsi'){
            $_SESSION['account'] = $_POST['account'];
            $_SESSION['success'] = "Logged in.";
            header('Location:app.php'); // session carries data between files as well
            return;
        }else{
            $_SESSION['error'] = 'Incorrect password.';
            header('Location:login.php');
            return;
        }
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login / Logout App</title>
</head>
<body style="font-family:sans-serif;">
    <h1>Please Log In</h1>
    <?php
        if(isset($_SESSION['error'])){
            echo '<p style="color:red">'.$_SESSION['error']."</p>\n";
            unset($_SESSION['error']); // flash code because once we see the message
            // on the page, we delete it from the session. That way if we refresh
            // its gone.
        }
        if(isset($_SESSION['success'])){
            echo '<p style="color:green">' . $_SESSION['success'] . "</p>\n";
            unset($_SESSION['success']); // again with the flash
        }
    ?>
    <form method="post">
        <p>Account: <input type="text" name="account" value=""></p>
        <p>Password: <input type="text" name="pw" value=""></p>
        <!-- pass is 'umsi' -->
        <p><input type="submit" value="Log In"> <a href="app.php">Cancel</a></p>
    </form>
    
</body>
</html>