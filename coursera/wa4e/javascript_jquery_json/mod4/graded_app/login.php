<?php // Do not put any HTML above this line
require_once 'pdo.php';
require_once 'util.php';

session_start();
unset($_SESSION['name']); // To log the user out
unset($_SESSION['user_id']); // To log the user out

if ( isset($_POST['cancel'] ) ) {
    // Redirect the browser to game.php
    header("Location: index.php");
    return;
}

$salt = 'XyZzy12*_';

if ( isset($_POST['email']) && isset($_POST['pass']) ) {
    if ( strlen($_POST['email']) < 1 || strlen($_POST['pass']) < 1 ) {
        $_SESSION['error'] = "Email and password are required";
        header("Location:login.php");
        return;
    } 
    $check=hash('md5',$salt.$_POST['pass']);
    $stmt=$pdo->prepare('select user_id,name from users
        where email=:em and password=:pw');
    $stmt->execute([':em'=>$_POST['email'],':pw'=>$check]);
    $row=$stmt->fetch(PDO::FETCH_ASSOC);

    if($row !== false){
        $_SESSION['name']=$row['name'];
        $_SESSION['user_id']=$row['user_id'];
        // then we redirect back to index.php logged in
        header('Location:index.php');
        return;
    }else{
        $_SESSION['error'] = 'Incorrect Password';
        header('Location:login.php');
        return;
    }

    // Finished silently handling any incoming POST data
    // Now it is time to work on the output for this page.
}


// Fall through into the View
?>
<!DOCTYPE html>
<html>
<head>
<title>Kevin Whiteside - Resume Registry - Login Page</title>
<?php require_once 'head.php' ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</head>
<body>
<div class="container">
<h1>Please Log In</h1>
<?php flash_messages() ?>
<form method="POST" action="login.php">
<label for="email">Email</label>
<input type="text" name="email" id="email"><br/>
<label for="id_1723">Password</label>
<input type="password" name="pass" id="id_1723"><br/>
<input type="submit" onclick="return doValidate();" value="Log In">
<input type="submit" name="cancel" value="Cancel">
</form>
<p>
For a password hint, view source and find a password hint
in the HTML comments.
<!-- Hint: The password is the three character name of
 the best web language around (all lower case) followed by 123 or my favorite 4 digit code-->
</p>
<script>
    function doValidate(){
        console.log('Validating...');
        try{
            addr = document.getElementById('email').value;
            pw = document.getElementById('id_1723').value;
            console.log('Validating addr='+addr+' pw='+pw);
            if(addr==null || addr=='' || pw==null || pw==''){
                alert('Both fields must be filled out');
                return false;
            }
            if(addr.indexOf('@')==-1){
                alert('Invalid email address');
                return false;
            }
            return true;
        }catch(e){
            return false;
        }
        return false;
    }
</script>
</div>
</body>
