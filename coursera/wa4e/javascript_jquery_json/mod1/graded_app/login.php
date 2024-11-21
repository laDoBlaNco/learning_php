<?php // Do not put any HTML above this line
require_once 'pdo.php';
session_start();
if ( isset($_POST['cancel'] ) ) {
    // Redirect the browser to game.php
    header("Location: index.php");
    return;
}

$salt = 'XyZzy12*_';
// $failure = false;  // If we have no POST data

// Leaving the server-side checks in place since a hacker to get by the
// frontend checks
// Since email address and salted hash are in the dbase, our approach is to
// check to see if the email and password match using the following approach:
if ( isset($_POST['email']) && isset($_POST['pass']) ) {
    if ( strlen($_POST['email']) < 1 || strlen($_POST['pass']) < 1 ) {
        $_SESSION['error'] = "User name and password are required";
        header("Location:login.php");
        return;
    } else if(!str_contains($_POST['email'],'@')){
        $_SESSION['error'] = "Email must have an at-sign (@)";
        header('Location:login.php');
        return;
    } else {
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
    }
}


// Fall through into the View
?>
<!DOCTYPE html>
<html>
<head>
<?php require_once "bootstrap.php"; ?>
<title>Kevin Whiteside - Resume Registry</title>
</head>
<body>
<div class="container">
<h1>Please Log In</h1>
<?php
// Note triple not equals and think how badly double
// not equals would work here...conversion all over the place
if ( isset($_SESSION['error'])) {
    
    echo('<p style="color: red;">'.htmlentities($_SESSION['error'])."</p>\n");
    unset($_SESSION['error']);
}
?>
<form method="POST">
<label for="nam">Email</label>
<input type="text" name="email" id="email"><br/>
<label for="id_1723">Password</label>
<input type="password" name="pass" id="id_1723"><br/>
<input type="submit" value="Log In" onclick="return doValidate();">
<input type="submit" name="cancel" value="Cancel">
</form>
<p>
For a password hint, view source and find a password hint
in the HTML comments.
<!-- Hint: The password is the three character name of
 the best web language around (all lower case) followed by 123. -->
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
