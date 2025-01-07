<?php

define('REQUIRED_FIELD_ERROR','This field is required');
$errors = [];

$username='';
$email='';
$password='';
$password_confirm='';
$cv_url='';

if($_SERVER['REQUEST_METHOD']==='POST'){
    echo '<pre>';
    print_r($_POST);
    echo '</pre>';

    // we can start validating with securing the user input
    $username = post_data('username');
    $email = post_data('email');
    $password = post_data('password');
    $password_confirm = post_data('password_confirm');
    $cv_url = post_data('cv_url');
    echo '<pre>';
    var_dump($username,$email,$password,$password_confirm,$cv_url);
    echo '</pre>';

    // this is bad code as we are repeating a lot and even if we
    // don't create a function there are enough if statements to
    // warrant a switch statement at least. -NOTE now I'm seeing the idea behind
    // all of these separate if statements. some validation will be different
    // depending on the input we are working with. For example: email below
    if(!$username){
        $errors['username'] = REQUIRED_FIELD_ERROR;
    }elseif(strlen($username)<6 || strlen($username)>16){
        $errors['username'] = 'Username must be between 6 and 16 characters';
    }
    if(!$email){
        $errors['email'] = REQUIRED_FIELD_ERROR;
    }elseif(!filter_var($email,FILTER_VALIDATE_EMAIL)){
        $errors['email'] = 'This field must be a valid email address';
    }
    if(!$password){
        $errors['password'] = REQUIRED_FIELD_ERROR;
    }
    if(!$password_confirm){
        $errors['password_confirm'] = REQUIRED_FIELD_ERROR;
    }
    if($password && $password_confirm && strcmp($password,$password_confirm) !==0){
        $errors['password_confirm']= 'This must match the password field';
    }
    // if(!$cv_url){
    //     $errors['cv_url'] = REQUIRED_FIELD_ERROR;
    // }

    // let's make the cv-url optional
    // NOTE the only real diffence between optional and mandatory here is that we
    // put the validation for the url in the same branch. if it exists AND its not
    // valid, as opposed to giving a error if it doesn't exist and then checking
    // validity separately in another  branch.
    if($cv_url && !filter_var($cv_url,FILTER_VALIDATE_URL)){
        $errors['cv_url'] = 'Please provide a valid link';
    }

    // if we get to the end of our validation, then we need to work with
    // our submitted data.
    if(empty($errors)){
        echo"<p style='color:green;font-weight:bold'>EVERYTHING IS GOOD HERE!!!</p><br>";
    }

}

function post_data($field){
    $_POST[$field]??='';
    return htmlspecialchars(stripslashes($_POST[$field]));

//     if(isset($_POST[$field])){
//         return false;
//     }
//     $data = $_POST[$field];
}

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet"
          href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body style="padding: 50px;">
<!-- Here we see the different is our method "post" which is the more secure
 of the two. So Get is more for searches but for anything more secure use
 POST  
 
 Again we see that the keywords are taken from the tag names
 
 -->
<form action="" method="post" novalidate>
    <div class="row">
        <div class="col">
            <div class="form-group">
                <label>Username</label>
                <input class="form-control <?= isset($errors['username'])?'is-invalid':'' ?>"
                       name="username" value="<?= $username ?>">
                <small class="form-text text-muted">Min: 6 and max 16 characters</small>
                <div class="invalid-feedback">
                    <?= $errors['username']??'' ?>
                </div>
            </div>
        </div> 
        <div class="col">
            <div class="form-group">
                <label>Email</label>
                <input type="email" class="form-control <?= isset($errors['email'])?'is-invalid':'' ?>" name="email" value="<?= $email ?>">
                <div class="invalid-feedback">
                    <?= $errors['email']??'' ?>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="form-group">
                <label>Password</label>
                <input type="password" class="form-control <?= isset($errors['password'])?'is-invalid':'' ?>"
                       name="password" value="<?= $password ?>">
                <div class="invalid-feedback">
                    <?= $errors['password']??'' ?>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="form-group">
                <label>Repeat Password</label>
                <input type="password"
                       class="form-control <?= isset($errors['password_confirm'])?'is-invalid':'' ?>"
                       name="password_confirm" value="<?= $password_confirm ?>">
                <div class="invalid-feedback">
                    <?= $errors['password_confirm']??'' ?>
                </div>
            </div>
        </div>
    </div>
    <div class="form-group">
        <div class="form-group">
            <label>Your CV link</label>
            <input type="text" class="form-control <?= isset($errors['cv_url'])?'is-invalid':'' ?>"
                   name="cv_url" placeholder="https://www.example.com/my-cv" value="<?= $cv_url ?>"/>
            <div class="invalid-feedback">
                    <?= $errors['cv_url']??'' ?>
                </div>
        </div>
    </div>

    <div class="form-group">
        <button class="btn btn-primary">Register</button>
    </div>
</form>

</body>
</html>
